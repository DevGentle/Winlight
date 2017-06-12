@extends('layouts.app')

@section('htmlheader_title')
    Services
@endsection

@section('contentheader_title')
    <h1>Edit service</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::model($services, ['method' => 'PATCH', 'action' => ['Admin\Service\ServicesController@update', $services->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('service_category_id', 'Service category') }} <span class="text-red">*</span>
                {{ Form::select('service_category_id', $serviceCategory, null, ['class' => 'form-control' ,'placeholder' => 'Select sub category']) }}
            </div>
            <div class="margin">
                {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter product title']) }}
            </div>
            <div>
                {{ Form::label('photo_id', 'Image') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                <div class="row">
                    <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                        <table class="table table-bordered" style="background: #ffffff">
                            <tbody>
                            <tr>
                                <td><img src="{{ asset($services->photo->file) }}" width="200" height="100" alt=""></td>
                            </tr>
                            <tr>
                                <td><b>File name: </b>{{ $services->photo->file }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="margin">
                {{ Form::label('content', 'Content') }} <span class="text-red">*</span>
                {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter product description']) }}
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/services') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection