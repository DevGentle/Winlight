<div class="container-fluid p-r-l-0 video-ralative">
    <video poster="{{ asset('video/background_video_poster.png') }}" width="100%" height="100%"
           id="bgvid" playsinline autoplay muted loop>
        <source src="{{ asset('video/background_video_blur.webm') }}" type="video/webm">
        <source src="{{ asset('video/background_video_blur.mp4') }}" type="video/mp4">
        <source src="{{ asset('video/background_video_blur.mp4') }}" type="video/mov">
    </video>

    <div class="overlay-video">
        <div class="overlay-video--title hidden-xs"><span style="color: #23b14c">WINNER</span> LIGHT</div>
        <div class="overlay-video--subtitle">
            <h1>{{ $subtitle }}</h1>
        </div>
    </div>

    <div class="hb-menu-btn place-left rounded-square" onClick="hbMenuToggle()" style="display: none;">
        <div class="line-block">
            <div class="line" id="line1"></div>
            <div class="line" id="line2"></div>
            <div class="line" id="line3"></div>
        </div>
    </div>

    <div class="hb-menu push-right">
        <div class="menu-title">
        </div>
        <nav id="main-nav" class="hide-selection">
        </nav>
    </div>

    <nav class="navbar">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/resource/winlight_logo_white.png') }}"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav nav-bar">
                        <li><a href="{{ url('/') }}">หน้าแรก</a></li>
                        <li><a href="{{ url('/about-us') }}">วินเนอร์</a></li>
                        <li><a href="{{ url('/promotion') }}">โปรโมชั่น</a></li>
                        <li><a href="{{ url('/products') }}">ผลิตภัณฑ์</a></li>
                        <li><a href="{{ url('/events') }}">ไฮไลท์</a></li>
                        <li><a href="{{ url('/services') }}">บริการ</a></li>
                        <li><a href="{{ url('/references') }}">ผลงาน</a></li>
                        <li><a href="{{ url('/contact-us') }}">ติดต่อสอบถาม</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container-fluid -->
    </nav>

</div>

