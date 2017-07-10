@extends('layouts.app')

@section('htmlheader_title')
    Philips Product
@endsection

@section('contentheader_title')
    <h1>Philips Products</h1>
@endsection

@section('contentheader_description')
    Philips product management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/philips-product/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
