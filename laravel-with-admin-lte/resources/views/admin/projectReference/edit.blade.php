@extends('layouts.app')

@section('htmlheader_title')
    Project reference
@endsection

@section('contentheader_title')
    <h1>Edit project reference</h1>
@endsection

@section('main-content')
    <head>
        <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste imagetools"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
                content_css: [
                    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                    '//www.tinymce.com/css/codepen.min.css'
                ]
            });
        </script>
    </head>

    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::model($references, ['method' => 'PATCH', 'action' => ['Admin\Reference\ReferencesController@update', $references->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-6">
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
            </div>
            <div class="margin">
                {{ Form::label('photo_id', 'Image') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
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