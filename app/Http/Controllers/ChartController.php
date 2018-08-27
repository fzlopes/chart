<?php

namespace App\Http\Controllers;

use App\Query;
use Illuminate\Http\Request;
use Charts;

class ChartController extends Controller
{
    public function index()
    {
//        $chart = Charts::multi('bar', 'material')
//            // Setup the chart settings
//            ->title("My Cool Chart")
//            // A dimension of 0 means it will take 100% of the space
//            ->dimensions(0, 400) // Width x Height
//            // This defines a preset of colors already done:)
//            ->template("material")
//            // You could always set them manually
//            // ->colors(['#2196F3', '#F44336', '#FFC107'])
//            // Setup the diferent datasets (this is a multi chart)
//            ->dataset('Element 1', [5,20,100])
//            ->dataset('Element 2', [15,30,80])
//            ->dataset('Element 3', [25,10,40])
//            // Setup what the values mean
//            ->labels(['One', 'Two', 'Three']);

//        $chart = Charts::database(Query::all(), 'bar', 'highcharts')
//            ->elementLabel("Total")
//            ->dimensions(1000, 500)
//            ->responsive(false)
//            ->groupBy('name');

//        $chart = Charts::database(Query::all(), 'bar', 'highcharts')
//            ->elementLabel("Total")
//            ->dimensions(1000, 500)
//            ->responsive(false)
//            ->groupBy('score');

//        $chart = Charts::database(Query::all(), 'bar', 'highcharts')
//            ->elementLabel("Total")
//            ->dimensions(1000, 500)
//            ->responsive(false)
//            ->groupBy('study');

//        $data = Query::where('study', '=', 'Biologia')->get();

        //$data = Query::where('study', '=', 'Ciências')->get();

//        $chart = Charts::create('bar', 'highcharts')
//            ->elementLabel("Total")
//            ->dimensions(1000, 500)
//            ->responsive(false)
//            ->labels($data->pluck('name'))
//            ->values($data->pluck('score'));

//        $chart = Charts::create('bar', 'highcharts')
//            ->title("Ciências")
//            ->elementLabel("Total")
//            ->dimensions(1000, 500)
//            ->responsive(false)
//            ->labels($data->pluck('name'))
//            ->values($data->pluck('score'));

//        $chart = Charts::database(Query::all(), 'bar', 'highcharts')
//            ->elementLabel("Total")
//            ->dimensions(1000, 500)
//            ->responsive(false)
//            ->groupByYear(3);

        $chart = Charts::database(Query::all(), 'bar', 'highcharts')
            ->elementLabel("Total")
            ->dimensions(1000, 500)
            ->responsive(false)
            ->lastByMonth(12);

        return view('charts',compact('chart'));

    }
}
