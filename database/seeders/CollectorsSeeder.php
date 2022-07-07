<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Collector;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class CollectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $seedCollectors = [
            [
                "given_name" => "Evan",
                "family_name" => "Keel",
                "owned" => [
                    "ARIEL-ATOM35",
                    "ARIEL-ATOM4",
                ],
            ],
            [
                "given_name" => "Jo",
                "family_name" => "Kerr",
                "owned" => [
                    "BMW-M",
                    "KTM-XBOWR",
                    "AUDI-EGT",
                    "MINI-CLUB",
                    "MINI-CONV",
                    "MG-HS",
                    "BMW-1",
                    "AUDI-A8",
                ],
            ],
            [
                "given_name" => "Izzy",
                "family_name" => "Kidding",
                "owned" => [
                    "MORGAN-44",
                    "ARIEL-ATOM4",
                    "AUDI-S8",
                ],
            ],
            [
                "given_name" => "Fay",
                "family_name" => "King",
                "owned" => [
                    "ARIEL-ATOM4",
                    "MINI-CONV",
                    "BMW-I",
                    "VW-ARTEON",
                    "VW-ARTEON",
                    "ARIEL-ATOM4",
                    "TESLA-MODX",
                ],
            ],
            [
                "given_name" => "Joe",
                "family_name" => "King",
                "owned" => [
                    "ARIEL-ATOM35",
                    "ARIEL-ATOM4",
                    "BMW-1",
                    "VW-POLO",
                    "MINI-CLUB",
                    "MORGAN-44",
                    "MG-MGZS",
                ],
            ],
            [
                "given_name" => "Raney",
                "family_name" => "Schauer",
                "owned" => [
                    "VW-AMAROK",
                    "MG-HS",
                    "BMW-M2",
                ],
            ],
            [
                "given_name" => "June",
                "family_name" => "Schauer",
                "owned" => [
                    "MORGAN-ROADSTER",
                    "MINI-3DH",
                    "TESLA-MODY",
                    "TESLA-MODX",
                    "MINI-3DH",
                ],
            ],
            [
                "given_name" => "April",
                "family_name" => "Schauer",
                "owned" => [
                    "MG-MGZS",
                ],
            ],
            [
                "given_name" => "Al K.",
                "family_name" => "Seltzer",
                "owned" => [
                    "ARIEL-ATOM4",
                    "AUDI-A8",
                    "AUDI-A1",
                    "VW-ARTEON",
                    "MORGAN-AEROC",
                    "VW-TROC",
                ],
            ],
            [
                "given_name" => "Dee",
                "family_name" => "Sember",
                "owned" => [
                    "ARIEL-ATOM35",
                    "BMW-1",
                    "VW-TROC",
                    "MORGAN-44",
                    "MG-MGZS",
                    "TESLA-TRUCK",
                    "ARIEL-ATOM4",
                ],
            ],
            [
                "given_name" => "Justin",
                "family_name" => "Tune",
                "owned" => [
                    "ARIEL-ATOM35",
                    "ARIEL-ATOM4",
                    "AUDI-A1",
                    "AUDI-A8",
                    "AUDI-EGT",
                    "AUDI-Q2",
                    "AUDI-S8",
                    "BMW-8",
                    "BMW-I",
                    "BMW-M2",
                    "BMW-M6",
                    "KTM-XBOWR",
                    "MG-HS",
                    "MINI-3DH",
                    "MINI-CLUB",
                    "MINI-CONV",
                    "MINI-COOPER",
                    "MORGAN-44",
                    "MORGAN-ROADSTER",
                    "TESLA-MODX",
                    "TESLA-MODY",
                    "TESLA-TRUCK",
                    "VW-AMAROK",
                    "VW-POLO",
                    "VW-TROC",
                ],
            ],
            [
                "given_name" => "Carrie A.",
                "family_name" => "Tune",
                "owned" => [
                    "AUDI-EGT",
                ],
            ],
            [
                "given_name" => "Quinn",
                "family_name" => "Tuplets",
                "owned" => [
                    "AUDI-S8",
                    "BMW-8",
                    "KTM-XBOWR",
                    "VW-TROC",
                    "BMW-M2",
                ],
            ],
            [
                "given_name" => "Colin",
                "family_name" => "Allcars",
                "owned" => [
                    "VW-AMAROK",
                    "MINI-3DH",
                ],
            ],
            [
                "given_name" => "Cary",
                "family_name" => "Baggs",
                "owned" => [
                    "MINI-CONV",
                ],
            ],
            [
                "given_name" => "Winnie",
                "family_name" => "Bago",
                "owned" => [
                ],
            ],
            [
                "given_name" => "Frank N.",
                "family_name" => "Beans",
                "owned" => [
                    "MINI-CONV",
                    "BMW-8",
                    "AUDI-EGT",
                ],
            ],
            [
                "given_name" => "Harry",
                "family_name" => "Beard",
                "owned" => [
                    "KTM-XBOWR",
                    "TESLA-MODX",
                    "TESLA-MODY",
                    "BMW-M6",
                    "KTM-XBOWR",
                ],
            ],
            [
                "given_name" => "Al B.",
                "family_name" => "Zienya",
                "owned" => [],
            ],
            [
                "given_name" => "Cy",
                "family_name" => "Yonarra",
                "owned" => [
                    "TESLA-MODX",
                    "MG-MG3",
                ],
            ],
            [
                "given_name" => "Pearl E.",
                "family_name" => "White",
                "owned" => [],
            ],
            [
                "given_name" => "Sno",
                "family_name" => "White",
                "owned" => [
                    "TESLA-MODX",
                    "BMW-2",
                    "ARIEL-ATOM4",
                ],
            ],
            [
                "given_name" => "Chuck",
                "family_name" => "Wagon",
                "owned" => [
                    "KTM-XBOWR",
                ],
            ],
            [
                "given_name" => "Patty",
                "family_name" => "Wagon",
                "owned" => [
                    "MINI-CONV",
                    "MINI-CLUB",
                    "BMW-1",
                ],
            ],
            [
                "given_name" => "Cara",
                "family_name" => "Van",
                "owned" => [],
            ],
        ];

        $countItems = count($seedCollectors);

        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output, $countItems);

        $this->command->getOutput()->writeln("<info>Seeding {$countItems} Collectors.");

        shuffle($seedCollectors);

        foreach ($seedCollectors as $collector) {
            $newCollector = [
                "given_name" => $collector['given_name'],
                "family_name" => $collector['family_name'],
            ];
            $theCollector = Collector::create($newCollector);
            $ownedCars = null;
            foreach ($collector["owned"] as $car) {
                $carDetails = Car::where('code', $car)->first();

                if ($carDetails) {
                    /* Add each car to cars array for fast lookup */
                    $ownedCars[] = [
                        'car_id' => $carDetails->id,
                        'code' => $carDetails->model,
                        'model' => $carDetails->model,
                        'manufacturer' => $carDetails->manufacturer,
                    ];
                } else {
                    $this->command->getOutput()->writeln("<warn>{$car} not in car collection.");
                }
            }
            /* add all the owned cars to the collector at once... */
            if ($ownedCars) {
                $theCollector->push('owned', $ownedCars);
            }
            $progressBar->advance();

        }


        $progressBar->finish();
        $this->command->getOutput()->writeln("");

    }


}
