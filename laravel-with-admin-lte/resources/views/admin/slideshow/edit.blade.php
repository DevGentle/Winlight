@extends('layouts.app')

@section('htmlheader_title')
    Slide shows
@endsection

@section('contentheader_title')
    <h1>Edit slide show</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::model($slide, ['method' => 'PATCH', 'action' => ['Admin\Slideshow\SlideshowsController@update', $slide->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-12">
            <div class="margin">
                {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter image title']) }}
            </div>
            <div class="margin">
                {{ Form::label('sub_title', 'Sub title') }}
                {{ Form::text('sub_title', null, ['class' => 'form-control', 'placeholder' => 'Enter image sub title']) }}
            </div>
            <div>
                {{ Form::label('photo_id', 'Image') }}
                {{ Form::file('photo_id', null, ['class' => 'form-control']) }}
                <div class="row">
                    <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                        <table class="table table-bordered" style="background: #ffffff">
                            <tbody>
                            <tr>
                                <td><img src="{{ asset($slide->photo->file) }}" width="200" height="100" alt=""></td>
                            </tr>
                            <tr>
                                <td><b>File name: </b>{{ $slide->photo->file }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
            <div class="margin">
                {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/slideshows') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection