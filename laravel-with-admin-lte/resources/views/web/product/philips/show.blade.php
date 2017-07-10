@extends('web.layout')

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    <div class="row product-index p-r-l-0">
        <div class="container product-index__header">
            <div class="col-xs-1 text-right">
                <div class="product-index__header--icon">
                    <img src="{{ asset('img/resource/product_icon.png') }}" alt="">
                </div>
            </div>
            <div class="col-xs-11">
                <div class="product-index__header--title">ผลิตภัณฑ์</div>
                <div class="product-index__header--sub-title">ด้านแสงสว่าง</div>
            </div>
        </div>
    </div>
    <div class="product-content__main">
        <div class="container">
            <div class="row product-content">
                <div class="col-xs-12 col-md-2 col-md-offset-1">
                    @include('web.product.patial.sidemunu')
                </div>
                <div class="col-xs-12 col-md-9">
                    <div class="row product-content__category">
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/products') }}">Philips</a></li>
                            <li class="active">{{ $philipsProduct->title }}</li>
                        </ol>
                        <div class="col-md-12">
                            <div class="product-item__category--image">
                                <img src="{{ asset($philipsProduct->photo->file) }}" width="100%">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="product-item__category--code">
                                <strong>รหัสสินค้า </strong>{{ $philipsProduct->code }}
                            </div>
                            <div class="product-item__category--title">
                                <strong>ชื่อสินค้า </strong>{{ $philipsProduct->title }}
                            </div>
                            <div class="product-item__category--price">
                                <strong>ราคา </strong>{{ $philipsProduct->price|number_format($philipsProduct->price, 2, '.', '') }}<span> บาท</span>
                            </div>
                            <div class="product-item__category--description">
                                {!! $philipsProduct->description !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 product-content__category--image-contact">
                            <a href="{{ route('web.contact-us.index') }}">
                                <img src="{{ asset('img/resource/contact-wl.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 product-content__category--image-line">
                            <a href="https://line.me/R/ti/p/%40qzh9268t" target="_blank">
                                <img src="{{ asset('img/resource/add-line.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
