@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="text-center mt-5">
            <h2>Login</h2>




        </div>

        <div class="row justify-content-center my-5">


            <div class="col-lg-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p>{{ $errors->first() }}</p>
                    </div>
                @endif
                <form action='login' method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>

            </div>


        </div>
    </div>




@endsection
