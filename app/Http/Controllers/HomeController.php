<?php

namespace App\Http\Controllers;


use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chart = Charts::create('line', 'highcharts')
                    ->title('My nice chart')
                    ->labels(['First', 'Second', 'Third'])
                    ->values([5,10,20])
                    ->dimensions(0,500);
        return view('home',compact('chart'));
    }
}
