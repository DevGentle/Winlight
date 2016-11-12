@extends('web.layout')

@section('navbar')
    @include('web.main.videonav')
@endsection

@section('content')
    <div class="index-service text-center">
        <div class="container">
            <h1>{{ "บริการของเรา" }}</h1>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-4">
                        <div class="index-service__border">
                            <img src="{{ asset('img/resource/index/service_icon_01.png') }}" alt="">
                            <p>{{ "ด้านการออกแบบ" }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="index-service__border">
                            <img src="{{ asset('img/resource/index/service_icon_02.png') }}" alt="">
                            <p>{{ "ติดตั้งระบบและอื่นๆ" }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="index-service__border">
                            <img src="{{ asset('img/resource/index/service_icon_03.png') }}" alt="">
                            <p>{{ "บริการให้คำปรึกษา" }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-activity text-center">
        <div class="container">
            <h1>{{ "Activity Update" }}</h1>
            <div class="row text-left">
                <div class="col-md-12">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="index-activity__border">
                            <img src="{{ asset('img/resource/activity/activity_01.jpg') }}" alt="">
                            <p>{{ "ติดตั้งแผงโซลาเซลล์สำหรับชาร์จแบตมือถือบริเวณท้องสนามหลวง" }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="index-activity__border">
                            <img src="{{ asset('img/resource/activity/activity_02.jpg') }}" alt="">
                            <p>{{ "เปลี่ยนหลอดไฟ LED สำนักงาน กปร. และมูลนิธิชัยพัฒนา กรุงเทพ" }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="index-activity__border">
                            <img src="{{ asset('img/resource/activity/activity_03.jpg') }}" alt="">
                            <p>{{ "เปลี่ยนหลอดไฟ LED ศูนย์ศึกษาการพัฒนาฯ พิกุลทอง จ.นราธิวาศ" }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="index-activity__border">
                            <img src="{{ asset('img/resource/activity/activity_04.jpg') }}" alt="">
                            <p>{{ "เปลี่ยนหลอดไฟ LED ศูนย์อำนวยการและประสานงานการพัฒนาฯ ปากพนัง จ.นครศรีธรรมราช" }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-winner">
        <div class="row m-l-r-0">
            <div class="col-md-12 p-r-l-0">
                <div class="col-md-6 p-r-l-0">
                    <div class="index-winner__left">
                        <img src="{{ asset('img/resource/winnerCat/winlight_catalog_header_01.jpg') }}" alt="">
                        <div class="index-winner__left--download">
                            <div class="index-winner__left--download-title">{{ "WINLIGHT" }}</div>
                            <div class="index-winner__left--download-subtitle">{{ "catalog" }}</div>
                            <a href="#"><div class="index-winner__left--download-button">{{ "DOWNLOAD" }}</div></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-r-l-0">
                    <div class="index-winner__right">
                        <img src="{{ asset('img/resource/winnerCat/winlight_catalog_cover_01.jpg') }}" alt="">
                        <img src="{{ asset('img/resource/winnerCat/winlight_catalog_cover_02.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-philips">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-7">
                    <div class="index-winner__left--download">
                        <div class="index-philips__download-title">{{ "PHILIPS" }}</div>
                        <div class="index-philips__download-subtitle">{{ "catalog" }}</div>
                        <a href="#"><div class="index-philips__download-button">{{ "DOWNLOAD" }}</div></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="index-reference">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-2">
                        <div class="index-reference__icon text-right">
                            <img src="{{ asset('img/resource/reference_icon.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="index-reference__header">
                            <div class="index-reference__header--title">{{ "Project Reference" }}</div>
                            <div class="index-reference__header--subtitle">{{ "โครงการ" }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="index-reference__content">
                        <div class="col-md-3">
                            <div class="index-reference__content--border">
                                <div class="index-reference__content--border-img">
                                    <img src="{{ asset('img/resource/reference/ref_44.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="index-reference__content--border">
                                <div class="index-reference__content--border-img">
                                    <img src="{{ asset('img/resource/reference/ref_08.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="index-reference__content--border">
                                <div class="index-reference__content--border-img">
                                    <img src="{{ asset('img/resource/reference/ref_19.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="index-reference__content--border">
                                <div class="index-reference__content--border-img">
                                    <img src="{{ asset('img/resource/reference/ref_34.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<hr class="line-xs">--}}
    {{--<div class="index-history text-center">--}}
        {{--<div class="index-history__title">เรื่องราวของเรา</div>--}}
        {{--<div class="index-history__content">--}}
            {{--<span>ดำเนินธุรกิจเกี่ยวกับผลิตภัณฑ์ไฟฟ้าแสงสว่างอย่างครบวงจร</span><br>--}}
            {{--<span>เริ่มต้นจากการผลิตและจำหน่ายอุปกรณ์ไฟฟ้าที่เกี่ยวข้องกับโคมไฟชนิดต่างๆ ภายใต้เครื่องหมายการค้า</span><br>--}}
            {{--<span>WINLIGHT และเป็นตัวแทนจำหน่ายโคมไฟและอุปกรณ์ภายใต้เครื่องหมายการค้า PHILIPS</span><br>--}}
            {{--<span>ที่ได้รับรองตามมาตรฐาน ISO 9001:2008</span>--}}
        {{--</div>--}}
        {{--<a href="{{ url('/about-us') }}"><button class="index-history__button">learn more</button></a>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row index-history__circle text-center">--}}
            {{--<div class="col-xs-10 col-xs-offset-1">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="index-history__circle--item">--}}
                        {{--<img src="{{ asset('img/resource/home_image_001.png') }}">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="index-history__circle--item">--}}
                        {{--<img src="{{ asset('img/resource/home_image_002.png') }}">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="index-history__circle--item">--}}
                        {{--<img src="{{ asset('img/resource/home_image_003.png') }}">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="index-product">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-1 text-right">--}}
                    {{--<img src="{{ asset('img/resource/product_icon.png') }}">--}}
                {{--</div>--}}
                {{--<div class="col-xs-9">--}}
                    {{--<div class="index-product__title">ผลิตภัณฑ์</div>--}}
                    {{--<div class="index-product__sub-title">ด้านแสงสว่าง</div>--}}
                    {{--<div class="index-product__content">--}}
                        {{--<span>Fluorescent, LED, Downlight, Low Bay/ High Bay,</span><br>--}}
                        {{--<span>Street Light, Post top light, Bollard Light, Border Light,</span><br>--}}
                        {{--<span>Wall Mount Light, Spot Light, Inground Light, Flood Light,</span><br>--}}
                        {{--<span>Interior Lighting</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-1">--}}
                    {{--<a href="{{ url('products') }}"><button class="index-product__button">learn more</button></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row m-l-r-0">--}}
            {{--<div class="col-xs-10 col-xs-offset-1">--}}
                {{--@foreach($randProducts as $randProduct)--}}
                    {{--<a href="{{ route('web.product.item', ['Id' => $randProduct->id]) }}">--}}
                        {{--<div class="col-md-3">--}}
                            {{--<div class="index-product__preview">--}}
                                {{--<img src="{{ $randProduct->photo->file }}">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="index-service">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-1 text-right">--}}
                    {{--<img src="{{ asset('img/resource/service_icon.png') }}">--}}
                {{--</div>--}}
                {{--<div class="col-md-9">--}}
                    {{--<div class="index-service__title">ด้านบริการ</div>--}}
                    {{--<div class="index-service__sub-title">ให้คำปรึกษา และอื่นๆ</div>--}}
                    {{--<div class="index-service__content">--}}
                        {{--<span>เราให้คำปรึกษา และให้บริการเกี่ยวกับการติดตั้ง และคำแนะนำในการใช้</span><br>--}}
                        {{--<span>ติดตั้งแสงสว่างให้ได้ประโยชน์ในการใช้งานสูงสุด</span><br>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-1">--}}
                    {{--<a href="{{ url('services') }}"><button class="index-service__button">learn more</button></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="row index-service__circle text-center">--}}
            {{--<div class="col-xs-10 col-xs-offset-1">--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="index-service__circle--item">--}}
                        {{--<img src="{{ asset('img/resource/service_images_001.png') }}">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="index-service__circle--item">--}}
                        {{--<img src="{{ asset('img/resource/service_images_002.png') }}">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="index-service__circle--item">--}}
                        {{--<img src="{{ asset('img/resource/service_images_003.png') }}">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="index-reference">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-1">--}}
                    {{--<img src="{{ asset('img/resource/reference_icon.png') }}">--}}
                {{--</div>--}}
                {{--<div class="col-md-9">--}}
                    {{--<div class="index-reference__title">ตัวอย่างผลงาน</div>--}}
                    {{--<div class="index-reference__sub-title">โครงการ</div>--}}
                    {{--<div class="index-reference__content">--}}
                        {{--<span>ที่ไว้วางใจใช้บริการจากเรา</span><br>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-1">--}}
                    {{--<a href="{{ url('references') }}"><button class="index-reference__button">learn more</button></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row index-reference__showcase">--}}
        {{--<div class="col-md-4 col-md-offset-4 index-reference__showcase--inner text-center">--}}
            {{--<img src="{{ asset('img/resource/logo_P_G.png') }}">--}}
            {{--<img src="{{ asset('img/resource/logo_esso.png') }}">--}}
            {{--<img src="{{ asset('img/resource/logo_bangchak.png') }}">--}}
            {{--<img src="{{ asset('img/resource/logo_shell.png') }}">--}}
            {{--<img src="{{ asset('img/resource/logo_yamaha.png') }}">--}}
            {{--<img src="{{ asset('img/resource/logo_amata.png') }}">--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--@include('web.main.map')--}}
@endsection
