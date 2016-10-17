@extends('layouts.app')

@section('htmlheader_title')
    Contacts
@endsection

@section('contentheader_title')
    <h1>Edit contact</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')

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
        {!! Form::model($contacts, ['method' => 'PATCH', 'action' => ['Admin\Contact\ContactsController@update', $contacts->id]]) !!}
        {{ Form::token() }}
        <div class="col-xs-6">
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter contact name']) }}
            </div>
            <div class="margin">
                {{ Form::label('address', 'Address') }}
                {{ Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Enter contact address']) }}
            </div>
            <div class="margin">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter email']) }}
            </div>
            <div class="margin">
                {{ Form::label('phone_number', 'Phone number') }}
                {{ Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => 'Enter phone number']) }}
            </div>
            <div class="margin">
                {{ Form::label('fax_number', 'Email') }}
                {{ Form::text('fax_number', null, ['class' => 'form-control', 'placeholder' => 'Enter fax number']) }}
            </div>
            <div class="margin">
                {{ Form::label('link', 'Link') }}
                {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter reference link']) }}
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/contacts') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection