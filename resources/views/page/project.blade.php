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

<section>
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-lg-10 py-5 offset-md-1">
                <h2 class="pt-4 pb-3 pl-3">Softmind Project</h2>
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="carousels">
                            <div class="carousel-primary">
                                <div class="bg-carousel-primary">
                                    <img src="../img/content/glove.jpg" width="100%" alt="">
                                    <div class="description-carousel-primary position-absolute text-white mx-3 text-left" style="bottom: 0">
                                        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, illum! Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-primary">
                                <div class="bg-carousel-primary">
                                    <img src="../img/content/iot.jpg" width="100%" alt="">
                                    <div class="description-carousel-primary position-absolute text-white mx-3 text-left" style="bottom: 0">
                                        <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, illum! Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-inline-block my-3">
                        <div class="carousel">
                            <div class="bg-carousel">
                                <img src="../img/content/remote.jpg" width="100%" alt="">
                            </div>
                            <div class="description-carousel pb-2 pt-3">
                                <h5>SoftRemote</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, deserunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-inline-block my-3">
                        <div class="carousel">
                            <div class="bg-carousel">
                                <img src="../img/content/iot.jpg" width="100%" alt="">
                            </div>
                            <div class="description-carousel pb-2 pt-3">
                                <h5>Siramin</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, deserunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-inline-block my-3">
                        <div class="carousel">
                            <div class="bg-carousel">
                                <img src="../img/content/softweb.jpg" width="100%" alt="">
                            </div>
                            <div class="description-carousel pb-2 pt-3">
                                <h5>SoftLamp</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, deserunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
    <script>
        $('#project-nav').addClass('active-nav')
    </script>
@endsection
