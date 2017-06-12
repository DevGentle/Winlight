@extends('layouts.app')

@section('htmlheader_title')
    News category
@endsection

@section('contentheader_title')
    <h1>Edit news category</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::model($newsCategories, ['method' => 'PATCH', 'action' => ['Admin\News\NewsCategoriesController@update', $newsCategories->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('sub_title', 'Sub title') }}
                {{ Form::text('sub_title', null, ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('photo_id', 'Image') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                <div class="row">
                    <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                        <table class="table table-bordered" style="background: #ffffff">
                            <tbody>
                            <tr>
                                <td><img src="{{ asset($newsCategories->photo->file) }}" width="200" height="100" alt=""></td>
                            </tr>
                            <tr>
                                <td><b>File name: </b>{{ $newsCategories->photo->file }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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