@extends('web.layout')

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    <div class="container promotion-show">
        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="{{ $promotion->photo->file ? : $promotion->product->photo->file }}" alt="">
                </div>
            </div>
            <div class="col-sm-8">
                <div class="promotion-show__detail">
                    <h2>{{ $promotion->title }}</h2>
                    <div class="promotion-show__detail--price">
                        <strong>ราคาโปรโมชั่น: </strong>
                        {{ $promotion->offer_price|number_format($promotion->offer_price, 2, '.', '') }}{{ ' บาท' }}
                    </div>
                    <div class="promotion-show__detail--date">
                        <strong>ระยะเวลาโปรโมชั่น: </strong>
                        {{ date('d, F Y', strtotime($promotion->start_time)) }}
                        {{ ' - ' }}{{ date('d, F Y', strtotime($promotion->end_time)) }}
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            {!! $promotion->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row promotion-show__contact">
            <div class="col-xs-12 col-sm-6 promotion-show__contact--left">
                <a href="{{ route('web.contact-us.index') }}">
                    <img src="{{ asset('img/resource/contact-wl.png') }}" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 promotion-show__contact--right">
                <a href="https://line.me/R/ti/p/%40qzh9268t" target="_blank">
                    <img src="{{ asset('img/resource/add-line.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection
