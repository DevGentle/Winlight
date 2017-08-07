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
                <div class="col-md-2 col-md-offset-1">
                    @include('web.product.patial.sidemunu')
                </div>
                <div class="col-md-9">
                    <div class="row product-content__category">
                        <ol class="breadcrumb hidden-xs">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/products') }}">Products</a></li>
                            <li>{{ $productMainCategories->title }}</li>
                        </ol>
                        @foreach($subCats as $subCat)
                            <div class="col-xs-12 col-sm-6 col-lg-4 itemheight">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-content__category--item">
                                            <a href="{{ route('web.product.subCategory', ['subCategoryId' => $subCat->id]) }}">
                                                <img src="{{ asset($subCat->photo->file) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-center pname">{{ $subCat->title }}</h4>
                            </div>
                        @endforeach
                    </div>
                    <div class="product-content__paginate text-center">
                        {{  $subCats->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
