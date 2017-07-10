@extends('layouts.app')

@section('htmlheader_title')
    Slideshows
@endsection

@section('contentheader_title')
    <h1>Slide shows</h1>
@endsection

@section('contentheader_description')
    Slide shows management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/slideshow/nav/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
