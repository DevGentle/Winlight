@extends('web.layout')

@section('title')
    {{ $event->title }}
@endsection

@section('seo_metadata')
    <meta name="description" content="ข่าวสารและกิจกรรม {{ $event->title }} ข่าวสาร">
    <meta name="keywords" content="ข่าวสารและกิจกรรม {{ $event->title }}, ข่าวสาร">
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
                <div class="product-index__header--title"><h1>ข่าวสารและกิจกรรม</h1></div>
                <div class="product-index__header--sub-title">ข่าวสารและกิจกรรมต่างๆ</div>
            </div>
        </div>
    </div>
    <div class="activity-bg">
        <div class="container">
            <div class="row activity-show">
                <div class="col-md-offset-1 col-md-10">
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
                            @foreach($event->photos()->get() as $photo )
                                <a href="{{ asset($photo->file) }}">
                                    <img src="{{ asset($photo->file) }}" data-fit="cover">
                                </a>
                            @endforeach
                        </div>
                    </div>
                    {{ dump($event->getSlug()) }}
                    <div class="activity-show__title"><h2>{{ $event->title }}</h2></div>
                    <div class="activity-show__date">{{ 'Created on : ' }}{{ date('F d, Y', strtotime($event->created_at)) }}</div>
                    <div class="activity-show__content">
                        @if($event->content)
                            {!! $event->content !!}
                        @else
                            {{ 'No description.' }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
