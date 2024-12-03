@extends('front.layouts.master')

@section('content')

<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ url('/payment') }}" class="text-light" style="color: white; font-size:23px;">Donate</a>
        </p>
    </div>
</div>

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                    <form action="{{ route('donation.store') }}" method="post" enctype="multipart/form-data">
                        @csrf 
                        
                        <div class="form-group">
                            <label for="lastDonationAmount">Total Donation Amount</label>
                            <input type="text" id="lastDonationAmount" name="lastDonationAmount" class="form-control"
                                   placeholder="Total Amount" value="{{ session('lastDonationAmount', old('lastDonationAmount')) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Name <span style="color: rgb(255, 255, 255);">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required value="{{ old('name') }}">
                        </div>
                    
                        <div class="form-group">
                            <label for="phone">WhatsApp Number (optional)</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your WhatsApp Number" value="{{ old('phone') }}">
                        </div>
                    
                        <div class="form-group">
                            <label for="email">Email Id (optional)</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}">
                        </div>
                    
                        <div class="form-group">
                            <label for="pan-number">PAN Number (optional)</label>
                            <input type="text" class="form-control" id="pan-number" name="pan_number" placeholder="Your PAN Number (optional)" value="{{ old('pan_number') }}">
                            <small style="color: white">To Get 80G Certificate, Please Enter Your PAN Number.</small>
                        </div>
                    
                        <div class="form-group">
                            <label for="image-upload">Upload Image <span style="color: rgb(255, 255, 255);">*</span></label>
                            <input type="file" class="form-control" id="image-upload" name="image_upload" required>
                            
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckAllow" name="allow_photo">
                                <label class="form-check-label me-2" for="flexCheckAllow">
                                    I Allow that Ashtak Foundation Can Use / Upload my photos on ashtakfoundation.com
                                </label>
                            </div>
                            
                        {{--    <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDontUse" name="dont_use_photo" checked>
                                <label class="form-check-label me-2" for="flexCheckDontUse">
                                    Don't Use / Upload my photos on ashtakfoundation.com
                                </label>
                            </div> --}}
                            
                        </div>
                    
                        <div class="form-group">
                            <label for="message">Your Message (optional)</label>
                            <textarea class="form-control" id="message" name="message">{{ old('message') }}</textarea>
                        </div>
                    
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary text-center">Donate</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>






@endsection