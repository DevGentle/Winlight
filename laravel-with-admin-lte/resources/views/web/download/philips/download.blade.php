@extends('web.layout')

@section('title')
    {{ 'แคตตาล็อกสินค้า Philips' }}
@endsection

@section('seo_metadata')
    <meta name="description" content="แคตตาล็อกสินค้า ดาวน์โหลดแคตตาล็อกสินค้า แคตตาล็อกสินค้า Philips">
    <meta name="keywords" content="แคตตาล็อกสินค้า, ดาวน์โหลดแคตตาล็อกสินค้า, แคตตาล็อกสินค้า Philips">
@endsection

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    <div class="row download-index p-r-l-0">
        <div class="container download-index__header">
            <div class="col-xs-1 text-right">
                <div class="download-index__header--icon">
                    <img src="{{ asset('img/resource/product_icon.png') }}" alt="">
                </div>
            </div>
            <div class="col-xs-11">
                <div class="download-index__header--title">ผลิตภัณฑ์</div>
                <div class="download-index__header--sub-title">ด้านแสงสว่าง</div>
                <div class="download-index__header--description">
                    <span>Fluorescent, LED, Downlight, Low Bay/ High Bay,</span><br>
                    <span>Street Light, Post top light, Bollard Light, Border Light,</span><br>
                    <span>Wall Mount Light, Spot Light, Inground Light, Flood Light,</span><br>
                    <span>Interior Lighting</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid download-content__main">
        <div class="container">
            <div class="row download-content">
                <div class="col-md-3">
                    @include('web.product.patial.sidemunu')
                </div>
                <div class="col-md-9">
                    <div class="row download-content__category">
                        <div class="download-content__category-box">
                            <span class="download-content__category-box--philips">{{ 'PHILIPS CATALOG' }}</span>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="download-content__category--item">
                                <a href="{{ asset('download/philips/philips-2018.pdf') }}" target="_blank">
                                    <img src="{{ asset('img/resource/philips-2018.jpg') }}">
                                </a>
                            </div>
                            <div class="download-content__category--title">
                                <a href="{{ asset('download/philips-2018.pdf') }}" target="_blank">
                                    {{ 'Philips Catalog 2018' }}
                                </a>
                            </div>
                        </div>
                        @foreach($philips as $philip)
                            <div class="col-sm-6 col-md-4">
                                <div class="download-content__category--item">
                                    <a href="{{ asset($philip->file) }}" target="_blank">
                                        <img src="{{ asset($philip->photo->file) }}">
                                    </a>
                                </div>
                                <div class="download-content__category--title">
                                    <a href="{{ asset($philip->file) }}" target="_blank">
                                        {{ $philip->title }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
