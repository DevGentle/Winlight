@spaceless
    <!DOCTYPE html>
    <html lang="th-TH">
    <head>
        <title>Winner light @yield('title')</title>

        @yield('metadata')
            <meta charset="UTF-8">

        @yield('seo_metadata')
            <meta name="description" content="ผลิตภัณฑ์เกี่ยวกับโคมไฟและหลอดไฟ">
            <meta name="keywords" content="วินเนอร์,วินไลท์,วินเนอร์ไลท์,โคมไฟ,โคมไฟแอลอีดี,หลอดไฟ,เสาไฟ,หลอดแอลอีดี,โคมไฟถนน,โคมถนนแอลอีดี,โคมไฮเบย์,โคมไฟโซล่าเซล,โคมกันน้ำกันฝุ่น,โคมดาวน์ไลท์,Winner,Winlight,Winner Light,Luminaire/Fixture,Led,Lamp,Pole,Led Lamp,Street Light,Street Light Led,High Bay,Solarcell,Water Proof,Downlight">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="google-site-verification" content="Rl22p1_FkhYM5JfgGrBHpXMAqdTznYDUdEqU837Bz_M" />

        @yield('stylesheet')
            <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/slick-theme.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/fotorama.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/lightbox.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/menu-mobile.css') }}">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        @yield('script')
            <script type="text/javascript" src="{{ asset('/js/slideshow/jquery-1.11.3.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/slideshow/jssor.slider-21.1.5.mini.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/slick.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/jquery-match-height/dist/jquery.matchHeight.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/fotorama.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/lightbox.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/menu-mobile.js') }}"></script>
    </head>

    <body>
        <div>
            @yield('navbar')

            <div class="container-fluid p-r-l-0">
                @yield('content')
            </div>

            @section('footer')
                @extends('web.main.footer')
            @endsection

        </div>
    </body>
    </html>
@endspaceless
