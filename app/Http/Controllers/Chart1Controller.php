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

//        $chart = $chart = Charts::multi('bar', 'material')
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


        $chart = Charts::multi('bar', 'highcharts')
            // Setup the chart settings
            ->title("Comparação mensal(Últimos 4 anos)")
            ->elementLabel('')
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            ->colors(['#F4A460', '#F44336', '#FFC107','#FF540','#FF0000'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('2015', [50000,47000,43000,41000,39000,45000,47000,43500,41200,36500,32000,46500])
            ->dataset('2016', [38000,45000,37900,49000,38990,40000,45500,39990,44520,37250,39980,48000])
            ->dataset('2017', [48800,43330,40500,47520,41520,42390,48990,41580,51990,39585,42770,51000])
            ->dataset('2018', [47300,41550,40990,37599,42777,44333,46440,48750,53000,42000,45000,44000])
            ->dataset('Média',[40000,43000,39000,48000,41000,43000,46200,42900,50000,38000,42200,47000])
            // Setup what the values mean
            ->labels(['jan', 'fev', 'mar', 'abr','mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'])
            ->responsive(true);


        return view('charts1',compact('chart'));

    }
}
