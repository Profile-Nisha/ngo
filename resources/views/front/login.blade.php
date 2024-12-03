
@extends('front.layouts.master')

@section('content')
<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ url('/login') }}" class="text-light" style="color: white; font-size:23px;">Login</a>
        </p>
    </div>
</div>

<div class="login-container mb-4">
    <h3 class="login-header">Login</h3>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="contact">Email or Mobile Number</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your email or mobile number" required>
            <small class="form-text text-muted">
                Please enter a valid email address or a mobile number.
            </small>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="text-center justify-content-center">
            <button type="submit" class="btn btn-custom btn-block text-center">Login</button>
        </div>
        <div class="text-center mt-3">
            <a href="">Forgot your password?</a> / 
            <a href="{{ route('signup') }}">Sign Up</a>
        </div>
    </form>
</div>


@endsection