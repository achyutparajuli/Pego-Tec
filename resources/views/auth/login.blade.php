@extends('web.layouts.master')

@section('section')
<div class="container">
    <div class="description">
        <h2 class="text-center">Welcome to Laravel, Please login to continue.</h2>
        <br>
    </div>
    <div class="login-form">
        <h3 class="text-center">Login Form</h3>
        <form action="{{ route('login.submit') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                <p class="text-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </p>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @if ($errors->has('password'))
                <p class="text-danger">
                    <strong>{{ $errors->first('password') }}</strong>
                </p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</div>
@endsection