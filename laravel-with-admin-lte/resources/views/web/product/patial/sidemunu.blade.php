@inject('productMainCategory', 'App\Services\ProductsService')

@php($dropDown = $productMainCategory)
@php($list = $productMainCategory)

<div class="product-content__header">{{ 'Catalog' }}</div>
<div class="visible-md visible-lg">
    <hr>
    <div class="product-content__menu">
        <div class="product-content__menu--square"></div>
        <div class="product-content__menu--title">
            <a href="{{ url('product/download/winner-products') }}">{{ 'Winner Catalog Download' }}</a>
        </div>
    </div>
    <div class="product-content__menu">
        <div class="product-content__menu--square"></div>
        <div class="product-content__menu--title">
            <a href="{{ url('product/download/philips') }}">{{ 'Philips Catalog Download' }}</a>
        </div>
    </div>
    <hr>
    @foreach($list->findProductMainCategories()->productMainCategories as $productMainCategory)
        @php($link = route('web.product.category', ['categoryId' => $productMainCategory->id, 'categoryTitle' => $productMainCategory->getSlug()]) )
        <div class="product-content__menu">
            <div class="product-content__menu--square"></div>
            <div class="product-content__menu--title">
                <a href="{{ $link }}">{{ $productMainCategory->title }}</a>
            </div>
        </div>
    @endforeach
    <hr>
</div>


<div class="btn-group visible-xs visible-sm product-content__dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Choose Product Category <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="{{ url('product/download/winner-products') }}">{{ 'Winner Catalog Download' }}</a></li>
        <li><a href="{{ url('product/download/philips') }}">{{ 'Philips Catalog Download' }}</a></li>
        @foreach($dropDown->findProductMainCategories()->productMainCategories as $productMainCategory)
            @php($link = route('web.product.category', ['categoryId' => $productMainCategory->id, 'categoryTitle' => $productMainCategory->getSlug()]) )
            <li><a href="{{ $link }}">{{ $productMainCategory->title }}</a></li>
        @endforeach
    </ul>
</div>
