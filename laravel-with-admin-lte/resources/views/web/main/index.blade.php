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
        <button class="index-history__button" href="">learn more</button>
    </div>
    <div class="row index-history__circle text-center">
        <div class="col-md-2 col-md-offset-3">
            <div class="index-history__circle--item">
                <img src="{{ asset('img/resource/home_image_001.png') }}">
            </div>
        </div>
        <div class="col-md-2">
            <div class="index-history__circle--item">
                <img src="{{ asset('img/resource/home_image_002.png') }}">
            </div>
        </div>
        <div class="col-md-2">
            <div class="index-history__circle--item">
                <img src="{{ asset('img/resource/home_image_003.png') }}">
            </div>
        </div>
    </div>
    <div class="row index-product">
        <div class="col-md-1 col-md-offset-3">
            <img src="{{ asset('img/resource/product_icon.png') }}">
        </div>
        <div class="col-md-5">
            <div class="index-product__title">ผลิตภัณฑ์</div>
            <div class="index-product__sub-title">ด้านแสงสว่าง</div>
            <div class="index-product__content">
                <span>Fluorescent, LED, Downlight, Low Bay/ High Bay,</span><br>
                <span>Street Light, Post top light, Bollard Light, Border Light,</span><br>
                <span>Wall Mount Light, Spot Light, Inground Light, Flood Light,</span><br>
                <span>Interior Lighting</span>
            </div>
        </div>
        <div class="col-md-1">
            <button class="index-product__button" href="">learn more</button>
        </div>
    </div>
    <div class="row m-l-r-0">
        <div class="col-md-6 col-md-offset-3">
            <div class="col-md-3">
                <div class="index-product__preview">
                    <img src="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="index-product__preview"></div>
            </div>
            <div class="col-md-3 ">
                <div class="index-product__preview"></div>
            </div>
            <div class="col-md-3">
                <div class="index-product__preview"></div>
            </div>
        </div>
    </div>
    <div class="row index-service">
        <div class="col-md-1 col-md-offset-3">
            <img src="{{ asset('img/resource/service_icon.png') }}">
        </div>
        <div class="col-md-5">
            <div class="index-service__title">ด้านบริการ</div>
            <div class="index-service__sub-title">ให้คำปรึกษา และอื่ๆ</div>
            <div class="index-service__content">
                <span>เราให้คำปรึกษา และให้บริการเกี่ยวกับการติดตั้ง และคำแนะนำในการใช้</span><br>
                <span>ติดตั้งแสงสว่างให้ได้ประโยชน์ในการใช้งานสูงสุด</span><br>
            </div>
        </div>
        <div class="col-md-1">
            <button class="index-service__button" href="">learn more</button>
        </div>
    </div>
    <div class="row index-service__circle text-center">
        <div class="col-md-2 col-md-offset-3">
            <div class="index-service__circle--item">
                <img src="{{ asset('img/resource/service_images_001.png') }}">
            </div>
        </div>
        <div class="col-md-2">
            <div class="index-service__circle--item">
                <img src="{{ asset('img/resource/service_images_002.png') }}">
            </div>
        </div>
        <div class="col-md-2">
            <div class="index-service__circle--item">
                <img src="{{ asset('img/resource/service_images_003.png') }}">
            </div>
        </div>
    </div>
    <div class="row index-reference">
        <div class="col-md-1 col-md-offset-3">
            <img src="{{ asset('img/resource/reference_icon.png') }}">
        </div>
        <div class="col-md-5">
            <div class="index-reference__title">ตัวอย่างผลงาน</div>
            <div class="index-reference__sub-title">โครงการ</div>
            <div class="index-reference__content">
                <span>ที่ไว้วางใจใช้บริการจากเรา</span><br>
            </div>
        </div>
        <div class="col-md-1">
            <button class="index-reference__button" href="">learn more</button>
        </div>
    </div>
    <div class="row index-reference__showcase">
        <div class="col-md-4 col-md-offset-4 index-reference__showcase--inner text-center">
            <img src="{{ asset('img/resource/logo_P_G.png') }}">
            <img src="{{ asset('img/resource/logo_esso.png') }}">
            <img src="{{ asset('img/resource/logo_bangchak.png') }}">
            <img src="{{ asset('img/resource/logo_shell.png') }}">
            <img src="{{ asset('img/resource/logo_yamaha.png') }}">
            <img src="{{ asset('img/resource/logo_amata.png') }}">
        </div>
    </div>
    <div class="row index-contact">
        <div class="index-contact__box text-center">
            <div class="index-contact__box--title">ติดต่อเรา</div>
            <div class="index-contact__box--content">
                <span>(+66) 02 415 7576 - 7</span><br>
                <span>(+66) 02 415 7578</span><br>
                <span>{{ 'sale_wlc@winnerlight,co,th' }}</span>
            </div>
        </div>
    </div>
@endsection
