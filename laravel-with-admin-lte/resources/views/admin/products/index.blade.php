@extends('layouts.app')

@section('contentheader_title')
    <h1>Products</h1>
@endsection

@section('main-content')
    <ul>
        This is madness
        @foreach($products as $product)

            <li>
                <a href="#">{{ $product->name }}</a>
            </li>

        @endforeach
    </ul>
@endsection
