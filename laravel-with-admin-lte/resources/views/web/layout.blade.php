@spaceless
    <!DOCTYPE html>
    <html lang="th-TH">
    <head>
        <title>Winner light @yield('title')</title>

        @yield('metadata')
            <meta charset="UTF-8">

        @yield('stylesheet')
            <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('/css/slick-theme.css') }}">

        @yield('script')
            <script type="text/javascript" src="{{ asset('/js/slideshow/jquery-1.11.3.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/slideshow/jssor.slider-21.1.5.mini.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/slick.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
    </head>

    <body>
        <div>
            @include('web.main.nav')

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
