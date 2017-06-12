@extends('layouts.app')

@section('htmlheader_title')
    User
@endsection

@section('contentheader_title')
    <h1>Create users</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    
    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store']) !!}
            {{ Form::token() }}
            <div class="col-lg-5">
                <div class="margin">
                    {{ Form::label('name', 'Name') }} <span class="text-red">*</span>
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="margin">
                    {{ Form::label('email', 'Email') }} <span class="text-red">*</span>
                    {{ Form::email('email', null, ['class' => 'form-control']) }}
                </div>
                <div class="margin">
                    {{ Form::label('role_id', 'Role') }}
                    {{ Form::select('role_id',array(''=>'Choose options') + $roles, null, ['class' => 'form-control']) }}
                </div>
                <div class="margin">
                    {{ Form::label('status', 'Status') }}
                    {{ Form::select('is_enable',array(1 => 'Active', 0 => 'Not Active'), 0,['class' => 'form-control']) }}
                </div>
                <div class="margin">
                    {{ Form::label('password', 'Password') }} <span class="text-red">*</span>
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                {{ Form::reset('Reset', ['class'=>'btn btn-primary']) }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection