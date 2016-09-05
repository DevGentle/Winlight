@extends('layouts.app')

@section('htmlheader_title')
    Project reference
@endsection

@section('contentheader_title')
    <h1>Project references</h1>
@endsection

@section('contentheader_description')
    Project references management system
@endsection

@section('main-content')
    <a href="{{ url('admin/references/create') }}" class="btn btn-danger">Create</a>
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
