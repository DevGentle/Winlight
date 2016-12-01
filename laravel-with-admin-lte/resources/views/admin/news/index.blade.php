@extends('layouts.app')

@section('htmlheader_title')
    News
@endsection

@section('contentheader_title')
    <h1>News</h1>
@endsection

@section('contentheader_description')
    News management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/news/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
