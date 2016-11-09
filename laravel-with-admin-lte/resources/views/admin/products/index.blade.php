@extends('layouts.app')

@section('htmlheader_title')
    Product
@endsection

@section('contentheader_title')
    <h1>Products</h1>
@endsection

@section('contentheader_description')
    Products management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/products/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
