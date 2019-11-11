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

<section class="pt-5">
    <div class="container-fluit pt-5">
        <div class="row pt-5">
            <div class="col-lg-12 py-5">
                <h3 class="pt-4 pb-3 pl-3">Softmind Shop</h3>
                <div class="row text-center">
                    <div class="col-md-3 d-inline-block my-3">
                        <div class="carousel">
                            <div class="bg-carousel">
                                <img src="../img/content/remote.jpg" width="100%" alt="">
                            </div>
                            <div class="description-carousel text-left px-3 pb-2 pt-3">
                                <h5>SoftRemote</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, deserunt.</p>
                                <button class="btn btn-warning mb-3">$ 120</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-inline-block my-3">
                        <div class="carousel">
                            <div class="bg-carousel">
                                <img src="../img/content/iot.jpg" width="100%" alt="">
                            </div>
                            <div class="description-carousel text-left px-3 pb-2 pt-3">
                                <h5>Siramin</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, deserunt.</p>
                                <button class="btn btn-warning mb-3">$ 120</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-inline-block my-3">
                        <div class="carousel">
                            <div class="bg-carousel">
                                <img src="../img/content/softweb.jpg" width="100%" alt="">
                            </div>
                            <div class="description-carousel text-left px-3 pb-2 pt-3">
                                <h5>SoftLamp</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, deserunt.</p>
                                <button class="btn btn-warning mb-3">$ 120</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-inline-block my-3">
                        <div class="carousel">
                            <div class="bg-carousel">
                                <img src="../img/content/glove.jpg" width="100%" alt="">
                            </div>
                            <div class="description-carousel text-left px-3 pb-2 pt-3">
                                <h5>World</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, deserunt.</p>
                                <button class="btn btn-warning mb-3">$ 120</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluit text-white py-4 position-relative" style="overflow: hidden; background-image: linear-gradient(to right bottom, #01aff8, #00648f)">
        <div class="container my-5">
            <div class="row mb-5 pb-5">
                <div class="col-md-12">
                    <h1 class="py-4">Pricing</h1>
                    <div class="row">
                        <div class="col-md-4 text-center my-4">
                            <div class="pricing py-3">
                                <img src="../img/sans/free.png" width="25%" class="position-relative" style="z-index: 10" alt="">
                                <div style="z-index: 10" class="position-relative">
                                    <h4 class="py-3">Free</h4>
                                    <ol class="text-left mx-3">
                                        <li>Rest Api</li>
                                        <li>Connect your softmind item</li>
                                    </ol>
                                </div>
                                <button class="btn">$0</button>
                            </div>
                        </div>
                        <div class="col-md-4 text-center my-4">
                            <div class="pricing py-3">
                                <img src="../img/sans/immortal.png" width="25%" class="position-relative" style="z-index: 10" alt="">
                                <div style="z-index: 10" class="position-relative">
                                    <h4 class="py-3">Immortal</h4>
                                    <ol class="text-left mx-3">
                                        <li>Rest Api</li>
                                        <li>Connect your softmind item</li>
                                        <li>Monitoring your softmind item</li>
                                    </ol>
                                </div>
                                <button class="btn">$10</button>
                            </div>
                        </div>

                        <div class="col-md-4 text-center my-4">
                            <div class="pricing py-3">
                                <img src="../img/sans/arcana.png" width="25%" class="position-relative" style="z-index: 10" alt="">
                                <div style="z-index: 10" class="position-relative">
                                    <h4 class="py-3">Arcana</h4>
                                    <ol class="text-left mx-3">
                                        <li>Rest Api Mqtt</li>
                                        <li>Connect your softmind item</li>
                                        <li>Monitoring your softmind item</li>
                                        <li>Manage your softmind item</li>
                                    </ol>
                                </div>
                                <button class="btn">$100</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="../img/sans/illust1.png" width="80%" style="left: 10%; z-index: 10; bottom: -100px; position: absolute;" alt="">
    </div>
</section>

@endsection

@section('js')
    <script>
        $('#shop-nav').addClass('active-nav')
    </script>
@endsection
