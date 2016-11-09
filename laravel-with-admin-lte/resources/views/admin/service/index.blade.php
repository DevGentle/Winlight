@extends('layouts.app')

@section('htmlheader_title')
    Services
@endsection

@section('contentheader_title')
    <h1>Services</h1>
@endsection

@section('contentheader_description')
    Services management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/services/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
