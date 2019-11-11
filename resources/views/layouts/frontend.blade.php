<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Softmind.io @yield('title')</title>

    <link rel="shortcut icon" href="{{ URL::asset('img/sans/favicon.png"')}}" type="image/x-icon">
    @yield('css')
    <link rel="stylesheet" href="{{ URL::asset('css/all.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">

</head>
<body id="@yield('id-body')">

    <header>
        <nav id="navsans" class="pt-2 text-white">
            <div class="d-flex" id="padding-nav">
                <div id="menu-kanan" class="d-inline-block">
                    <img src="{{ URL::asset('img/sans/favicon.png')}}" class="d-block" width="35px" height="45px"lt="">
                    <ul class="mt-1" id="menu-ul">
                        <li id="io-nav"><a href="/">IO</a></li>
                        <li id="learn-nav"><a href="/learn">LEARN</a></li>
                        <li id="shop-nav"><a href="/shop">SHOP</a></li>
                        <li><a href=""><span id="softcms">SOFTCMS</span></a></li>
                        <li id="project-nav"><a href="/project">PROJECT</a></li>
                        <i class="fas fa-search" id="btnSearch"></i>
                    </ul>
                </div>
                <div class="nav-contacts">
                    <div id="nav-contact" class="nav-contact">
                        <div id="kontakku">
                            <div id="isi-kontak">
                                <ul id="isi-kontak" class="d-flex" style="list-style: none">
                                    <li>khusnul20032002@gmail.com</li>
                                    <li>+625648848410</li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-login my-btn1 btn-signin mt-1 mr-3"  onclick="document.location.href='/login'"><i class="far fa-user"></i></button>
                            <div class="menu-mobile" id="menu-show">
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                            <i class="fas fa-times" id="menu-hide" style="font-size: 32px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-nav">
                <form action="">
                    <div class="keyword">
                        <input type="text" name="keyword" id="keyword"  placeholder="Cari Sesuatu...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </nav>
    </header>

    @yield('content')

    <section id="footer">
        <div class="container-fluit px-3 text-dark py-5">
            <div class="row">
                <div class="col-md-5 p-5">
                    <h3>About Softmind</h3>
                    <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptas voluptatem, accusamus sed aliquid, porro voluptate, consectetur magni non praesentium quidem rem suscipit neque illo amet quia vel earum recusandae! Vero distinctio alias illum inventore architecto? Totam odit ad facere dolorem animi possimus iure sapiente.</p>
                    <h4>Contact Us</h4>
                    <p>khusnul20032002@gmail.com <br> khusnul20032002@yahoo.com</p>
                    <button class="btn btn-primary px-4">Hire Us</button>
                </div>
                <div class="col-md-7 py-5">
                    <img src="{{ URL::asset('img/sans/illust1.png')}}" width="100%" alt="">
                </div>
                <div class="col-md-12 text-center pt-4 pb-2"S>
                    <p>Designed by Lima's Team</p>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ URL::asset('js/jquery-3.4.1.min.js')}}"> </script>
    <script src="{{ URL::asset('js/all.js')}}"> </script>
    <script src="{{ URL::asset('js/all.min.js')}}"> </script>
    <script src="{{ URL::asset('js/aos.js')}}"> </script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"> </script>
    <script src="{{ URL::asset('js/fontawesome.min.js')}}"> </script>
    <script src="{{ URL::asset('js/slick.js')}}"> </script>
    <script src="{{ URL::asset('js/slick.min.js')}}"> </script>
    <script src="{{ URL::asset('js/vue.min.js')}}"> </script>
    <script src="{{ URL::asset('js/script.js')}}"> </script>
    <script src="{{ URL::asset('js/typeit.min.js')}}"> </script>
    <script src="{{ URL::asset('js/Chart.js')}}"> </script>

    @yield('js')

</body>
</html>
