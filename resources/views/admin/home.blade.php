@extends('admin.admin')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
@endsection

@section('dashboard-menu', 'active')

@section('page-name', 'Dashboard')
@section('page-description', '')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 kotak-biru" style="text-align: justify; padding: 10px 15px;">
                <h1>Hallo {{Session::get('nama')}}</h1>
                <p>Email : {{Session::get('email')}}</p>
                <div class="indicator-status">
                    @if (Session::get('login') == 1)
                        <p>Online </p><i class="fa fa-circle text-success softcircle"></i>
                    @else
                        <p>Offline </p><i class="fa fa-circle text-dark softcircle"></i>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <h2>Our Project</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-5 text-center kotak-biru text-center">
                <h2>Siramin</h2>
                <p style="text-align: justify; padding: 10px 15px;">Adalah sebuah project dalam permasalahan pertanian, project ini mempunyai 2 unsur komponen yakni firmware (hardware) dan
                    programming (software) hasil project ini adalah sebuah alat IoT (Internet of Things), dimana alat ini memiliki sensor tanah
                    apabila kering akan otomatis menyiram, dan bisa dikendalikan manual dari website applikasi kami.
                </p>
            </div>
            <div class="col-md-5 text-center kotak-merah text-center">
                <h2>SoftLamp</h2>
                <p style="text-align: justify; padding: 10px 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex corrupti laboriosam tenetur consequatur
                    accusantium quasi adipisci magni, harum et saepe deleniti vel expedita aliquid quisquam dolor incidunt quo cumque? Enim tempora impedit
                    dolore iure nihil deleniti, obcaecati, veritatis nulla deserunt adipisci molestiae.</p>
            </div>
        </div>
    </div>

    <h2>Our Fiture</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center kotak-merah text-center p-3" style="text-align: justify; padding: 10px 15px;">
                <h2>Controlling</h2>
                <p>Kendalikan alatmu dari kejauhan dengn RestFull API yang sudah kami sediakan</p>
                <button class="btn btn-primary px-4" style="margin: 5px 0px 20px 0px" onclick="document.location.href='/home_user/kontrol'">Coba Sekarang</button>
            </div>
            <div class="col-md-4 text-center kotak-kuning text-center p-3" style="text-align: justify; padding: 10px 15px;">
                <h2>Monitoring</h2>
                <p>Lihat perkembangan alatmu apakah naik atau menurun dari smartphone atau PC anda</p>
                <button class="btn btn-primary px-4" style="margin: 5px 0px 20px 0px" onclick="document.location.href='/home_user/monitor'">Coba Sekarang</button>
            </div>
        </div>
    </div>

@endsection


@section('js')
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
@endsection
