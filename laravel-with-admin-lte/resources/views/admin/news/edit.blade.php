@extends('layouts.app')

@section('htmlheader_title')
    Service category
@endsection

@section('contentheader_title')
    <h1>Edit service category</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::model($news, ['method' => 'PATCH', 'action' => ['Admin\News\NewsController@update', $news->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('news_category_id', 'News category') }}
                {{ Form::select('news_category_id', $newsCategory, null, ['class' => 'form-control' ,'placeholder' => 'Select news category']) }}
            </div>
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
            </div>
            <div class="margin">
                {{ Form::label('sub_title', 'Sub title') }}
                {{ Form::text('sub_title', null, ['class' => 'form-control', 'placeholder' => 'Enter your sub title']) }}
            </div>
            <div class="margin">
                {{ Form::label('content', 'Content') }}
                {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
            </div>
            <div class="margin">
                {{ Form::label('link', 'Link') }}
                {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter your link']) }}
            </div>
            <div class="margin">
                {{ Form::label('photo_id', 'Image') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/news') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection