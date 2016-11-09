@extends('web.layout')

@section('content')
    <div class="row service p-r-l-0">
        <div class="container service__first-header">
            <div class="col-xs-1 text-right">
                <div class="service__first-header--icon">
                    <img src="{{ asset('img/resource/reference_icon.png') }}">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="service__first-header--title">ด้านบริการ</div>
                <div class="service__first-header--sub-title">ให้คำปรึกษา และอื่นๆ</div>
                <div class="service__first-header--description">
                    <span>เราให้คำปรึกษา และให้บริการเกี่ยวกับการติดตั้ง และคำแนะนำในการใช้</span><br>
                    <span>ติดตั้งแสงสว่างให้ได้ประโยชน์ในการใช้งานสูงสุด</span><br>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center">
            <div class="service__header--title">
                Support from start to finish
            </div>
            <div class="service__header--sub-title">
                แก้ไข รวดเร็ว ทันใจ
            </div>
            <div class="service__content">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        @foreach($services as $service)
                            <div class="col-md-4">
                                <div class="service__circle--item">
                                    <img src="{{ $service->photo->file }}">
                                </div>
                                <div class="service__content--title">
                                    <p>{{ $service->title }}</p>
                                </div>
                                <div class="service__content--description">
                                    <p>{!! $service->content !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('web.main.map')
@endsection
