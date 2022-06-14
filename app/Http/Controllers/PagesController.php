<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Collector;
use Illuminate\Http\Request;

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

        return view("pages.home", compact(['collectors', 'cars']));
    }


}
