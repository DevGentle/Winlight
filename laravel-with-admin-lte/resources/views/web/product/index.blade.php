@extends('web.layout')

@section('title')
    สินค้า แคตตาล็อกสินค้า โคมไฟ หลอดไฟ เสาไฟ ดาวน์โหลดแคตตาล็อก philips
@endsection

@section('seo_metadata')
    <meta name="description" content="สินค้า แคตตาล็อกสินค้า โคมไฟ หลอดไฟ เสาไฟ ดาวน์โหลดแคตตาล็อก philips">
    <meta name="keywords" content="สินค้า, แคตตาล็อกสินค้า, โคมไฟ, หลอดไฟ, เสาไฟ, ดาวน์โหลดแคตตาล็อก, philips">
@endsection

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    {{-- Header zone --}}
    @include('web.product.patial.header', ['title' => null, 'seoTitle' => null])

    <div class="product-content__main">
        <div class="container">
            <div class="row product-content">
                <div class="col-md-3">
                    @include('web.product.patial.sidemunu')
                </div>
                <div class="col-md-9">
                    <div class="row product-content__category">
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="{{ url('/') }}">{{ 'Home' }}</a></li>
                            <li>{{ 'Product Main Category' }}</li>
                        </ol>
                        @foreach($productMainCategories as $productMainCategory)
                            @if($productMainCategory)
                                @php($link = route('web.product.category', ['categoryId' => $productMainCategory->id, 'categoryTitle' => $productMainCategory->getSlug()]) )
                                <div class="col-xs-12 col-sm-6 col-lg-4 itemheight">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="product-content__category--item">
                                                <a href="{{ $link }}">
                                                    @if($productMainCategory->photo)
                                                        <img src="{{ asset($productMainCategory->photo->file) }}">
                                                    @else
                                                        <img src="{{ asset('img/resource/default_200.png') }}">
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <a href="{{ $link }}">
                                                <h2 class="text-center pname">{{ $productMainCategory->title }}</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-12"><h2>{{ 'Has no product in this category' }}</h2></div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
