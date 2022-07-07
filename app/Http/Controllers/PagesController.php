<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Collector;
use App\Models\User;

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
        $cars = Car::count();
        $users = User::count();

        return view("pages.home", compact(['collectors', 'cars', 'users']));
    }

    public function about()
    {
        return view("pages.about");
    }


}
