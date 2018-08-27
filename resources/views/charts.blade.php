@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="app">
            {{--{!! $chart->render() !!}--}}
            {!! $chart->html() !!}

        </div>
        {!! Charts::scripts() !!}
        {!! $chart->script() !!}
    </div>
@endsection