@extends('web.layout')

@section('content')
    <div class="row index-reference">
        <div class="container">
            <div class="col-md-1 col-md-offset-3">
                <img src="{{ asset('img/resource/reference_icon.png') }}">
            </div>
            <div class="col-md-5">
                <div class="index-reference__title">ตัวอย่างผลงาน</div>
                <div class="index-reference__sub-title">โครงการ</div>
                <div class="index-reference__content">
                    <span>ที่ไว้วางใจใช้บริการจากเรา</span><br>
                </div>
            </div>
            <div class="col-md-1">
                <button class="index-reference__button" href="">learn more</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="reference text-center">
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
