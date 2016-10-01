@extends('web.layout')

@section('content')
    <div class="row product-index p-r-l-0">
        <div class="container product-index__header">
            <div class="col-xs-1 text-right">
                <div class="product-index__header--icon">
                    <img src="{{ asset('img/resource/product_icon.png') }}" alt="">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="product-index__header--title">ผลิตภัณฑ์</div>
                <div class="product-index__header--sub-title">ด้านแสงสว่าง</div>
                <div class="product-index__header--description">
                    <span>Fluorescent, LED, Downlight, Low Bay/ High Bay,</span><br>
                    <span>Street Light, Post top light, Bollard Light, Border Light,</span><br>
                    <span>Wall Mount Light, Spot Light, Inground Light, Flood Light,</span><br>
                    <span>Interior Lighting</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid product-content__main">
        <div class="container">
            <div class="row product-content">
                <div class="col-md-2 col-md-offset-1">
                    <div class="product-content__header">{{ 'Catalog' }}</div>
                    <hr>
                    @for($i = 0; $i <= 3; $i++)
                    <div class="product-content__menu">
                        <div class="product-content__menu--square"></div>
                        <div class="product-content__menu--title">
                            <a href="#">LED</a>
                        </div>
                    </div>
                    @endfor
                    <hr>
                </div>
                <div class="col-md-9">
                    <div class="row product-content__category">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Home</a></li>
                            <li class="active">Home</li>
                        </ol>
                        @for($i = 0; $i <= 8; $i++)
                        <div class="col-md-4 product-content__category--item">
                            <img src="">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('web.main.map')
@endsection
