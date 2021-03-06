@extends('layouts.app')

@section('htmlheader_title')
    Project reference
@endsection

@section('contentheader_title')
    <h1>New project reference</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'Admin\Reference\ReferencesController@store', 'files'=>true]) !!}
            {{ Form::token() }}
            <div class="col-xs-12">
                <div class="margin">
                    {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('cover', 'Cover Image') }} <span class="text-red">*</span>
                    {{ Form::file('cover', null, ['class' => 'form-control']) }}
                </div>
                <div class="margin">
                    {{ Form::label('file', 'Content Image') }}
                    {{ Form::file('file[]', array('multiple'=>true), ['class' => 'form-control']) }}
                </div>
                <div class="margin">
                    {{ Form::label('content', 'Content') }} <span class="text-red">*</span>
                    {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter product description']) }}
                </div>
                <div class="margin">
                    {{ Form::label('link', 'Link') }}
                    {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter your link to website']) }}
                </div>
            </div>
            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/product-main-categories') }}" class="btn btn-danger">Cancel</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection