@extends('web.layout')

@section('title')
    สินค้าโปรโมชั่น สินค้าลดราคา เสาไฟลดราคา โคมไฟลดราคา หลอดไฟลดราคา
@endsection

@section('seo_metadata')
    <meta name="description" content="สินค้าโปรโมชั่น สินค้าลดราคา โคมไฟราคาถูก หลอดไฟราคาถูก เสาไฟราคาถูก">
    <meta name="keywords" content="สินค้าโปรโมชั่น, สินค้าลดราคา, เสาไฟลดราคา, โคมไฟลดราคา, หลอดไฟลดราคา, โคมไฟราคาถูก, หลอดไฟราคาถูก, เสาไฟราคาถูก">
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
                <div class="product-index__header--title">
                    <h1>โปรโมชั่น</h1>
                </div>
                <div class="product-index__header--sub-title">โปรโมชั่นสินค้าต่างๆ</div>
            </div>
        </div>
    </div>
    <div class="activity-bg">
        <div class="container">
            <div class="row activity">
                @foreach($promotions as $promotion)
                    <a href="{{ route('web.promotion.show', ['id' => $promotion->id, 'title' => $promotion->title])  }}">
                        <div class="col-md-12 activity__row">
                            <div class="col-md-4 text-right">
                                <div class="activity__row--image">
                                    <img src="{{ $promotion->cover ? : $promotion->product->photo->file }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="activity__title"><h2>{{ $promotion->title }}</h2></div>
                                <div class="activity__date">{{ date('F d, Y', strtotime($promotion->created_at)) }}</div>
                                <div class="activity__description">
                                    @if($promotion->description)
                                        {!! $promotion->description !!}
                                    @else
                                        {{ 'No description' }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="col-md-12"><hr class="small"></div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $promotions->links() }}
            </div>
        </div>
    </div>
@endsection
