@extends('layouts.app')

@section('htmlheader_title')
    Service category
@endsection

@section('contentheader_title')
    <h1>Edit service category</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::model($newsCategories, ['method' => 'PATCH', 'action' => ['Admin\News\NewsCategoriesController@update', $newsCategories->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('sub_title', 'Sub title') }}
                {{ Form::text('sub_title', null, ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('photo_id', 'Image') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/news-categories') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection