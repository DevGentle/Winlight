@inject('productMainCategory', 'App\Services\ProductsService')

<div class="product-content__header">{{ 'Catalog' }}</div>
<hr>
<div class="product-content__menu">
    <div class="product-content__menu--square"></div>
    <div class="product-content__menu--title">
        <a href="{{ url('product/download/philips') }}">{{ 'PHILIPS' }}</a>
    </div>
</div>
<hr>
@foreach($productMainCategory->findProductMainCategories()->productMainCategories as $productMainCategory)
    <div class="product-content__menu">
        <div class="product-content__menu--square"></div>
        <div class="product-content__menu--title">
            <a href="{{ route('web.product.category', ['categoryId' => $productMainCategory->id])  }}">{{ $productMainCategory->title }}</a>
        </div>
    </div>
@endforeach
<hr>
