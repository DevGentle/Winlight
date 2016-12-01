@extends('layouts.app')

@section('htmlheader_title')
    News category
@endsection

@section('contentheader_title')
    <h1>News categories</h1>
@endsection

@section('contentheader_description')
    News categories management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/news-categories/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
