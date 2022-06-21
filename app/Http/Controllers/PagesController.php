<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Collector;

class PagesController extends Controller
{


    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $collectors = Collector::count();
        $cars = Car::count() + random_int(1, 9999);
        $users = User::count();

        return view("pages.home", compact(['collectors', 'cars', 'users']));
    }


}
