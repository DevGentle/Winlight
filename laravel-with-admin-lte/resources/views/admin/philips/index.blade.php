@extends('layouts.app')

@section('htmlheader_title')
    Philips catalog
@endsection

@section('contentheader_title')
    <h1>Philips catalog</h1>
@endsection

@section('contentheader_description')
    Philips catalog management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/download/philips/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
