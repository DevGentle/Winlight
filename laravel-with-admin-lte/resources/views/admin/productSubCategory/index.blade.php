@extends('layouts.app')

@section('contentheader_title')
    <h1>Product Category Sub</h1>
@endsection

@section('main-content')
    <ul>
        @foreach($productSubCategories as $productSubCategory)

            <li>
                <a href="#">{{ $productSubCategories->name }}</a>
            </li>

        @endforeach
    </ul>
@endsection
