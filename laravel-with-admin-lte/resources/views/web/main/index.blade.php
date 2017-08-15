@extends('web.layout')

@section('title')
    โคมไฟ เสาไฟ หลอดไฟ ออกแบบ ติดตั้ง
@endsection

@section('seo_metadata')
    <meta name="description" content="ผลิตภัณฑ์เกี่ยวกับโคมไฟและหลอดไฟ โคมไฟ เสาไฟ หลอดไฟ บริการติดตั้งเสาไฟ บริการออกแบบระบบไฟส่องสว่าง">
    <meta name="keywords" content="วินเนอร์, วินไลท์, วินเนอร์ไลท์, โคมไฟ, โคมไฟแอลอีดี, หลอดไฟ, เสาไฟ, หลอดแอลอีดี, โคมไฟถนน, โคมถนนแอลอีดี, โคมไฮเบย์, โคมไฟโซล่าเซล, โคมกันน้ำกันฝุ่น, โคมดาวน์ไลท์, Winner, Winlight, Winner Light, Luminaire/Fixture, Led, Lamp, Pole, LedLamp, Street Light, Street Light Led, High Bay, Solarcell, Water Proof, Downlight">
@endsection

@section('navbar')
    @include('web.main.videonav', array('subtitle' => 'ผลิตภัณฑ์ไฟส่องสว่าง โคมไฟ เสาไฟ หลอดไฟ ไฟถนน โซล่าเซลล์'))
@endsection

@section('content')
    <div class="index-suggestion">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    @include('web.main.patial.promotion_side')
                </div>
                <div class="col-xs-12 col-md-9">
                    <div class="row index-suggestion__slide">
                        @foreach($slides->slice(0, 5) as $slide)
                            <div class="col-xs-12 col-md-4">
                                @if($slide->link)<a href="{{ $slide->link }}">@endif
                                    <img src="{{ $slide->photo->file }}" alt="{{ $slide->title }}">
                                @if($slide->link)</a>@endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row index-suggestion__bestsell">
                        <h2 class="h1 text-center">สินค้าโปรโมชั่น</h2>
                        @if(count($promotions) > 0)
                            @foreach($promotions as $promotion)
                                <div class="col-xs-12 col-md-4 item">
                                    <div class="index-suggestion__bestsell--block">
                                        <a href="{{ route('web.promotion.show', ['id' => $promotion->id, 'title' => $promotion->title]) }}">
                                            <img src="{{ $promotion->cover ? : $promotion->product->photo->file }}" alt="{{ $promotion->title }}">
                                        </a>
                                    </div>
                                    <div class="index-suggestion__bestsell-detail pname">
                                        <a href="{{ route('web.promotion.show', ['id' => $promotion->id, 'title' => $promotion->title]) }}">
                                            <h3>{{ $promotion->title }}</h3>
                                            <p class="index-suggestion__bestsell-detail--price"><strong>ราคาโปรโมชั่น: </strong>{{ $promotion->offer_price }}{{ ' บาท' }}</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-xs-12 text-center">
                                <p class="noresult">ไม่พบสินค้าโปรโมชั่นในตอนนี้</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-activity text-center">
        <div class="container">
            <h2 class="h1">{{ "Activity Update" }}</h2>
            <div class="row text-left">
                <div id="news-slider" class="col-sm-12">
                    @foreach($news as $n)
                        <div class="col-lg-3 col-sm-6 col-xs-12 index-activity__box">
                            <a href="{{ route('web.event.show', ['eventId' => $n->id, 'eventTitle' => $n->title])  }}">
                                <div class="index-activity__border">
                                    <img src="{{ asset($n->cover) }}" alt="{{ $n->title }}" width="100%" height="180px">
                                </div>
                                <div class="index-activity__created">{{ date('F d, Y', strtotime($n->created_at)) }}</div>
                                <div class="index-activity__title">{{ $n->title }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="index-winner">
        <div class="row m-l-r-0">
            <div class="col-md-12 p-r-l-0">
                <div class="col-md-6 p-r-l-0">
                    <div class="index-winner__left">
                        <div class="index-winner__left--download">
                            <div class="index-winner__left--download-title">{{ "WINLIGHT" }}</div>
                            <div class="index-winner__left--download-subtitle">{{ "catalog" }}</div>
                            <a href="{{ url('product/download/winner-products') }}">
                                <div class="index-winner__left--download-button">{{ "DOWNLOAD" }}</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-r-l-0 hidden-xs hidden-sm">
                    <div class="index-winner__right">
                        <div class="index-winner__right--image">
                            <img src="{{ asset('img/resource/winnerCat/winlight_catalog_cover_01.jpg') }}" alt="winner light catalog">
                            <div class="overlay">
                                <a href="{{ asset('download/Catalog1.pdf') }}" target="_blank">
                                    <img src="{{ asset('img/resource/plus.png') }}" alt="plus image">
                                </a>
                            </div>
                        </div>
                        <div class="index-winner__right--image">
                            <img src="{{ asset('img/resource/winnerCat/winlight_catalog_cover_02.jpg') }}" alt="winner catalog">
                            <div class="overlay">
                                <a href="{{ asset('download/Catalog2.pdf') }}" target="_blank">
                                    <img src="{{ asset('img/resource/plus.png') }}" alt="plus">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-philips">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-7">
                    <div class="index-winner__left--download">
                        <div class="index-philips__download-title">{{ "PHILIPS" }}</div>
                        <div class="index-philips__download-subtitle">{{ "catalog" }}</div>
                        <a href="{{ url('/product/download/philips') }}">
                            <div class="index-philips__download-button">{{ "DOWNLOAD" }}</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="index-reference">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-xs-12">
                        <div class="index-reference__header text-center">
                            <div class="index-reference__header--title">
                                <h2 class="h1">{{ "Project Reference" }}</h2>
                            </div>
                            <div class="index-reference__header--subtitle">{{ "ตัวอย่างผลงานที่เราเคยได้สร้างสรรค์" }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="index-reference__content">
                        @foreach($references as $reference)
                            <a href="{{ url('/references') }}">
                            <div class="col-md-3 col-sm-6">
                                <div class="index-reference__content--border">
                                    <div class="index-reference__content--border-img">
                                        <img src="{{ asset($reference->cover) }}" alt="{{ $reference->title }}" width="100%">
                                    </div>
                                </div>
                            </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 text-center index-reference__logo">
                    <img src="{{ asset('img/resource/logo_P_G.png') }}" width="50px" alt="P&G logo">
                    <img src="{{ asset('img/resource/logo_esso.png') }}" width="50px" alt="esso logo">
                    <img src="{{ asset('img/resource/logo_bangchak.png') }}" width="40px" alt="bangchak logo">
                    <img src="{{ asset('img/resource/logo_shell.png') }}" width="40px" alt="shell logo">
                </div>
                <div class="col-xs-6 col-xs-offset-3 text-center index-reference__logo">
                    <img src="{{ asset('img/resource/logo_yamaha.png') }}" width="100px" alt="yamaha logo">
                    <img src="{{ asset('img/resource/logo_amata.png') }}" width="80px" alt="amata logo">
                </div>
            </div>
        </div>
    </div>
@endsection
