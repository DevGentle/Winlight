@extends('web.layout')

@section('title')
    ผลงาน ตัวอย่างผลงาน งานติดตั้งเสาไฟ งานติดตั้งโคมไฟ
@endsection

@section('seo_metadata')
    <meta name="description" content="ผลงาน ตัวอย่างผลงาน งานติดตั้งเสาไฟ งานติดตั้งโคมไฟ">
    <meta name="keywords" content="ผลงาน, ตัวอย่างผลงาน, งานติดตั้งเสาไฟ, งานติดตั้งโคมไฟ">
@endsection

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    <div class="row reference p-r-l-0">
        <div class="container reference__header">
            <div class="col-xs-1 text-right">
                <div class="reference__header--icon">
                    <img src="{{ asset('img/resource/reference_icon.png') }}">
                </div>
            </div>
            <div class="col-xs-11">
                <div class="reference__header--title"><h1>ตัวอย่างผลงาน</h1></div>
                <div class="reference__header--sub-title">โครงการ</div>
                <div class="reference__header--description">
                    <span>คู่ค้าที่ไว้วางใจใช้บริการจากเรา</span><br>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center">
            <div class="col-md-10 col-md-offset-1 reference__content">
                @foreach($references as $reference)
                    <div class="col-md-4 col-sm-6 item">
                        <div class="reference__content--item">
                            <img src="{{ asset($reference->cover) }}">
                            <div class="overlay">
                                @foreach($reference->photos()->get() as $photo)
                                    <a href="{{ asset($photo->file) }}" data-lightbox="roadtrip{{ $photo->reference_id }}" data-title="{{ $reference->title }}">
                                        <img src="{{ asset('img/resource/plus.png') }}">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="reference__content--title"><h2>{{ $reference->title }}</h2></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
