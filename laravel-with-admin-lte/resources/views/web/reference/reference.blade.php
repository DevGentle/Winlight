@extends('web.layout')

@section('content')
    <div class="row reference p-r-l-0">
        <div class="container reference__header">
            <div class="col-xs-1 text-right">
                <div class="reference__header--icon">
                    <img src="{{ asset('img/resource/reference_icon.png') }}">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="reference__header--title">ตัวอย่างผลงาน</div>
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
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_08.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_09.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_11.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_16.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_17.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_19.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_25.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_26.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_28.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_34.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_35.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_37.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_43.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_44.jpg') }}">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('img/resource/reference/ref_46.jpg') }}">
                </div>
            </div>
        </div>
    </div>

    @include('web.main.map')
@endsection
