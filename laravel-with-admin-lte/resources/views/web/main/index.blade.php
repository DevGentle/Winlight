@extends('web.layout')

@section('content')
    <div class="index-history text-center">
        <div class="index-history__title">เรื่องราวของเรา</div>
        <div class="index-history__content">
            <span>เราดำเนินธุรกิจเกี่ยวกับผลิตภัณฑ์ไฟฟ้าแสงสว่างอย่างครบวงจร</span><br>
            <span>เริ่มต้นจากการผลิดและจำหน่ายอุปกรณ์ไฟฟ้าที่เกี่ยวข้องกับโคมไฟชนิดต่างๆ ภายใต้เครื่องหมายการค้า</span><br>
            <span>WINLIGHT (WINNER LIGHT CO.,LTD.) โดยโรงงานผลิดโคมไฟฟ้าและเสาไฟฟ้าชนิดต่างๆ</span><br>
            <span>ที่ได้รับรองตามมาตรฐาน มอก.902 มอก. 1955 และ ISO 9001:2008</span>
        </div>
        <a href=""><div class="index-history__button">
            learn more
        </div></a>
    </div>
    <div class="row index-history__circle text-center">
        <div class="col-md-2 col-md-offset-3">
            <div class="index-history__circle--item">sdafs</div>
        </div>
        <div class="col-md-2">
            <div class="index-history__circle--item">sdafs</div>
        </div>
        <div class="col-md-2">
            <div class="index-history__circle--item">sdafs</div>
        </div>
    </div>
    <div class="row index-product">
        <div class="col-md-1 col-md-offset-3">
            <img src="{{ asset('img/resource/product_icon.png') }}">
        </div>
        <div class="col-md-6">
            <div class="index-product__title">ผลิตภัณฑ์</div>
            <div class="index-product__sub-title">ด้านแสงสว่าง</div>
            <div class="index-product__content">
                <span>Fluorescent, LED, Downlight, Low Bay/ High Bay,</span><br>
                <span>Street Light, Post top light, Bollard Light, Border Light,</span><br>
                <span>Wall Mount Light, Spot Light, Inground Light, Flood Light,</span><br>
                <span>Interior Lighting</span>
            </div>
        </div>
    </div>
    {{--TODO: Image Products--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{----}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
