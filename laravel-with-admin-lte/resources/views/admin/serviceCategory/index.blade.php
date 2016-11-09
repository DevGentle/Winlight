@extends('layouts.app')

@section('htmlheader_title')
    Service category
@endsection

@section('contentheader_title')
    <h1>Service categories</h1>
@endsection

@section('contentheader_description')
    Service categories management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/service-categories/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
