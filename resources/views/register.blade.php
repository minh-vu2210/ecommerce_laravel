@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center mt-5">
            <h2>Register</h2>
        </div>

        <div class="row justify-content-center my-5">

            <div class="col-lg-6">
               
                <form action='createAccount' method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="name">
                        <p class="text-danger">{{$errors->first('username')}}</p>


                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp"> 
                        <p class="text-danger">{{$errors->first('email')}}</p>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        <p class="text-danger">{{$errors->first('password')}}</p>

                    </div>

                    <button type="submit" class="btn btn-primary">Create Account</button>
                </form>

            </div>


        </div>
    </div>

@endsection
