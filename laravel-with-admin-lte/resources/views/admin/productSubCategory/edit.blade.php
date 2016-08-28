@extends('layouts.app')

@section('htmlheader_title')
    Product sub category
@endsection

@section('contentheader_title')
    <h1>Posts edit</h1>
@endsection

@section('main-content')
    <div class="box-body">
        {{--{{ Form::model($posts, array('route' => ['posts.create', $posts->id], 'method' => 'post'))}}--}}
        {{--{{ Form::label('Title', null, ['class' => 'control-label']) }}--}}
        {{--{{ Form::close }}--}}

        {{--{{ Form::token() }}--}}


        {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}
        {{ Form::token() }}
        <div class="col-xs-5">
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>

            <div class="margin">
                {{ Form::label('content', 'Content') }}
                {{ Form::text('content', null, ['class' => 'form-control']) }}
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
            </div>
        {!! Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) !!}
            <div class="margin">
                {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
            </div>
        </div>
        {!! Form::close() !!}

            {{--<div class="col-xs-10 margin">--}}
                {{--{{ Form::submit('Update', ['class'=>'btn btn-primary']) }}--}}
                {{--{{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}--}}
            {{--</div>--}}
        {!! Form::close() !!}
    </div>
@endsection