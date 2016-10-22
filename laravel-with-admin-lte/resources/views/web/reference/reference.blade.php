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
                @foreach($references as $reference)
                    <div class="col-md-4 col-sm-6">
                        <div class="reference__content--item">
                            <img src="{{ asset($reference->photo->file) }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('web.main.map')
@endsection
