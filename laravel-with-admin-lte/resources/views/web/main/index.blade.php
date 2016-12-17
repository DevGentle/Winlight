@extends('web.layout')

@section('navbar')
    @include('web.main.videonav')
@endsection

@section('content')
    <div class="index-service text-center">
        <div class="container">
            <h1>{{ "บริการของเรา" }}</h1>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-4">
                        <div class="index-service__border">
                            <img src="{{ asset('img/resource/index/service_icon_01.png') }}" alt="">
                            <p>{{ "ด้านการออกแบบ" }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="index-service__border">
                            <img src="{{ asset('img/resource/index/service_icon_02.png') }}" alt="">
                            <p>{{ "ติดตั้งระบบและอื่นๆ" }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="index-service__border">
                            <img src="{{ asset('img/resource/index/service_icon_03.png') }}" alt="">
                            <p>{{ "บริการให้คำปรึกษา" }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-activity text-center">
        <div class="container">
            <h1>{{ "Activity Update" }}</h1>
            <div class="row text-left">
                <div id="news-slider" class="col-sm-12">
                    @foreach($news as $new)
                        <div class="col-lg-3 col-sm-6 col-xs-12 index-activity__box">
                            <a href="{{ route('web.event.show', ['eventId' => $new->id])  }}">
                                <div class="index-activity__border">
                                    <img src="{{ asset($new->photo->file) }}" width="100%" height="180px">
                                </div>
                                <div class="index-activity__created">{{ date('F d, Y', strtotime($new->created_at)) }}</div>
                                <div class="index-activity__title">{{ $new->title }}</div>
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
                            <a href="{{ url('product/download/winner-products') }}"><div class="index-winner__left--download-button">{{ "DOWNLOAD" }}</div></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-r-l-0 hidden-xs hidden-sm">
                    <div class="index-winner__right">
                        <div class="index-winner__right--image">
                            <img src="{{ asset('img/resource/winnerCat/winlight_catalog_cover_01.jpg') }}" alt="">
                            <div class="overlay">
                                <a href="{{ asset('download/Catalog1.pdf') }}" target="_blank">
                                    <img src="{{ asset('img/resource/plus.png') }}">
                                </a>
                            </div>
                        </div>
                        <div class="index-winner__right--image">
                            <img src="{{ asset('img/resource/winnerCat/winlight_catalog_cover_02.jpg') }}" alt="">
                            <div class="overlay">
                                <a href="{{ asset('download/Catalog2.pdf') }}" target="_blank">
                                    <img src="{{ asset('img/resource/plus.png') }}">
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
                        <a href="{{ url('/product/download/philips') }}"><div class="index-philips__download-button">{{ "DOWNLOAD" }}</div></a>
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
                            <div class="index-reference__header--title">{{ "Project Reference" }}</div>
                            <div class="index-reference__header--subtitle">{{ "ตัวอย่างผลงานที่เราเคยได้สร้างสรรค์" }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="index-reference__content">
                        <div class="col-md-3 col-sm-6">
                            <div class="index-reference__content--border">
                                <div class="index-reference__content--border-img">
                                    <img src="{{ asset('img/resource/reference/ref_44.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="index-reference__content--border">
                                <div class="index-reference__content--border-img">
                                    <img src="{{ asset('img/resource/reference/ref_08.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="index-reference__content--border">
                                <div class="index-reference__content--border-img">
                                    <img src="{{ asset('img/resource/reference/ref_19.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="index-reference__content--border">
                                <div class="index-reference__content--border-img">
                                    <img src="{{ asset('img/resource/reference/ref_34.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 text-center index-reference__logo">
                    <img src="{{ asset('img/resource/logo_P_G.png') }}" width="50px" alt="">
                    <img src="{{ asset('img/resource/logo_esso.png') }}" width="50px" alt="">
                    <img src="{{ asset('img/resource/logo_bangchak.png') }}" width="40px" alt="">
                    <img src="{{ asset('img/resource/logo_shell.png') }}" width="40px" alt="">
                </div>
                <div class="col-xs-6 col-xs-offset-3 text-center index-reference__logo">
                    <img src="{{ asset('img/resource/logo_yamaha.png') }}" width="100px" alt="">
                    <img src="{{ asset('img/resource/logo_amata.png') }}" width="80px" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
