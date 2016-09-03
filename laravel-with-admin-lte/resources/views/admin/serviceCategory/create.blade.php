@extends('layouts.app')

@section('htmlheader_title')
    Service category
@endsection

@section('contentheader_title')
    <h1>New service category</h1>
@endsection

@section('main-content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="box-body">
        {!! Form::open(['method' => 'POST', 'action' => 'Admin\Service\ServiceCategoriesController@store', 'files'=>true]) !!}
            {{ Form::token() }}

            <div class="col-xs-6">
                <div class="margin">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('image_id', 'Image') }}
                    {{ Form::file('image_id', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="col-xs-10 margin">
                {{ Form::submit('Save', ['class'=>'btn btn-primary']) }}
                <a href= "{{ url('admin/service-categories') }}" class="btn btn-danger">Cancel</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection