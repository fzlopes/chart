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
//        $chart = Charts::create('line', 'highcharts')
//                    ->title('Comparação Mensal (Últimos 4 anos)')
//                    ->labels(['jan','fev','mar','abr','mai','jun','jul','ago','set','out','nov','dez'])
//                    ->values([5,10,20,13,16,25,12,17,7,9,6,10])
//                    ->dimensions(1000,500)
//                    ->responsive(true);

//        $chart = Charts::create('line', 'material')
//                    ->title('Comparação Mensal (Últimos 4 anos)')
//                    ->labels(['jan','fev','mar','abr','mai','jun','jul','ago','set','out','nov','dez'])
//                    ->values([5,10,20,13,16,25,12,17,7,9,6,10])
//                    ->elementLabel("Total")
//                    ->dimensions(1000,500)
//                    ->responsive(true);

        $chart = Charts::create('line', 'google')
            ->title('Comparação Mensal (Últimos 4 anos)')
            ->labels(['jan','fev','mar','abr','mai','jun','jul','ago','set','out','nov','dez'])
            ->values([5,10,20,13,16,25,12,17,7,9,6,10])
            ->elementLabel("Total")
            ->dimensions(1000,500)
            ->responsive(true);

        return view('home',compact('chart'));
    }
}
