
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
                @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{Session::get('success')}}</strong>
            </div>
        @endif
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-7">
                <div class="contact-content">
                    <h4>Contact Us</h4>
                    <p><i class="bi bi-telephone"></i> +91 9234680080</p>
                    <p><i class="bi bi-envelope"></i> sahayata@ashtakfoundation.in</p>
                    <p><i class="bi bi-geo-alt"></i> 402, Barwadih Purani Basti Khura Road, Latehar, Jharkhand, 822111</p>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.826106219091!2d84.13114958130951!3d23.860307929377957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398b852386e720b7%3A0x5afb946cce2b923b!2sAshtak%20Foundation!5e0!3m2!1sen!2sin!4v1729937092989!5m2!1sen!2sin" width="90%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-form">
                    <h4>Send Your Question or Suggestion</h4>
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf <!-- Include CSRF token for security -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="number">Mobile Number</label>
                            <input type="number" class="form-control" id="number" name="phone" placeholder="Your Mobile Number" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write Your Question or Suggestion" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary text-center">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
