@extends('layouts.app')

@section('htmlheader_title')
    Product sub category
@endsection

@section('contentheader_title')
    <h1>Product sub categories</h1>
@endsection

@section('contentheader_description')
    Product sub categories management system
@endsection

@section('main-content')
    <a href="{{ url('admin/product-sub-categories/create') }}" class="btn btn-danger">Create</a>
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
