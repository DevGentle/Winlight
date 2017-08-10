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
        {!! Form::model($products, ['method' => 'PATCH', 'action' => ['Admin\Download\WinnerProductsController@update', $products->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
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
                <div class="row">
                    <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                        <table class="table table-bordered" style="background: #ffffff">
                            <tbody>
                            @if($products->photo)
                                <tr>
                                    <td><img src="{{ asset($products->photo->file) }}" width="200" height="100" alt=""></td>
                                </tr>
                                <tr>
                                    <td><b>File name: </b>{{ $products->photo->file }}</td>
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
                <a href= "{{ url('admin/download/winner-products') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection