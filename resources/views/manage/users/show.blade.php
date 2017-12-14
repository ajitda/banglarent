@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="title">View Users Details</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit User</a>
            </div>
        </div>
        <div class="row">
            <hr class="m-t-0">

            <div class="col-sm-8">
                    <p for="name">Name : </p>
                    <p>{{$user->name}}</p>
                    <label for="email">Email : </label>
                    <p>{{$user->email}}</p>
            </div>
        </div>
        <hr>

    </div>
    @endsection