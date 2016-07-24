@extends('layouts.app')

@section('contentheader_title')
    <h1>Product Category Main</h1>
@endsection

@section('main-content')
    {{--<div class="box">--}}
        {{--<div class="box-body">--}}
            {{--<div class="row">--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <ul>
        @foreach($productMainCategories as $productMainCategory)

            <li>
                {{ $productMainCategory->name }}
            </li>

        @endforeach
    </ul>
@endsection
