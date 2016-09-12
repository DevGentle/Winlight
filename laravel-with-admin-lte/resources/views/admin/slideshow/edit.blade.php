@extends('layouts.app')

@section('htmlheader_title')
    Slide shows
@endsection

@section('contentheader_title')
    <h1>Edit slide show</h1>
@endsection

@section('main-content')
    <div class="box-body">
        {!! Form::model($slide, ['method' => 'PATCH', 'action' => ['Admin\Slideshow\SlideshowsController@update', $slide->id], 'files' => true]) !!}
        {{ Form::token() }}
        <div class="col-xs-6">
            <div class="col-xs-6">
                <div class="margin">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter image title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('sub_title', 'Sub title') }}
                    {{ Form::text('sub_title', null, ['class' => 'form-control', 'placeholder' => 'Enter image sub title']) }}
                </div>
                <div>
                    {{ Form::label('image_id', 'Image') }}
                    {{ Form::file('image_id', null, ['class' => 'form-control']) }}
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