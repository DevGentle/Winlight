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
            <div class="col-xs-6">
                <div class="product-index__header--title">ผลิตภัณฑ์</div>
                <div class="product-index__header--sub-title">ด้านแสงสว่าง</div>
            </div>
        </div>
    </div>
    <div class="container-fluid product-content__main">
        <div class="container">
            <div class="row product-content">
                <div class="col-md-2 col-md-offset-1">
                    @include('web.product.patial.sidemunu')
                </div>
                <div class="col-md-9">
                    <div class="row product-content__category">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Product Main Category</li>
                        </ol>
                        @foreach($productMainCategories as $productMainCategory)
                            @if($productMainCategory)
                                <div class="col-md-4">
                                    <div class="col-md-12 product-content__category--item">
                                        <a href="{{ route('web.product.category', ['categoryId' => $productMainCategory->id])  }}">
                                            <img src="{{ asset($productMainCategory->photo->file) }}">
                                        </a>
                                    </div>
                                    <h4 class="text-center">{{ $productMainCategory->title }}</h4>
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
