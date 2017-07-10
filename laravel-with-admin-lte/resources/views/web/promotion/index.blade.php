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
    </div>]
    <div class="container">
        <div class="row">
            @foreach($promotions as $r)
            <div class="col-md-4">
                <div class="promotion-index">
                    <div class="thumbnail">
                        <a href="{{ route('web.promotion.show', ['id' => $r->id ]) }}">
                            <img src="{{ $r->photo->file ? : $r->product->photo->file }}" alt="">
                        </a>
                        <div class="caption">
                            <a href="{{ route('web.promotion.show', ['id' => $r->id ]) }}">
                                <h3>{{ $r->title }}</h3>
                                <div>
                                    <strong>เวลาโปรโมชั่น: </strong>
                                    {{ date('d, F Y', strtotime($r->start_time)) }}
                                    {{ ' - ' }}
                                    {{ date('d, F Y', strtotime($r->end_time)) }}
                                </div>
                                <div>
                                    <strong>ราคา: </strong>{{ $r->offer_price }}{{ ' บาท' }}
                                </div>
                            </a>
                            <p>
                                <a href="{{ route('web.promotion.show', ['id' => $r->id ]) }}" class="btn btn-default" role="button">อ่านเพิ่ม</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{--<div class="text-center">--}}
            {{--{{ $promotions->links() }}--}}
        {{--</div>--}}
    </div>
@endsection
