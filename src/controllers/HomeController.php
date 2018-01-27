<?php

namespace michau85\cars\controllers;


use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use michau85\cars\models\car;


class HomeController extends Controller
{



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function car()
    {
        $cars = car::all();
        return view('ca::cars', ['cars' => $cars]);
    }

    public function test(Request $request)
    {
        $name = $request->input('name');
        session()->flash('name', $name);
        return 'test';

    }


    public function hej()
    {
        return 'hej';
    }
}
