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
                            <li><a href="{{ url('/product') }}">Products</a></li>
                            <li><a href="{{ route('web.product.category', ['categoryId' => $product->productMainCategories->id]) }}">{{ $product->productMainCategories->title }}</a></li>
                            @if($product->productSubCategories()->count())
                                <li><a href="{{ route('web.product.subCategory', ['subCategoryId' => $product->productSubCategories->id]) }}">{{ $product->productSubCategories->title }}</a></li>
                            @endif
                            <li class="active">{{ $product->title }}</li>
                        </ol>
                        <div class="col-md-12 product-item__category--image">
                            <img src="{{ asset($product->photo->file) }}" width="100%">
                        </div>
                        <div class="col-md-10 product-item__category--description">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
