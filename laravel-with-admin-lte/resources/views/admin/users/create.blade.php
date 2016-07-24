@extends('layouts.app')

@section('contentheader_title')
    <h1>Users create</h1>
@endsection

@section('main-content')
    {{--<div class="box-body">--}}
        {{--{!! Form::open(['method' => 'POST', 'action' => 'PostsController@store']) !!}--}}
            {{--{{ Form::token() }}--}}

            {{--<div class="col-xs-5">--}}
                {{--<div class="margin">--}}
                    {{--{{ Form::label('title', 'Title') }}--}}
                    {{--{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}--}}
                {{--</div>--}}

                {{--<div class="margin">--}}
                    {{--{{ Form::label('content', 'Content') }}--}}
                    {{--{{ Form::text('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-10 margin">--}}
                {{--{{ Form::submit('Save', ['class'=>'btn btn-primary']) }}--}}
                {{--{{ Form::reset('Reset', ['class'=>'btn btn-primary']) }}--}}
            {{--</div>--}}
        {{--{!! Form::close() !!}--}}
        {{--@if (count($errors) > 0)--}}
            {{--<div class="alert alert-danger">--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
    {{--</div>--}}
@endsection