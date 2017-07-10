@extends('layouts.app')

@section('htmlheader_title')
    Promotions
@endsection

@section('contentheader_title')
    <h1>Promotions</h1>
@endsection

@section('contentheader_description')
    Prmotions management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/promotions/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
