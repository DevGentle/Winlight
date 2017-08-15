@extends('web.layout')

@section('title')
    สินค้า {{ $productSubCategories->title }} แคตตาล็อกสินค้า โคมไฟ หลอดไฟ เสาไฟ ดาวน์โหลดแคตตาล็อก philips
@endsection

@section('seo_metadata')
    <meta name="description" content="สินค้า {{ $productSubCategories->title }} แคตตาล็อกสินค้า โคมไฟ หลอดไฟ เสาไฟ ดาวน์โหลดแคตตาล็อก philips">
    <meta name="keywords" content="สินค้า {{ $productSubCategories->title }}, แคตตาล็อกสินค้า, โคมไฟ, หลอดไฟ, เสาไฟ, ดาวน์โหลดแคตตาล็อก, philips">
@endsection

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
                <div class="product-index__header--title"><h1>ผลิตภัณฑ์</h1></div>
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
                            <li><a href="{{ url('/products') }}">Products</a></li>
                            <li><a href="{{ route('web.product.category', [
                                'categoryId' => $productSubCategories->productMainCategories->id,
                                'categoryTitle' => $productSubCategories->productMainCategories->getSlug()]) }}">
                                    {{ $productSubCategories->productMainCategories->title }}
                                </a></li>
                            <li>{{ $productSubCategories->title }}</li>
                        </ol>
                        @foreach($products as $product)
                            @php($link = route('web.product.item', ['Id' => $product->id, 'title' => $product->getSlug()]))
                            <div class="col-xs-12 col-sm-6 col-lg-4 itemheight">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-content__category--item">
                                            <a href="{{ $link }}">
                                                @if($product->photo)
                                                    <img src="{{ asset($product->photo->file) }}">
                                                @else
                                                    <img src="{{ asset('img/resource/default_200.png') }}">
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ $link }}">
                                    <h2 class="text-center pname">{{ $product->title }}</h2>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="product-content__paginate text-center">
                        {{  $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
