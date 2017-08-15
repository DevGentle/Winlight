@extends('web.layout')

@section('title')
    {{ $promotion->title }}
@endsection

@section('seo_metadata')
    <meta name="description" content="โปรโมชั่น {{ $promotion->title }}">
    <meta name="keywords" content="{{ $promotion->title }}, โปรโมชั่น{{ $promotion->title }}">
@endsection

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    <div class="activity-bg">
        <div class="container">
            <div class="row activity-show">
                <div class="col-md-offset-1 col-md-10" style="padding-bottom: 20px">
                    <div style="display: flex;">
                        <div class="fotorama"
                             data-nav="thumbs"
                             data-loop="true"
                             data-click="true"
                             data-arrows="true"
                             data-width="700"
                             data-ratio="700/467"
                             data-max-width="100%"
                             data-allowfullscreen="native" style="margin: auto;">
                            <a href="{{ asset($promotion->cover) }}">
                                <img src="{{ asset($promotion->cover) }}" data-fit="cover">
                            </a>
                        </div>
                    </div>
                    <div class="activity-show__title"><h1>{{ $promotion->title }}</h1></div>
                    <div class="activity-show__date">{{ 'Created on : ' }}{{ date('F d, Y', strtotime($promotion->created_at)) }}</div>
                    <div class="activity-show__content">
                        @if($promotion->description)
                            {!! $promotion->description !!}
                        @else
                            {{ 'No description.' }}
                        @endif
                    </div>
                </div>
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
    </div>
    {{--<div class="container promotion-show">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-4">--}}
                {{--<div class="thumbnail">--}}
                    {{--<img src="{{ $promotion->cover ? : $promotion->product->photo->file }}" alt="">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-8">--}}
                {{--<div class="promotion-show__detail">--}}
                    {{--<h2>{{ $promotion->title }}</h2>--}}
                    {{--<div class="promotion-show__detail--price">--}}
                        {{--<strong>ราคาโปรโมชั่น: </strong>--}}
                        {{--{{ $promotion->offer_price|number_format($promotion->offer_price, 2, '.', '') }}{{ ' บาท' }}--}}
                    {{--</div>--}}
                    {{--<div class="promotion-show__detail--date">--}}
                        {{--<strong>ระยะเวลาโปรโมชั่น: </strong>--}}
                        {{--{{ date('d, F Y', strtotime($promotion->start_time)) }}--}}
                        {{--{{ ' - ' }}{{ date('d, F Y', strtotime($promotion->end_time)) }}--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-12">--}}
                            {{--{!! $promotion->description !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row promotion-show__contact">--}}
            {{--<div class="col-xs-12 col-sm-6 promotion-show__contact--left">--}}
                {{--<a href="{{ route('web.contact-us.index') }}">--}}
                    {{--<img src="{{ asset('img/resource/contact-wl.png') }}" alt="">--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-xs-12 col-sm-6 promotion-show__contact--right">--}}
                {{--<a href="https://line.me/R/ti/p/%40qzh9268t" target="_blank">--}}
                    {{--<img src="{{ asset('img/resource/add-line.png') }}" alt="">--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
