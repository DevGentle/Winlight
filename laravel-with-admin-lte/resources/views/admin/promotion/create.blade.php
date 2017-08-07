@extends('layouts.app')

@section('htmlheader_title')
    Promotion
@endsection

@section('contentheader_title')
    <h1>New promotion</h1>
@endsection

@section('main-content')
    @include('tinymce.textarea')
    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'Admin\Promotion\PromotionsController@store', 'files' => true]) !!}
            {{ Form::token() }}
            <div class="col-lg-12">
                <div class="margin">
                    {{ Form::label('product_id', 'เลือกผลิตภัณฑ์') }}
                    {{ Form::select('product_id', $product, null, ['class' => 'form-control' ,'placeholder' => 'Select product name']) }}
                </div>
                <div class="margin">
                    {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter promotion title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('description', 'Description') }} <span class="text-red">*</span>
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter promotion description']) }}
                </div>
                <div class="margin">
                    {{ Form::label('offer_price', 'Offer price') }} <span class="text-red">*</span>
                    {{ Form::text('offer_price', null, ['class' => 'form-control' ]) }}
                </div>
                <div class="margin">
                    {{ Form::label('start_time', 'Start time') }} <span class="text-red">*</span>
                    {{--{{ Form::('start_time', null, ['class' => 'form-control' ]) }}--}}
                    {{ Form::date('start_time', \Carbon\Carbon::now()) }}
                </div>
                <div class="margin">
                    {{ Form::label('end_time', 'End time') }} <span class="text-red">*</span>
                    {{ Form::date('end_time', \Carbon\Carbon::now()) }}
                </div>
                <div>
                    {{ Form::label('photo_id', 'Image') }}
                    {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/promotions') }}" class="btn btn-danger">Cancel</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection