@extends('layouts.app')

@section('htmlheader_title')
    Slide shows
@endsection

@section('contentheader_title')
    <h1>New slide show</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'Admin\Slideshow\SlideshowsController@store', 'files'=>true]) !!}
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
                </div>
            </div>

            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/slideshow/nav') }}" class="btn btn-danger">Cancel</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection