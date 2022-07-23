<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedManufacturers = [
            ["name" => "Ariel",],
            ["name" => "Aston Martin",],
            ["name" => "Audi",],
            ["name" => "BMW",],
            ["name" => "Bentley",],
            ["name" => "Buick",],
            ["name" => "Cadillac",],
            ["name" => "Chrysler",],
            ["name" => "Citroen",],
            ["name" => "Daewoo",],
            ["name" => "Dodge-Ram",],
            ["name" => "Ferrari",],
            ["name" => "Fiat",],
            ["name" => "Ford",],
            ["name" => "Genesis",],
            ["name" => "Great Wall",],
            ["name" => "Holden",],
            ["name" => "Honda",],
            ["name" => "Hyundai",],
            ["name" => "Jaguar",],
            ["name" => "KTM",],
            ["name" => "Koenigsegg",],
            ["name" => "Lamborghini",],
            ["name" => "Landrover",],
            ["name" => "Lexus",],
            ["name" => "Lotus",],
            ["name" => "MG",],
            ["name" => "Maserati",],
            ["name" => "Mazda",],
            ["name" => "Mercedes",],
            ["name" => "Mini",],
            ["name" => "Mitsubishi",],
            ["name" => "Morgan",],
            ["name" => "Nissan",],
            ["name" => "Peugeot",],
            ["name" => "Polestar",],
            ["name" => "Porsche",],
            ["name" => "Renault",],
            ["name" => "SAAB",],
            ["name" => "Skoda",],
            ["name" => "Smart",],
            ["name" => "Ssangyong",],
            ["name" => "Subaru",],
            ["name" => "Suzuki",],
            ["name" => "Tesla",],
            ["name" => "Toyota",],
            ["name" => "Volkswagen",],
            ["name" => "Volvo",],
        ];

        $countItems = count($seedManufacturers);

        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output, $countItems);

        $this->command->getOutput()->writeln("<info>Seeding with {$countItems} Manufacturers.");

        shuffle($seedManufacturers);

        foreach ($seedManufacturers as $manufacturer) {
            $manufacturer['created_at'] = Carbon::now()->addDays(random_int(-5000, -500));
            Manufacturer::create($manufacturer);
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->command->getOutput()->writeln("");

    }
}
