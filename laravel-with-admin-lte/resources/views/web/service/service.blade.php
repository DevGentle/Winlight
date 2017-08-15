@extends('web.layout')

@section('title')
    บริการดีไซน์ออกแบบ บริการติดตั้งระบบส่องสว่าง บริการให้คำปรึกษาระบบส่องสว่าง
@endsection

@section('seo_metadata')
    <meta name="description" content="บริการดีไซน์ออกแบบ บริการติดตั้งระบบส่องสว่าง บริการให้คำปรึกษาระบบส่องสว่าง">
    <meta name="keywords" content="บริการดีไซน์ออกแบบ, บริการติดตั้งระบบส่องสว่าง, บริการให้คำปรึกษาระบบส่องสว่าง">
@endsection

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    <div class="row service p-r-l-0">
        <div class="container service__first-header">
            <div class="col-xs-1 text-right">
                <div class="service__first-header--icon">
                    <img src="{{ asset('img/resource/reference_icon.png') }}">
                </div>
            </div>
            <div class="col-xs-11">
                <div class="service__first-header--title"><h1>ด้านบริการ</h1></div>
                <div class="service__first-header--sub-title"><h2>ให้คำปรึกษา และอื่นๆ</h2></div>
                <div class="service__first-header--description">
                    <h3>เราให้คำปรึกษา และให้บริการเกี่ยวกับการติดตั้ง และคำแนะนำในการใช้
                    ติดตั้งแสงสว่างให้ได้ประโยชน์ในการใช้งานสูงสุด</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="service__header">
        <div class="container">
            <div class="text-center">
                <div class="service__header--title">
                    บริการจากพวกเรา
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
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ url('/contact-us') }}">
                            <div class="col-xs-12 service__contact text-center">
                                <button>{{ 'ติดต่อเรา' }}</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
