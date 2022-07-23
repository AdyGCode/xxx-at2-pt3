<?php

namespace Database\Seeders;

use App\Models\User;
use DateTimeZone;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        $seedUsers = [
            [
                'id' => 1,
                'name' => "Ad Ministrator",
                'email' => "ad.ministrator@example.com",
                'email_verified_at' => "1900/01/01 00:00:00",
                'password' => "Password1",
                'created_at' => "1900/01/01 00:00:00",
                'timezone' => "Australia/Perth",
            ],

            [
                'id' => 5,
                'name' => "YOUR NAME",
                'email' => "GIVEN@example.com",
                'email_verified_at' => "1900/01/01 00:01:00",
                'password' => "Password1",
                'created_at' => "1900/01/01 00:00:01",
                'timezone' => "Australia/Perth",
            ],
            [
                'id' => 6,
                'name' => "Andy Manager",
                'email' => "andy.manager@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Australia/Perth",
            ],

            [
                'id' => 10,
                'name' => "Eileen Dover",
                'email' => "eileen@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Australia/Perth",
            ],
            [
                'id' => 11,
                'name' => "Jacques d\'Carre",
                'email' => "jacques@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Europe/Paris"
            ],
            [
                'id' => 12,
                'name' => "Russell Leaves",
                'email' => "russell@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Pacific/Pitcairn"
            ],
            [
                'id' => 13,
                'name' => "Ivana Vinn",
                'email' => "ivanna@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Europe/Moscow"
            ],
            [
                'id' => 14,
                'name' => "Win Doh",
                'email' => "win@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Europe/Sofia"
            ],
            [
                'id' => 15,
                'name' => "Rusty Nails",
                'email' => "Rusty.Nails@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                'id' => 16,
                'name' => "Preston Cleaned",
                'email' => "Preston.Cleaned@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                'id' => 1000,
                "name" => "Evan Keel",
                "email" => "Evan.Keel@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1001,
                "name" => "Jo Kerr",
                "email" => "Jo.Kerr@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1002,
                "name" => "Izzy Kidding",
                "email" => "Izzy.Kidding@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1003,
                "name" => "Fay King",
                "email" => "Fay.King@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1004,
                "name" => "Joe King",
                "email" => "Joe.King@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1005,
                "name" => "Raney Schauer",
                "email" => "Raney.Schauer@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1006,
                "name" => "June Schauer",
                "email" => "June.Schauer@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1007,
                "name" => "April Schauer",
                "email" => "April.Schauer@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1008,
                "name" => "Al K. Seltzer",
                "email" => "Al.K.Seltzer@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1009,
                "name" => "Dee Sember",
                "email" => "Dee.Sember@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1010,
                "name" => "Justin Tune",
                "email" => "Justin.Tune@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1011,
                "name" => "Carrie A. Tune",
                "email" => "Carrie.A.Tune@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1012,
                "name" => "Quinn Tuplets",
                "email" => "Quinn.Tuplets@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1013,
                "name" => "Colin Allcars",
                "email" => "Colin.Allcars@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1014,
                "name" => "Cary Baggs",
                "email" => "Cary.Baggs@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1015,
                "name" => "Winnie Bago",
                "email" => "Winnie.Bago@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1016,
                "name" => "Frank N. Beans",
                "email" => "Frank.N.Beans@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1017,
                "name" => "Harry Beard",
                "email" => "Harry.Beard@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1018,
                "name" => "Al B. Zienya",
                "email" => "Al.B.Zienya@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1019,
                "name" => "Cy Yonarra",
                "email" => "Cy.Yonarra@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1020,
                "name" => "Pearl E. White",
                "email" => "Pearl.E.White@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1021,
                "name" => "Sno White",
                "email" => "Sno.White@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1022,
                "name" => "Chuck Wagon",
                "email" => "Chuck.Wagon@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1023,
                "name" => "Patty Wagon",
                "email" => "Patty.Wagon@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",

            ],
            [
                'id' => 1024,
                "name" => "Cara Van",
                "email" => "Cara.Van@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => ""

            ],


        ];


        $countItems = count($seedUsers);

        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output, $countItems);

        $timezoneList = DateTimeZone::listIdentifiers();
        $numZones = count($timezoneList);

        $this->command->getOutput()->writeln("<info>Seeding with {$countItems} Users.");

        shuffle($seedUsers);

        foreach ($seedUsers as $seed) {
            if (isset($seed['timezone']) && $seed['timezone'] === "") {
                $seed['timezone'] = $timezoneList[random_int(0, $numZones - 1)];
            }
            /* DO NOT forget to hash your passwords! */
            $seed['password'] = Hash::make($seed['password']);
            $user = User::create($seed);
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->command->getOutput()->writeln("");

    }
}
