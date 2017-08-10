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
                <div class="product-index__header--title">โปรโมชั่น</div>
                <div class="product-index__header--sub-title">โปรโมชั่นสินค้าต่างๆ</div>
            </div>
        </div>
    </div>
    <div class="activity-bg">
        <div class="container">
            <div class="row activity">
                @foreach($promotions as $promotion)
                    <a href="{{ route('web.promotion.show', ['id' => $promotion->id])  }}">
                        <div class="col-md-12 activity__row">
                            <div class="col-md-4 text-right">
                                <div class="activity__row--image">
                                    <img src="{{ $promotion->cover ? : $promotion->product->photo->file }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="activity__title">{{ $promotion->title }}</div>
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
