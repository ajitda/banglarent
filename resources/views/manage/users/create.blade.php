@extends('layouts.manage')
@section('content')
    <div class="flex-container">
        <div class="row">
            <div class="col-sm-10">
                <h1>Create Users</h1>
            </div>
            <div class="col-sm-2"><a href="{{route('users.create')}}" class="btn btn-primary">Create User</a></div>
        </div>
        <div class="create-user-form">
            <div class="col-sm-8">
                <form action="{{route('users.store')}}" method="POST">
                    <div class="form-group">
                        <label for="name">Name : </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password : </label>
                        <input type="text" name="password" id="password" class="form-control" v-if="!auto_password" placeholder="Manually give a password to this user">
                        <div class="checkbox m-l-20">
                            <input type="checkbox" name="auto_generate" v-model="auto_password"> Auto Generate Password
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
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
                auto_password:true
            }
        });
    </script>
@endsection