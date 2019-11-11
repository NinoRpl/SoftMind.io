@extends('admin.admin')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
@endsection

@section('page-name', 'Monitoring Project')
@section('page-description', '')

@section('content')
    <div class="container">
        <h1>Monitor</h1>
        <div class="row">
            <div class="col-md-5 kotak-merah" style="padding: 15px !important">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{URL::asset('js/Chart.js')}}"></script>

    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
            datasets: [{
                label: 'Penggunaan Listrik',
                data: [22, 59, 73, 92, 20, 17, 10],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            },{
                label: 'Penggunaan Siramin',
                data: [20, 20, 43, 12, 60, 87, 90],
                backgroundColor: [
                'rgba(21, 250, 219, 0.2)',
                'rgba(54, 96, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(21, 250, 219, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 255, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    </script>
@endsection

@section('monitor-menu', 'active')
@section('fitur-menu', 'active')
