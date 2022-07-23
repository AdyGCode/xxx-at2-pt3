<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Manufacturer;
use Livewire\Component;

class Dropdowns extends Component
{

    public $manufacturer;
    public $cars = [];
    public $car;

    public function render()
    {
        if (!empty($this->manufacturer)) {
            $this->cars = Car::where('manufacturer_id', $this->manufacturer)->get();
        }

        $manufacturers = Manufacturer::has('cars')->orderBy('name')->get();

        return view('livewire.dropdowns')
            ->withManufacturers($manufacturers);
    }
}
