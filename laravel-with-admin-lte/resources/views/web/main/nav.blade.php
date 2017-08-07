<div class="overlay hidden-xs">
    <div class="overlay--title"><span style="color: #23b14c">WINNER</span> LIGHT</div>
    <div class="overlay--subtitle">We are operates on Lighting products a comprehensive</div>
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
                    <li><a href="{{ url('/events') }}">กิจกรรม</a></li>
                    <li><a href="{{ url('/services') }}">บริการ</a></li>
                    <li><a href="{{ url('/references') }}">ผลงาน</a></li>
                    <li><a href="{{ url('/contact-us') }}">ติดต่อสอบถาม</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>
