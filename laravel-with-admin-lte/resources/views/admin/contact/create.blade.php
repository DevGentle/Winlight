@extends('layouts.app')

@section('htmlheader_title')
    Contacts
@endsection

@section('contentheader_title')
    <h1>New contact</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'Admin\Contact\ContactsController@store']) !!}
            {{ Form::token() }}

            <div class="col-xs-12">
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
                    {{ Form::label('fax_number', 'Fax number') }}
                    {{ Form::text('fax_number', null, ['class' => 'form-control', 'placeholder' => 'Enter fax number']) }}
                </div>
                <div class="margin">
                    {{ Form::label('link', 'Link') }}
                    {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter reference link']) }}
                </div>
            </div>

            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/contacts') }}" class="btn btn-danger">Cancel</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection