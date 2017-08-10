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
                <div class="col-md-3">
                    @include('web.product.patial.sidemunu')
                </div>
                <div class="col-md-9">
                    <div class="row product-content__category">
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Product Main Category</li>
                        </ol>
                        @foreach($productMainCategories as $productMainCategory)
                            @if($productMainCategory)
                                <div class="col-xs-12 col-sm-6 col-lg-4 itemheight">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="product-content__category--item">
                                                <a href="{{ route('web.product.category', ['categoryId' => $productMainCategory->id])  }}">
                                                    @if($productMainCategory->photo)
                                                        <img src="{{ asset($productMainCategory->photo->file) }}">
                                                    @else
                                                        <img src="{{ asset('img/resource/default_200.png') }}">
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <a href="{{ route('web.product.category', ['categoryId' => $productMainCategory->id])  }}">
                                                <h4 class="text-center pname">{{ $productMainCategory->title }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-12"><h1>{{ 'Has no product in this category' }}</h1></div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
