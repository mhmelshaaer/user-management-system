@extends('adminlte::page')

@section('title', 'FEMTO15')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @can('admin')

                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>

                    @else

                        <p class="mb-0">Hello MOFO, You are logged in as {{$user->name}}!</p>

                    @endcan

                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@can('admin')

    @section('js')

        <script>

            window.onload = function() {

                var dataPoints = [];
                var todayUsers = @json($users);

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: "Daily Registration"
                    },
                    axisY: {
                        title: "Users",
                        titleFontSize: 24
                    },
                    data: [{
                        type: "column",
                        yValueFormatString: "#,### User",
                        dataPoints: dataPoints
                    }]
                });

                function addData(data) {

                    dataPoints.push({
                        x: new Date(data.date),
                        y: data.units
                    });
                    chart.render();

                }

                addData(todayUsers);

            }
        </script>

        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    @stop

@endcan
