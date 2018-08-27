<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Charts;
use DB;

class Chart1Controller extends Controller
{
    public function index()
    {
//        $products = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
//        $chart    = Charts::database($products, 'bar', 'highcharts')
//                           ->title('Detalhes do Produto')
//                           ->elementLabel('Total Produtos')
//                           ->dimensions(1000,500)
//                           ->responsive(false)
//                           ->groupByMonth(date('Y'),true);

        $chart = Charts::multi('bar', 'highcharts')
            ->responsive(true)
            ->dimensions(0, 500)
            ->colors(['#ff0000', '#00ff00', '#0000ff','#ff3220','#ff0044'])
            ->labels(['jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'])
            ->dataset('2015', [1,2,3,5])
            ->dataset('2016', [0,6,0])
            ->dataset('2017', [3,4,1])
            ->dataset('2018', [3,4,1])
            ->dataset('Média', [3,4,1]);

        return view('charts1',compact('chart'));

    }
}
