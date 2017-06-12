@extends('layouts.app')

@section('htmlheader_title')
    News
@endsection

@section('contentheader_title')
    <h1>Edit news</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::model($news, ['id' => 'photo-gallery', 'method' => 'PATCH', 'action' => ['Admin\News\NewsController@update', $news->id], 'files' => true]) !!}
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
                <div class="row">
                    <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                        <table class="table table-bordered" style="background: #ffffff">
                            <tbody>
                            <tr>
                                <td><img src="{{ asset($news->cover) }}" width="200" height="100" alt=""></td>
                            </tr>
                            <tr>
                                <td><b>File name: </b>{{ $news->cover }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="margin">
                {{ Form::label('file', 'Content Image') }}
                {{ Form::file('file[]', array('multiple'=>true), ['class' => 'form-control']) }}
                <div class="row">
                    @foreach($news->photos()->get() as $photo)
                        <div class="image-container col-xs-12 col-md-4" style="padding-top: 5px; padding-bottom: 5px">
                            <table class="table table-bordered" style="background: #ffffff">
                                <tbody>
                                <tr>
                                    <td><img src="{{ asset($photo->file) }}" width="200" height="100" alt=""></td>
                                </tr>
                                <tr>
                                    <td><b>File name: </b>{{ $photo->file }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" data-image-id="{{ $photo->id }}" class="delete-image btn btn-danger">
                                            <i class="fa fa-trash"></i> {{ 'Delete' }}
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
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