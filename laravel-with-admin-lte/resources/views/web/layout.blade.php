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

        @yield('script')
            <script type="text/javascript" src="{{ asset('/js/slideshow/jquery-1.11.3.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/js/slideshow/jssor.slider-21.1.5.mini.js') }}"></script>
            <script>
                jQuery(document).ready(function ($) {

                    var jssor_1_SlideoTransitions = [
                        [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
                        [{b:1900,d:2000,x:-379,e:{x:7}}],
                        [{b:1900,d:2000,x:-379,e:{x:7}}],
                        [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
                    ];

                    var jssor_1_options = {
                        $AutoPlay: true,
                        $SlideDuration: 800,
                        $SlideEasing: $Jease$.$OutQuint,
                        $CaptionSliderOptions: {
                            $Class: $JssorCaptionSlideo$,
                            $Transitions: jssor_1_SlideoTransitions
                        },
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                        },
                        $BulletNavigatorOptions: {
                            $Class: $JssorBulletNavigator$
                        }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    //responsive code begin
                    //you can remove responsive code if you don't want the slider scales while window resizing
                    function ScaleSlider() {
                        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                        if (refSize) {
                            refSize = Math.min(refSize, 1920);
                            jssor_1_slider.$ScaleWidth(refSize);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
                    ScaleSlider();
                    $(window).bind("load", ScaleSlider);
                    $(window).bind("resize", ScaleSlider);
                    $(window).bind("orientationchange", ScaleSlider);
                    //responsive code end
                });
            </script>
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
