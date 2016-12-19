@extends('layouts.app')

@section('htmlheader_title')
    Products download catalog
@endsection

@section('contentheader_title')
    <h1>Products download catalog</h1>
@endsection

@section('contentheader_description')
    Products download catalog management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/download/winner-products/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
