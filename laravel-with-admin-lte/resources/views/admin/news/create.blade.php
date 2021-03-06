@extends('layouts.app')

@section('htmlheader_title')
    News
@endsection

@section('contentheader_title')
    <h1>New news</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'Admin\News\NewsController@store', 'files'=>true]) !!}
            {{ Form::token() }}

            <div class="col-xs-12">
                <div class="margin">
                    {{ Form::label('news_category_id', 'News category') }} <span class="text-red">*</span>
                    {{ Form::select('news_category_id', $newsCategory, null, ['class' => 'form-control' ,'placeholder' => 'Select news category']) }}
                </div>
                <div class="margin">
                    {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('sub_title', 'Sub title') }}
                    {{ Form::text('sub_title', null, ['class' => 'form-control', 'placeholder' => 'Enter your sub title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('content', 'Content') }} <span class="text-red">*</span>
                    {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
                </div>
                <div class="margin">
                    {{ Form::label('link', 'Link') }}
                    {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter your link']) }}
                </div>
                <div class="margin">
                    {{ Form::label('cover', 'Cover Image') }}
                    {{ Form::file('cover', null, ['class' => 'form-control']) }}
                </div>
                <div class="margin">
                    {{ Form::label('file', 'Content Image') }}
                    {{ Form::file('file[]', array('multiple'=>true), ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/news') }}" class="btn btn-danger">Cancel</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
