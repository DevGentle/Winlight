@extends('layouts.app')

@section('contentheader_title')
    <h1>Posts create</h1>
@endsection

@section('main-content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'PostsController@store', 'files' => true]) !!}
            {{ Form::token() }}

            <div class="col-xs-5">
                <div class="margin">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('content', 'Content') }}
                    {{ Form::text('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
                </div>
            </div>

            <div class="col-xs-5">
                <div class="margin">
                    {{ Form::label('upload', 'Image') }}
                    {{ Form::file('file', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
                </div>
            </div>

            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                {{ Form::reset('Reset', ['class'=>'btn btn-primary']) }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection