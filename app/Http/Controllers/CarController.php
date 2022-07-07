<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # Grab current request and extract a search term from URL
        $request = Request()->all();
        $clear = $request['clear'] ?? '';
        $searchFor = $request['search'] ?? '';

        if ($clear) {
            $searchFor = "";
        }

        # If the search term is blank/non-existent then return all (paginated)
        # otherwise use where like to do partial (and case-insensitive) matching
        if ($searchFor === "") {
            $cars = Car::paginate(10);
        } else {
            $cars = Car::where('model', 'like', "%{$searchFor}%")
                ->orWhere('manufacturer', 'like', "%{$searchFor}%")
                ->orWhere('code', 'like', "%{$searchFor}%")
                ->paginate(10);
        }

        return view("cars.index", compact(['cars', 'searchFor']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturers = Car::distinct('manufacturer');
        return view("cars.create", compact(['manufacturers']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreCarRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $model = $request->model;
        $manufacturer = $request->manufacturer;
        $price = $request->price ?? null;
        $code = mb_strtoupper(
            str_replace(
                [' ', '.', ',',],
                ['-', '', '',],
                mb_strtoupper(mb_substr($manufacturer, 0, 6) . ' ' . mb_substr($model, 0, 6))
            ));

        $newCode = $code;
        while (Car::where('code', '=', $newCode)->first()) {
            $newCode = $code . "-" . bin2hex(random_bytes(2));
        }
        $code = $newCode;
        /* Verify if the code is unique, if not add random value */

        $newData = [
            "model" => $model,
            "manufacturer" => $manufacturer,
            "price" => $price,
            "code" => $code,
        ];
        Car::create($newData);

        return redirect()->route('cars.index')
            ->with('success', 'Car successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view("cars.show", compact(['car']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view("cars.edit", compact(['car']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCarRequest $request
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {

        $model = $request->model;
        $manufacturer = $request->manufacturer;
        $price = $request->price ?? null;

        $car->model = $model;
        $car->manufacturer = $manufacturer;
        $car->price = $price;

        $car->update();

        return redirect()->route('cars.index')
            ->with('success', 'Car successfully updated');


    }

    /**
     * Show delete confirmation page.
     *
     * @param \App\Models\Car $cars
     * @return \Illuminate\Http\Response
     */
    public function delete(Car $car)
    {
        return view("cars.delete", compact(['car']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')
            ->with('success', 'Car successfully deleted');
    }
}
