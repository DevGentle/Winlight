@extends('layouts.app')

@section('htmlheader_title')
    Products download catalog
@endsection

@section('contentheader_title')
    <h1>Edit product download catalog</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::model($products, ['method' => 'PATCH', 'action' => ['Admin\download\WinnerProductsController@update', $products->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
            </div>
            <div class="margin">
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter description']) }}
            </div>
            <div class="margin">
                {{ Form::label('file', 'PDF') }}
                {{ Form::file('file', null, ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('photo_id', 'Image') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/download/winner-products') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection