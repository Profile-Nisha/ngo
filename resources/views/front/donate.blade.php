@extends('front.layouts.master')

@section('content')

<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ url('/donate') }}" class="text-light" style="color: white; font-size:23px;">Donate</a>
        </p>
    </div>
</div>

<section class="section-content-block section-secondary-bg" id="donate">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-7">
                <figure class="urgent-cause-image">
                    <img src="{{ asset('public/front/images/about-us.jpg') }}" alt="activity">
                </figure>
            </div>

            <div class="col-md-5">
                <div class="urgent-cause">
                    <div class="cause-content">
                        <div class="cause-text">
                            <h4>
                                <span>Donate Now</span>
                            </h4>
                            <hr>
                            <h2 class="margin-top-11 text-center">
                                <a href="#">CHOOSE AMOUNT</a>
                            </h2>

                            <form action="{{ route('donate') }}" method="post">
                                @csrf
                                <input type="hidden" id="donationType" name="donation_type" value="one-time">
                            
                                <div class="button-group">
                                    <button type="button" id="one-time" onclick="selectDonationType('one-time', this)">One Time</button>
                                <button type="button" id="monthly" onclick="selectDonationType('monthly', this)">Monthly</button>
                                </div>
                                
                                <div class="amount-selection mt-3">
                                    <button type="button" class="amount-btn" onclick="selectAmount(500)">₹500</button>
                                    <button type="button" class="amount-btn" onclick="selectAmount(1000)">₹1000</button>
                                    <button type="button" class="amount-btn" onclick="selectAmount(1500)">₹1500</button>
                                    <button type="button" class="amount-btn" onclick="selectAmount('other')">Other</button>
                                </div>
                            
                                <div class="donation-purpose mt-3">
                                    <label for="purpose" style="color:black;">Enter Amount (Rs.)</label>
                                    <input type="text" id="purposeAmount" name="amount" class="form-control" placeholder="Enter amount (Rs.)" min="0" step="0.01" required>
                                    <p>Your donations are tax exempted under 80G of the Indian Income Tax Act.</p>
                                </div>
                            
                                <button type="submit" class="continue-btn mt-3">Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection