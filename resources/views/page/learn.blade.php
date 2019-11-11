@extends('layouts.frontend')

@section('css')
<style>
    #navsans {
        color: #000 !important;
    }
    #menu-ul li a {
        color: #000;
    }
</style>
@endsection

@section('content')

<div class="container-fluit py-5">
    <div class="row py-5 mt-5">
        <div class="col-lg-8 offset-md-1">
            <div class="learnku mt-5 mb-3">
                <div class="learnku-img">
                    <img src="../img/content/iot.jpg" width="100%" height="100%" alt="">
                </div>
                <div class="learnku-des">
                    <h3>Softmind</h3>
                    <p>Softmind Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
                        repudiandae sed esse culpa ad dolores quae a est
                    </p>
                    <button class="btn btn-primary px-4">Lihat selengkapnya</button>
                </div>
            </div>
            <div class="learnku my-3">
                <div class="learnku-img">
                    <img src="../img/content/remote.jpg" width="100%" height="100%" alt="">
                </div>
                <div class="learnku-des">
                    <h3>Softmind</h3>
                    <p>Softmind Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
                        repudiandae sed esse culpa ad dolores quae a est voluptates
                    </p>
                    <button class="btn btn-primary px-4">Lihat selengkapnya</button>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-warning px-5 my-4 py-2">Lihat lebih banyak</button>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="filter text-center mt-5 mb-3">
                <h4>Filter</h4>
                <li id="filter-aktif">Smarthouse</li>
                <li>Artifical Intelligent</li>
                <li>Electronics</li>
                <li>Arduino</li>
                <li>Nodemcu</li>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
        $('#learn-nav').addClass('active-nav')
    </script>
@endsection
