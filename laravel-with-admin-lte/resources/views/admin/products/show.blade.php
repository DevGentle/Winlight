@extends('layouts.app')

@section('contentheader_title')
    <h1>Posts show</h1>
@endsection

@section('main-content')

    <h1><a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></h1>

@endsection
