@inject('slides', 'App\Services\SlideShowService')
<div class="container-fluid p-r-l-0">
    <div class="row">
        <div class="container">
            <div class="navbar-header__menu">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="col-xs-1 navbar-header__menu-image">
                        <a href="{{ url('/') }}"><img src="{{ asset('img/resource/winlight_logo_white.png') }}"></a>
                    </div>
                    <div class="col-xs-11 text-center navbar-header__menu-box">
                        <ul>
                            <li><a href="{{ url('/') }}">หน้าแรก</a></li>
                            <li><a href="{{ url('/about-us') }}">วินเนอร์</a></li>
                            <li><a href="{{ url('/products') }}">ผลิตภัณฑ์</a></li>
                            <li><a href="{{ url('/services') }}">บริการ</a></li>
                            <li><a href="{{ url('/references') }}">ผลงาน</a></li>
                            <li><a href="{{ url('/contact-us') }}">ติดต่อสอบถาม</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navbar-header__content-slide hidden-xs hidden-sm">
                <div class="navbar-header__content-slide--title"><span style="color: #23b14c">วินเนอร์</span> ไลท์</div>
                <div class="navbar-header__content-slide--subtitle">เราดำเนินธุรกิจเกี่ยวกับผลิตภัณฑ์ด้านแสงสว่างอย่างครอบคลุม</div>
            </div>
        </div>
    </div>
    <div class="navbar-header__cover">
        @foreach($slides->findSlides()->slides as $slide)
            <img data-u="image" src="{{ asset($slide->photo->file) }}" />
        @endforeach
    </div>
    <div class="navbar-header__green-line"></div>
</div>

