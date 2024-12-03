
@extends('front.layouts.master')

@section('content')
<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ route('refundpolicy') }}" class="text-light" style="color: white; font-size:23px;">Refund Policy</a>
        </p>
    </div>
</div>

<div class="container">
    
    <h4 class="text-center mt-2">Updated at Nov 5th, 2024</h4>
    <p>Thank you for supporting Ashtak Foundation through your generous donations. Your contribution helps us make a positive impact on the lives of those in need. Please review the following refund policy regarding donations made to Ashtak Foundation:</p>

    <h4><strong>1.Donations Made:</strong></h4>
    <p>All donations made to Ashtak Foundation through our website https://ashtakfoundation.com/ are considered final and non-refundable. Once a donation is processed, it cannot be refunded, except in exceptional circumstances where an error has occurred in the donation process.</p>

   <h4><strong>2.Exceptional Circumstances:</strong></h4>
    <p>If you believe there has been an error in processing your donation or if you have any concerns regarding your donation, please do not hesitate to contact us immediately. We will review your case promptly and work to resolve any issues to the best of our ability.</p>
    

   
   <h4><strong>Contact Us</strong></h4>
    <p>If you have any questions, concerns, or require assistance regarding your donation or our refund policy, please feel free to reach out to us using any of the following methods:</p>
    <address>
         <ul >
            <li><span style="color:brown;">Email :</span> <a href="mailto:sahayata@ashtakfoundation.in">sahayata@ashtakfoundation.in</a></li>
            <li><span style="color:brown;">Phone Number :</span> <a href="tel:+919234680080">9234680080</a></li>
            <li><span style="color:brown;">Address :</span> 402, Barwadih Purani Basti, Khura Road, Barwadih, Latehar - 822111, Jharkhand</li>
        </ul>
    </address>
    
    <p>Our team is dedicated to providing assistance and addressing any inquiries you may have regarding your donations or our organization's activities.</p>

<p><strong>Thank you for your understanding and continued support of Ashtak Foundation's mission.</strong></p>
    
</div>

@endsection