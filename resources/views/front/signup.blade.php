@extends('front.layouts.master')

@section('content')

<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ url('/signup') }}" class="text-light" style="color: white; font-size:23px;">Sign Up</a>
        </p>
    </div>
</div>

<div class="signup-container">
    <h3 class="signup-header">Sign Up</h3>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="contact">Email Address or Phone Number</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your email or phone number" required>
            <small class="form-text text-muted">
                Please enter a valid email address or a phone number.
            </small>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Confirm your password" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-custom btn-block text-center">Register</button>
        </div>
        
        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ url('/login1') }}">Login here</a></p>
        </div>
    </form>
</div>


@endsection

