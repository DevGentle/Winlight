@extends('layouts.app')

@section('htmlheader_title')
    Product main category
@endsection

@section('contentheader_title')
    <h1>Edit product main category</h1>
@endsection

@section('main-content')
    <div class="box-body">
        {!! Form::model($productMainCategories, ['method' => 'PATCH', 'action' => ['Admin\Product\ProductMainCategoriesController@update', $productMainCategories->id]]) !!}
        {{ Form::token() }}
        <div class="col-xs-5">
            <div class="margin">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/product-main-categories') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection