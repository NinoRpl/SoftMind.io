$(document).ready(function() {
    $(window).scroll(function() {
        let lebarlayar = $(this).innerWidth();
        let tinggilayar = $(this).scrollTop();
        if($(this).scrollTop() < 75) {
            $('#menu-kanan').addClass('d-inline-block').removeClass('d-flex');
            $('nav').removeClass('position-fixed').addClass('text-white').removeClass('text-dark').removeClass('bg-white');
            $('#menu-ul').removeClass('ml-5');
            $('#isi-kontak').removeClass('d-none');
            $('nav').removeClass('nav-shadow');
            $('#nav-contact').removeClass('d-flex');
            $('.line').addClass('bg-white').removeClass('bg-black');
            $('.my-btn1').addClass('btn-signin');
            if(lebarlayar <= 860) {
                $('.search-nav').css({ top : '95px' });
            } else if(lebarlayar > 860) {
                $('.search-nav').css({ top : '100px' });
            }
        } else if ($(this).scrollTop() > 75) {
            $('#menu-kanan').removeClass('d-inline-block').addClass('d-flex');
            $('nav').addClass('position-fixed').addClass('text-dark').removeClass('text-white').addClass('bg-white');
            $('#menu-ul').addClass('ml-5');
            $('nav').addClass('nav-shadow');
            $('#isi-kontak').addClass('d-none');
            $('#nav-contact').addClass('d-flex');
            $('.my-btn1').removeClass('btn-signin');
            $('.line').addClass('bg-black').removeClass('bg-white');
            if(lebarlayar <= 860) {
                $('.search-nav').css({ top : '60px' });
            } else if(lebarlayar > 860) {
                $('.search-nav').css({ top : '67px' });
            }
        }
        console.log(tinggilayar);
        $('#objek1-par').css({
            "transform": "translate(0px, " + tinggilayar/2 + "px)"
         })
    });
    if($(window).scrollTop() < 75) {
        $('.line').addClass('bg-white').removeClass('bg-black');
    }
    $('#btnSearch').click(function() {
        $('.search-nav').slideToggle(500);
        $('#menu-ul').hide();
        $('body').addClass('overflow-auto').removeClass('overflow-hide').addClass('overx');
    });
    $('#menu-show').click(function() {
        $('#menu-ul').slideToggle();
        $('.search-nav').hide();
        $('#menu-hide').show();
        $('#menu-show').hide();
        $('body').addClass('overflow-hide').removeClass('overflow-auto');
        $('nav').addClass('position-fixed').addClass('text-dark').removeClass('text-white').addClass('bg-white');
    });
    $('#menu-hide').click(function() {
        $('#menu-ul').slideToggle();
        $('.search-nav').hide();
        $('#menu-hide').hide();
        $('#menu-show').show();
        $('body').addClass('overflow-auto').removeClass('overflow-hide');
    });
    $('.carousels').slick({
        infinite: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 10000
    })
    $('.icons-team').slick({
        infinite: true,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 10000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 5000
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000
              }
            }
        ]
    });
});
