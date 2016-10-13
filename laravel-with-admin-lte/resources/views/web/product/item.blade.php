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
                            <li><a href="#">Catalog</a></li>
                            <li><a href="#">LED</a></li>
                            <li class="active">PRD-001</li>
                        </ol>
                        <div class="col-md-12 product-item__category--image">
                            <img src="{{ asset('img/resource/product/IMG_3120.png') }}" width="100%">
                        </div>
                        <div class="col-md-10 product-item__category--description">
                            Lorem Ipsum is a dummy text that is mainly used by the printing and design industry. It is intended to show how the type will look before the end product is available.

                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500:s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.

                            Lorem Ipsum dummy texts was available for many years on adhesive sheets in different sizes and typefaces from a company called Letraset.

                            When computers came along, Aldus included lorem ipsum in its PageMaker publishing software, and you now see it wherever designers, content designers, art directors, user interface developers and web designer are at work.

                            They use it daily when using programs such as Adobe Photoshop, Paint Shop Pro, Dreamweaver, FrontPage, PageMaker, FrameMaker, Illustrator, Flash, Indesign etc.

                            To the Lorem Ipsum dummy text �
                        </div>
                        {{--@for($i = 0; $i <= 2; $i++)--}}
                            {{--<div class="col-md-4 product-content__category--item">--}}
                                {{--<img src="">--}}
                            {{--</div>--}}
                        {{--@endfor--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('web.main.map')
@endsection
