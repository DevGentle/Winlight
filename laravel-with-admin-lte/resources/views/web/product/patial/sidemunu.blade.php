@inject('productMainCategory', 'App\Services\ProductsService')

<div class="product-content__header">{{ 'Catalog' }}</div>
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
@foreach($productMainCategory->findProductMainCategories()->productMainCategories as $productMainCategory)
    @php($link = route('web.product.category', ['categoryId' => $productMainCategory->id, 'categoryTitle' => $productMainCategory->getSlug()]) )
    <div class="product-content__menu">
        <div class="product-content__menu--square"></div>
        <div class="product-content__menu--title">
            <a href="{{ $link  }}">{{ $productMainCategory->title }}</a>
        </div>
    </div>
@endforeach
<hr>
