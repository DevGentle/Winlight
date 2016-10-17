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

@section('main-content')
    <a href="{{ url('admin/contacts/create') }}" class="btn btn-danger">Create</a>
    <div class="box box-default">
        {!! $grid !!}
    </div>
@endsection
