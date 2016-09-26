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
                        <div class="col-md-4">
                            <div class="service__circle--item">
                                <img src="{{ asset('img/resource/service_images_001.png') }}">
                            </div>
                            <div class="service__content--title">
                                <p>ให้คำแนะนำปรึกษา</p>
                            </div>
                            <div class="service__content--description">
                                <p>บริการให้คำแนะนำปรึกษาตั้งแต่เริ่มต้น จนจบโปรเจค เพื่อการใช้งานที่มีประสิทธิภาพสูงสุด</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service__circle--item">
                                <img src="{{ asset('img/resource/service_images_002.png') }}">
                            </div>
                            <div class="service__content--title">
                                <p>แก้ไขปัญหา</p>
                            </div>
                            <div class="service__content--description">
                                <p>บริการให้คำแนะนำปรึกษาตั้งแต่เริ่มต้น จนจบโปรเจค เพื่อการใช้งานที่มีประสิทธิภาพสูงสุด</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service__circle--item">
                                <img src="{{ asset('img/resource/service_images_003.png') }}">
                            </div>
                            <div class="service__content--title">
                                <p>ตรวจสอบประสิทธิภาพ</p>
                            </div>
                            <div class="service__content--description">
                                <p>บริการให้คำแนะนำปรึกษาตั้งแต่เริ่มต้น จนจบโปรเจค เพื่อการใช้งานที่มีประสิทธิภาพสูงสุด</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('web.main.map')
@endsection
