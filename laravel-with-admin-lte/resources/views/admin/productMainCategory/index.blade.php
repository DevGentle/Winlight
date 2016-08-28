@extends('layouts.app')

@section('htmlheader_title')
    productMainCategory main category
@endsection

@section('contentheader_title')
    <h1>Product main categories</h1>
@endsection

@section('main-content')
    <a href= "{{ url('admin/product-main-categories/create') }}" class="btn btn-lg inline">Create</a>
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
