@extends('layouts.app')

@section('contentheader_title')
    <h1>Posts index</h1>
@endsection

@section('main-content')
    <div class="box">
                        <div class="box-body">
                            <div class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered table-hover dataTable">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending">ID</th>
                                                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending">Image</th>
                                                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Content: activate to sort column descending">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="ex2_info" role="status" aria-live="polite">Showing 1 to 10</div>
                                    </div>
                                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                                <li class="paginate_button">1</li>
                                <li class="paginate_button">2</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul>
        @foreach($posts as $post)

            <div class="image-container">
                <img height="100" src="{{ $post->path }}" alt="">
            </div>
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                {{--<form method="post" action="/posts/{{ $post->id }}">--}}
                    {{--{{ Form::token() }}--}}
                    {{--<input type="hidden" name="_method" value="DELETE">--}}

                    {{--<input type="submit" name="submit" value="DELETE">--}}
                {{--</form>--}}
            </li>

        @endforeach
    </ul>
@endsection
