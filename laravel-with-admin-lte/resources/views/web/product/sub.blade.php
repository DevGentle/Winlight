@extends('web.layout')

@section('title')
    สินค้า {{ $productMainCategories->title }} แคตตาล็อกสินค้า โคมไฟ หลอดไฟ เสาไฟ ดาวน์โหลดแคตตาล็อก philips
@endsection

@section('seo_metadata')
    <meta name="description" content="สินค้า {{ $productMainCategories->title }} แคตตาล็อกสินค้า โคมไฟ หลอดไฟ เสาไฟ ดาวน์โหลดแคตตาล็อก philips">
    <meta name="keywords" content="สินค้า {{ $productMainCategories->title }}, แคตตาล็อกสินค้า, โคมไฟ, หลอดไฟ, เสาไฟ, ดาวน์โหลดแคตตาล็อก, philips">
@endsection

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    {{-- Header zone --}}
    @include('web.product.patial.header', ['title' => $productMainCategories->title, 'seoTitle' => null])
    @include('web.main.breadcrumb', [
        'items' => [
            [ 'link' => url('products'), 'label' => 'Products' ],
            [ 'link' => null, 'label' => $productMainCategories->title ]
        ]
    ])

    <div class="product-content__main">
        <div class="container">
            <div class="row product-content">
                <div class="col-md-3">
                    @include('web.product.patial.sidemunu')
                </div>
                <div class="col-md-9">
                    <div class="row product-content__category">
                        @foreach($subCats as $subCat)
                            @php($link = route('web.product.subCategory', ['subCategoryId' => $subCat->id, 'subCategoryTitle' => $subCat->getSlug()]))
                            <div class="col-xs-12 col-sm-6 col-lg-4 itemheight">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-content__category--item">
                                            <a href="{{ $link }}">
                                                @if($subCat->photo)
                                                    <img src="{{ asset($subCat->photo->file) }}">
                                                @else
                                                    <img src="{{ asset('img/resource/default_200.png') }}">
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ $link }}">
                                    <h2 class="text-center pname">{{ $subCat->title }}</h2>
                                </a>
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
