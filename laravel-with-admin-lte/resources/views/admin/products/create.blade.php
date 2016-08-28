@extends('layouts.app')

@section('htmlheader_title')
    Product
@endsection

@section('contentheader_title')
    <h1>New product</h1>
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
    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'Admin\Product\ProductsController@store']) !!}
            {{ Form::token() }}
            <div class="col-lg-6">
                <div class="margin">
                    {{ Form::label('mainCategory', 'Main category') }}
                    {{ Form::select('category_main_id', $testing, null, ['class' => 'form-control' ,'placeholder' => 'Select main category']) }}
                </div>
                <div class="margin">
                    {{ Form::label('subCategory', 'Sub category') }}
                    {{ Form::select('category_sub_id', $testing, null, ['class' => 'form-control' ,'placeholder' => 'Select sub category']) }}
                </div>
                <div class="margin">
                    {{ Form::label('code', 'Code') }}
                    {{ Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter product code']) }}
                </div>
                <div class="margin">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter product title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('content', 'Content') }}
                    {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter product description']) }}
                </div>
            </div>
            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/products') }}" class="btn btn-danger">Cancel</a>
            </div>
        {!! Form::close() !!}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection