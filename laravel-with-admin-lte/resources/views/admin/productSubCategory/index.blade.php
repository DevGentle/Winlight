@extends('layouts.app')

@section('htmlheader_title')
    Product sub category
@endsection

@section('contentheader_title')
    <h1>Product sub categories</h1>
@endsection

@section('main-content')
    <a href= "{{ url('admin/product-sub-categories/create') }}" class="btn btn-lg inline">Create</a>
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
