@extends('front.layouts.master')

@section('content')

<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ url('/events') }}" class="text-light" style="color: white; font-size:23px;">Events</a>
        </p>
    </div>
</div>

<section class="section-content-block mb-4">
    <div class="container">
        <div class="row section-heading-wrapper">
            <div class="col-md-12 col-sm-12 text-center">
                <h2>
                    <span>Events</span>
                </h2>
                <h4>Social Services community settlement houses provide integrated.</h4>
            </div>
            <!-- end .col-sm-10 -->
        </div>
        <!-- end .row -->

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="event-wrapper-1 ">
                    <figure class="event-img2 text-center">
                        <img src="{{ asset('public/front/images/gita-bhog-bhojan-dan-event.jpg') }}" alt="gita-bhog-bhojan-dan-event">
                        <div class="event-date text-center">
                            <i class="bi bi-calendar"></i>
                            29 Oct 2024
                        </div>
                    
                    </figure>
                    <div class="event-content">
                        <h5 class="text-center">
                            <a href="#">Gita Bhog Bhojan Dan</a>
                        </h5>
                        <p>Ashtak Foundation successfully organized "Gita Bhog Bhojan Dan" on October 29, 2024. This food distribution event provided nutritious meals and groceries to over 100 underprivileged individuals. Inspired by the Bhagavad Gita's teachings, our volunteers and community partners worked together to serve those in need.
We thank our donors and supporters for their generosity. Your kindness brought smiles and nourishment to many. This event reaffirms Ashtak Foundation's commitment to combating hunger and serving humanity.
Together, let's continue spreading love and kindness.
</p>
<p>#GitaBhogBhojanDan #AshtakFoundation #FoodForAll #ServeHumanity</p>
                        <span class="btn-read-more"><i class="bi bi-upc"></i>
                            <a href="#">Completed</a>
                        </span><br>
                        <span class="btn-read-more">
                            <a href="#">Read More &raquo;</a>
                        </span>
                    </div>
                </div>
                
            </div>
            <!-- end .col-lg-4 col-md-4 -->

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="event-wrapper-1 ">
                    <figure class="event-img2 text-center">
                        <img src="{{ asset('public/front/images/education-for-helpless-children-event.jpg') }}" alt="education-for-helpless-children-event">
                        <div class="event-date text-center">
                            <i class="bi bi-calendar"></i>
                            02 Nov 2024
                        </div>
                    </figure>
                    <div class="event-content">
                        <h5 class="
                        text-center">
                            <a href="#">Education For Helpless Children</a>
                        </h5>
                        <p>Ashtak Foundation proudly announces the successful completion of "Education for Helpless Children" on October 2, 2024. This initiative empowered 5 underprivileged children to pursue their educational dreams. </p>
                        <p>Beneficiaries:</p>
                        <ul>
                            <li>3 helpless daughters</li>
                            <li>2 helpless sons</li>
                        </ul>
                        <p>Support Provided:</p>
                        <ul>
                            <li>School fees and supplies</li>
                            <li>Educational materials and resources</li>
                            <li>Mentorship and guidance</li>
                        </ul>
                        <p>This initiative embodies Ashtak Foundation's commitment to education as a transformative force. We thank our donors, volunteers, and supporters for making this possible.</p>
                        <p>Together, let's illuminate young minds and shape brighter futures.</p>
                        <p>#EducationForAll #AshtakFoundation #EmpoweringYouth #HelpingHands</p>
                        <span class="btn-read-more"><i class="bi bi-check2-square"></i>
                            <a href="#">Completed</a>
                        </span><br>
                        <span class="btn-read-more">
                            <a href="#">Read More &raquo;</a>
                        </span>
                    </div>
                </div>
                <!-- end .event-wrapper-1 -->
            </div>
            <!-- end .col-lg-4 col-md-4 -->

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="event-wrapper-1">
                    <figure class="event-img2 text-center">
                        <img src="{{ asset('public/front/images/vastra-dan-event.jpg') }}" alt="vastra-dan-event">
                        <div class="event-date">
                            <i class="bi bi-calendar"></i>
                            25 Nov 2024
                        </div>
                    </figure>
                    <div class="event-content">
                        <h5 class="text-center">
                            <a href="#">Vastra Dan</a>
                        </h5>
                        <p>Ashtak Foundation proudly presents "Vastra Dan" on November 25, 2024. This cloth distribution event aims to provide warm winter clothing to helpless individuals, bringing comfort and dignity to those in need.</p>
                        <p>Event Details: </p>
                        <p>Date: Nov 25, 2024</p>
                        <p>Beneficiaries: Underprivileged men, women, and children</p>
                        <p>Clothing: Winter clothes</p>
                        <p>Join us in spreading warmth and kindness!</p>
                        <p>Donate: Clothes, funds, or volunteer your time</p>
                        <p>Contact: 92346 80080</p>
                        <p>Together, let's wrap the needy in warmth and love.</p>
                        <span class="btn-read-more"><i class="bi bi-upc"></i>
                            <a href="#">Upcoming Event</a>
                        </span><br>
                        <span class="btn-read-more">
                            <a href="#">Read More &raquo;</a>
                        </span>
                    </div>
                </div>
                <!-- end .event-wrapper-1 -->
            </div>
            <!-- end .col-lg-4 col-md-4 -->
        </div>
        <!-- end .row -->

        <div class="row my-2">
            <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                <a class="btn btn-load-more" href="#">- Load All Events -</a>
            </div>
        </div>
    </div>
    <!-- end .container -->
</section>

@endsection