@extends('layouts.app')

@section('htmlheader_title')
    Service category
@endsection

@section('contentheader_title')
    <h1>Edit service category</h1>
@endsection

@section('main-content')
    <div class="box-body">
        {!! Form::model($serviceCategories, ['method' => 'PATCH', 'action' => ['Admin\Service\ServiceCategoriesController@update', $serviceCategories->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-6">
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('image_id', 'Image') }}
                {{ Form::file('image_id', null, ['class' => 'form-control']) }}
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/service-categories') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection