@extends('layouts.app')

@section('htmlheader_title')
    Project reference
@endsection

@section('contentheader_title')
    <h1>Edit project reference</h1>
@endsection

@section('main-content')

    @include('admin.validation.error')
    @include('tinymce.textarea')

    <div class="box-body">
        {!! Form::model($references, ['id' => 'photo-gallery' ,'method' => 'PATCH', 'action' => ['Admin\Reference\ReferencesController@update', $references->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
            </div>
            <div class="margin">
                {{ Form::label('content', 'Content') }} <span class="text-red">*</span>
                {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter product description']) }}
            </div>
            <div class="margin">
                {{ Form::label('link', 'Link') }}
                {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter your link to website']) }}
            </div>
            <div class="margin">
                {{ Form::label('cover', 'Cover Image') }} <span class="text-red">*</span>
                {{ Form::file('cover', null, ['class' => 'form-control']) }}
                <div class="row">
                    <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                        <table class="table table-bordered" style="background: #ffffff">
                            <tbody>
                            @if($references->cover)
                                <tr>
                                    <td><img src="{{ asset($references->cover) }}" width="200" height="100" alt=""></td>
                                </tr>
                                <tr>
                                    <td><b>File name: </b>{{ $references->cover }}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="margin">
                {{ Form::label('file', 'Content Image') }}
                {{ Form::file('file[]', array('multiple'=>true), ['class' => 'form-control']) }}
                <div class="row">
                    @foreach($references->photos()->get() as $reference)
                        <div class="image-container col-xs-12 col-md-4" style="padding-top: 5px; padding-bottom: 5px">
                            <table class="table table-bordered" style="background: #ffffff">
                                <tbody>
                                @if($reference->file)
                                    <tr>
                                        <td><img src="{{ asset($reference->file) }}" width="200" height="100" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td><b>File name: </b>{{ $reference->file }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" data-image-id="{{ $reference->id }}" class="delete-image btn btn-danger">
                                                <i class="fa fa-trash"></i> {{ 'Delete' }}
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/references') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection