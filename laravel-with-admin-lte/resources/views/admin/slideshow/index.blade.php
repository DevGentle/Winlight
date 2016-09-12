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

@section('main-content')
    <a href="{{ url('admin/slideshows/create') }}" class="btn btn-danger">Create</a>
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
