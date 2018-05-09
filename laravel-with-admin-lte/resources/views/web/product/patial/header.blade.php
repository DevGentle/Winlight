@php($mainTitle = $seoTitle ?: $title)
@php($subTitle = $seoTitle ? $title : 'ผลิตภัณฑ์ด้านแสงสว่าง')

<div class="row product-index p-r-l-0">
    <div class="container product-index__header">
        <div class="col-xs-12">
            <div class="product-index__header--title"><h1>{{ $mainTitle ?: 'สินค้า เสาไฟ โคมไฟ Solar Cell และผลิตภัณต์โคมไฟ' }}</h1></div>
            <div class="product-index__header--sub-title hidden-sm hidden-xs">{{ $subTitle }}</div>
        </div>
    </div>
</div>
