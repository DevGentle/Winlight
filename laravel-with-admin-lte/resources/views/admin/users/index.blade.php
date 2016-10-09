@extends('layouts.app')

@section('htmlheader_title')
    User
@endsection

@section('contentheader_title')
    <h1>Users</h1>
@endsection

@section('main-content')
    @include('admin.validation.error')

    <div class="box">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                @if($users)
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role_id }}</td>
                            <td>
                                @if($user->is_enable)
                                    <span class="text-green">Active</span>
                                @else
                                    <span class="text-red">No Active</span>
                                @endif
                            </td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
