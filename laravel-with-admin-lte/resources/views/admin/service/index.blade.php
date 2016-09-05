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

@section('main-content')
    <a href="{{ url('admin/services/create') }}" class="btn btn-danger">Create</a>
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
