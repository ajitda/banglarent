@extends('layouts.manage')
@section('content')
    <div class="flex-container">
        <div class="row">
            <div class="col-sm-10">
                <h1>Manage Users</h1>
            </div>
            <div class="col-sm-2"><a href="{{route('users.create')}}" class="btn btn-primary">Create User</a></div>
        </div>
        <hr>
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->toFormattedDateString()}}</td>
                            <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-warning btn-sm">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
    @endsection