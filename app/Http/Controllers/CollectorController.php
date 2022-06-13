<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollectorRequest;
use App\Http\Requests\UpdateCollectorRequest;
use App\Models\Car;
use App\Models\Collector;

class CollectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collectors = Collector::paginate(10);
        return view("collectors.index", compact(['collectors']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreCollectorRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollectorRequest $request)
    {
        // Validation code in Requests/StoreCollectorRequest.php
        $newData = [
            "given_name" => $request->given_name,
            "family_name" => $request->family_name,
            "cars" => $request->cars ?? [],
        ];
        Collector::create($newData);

        return redirect()->route('collectors.index')
            ->with('success', 'Collector successfully added');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        return view("collectors.create", compact(['cars']));

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Collector $collectors
     * @return \Illuminate\Http\Response
     */
    public function show(Collector $collector)
    {
        return view("collectors.show", compact(['collector']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Collector $collectors
     * @return \Illuminate\Http\Response
     */
    public function edit(Collector $collector)
    {
        return view("collectors.edit", compact(['collector']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCollectorRequest $request
     * @param \App\Models\Collector $collectors
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollectorRequest $request, Collector $collectors)
    {
        // Validation code in Requests/StoreCollectorRequest.php
        $collectors->given_name = $request->given_name;
        $collectors->family_name = $request->family_name;
        $collectors->cars = $request->cars;
        $collectors->update();
        ddd($collectors);
        return redirect()->route('collectors.index')
            ->with('success', 'Collector successfully updated');
    }

    /**
     * Show delete confirmation page.
     *
     * @param \App\Models\Collector $collectors
     * @return \Illuminate\Http\Response
     */
    public function delete(Collector $collectors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Collector $collectors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collector $collectors)
    {
        //
    }
}
