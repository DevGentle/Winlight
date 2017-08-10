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
        {!! Form::model($philipsProduct, ['method' => 'PATCH', 'action' => ['Admin\Product\PhilipsProductsController@update', $philipsProduct->id], 'files' => true]) !!}
            {{ Form::token() }}
            <div class="col-lg-12">
                <div class="margin">
                    {{ Form::label('code', 'Code') }}
                    {{ Form::text('code', null, ['class' => 'form-control' ,'placeholder' => 'Enter product code']) }}
                </div>
                <div class="margin">
                    {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter product title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('description', 'Description') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter promotion description']) }}
                </div>
                <div class="margin">
                    {{ Form::label('price', 'Offer price') }}
                    {{ Form::text('price', null, ['class' => 'form-control' ]) }}
                </div>
                <div>
                    {{ Form::label('photo_id', 'Image') }}
                    {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                    <div class="row">
                        <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                            <table class="table table-bordered" style="background: #ffffff">
                                <tbody>
                                @if($philipsProduct->photo)
                                    <tr>
                                        <td><img src="{{ asset($philipsProduct->photo->file) }}" width="200" height="100" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td><b>File name: </b>{{ $philipsProduct->photo->file }}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="margin">
                    {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                    <a href= "{{ url('admin/philips-product') }}" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection