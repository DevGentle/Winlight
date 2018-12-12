@extends('web.layout')

@section('title')
    {{ $product->title }}
@endsection

@section('seo_metadata')
    <meta name="description" content="{{ $product->title }} สินค้า แคตตาล็อกสินค้า โคมไฟ หลอดไฟ เสาไฟ ดาวน์โหลดแคตตาล็อก philips">
    <meta name="keywords" content="{{ $product->title }}, สินค้า, แคตตาล็อกสินค้า, โคมไฟ, หลอดไฟ, เสาไฟ, ดาวน์โหลดแคตตาล็อก, philips">
@endsection

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    {{-- Header zone --}}
    @include('web.product.patial.header', ['title' => $product->title, 'seoTitle' => $product->seo_title])
    @include('web.main.breadcrumb', [
        'items' => [
            [ 'link' => url('products'), 'label' => 'Products' ],
            [ 'link' => route('web.product.category', [
                        'categoryId' => $product->productMainCategories->id,
                        'categoryTitle' => $product->productMainCategories->getSlug()]),
              'label' => $product->productMainCategories->title
            ],
            $product->productSubCategories()->count()
                ? [ 'link' => route('web.product.subCategory', [
                        'subCategoryId' => $product->productSubCategories->id,
                        'subCategorytitle' => $product->productSubCategories->getSlug()]),
                    'label' => $product->productSubCategories->title
                  ]
                : null,
            [ 'link' => null, 'label' => $product->title ],
        ]
    ])

    <div class="product-content__main">
        <div class="container">
            <div class="row product-content">
                <div class="col-md-3">
                    @include('web.product.patial.sidemunu')
                </div>
                <div class="col-xs-12 col-md-9">
                    <div class="row product-content__category">
                        @if($product->productMainCategories->title == 'Interior Lighting')
                            @if($product->file)
                                <embed src="{{ asset($product->file) }}" width="100%" height="1150px%" />
                            @else
                                {{ 'No results' }}
                            @endif
                        @else
                            <div class="col-md-12">
                                @if($product->file)
                                    <embed src="{{ asset($product->file) }}" width="100%" height="1150px%" />
                                @else
                                    <div class="product-item__category--image">
                                        <img src="{{ asset($product->photo->file) }}" width="100%">
                                    </div>
                                @endif
                            </div>
                            <div class="col-xs-12">
                                <div class="product-item__category--description">
                                    {!! $product->description !!}
                                </div>
                            </div>
                        @endif

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
