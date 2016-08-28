@extends('layouts.app')

@section('htmlheader_title')
    Product sub category
@endsection

@section('contentheader_title')
    <h1>Product sub categories</h1>
@endsection

@section('main-content')
    <div class="box">
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>ProductSubCategory</th>
                <th>Created at</th>
            </tr>
            </thead>
            <tbody>
            @if($productSubCategories)
                @foreach($productSubCategories as $productSubCategory)
                    <tr>
                        <td class="text-center">{{ $productSubCategory->id }}</td>
                        <td>{{ $productSubCategory->image }}</td>
                        <td>{{ $productSubCategory->title }}</td>
                        <td>{{ $productSubCategory->category_main_id }}</td>
                        <td>{{ $productSubCategory->created_at }}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <div class="pull-right margin">
            {{ $productSubCategories->links() }}
        </div>
    </div>
@endsection
