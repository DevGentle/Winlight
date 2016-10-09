@extends('layouts.app')

@section('htmlheader_title')
    Product sub category
@endsection

@section('contentheader_title')
    <h1>Edit product sub category</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::model($productSubCategories, ['method' => 'PATCH', 'action' => ['Admin\Product\ProductSubCategoriesController@update', $productSubCategories->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-5">
            <div class="margin">
                {{ Form::label('category_main_id', 'Main category') }}
                {{ Form::select('category_main_id', $productMainCategory, null, ['class' => 'form-control' ,'placeholder' => 'Select main category']) }}
            </div>
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('photo_id', 'Image') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
            </div>
            {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/product-sub-categories') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection