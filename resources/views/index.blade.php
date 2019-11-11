@extends('layouts.frontend')

@section('content')

<section id="parallax-home">
    <div class="container-fluit">
        <div class="row">
            <div class="col-md-12 par" id="par-home">
                <img src="{{ URL::asset('img/sans/illust1.png')}}" id="objek1-par" width="100%" alt="">
                <div class="overlay"></div>
                <div class="row text-white position-relative">
                    <div class="col-6 py-5 text-right my-5">
                        <h3 class="pt-5 mt-5">Gunakan Internet of Things untuk</h3>
                    </div>
                    <div class="col-6 py-5 text-primary text-left my-5">
                        <u><h3 class="py-5 mt-5" id="capt-par"></h3></u>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluit"  style="width: 100%; overflow: hidden">
        <div class="row py-5">
            <div class="col-3 text-center">
                <img data-aos="fade-up" src="{{ URL::asset('img/logologo/arduino.png')}}" class="d-inlne-block imgku_top icons" id="arduino" alt="">
            </div>
            <div class="col-3 text-center">
                <img data-aos="fade-up" src="{{ URL::asset('img/logologo/Laravel.png')}}" class="d-inlne-block imgku_top icons" id="laravel" alt="">
            </div>
            <div class="col-3 text-center">
                <img data-aos="fade-up" src="{{ URL::asset('img/logologo/python1.png')}}" class="d-inlne-block imgku_top icons" alt="">
            </div>
            <div class="col-3 text-center">
                <img data-aos="fade-up" src="{{ URL::asset('img/logologo/nodemcu-3.png')}}" class="d-inlne-block imgku_top icons" alt="">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluit bg-dark text-white py-5">
        <div class="row">
            <div class="col-md-6 px-5 pt-5 my-5" style="text-align-last: center">
                <h3>Internet of Things And SoftCMS</h3>
                <p>Monitoring, Controlling Internet of Things and Builder good website in One</p>
                <button class="btn btn-primary">
                    <i class="far fa-user mr-2"></i>Login
                </button>
            </div>
            <div class="col-md-6">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</section>

<section id="kelebihan">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h2>Kenapa Harus Softmind.io ?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="carousel p-4 my-3">
                    <h4 class="text-center mb-4">Mudah</h4>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quam consectetur voluptatibus doloremque. Ipsa nobis ab molestias minus maxime hic!</>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carousel p-4 my-3">
                    <h4 class="text-center mb-4">Murah</h4>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quam consectetur voluptatibus doloremque. Ipsa nobis ab molestias minus maxime hic!</>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carousel p-4 my-3">
                    <h4 class="text-center mb-4">Friendly</h4>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quam consectetur voluptatibus doloremque. Ipsa nobis ab molestias minus maxime hic!</>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carousel p-4 my-3">
                    <h4 class="text-center mb-4">Aman</h4>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quam consectetur voluptatibus doloremque. Ipsa nobis ab molestias minus maxime hic!</>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carousel p-4 my-3">
                    <h4 class="text-center mb-4">Terpercaya</h4>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quam consectetur voluptatibus doloremque. Ipsa nobis ab molestias minus maxime hic!</>
                </div>
            </div>
            <div class="col-md-4">
                <div class="carousel p-4 my-3">
                    <h4 class="text-center mb-4">Suangar wes pokoke</h4>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quam consectetur voluptatibus doloremque. Ipsa nobis ab molestias minus maxime hic!</>
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
                                <div style="z-index: 10" class="position-relative">
                                    <img src="{{ URL::asset('img/sans/free.png') }}" width="25%" alt="">
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
                                <div style="z-index: 10" class="position-relative">
                                    <img src="{{ URL::asset('img/sans/immortal.png') }}" width="25%" alt="">
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
                                <div style="z-index: 10" class="position-relative">
                                    <img src="{{ URL::asset('img/sans/arcana.png') }}" width="25%" alt="">
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
        <img src="{{ URL::asset('img/sans/illust1.png')}}" width="80%" style="left: 10%; z-index: 10; bottom: -100px; position: absolute;" alt="">
    </div>
</section>

<section>
    <div class="container-fluit text-white par-teams">
        <div class="overlay"></div>
        <div class="container py-5 position-relative">
            <h2 class="text-center mb-5">Our Awesome Team</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="icons-team text-center">
                        <div class="team  mt-4">
                            <div class="icon-team d-inline-block">
                                <img src="{{ URL::asset('img/team/nino.jpg') }}" height="100%" alt="">
                            </div>
                            <h5>Mohammad Khusnul Khuluq</h5>
                            <p>Software engineer & Mechatronics engineer</p>
                        </div>
                        <div class="team  mt-4">
                            <div class="icon-team d-inline-block">
                            <i class="fas fa-user my-4" style="font-size: 47px"></i>
                            </div>
                            <h5>Cahyo Adi Saputra</h5>
                            <p>Leader & Tester</p>
                        </div>
                        <div class="team  mt-4">
                            <div class="icon-team d-inline-block">
                            <i class="fas fa-user my-4" style="font-size: 47px"></i>
                            </div>
                            <h5>Zindedhin Ahlam Zulfiqar</h5>
                            <p>Marketing product</p>
                        </div>
                        <div class="team  mt-4">
                            <div class="icon-team d-inline-block">
                            <i class="fas fa-user my-4" style="font-size: 47px"></i>
                            </div>
                            <h5>Rama Firmansyah</h5>
                            <p>User Interface Designer</p>
                        </div>
                        <div class="team  mt-4">
                            <div class="icon-team d-inline-block">
                            <i class="fas fa-user my-4" style="font-size: 47px"></i>
                            </div>
                            <h5>Ibnu Sina</h5>
                            <p>User Interface Designer</p>
                        </div>
                        <div class="team  mt-4">
                            <div class="icon-team d-inline-block">
                            <i class="fas fa-user my-4" style="font-size: 47px"></i>
                            </div>
                            <h5>Sefa Haji Farikha</h5>
                            <p>Secretary</p>
                        </div>
                        <div class="team  mt-4">
                            <div class="icon-team d-inline-block">
                            <i class="fas fa-user my-4" style="font-size: 47px"></i>
                            </div>
                            <h5>Niswatul Khasanah</h5>
                            <p>Bendahara</p>
                        </div>
                        <div class="team  mt-4">
                            <div class="icon-team d-inline-block">
                            <i class="fas fa-user my-4" style="font-size: 47px"></i>
                            </div>
                            <h5>Maulidiyah Dwi H.P</h5>
                            <p>Content writer</p>
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

    new TypeIt('#capt-par', {
        speed: 300,
        startDelay: 100,
        loop: true
    })
    .type('Kebaul')
    .pause(400)
    .delete(2)
    .type('ikan')
    .pause(5000)
    .delete()
    .type('Hul')
    .pause(400)
    .delete(2)
    .type('al positif')
    .pause(5000)
    .delete()
    .type('Kenyamanan Bersama')
    .pause(5000)
    .delete()
    .go()

    AOS.init();

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
<script>
    $('#io-nav').addClass('active-nav')
</script>

@endsection
