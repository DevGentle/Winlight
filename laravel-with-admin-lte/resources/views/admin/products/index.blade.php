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

@section('main-content')
    <a class="btn btn-danger" href="{{ url('admin/products/create') }}">Create</a>
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
