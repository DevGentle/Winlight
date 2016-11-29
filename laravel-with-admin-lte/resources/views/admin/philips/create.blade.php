@extends('layouts.app')

@section('htmlheader_title')
    Philips catalog
@endsection

@section('contentheader_title')
    <h1>New philips catalog</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'Admin\download\PhilipsController@store', 'files'=>true]) !!}
            {{ Form::token() }}
            <div class="col-xs-12">
                <div class="margin">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('description', 'Description') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter description']) }}
                </div>
                <div class="margin">
                    {{ Form::label('file', 'PDF') }}
                    {{ Form::file('file', null, ['class' => 'form-control']) }}
                </div>
                <div class="margin">
                    {{ Form::label('photo_id', 'Image') }}
                    {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/download/philips') }}" class="btn btn-danger">Cancel</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection