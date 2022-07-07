<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # TODO: Add default car details to this seeder
        # TODO: See database/json/cars.json for sample data

        //

        $seedCars = [
            [
                "code" => "MORGAN-44",
                "manufacturer" => "Morgan",
                "model" => "4/4",
                "price" => 107000,
            ],
            [
                "code" => "BMW-1",
                "manufacturer" => "BMW",
                "model" => "1 Series",
                "price" => 71900,
            ],
            [
                "code" => "BMW-2",
                "manufacturer" => "BMW",
                "model" => "3 Series",
                "price" => 111900,
            ],
            [
                "code" => "MINI-3DH",
                "manufacturer" => "Mini",
                "model" => "3D Hatch",
                "price" => 62825,
            ],
            [
                "code" => "MINI-5DH",
                "manufacturer" => "Mini",
                "model" => "5D Hatch",
                "price" => 54450,
            ],
            [
                "code" => "BMW-8",
                "manufacturer" => "BMW",
                "model" => "8 Series",
                "price" => 359900,
            ],
            [
                "code" => "AUDI-A1",
                "manufacturer" => "Audi",
                "model" => "A1",
                "price" => 47800,
            ],
            [
                "code" => "AUDI-A8",
                "manufacturer" => "Audi",
                "model" => "A8",
                "price" => 298472,
            ],
            [
                "code" => "MORGAN-AEROC",
                "manufacturer" => "Morgan",
                "model" => "Aero Coupe",
                "price" => 270000,
            ],
            [
                "code" => "VW-AMAROK",
                "manufacturer" => "Volkswagen",
                "model" => "Amarok",
                "price" => 81490,
            ],
            [
                "code" => "VW-ARTEON",
                "manufacturer" => "Volkswagen",
                "model" => "Arteon",
                "price" => 68740,
            ],
            [
                "code" => "ARIEL-ATOM35",
                "manufacturer" => "Ariel",
                "model" => "Atom 3.5R",
                "price" => 188000,
            ],
            [
                "code" => "ARIEL-ATOM4",
                "manufacturer" => "Ariel",
                "model" => "Atom 4",
            ],
            [
                "code" => "MINI-CLUB",
                "manufacturer" => "Mini",
                "model" => "Clubman",
                "price" => 70600,
            ],
            [
                "code" => "MINI-CONV",
                "manufacturer" => "Mini",
                "model" => "Convertible",
                "price" => 67880,
            ],
            [
                "code" => "MINI-COOPER",
                "manufacturer" => "Mini",
                "model" => "Cooper",
                "price" => 41800,
            ],
            [
                "code" => "TESLA-TRUCK",
                "manufacturer" => "Tesla",
                "model" => "Cybertruck",
                "price" => 103300,
            ],
            [
                "code" => "AUDI-EGT",
                "manufacturer" => "Audi",
                "model" => "e-tron GT",
            ],
            [
                "code" => "VW-GOLF",
                "manufacturer" => "Volkswagen",
                "model" => "Golf",
                "price" => 65990,
            ],
            [
                "code" => "MG-HS",
                "manufacturer" => "MG",
                "model" => "HS",
                "price" => 47990,
            ],
            [
                "code" => "BMW-I",
                "manufacturer" => "BMW",
                "model" => "i Series",
                "price" => 70900,
            ],
            [
                "code" => "BMW-M",
                "manufacturer" => "BMW",
                "model" => "M",
                "price" => 274900,
            ],
            [
                "code" => "BMW-M2",
                "manufacturer" => "BMW",
                "model" => "M2",
                "price" => 182500,
            ],
            [
                "code" => "BMW-M6",
                "manufacturer" => "BMW",
                "model" => "M6",
                "price" => 171500,
            ],
            [
                "code" => "MG-MGZS",
                "manufacturer" => "MG",
                "model" => "MG ZS",
                "price" => 42990,
            ],
            [
                "code" => "MG-MG3",
                "manufacturer" => "MG",
                "model" => "MG3",
                "price" => 19490,
            ],
            [
                "code" => "TESLA-MOD3",
                "manufacturer" => "Tesla",
                "model" => "model 3",
                "price" => 91672,
            ],
            [
                "code" => "TESLA-MODS",
                "manufacturer" => "Tesla",
                "model" => "model S",
                "price" => 155430,
            ],
            [
                "code" => "TESLA-MODX",
                "manufacturer" => "Tesla",
                "model" => "model X",
                "price" => 191730,
            ],
            [
                "code" => "TESLA-MODY",
                "manufacturer" => "Tesla",
                "model" => "model Y",
                "price" => 98172,
            ],
            [
                "code" => "VW-POLO",
                "manufacturer" => "Volkswagen",
                "model" => "Polo",
                "price" => 38750,
            ],
            [
                "code" => "AUDI-Q2",
                "manufacturer" => "Audi",
                "model" => "Q2",
                "price" => 52200,
            ],
            [
                "code" => "MORGAN-ROADSTER",
                "manufacturer" => "Morgan",
                "model" => "Roadster",
                "price" => 145000,
            ],
            [
                "code" => "AUDI-S8",
                "manufacturer" => "Audi",
                "model" => "S8",
                "price" => 258877,
            ],
            [
                "code" => "VW-TROC",
                "manufacturer" => "Volkswagen",
                "model" => "T-ROC",
                "price" => 42700,
            ],
            [
                "code" => "AUDI-TT",
                "manufacturer" => "Audi",
                "model" => "TT",
                "price" => 14200,
            ],
            [
                "code" => "KTM-XBOWR",
                "manufacturer" => "KTM",
                "model" => "X-Bow R",
                "price" => 16990,
            ],
        ];

        $countItems = count($seedCars);

        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output, $countItems);

        $this->command->getOutput()->writeln("<info>Seeding with {$countItems} Cars.");

        shuffle($seedCars);

        foreach ($seedCars as $car) {
            $car['created_at'] = Carbon::now()->addDays(rand(-1000, 0));
            Car::create($car);
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->command->getOutput()->writeln("");


    }
}
