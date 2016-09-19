@extends('web.layout')

@section('content')
    <div class="row index-service">
        <div class="container">
            <div class="col-md-1 col-md-offset-3">
                <img src="{{ asset('img/resource/service_icon.png') }}">
            </div>
            <div class="col-md-5">
                <div class="index-service__title">ด้านบริการ</div>
                <div class="index-service__sub-title">ให้คำปรึกษา และอื่นๆ</div>
                <div class="index-service__content">
                    <span>เราให้คำปรึกษา และให้บริการเกี่ยวกับการติดตั้ง และคำแนะนำในการใช้</span><br>
                    <span>ติดตั้งแสงสว่างให้ได้ประโยชน์ในการใช้งานสูงสุด</span><br>
                </div>
            </div>
            <div class="col-md-1">
                <button class="index-service__button" href="">learn more</button>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Test</h1>
    </div>

    @include('web.main.map')
@endsection
