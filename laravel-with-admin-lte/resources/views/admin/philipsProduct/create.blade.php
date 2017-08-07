@extends('layouts.app')

@section('htmlheader_title')
    Philips Product
@endsection

@section('contentheader_title')
    <h1>New philips product</h1>
@endsection

@section('main-content')
    @include('tinymce.textarea')
    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'Admin\Product\PhilipsProductsController@store', 'files' => true]) !!}
            {{ Form::token() }}
            <div class="col-lg-12">
                <div class="margin">
                    {{ Form::label('code', 'Code') }} <span class="text-red">*</span>
                    {{ Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter product code']) }}
                </div>
                <div class="margin">
                    {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter product title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('description', 'Description') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter promotion description']) }}
                </div>
                <div class="margin">
                    {{ Form::label('price', 'Price') }} <span class="text-red">*</span>
                    {{ Form::text('price', null, ['class' => 'form-control' ]) }}
                </div>
                <div>
                    {{ Form::label('photo_id', 'Image') }}
                    {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/philips-product') }}" class="btn btn-danger">Cancel</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection