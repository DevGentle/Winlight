@extends('web.layout')

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    <style>
        .form-margin {
            margin-bottom: 10px;
        }
        .button-margin-right {
            margin-right: 10px;
        }
    </style>
    <div class="contact-bg">
        <div class="container">
            <div class="contact-index">
                <div class="row">
                    <div class="col-xs-3 contact-index__header-left">ติดต่อ/สอบถาม</div>
                    <div class="col-xs-9 contact-index__header-right">
                        <div class="contact-index__header-right--text">
                            <span>{{ "Tel. 0-2415-7576-7" }}</span><br>
                            <span>{{ "Fax. 0-2415-7578" }}</span><br>
                            <span>{{ "sale_wlc@winnerlight.co.th" }}</span><br>
                            <span>{{ "Line. qzh9268t" }}</span>
                        </div>
                        <img src="{{ asset('img/resource/winner_line.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    @include('admin.validation.error')
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            <span class="glyphicon glyphicon-ok">&nbsp;</span>
                            <strong>Success!</strong> {!! session('success') !!}
                        </div>
                    @endif
                    <div class="col-xs-4 contact-index__content-form">
                        {!! Form::open(['method' => 'POST', 'action' => 'Web\ContactsController@postContact']) !!}
                        {{ Form::token() }}

                        <div class="col-xs-12">
                            <div class="form-margin">
                                {{ Form::label('email', 'อีเมลล์') }}
                                {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => '']) }}
                            </div>
                            <div class="form-margin">
                                {{ Form::label('subject', 'เรื่องที่ต้องการติดต่อ') }}
                                {{ Form::text('subject', null, ['class' => 'form-control', 'placeholder' => '']) }}
                            </div>
                            <div class="form-margin">
                                {{ Form::label('phone_number', 'เบอร์โทรศัพท์') }}
                                {{ Form::tel('phone_number', null, ['class' => 'form-control', 'placeholder' => '']) }}
                            </div>
                            <div class="form-margin">
                                {{ Form::label('description', 'ข้อความ') }}
                                {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => '']) }}
                            </div>
                        </div>

                        <div class="col-xs-10 margin">
                            {{ Form::submit('Save', ['class'=>'btn btn-success button-margin-right']) }}
                            {{ Form::reset('Cancel', ['class'=>'btn btn-default']) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-xs-8 contact-index__content-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15507.635733924508!2d100.40331352490985!3d13.663301097015403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bd40215b0a57%3A0x35eeac4bf5f69c5!2sWinnerlight+Corporation!5e0!3m2!1sth!2sth!4v1494421424729" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
