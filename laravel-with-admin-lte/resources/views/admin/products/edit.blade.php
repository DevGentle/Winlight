@extends('layouts.app')

@section('htmlheader_title')
    Product
@endsection

@section('contentheader_title')
    <h1>Edit product</h1>
@endsection

@section('main-content')
    @include('tinymce.textarea')
    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::model($products, ['method' => 'PATCH', 'action' => ['Admin\Product\ProductsController@update', $products->id], 'files' => true]) !!}
            {{ Form::token() }}
            <div class="col-xs-12">
                <div class="margin">
                    {{ Form::label('category_main_id', 'Main category') }} <span class="text-red">*</span>
                    {{ Form::select('category_main_id', $mainCat, null, ['class' => 'form-control' ,'placeholder' => 'Select main category']) }}
                </div>
                <div class="margin">
                    {{ Form::label('category_sub_id', 'Sub category') }}
                    {{ Form::select('category_sub_id', $subCat, null, ['class' => 'form-control' ,'placeholder' => 'Select sub category']) }}
                </div>
                <div class="margin">
                    {{ Form::label('code', 'Code') }} <span class="text-red">*</span>
                    {{ Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter product code']) }}
                </div>
                <div class="margin">
                    {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter product title']) }}
                </div>
                <div>
                    {{ Form::label('file', 'PDF') }}
                    {{ Form::file('file', null, ['class' => 'form-control']) }}
                </div>
                <div>
                    {{ Form::label('photo_id', 'Image') }}
                    {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                    <div class="row">
                        <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                            <table class="table table-bordered" style="background: #ffffff">
                                <tbody>
                                <tr>
                                    <td><img src="{{ asset($products->photo->file) }}" width="200" height="100" alt=""></td>
                                </tr>
                                <tr>
                                    <td><b>File name: </b>{{ $products->photo->file }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="margin">
                    {{ Form::label('description', 'Content') }} <span class="text-red">*</span>
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter product description']) }}
                </div>
                <div class="margin">
                    {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                    <a href= "{{ url('admin/products') }}" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection