@extends('web.layout')

@section('title')
    {{ 'ข่าวสารและกิจกรรม ข่าวสารวงการไฟฟ้าแสงสว่าง' }}
@endsection

@section('seo_metadata')
    <meta name="description" content="ข่าว รวมข่าว รวมข่าวสาร ข่าวสาร ข่าวสารวงการไฟแสงสว่าง">
    <meta name="keywords" content="ข่าว, รวมข่าว, รวมข่าวสาร, ข่าวสาร, ข่าวสารวงการไฟแสงสว่าง">
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
                <div class="product-index__header--title"><h1>ไฮไลท์สินค้า</h1></div>
                <div class="product-index__header--sub-title">ไฮไลท์สินค้า และอื่นๆ</div>
            </div>
        </div>
    </div>
    <div class="activity-bg">
        <div class="container">
            <div class="row activity">
                @foreach($events as $event)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail activity__row--image item">
                            <a href="{{ route('web.event.show', ['eventId' => $event->id, 'eventTitle' => $event->title])  }}">
                                <img src="{{ asset($event->cover) }}">
                            </a>
                            <div class="caption">
                                <div class="activity__title">
                                    <a href="{{ route('web.event.show', ['eventId' => $event->id, 'eventTitle' => $event->title])  }}">
                                        <h2>{{ $event->title }}</h2>
                                    </a>
                                    <i class="fa fa-clock"></i>{{ date('F d, Y', strtotime($event->created_at)) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<a href="{{ route('web.event.show', ['eventId' => $event->id, 'eventTitle' => $event->title])  }}">--}}
                        {{--<div class="col-md-12 activity__row">--}}
                            {{--<div class="col-md-4 text-right">--}}
                                {{--<div class="activity__row--image">--}}
{{--                                    <img src="{{ asset($event->cover) }}">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="activity__title"><h2>{{ $event->title }}</h2></div>--}}
                                {{--<div class="activity__date">{{ date('F d, Y', strtotime($event->created_at)) }}</div>--}}
                                {{--<div class="activity__description">--}}
                                    {{--@if($event->content)--}}
                                        {{--{!! $event->content !!}--}}
                                    {{--@else--}}
                                        {{--{{ 'No description' }}--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<div class="col-md-12"><hr class="small"></div>--}}
                @endforeach
            </div>
            <div class="text-center">
                {{  $events->links() }}
            </div>
        </div>
    </div>
@endsection
