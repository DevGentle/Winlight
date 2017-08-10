@extends('layouts.app')

@section('htmlheader_title')
    Product main category
@endsection

@section('contentheader_title')
    <h1>Edit product main category</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    <div class="box-body">
        {!! Form::model($productMainCategories, ['method' => 'PATCH', 'action' => ['Admin\Product\ProductMainCategoriesController@update', $productMainCategories->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="margin">
                {{ Form::label('photo_id', 'Image') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                <div class="row">
                    <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                        <table class="table table-bordered" style="background: #ffffff">
                            <tbody>
                            @if($productMainCategories->photo)
                                <tr>
                                    <td><img src="{{ asset($productMainCategories->photo->file) }}" width="200" height="100" alt=""></td>
                                </tr>
                                <tr>
                                    <td><b>File name: </b>{{ $productMainCategories->photo->file }}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
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