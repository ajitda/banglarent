@extends('layouts.manage')
@section('content')
    <div class="flex-container">
        <div class="row">
            <div class="col-sm-10">
                <h1>Edit Users</h1>
            </div>
            <div class="col-sm-2"><a href="{{route('users.create')}}" class="btn btn-primary">Create User</a></div>
        </div>
        <div class="create-user-form">
            <div class="col-sm-8">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name : </label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="form-group" class="radio-group" >
                        <label for="password">Password : </label>

                            <input type="radio" name="password" value="keep" v-model="password_options"> Do not Change Password


                            <input type="radio" name="password" value="auto" v-model="password_options"> Auto-Generate New Password


                            <input type="radio" name="password" value="manual" v-model="password_options"> Manually Set New Password

                            <input type="password" name="password" id="password" class="form-control" v-if="!password_options =='manual'" placeholder="Manually give a password to this user">


                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
           el: '#app',
            data:{
                password_options:'keep'
            }
        });
    </script>
@endsection