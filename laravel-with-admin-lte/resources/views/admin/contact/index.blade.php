@extends('layouts.app')

@section('htmlheader_title')
    Contacts
@endsection

@section('contentheader_title')
    <h1>contacts</h1>
@endsection

@section('contentheader_description')
    Contacts management system
@endsection

@section('button_crud')
    <a href="{{ url('admin/contacts/create') }}" class="btn btn-danger">Create</a>
@endsection

@section('main-content')
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
