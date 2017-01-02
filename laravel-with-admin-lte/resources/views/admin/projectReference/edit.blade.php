@extends('layouts.app')

@section('htmlheader_title')
    Project reference
@endsection

@section('contentheader_title')
    <h1>Edit project reference</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::model($references, ['method' => 'PATCH', 'action' => ['Admin\Reference\ReferencesController@update', $references->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
            </div>
            <div class="margin">
                {{ Form::label('cover', 'Cover Image') }}
                {{ Form::file('cover', null, ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('file', 'Content Image') }}
                {{ Form::file('file[]', array('multiple'=>true), ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('content', 'Content') }}
                {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter product description']) }}
            </div>
            <div class="margin">
                {{ Form::label('link', 'Link') }}
                {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter your link to website']) }}
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/product-main-categories') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection