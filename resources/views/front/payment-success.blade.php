
@extends('front.layouts.master')

@section('content')
<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ url('/contact') }}" class="text-light" style="color: white; font-size:23px;">Contact Us</a>
        </p>
    </div>
</div>

<section>
    <div class="container mt-5">
        <div class="row" style="margin-top: 20px;">
            <div class="col-12">
               
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ $paymentData['name'] }}
            </div>
            </div>
        </div>
        
        
    </div>
</section>

@endsection
