@extends('front.layouts.master')

@section('content')

<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ url('/gallery') }}" class="text-light" style="color: white; font-size:23px;">Gallery</a>
        </p>
    </div>
</div>

<section class="section-content-block section-secondary-bg">
    <div class="container">
        <div class="row section-heading-wrapper wow fadeIn">
            <div class="col-md-12 col-sm-12 text-center">
                <h2>
                    <span>Photo Archives</span>
                </h2>
                <h4>"Together, we can transform lives and create a brighter future for those in need."</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row filterable-gallery">
            <div class="col-md-12">
                <div class="filter-items">
                    <button class="btn btn-default filter-button active" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Video</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Health</button>
                    <button class="btn btn-default filter-button" data-filter="spray">Education</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Medical</button>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter hdpe">
                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('public/front/images/gallery_1.jpg') }}">
                    <figure class="gallery-img">
                        <img src="{{ asset('public/front/images/gallery_1.jpg') }}" alt="gallery image">
                    </figure>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter sprinkle">
                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('public/front/images/gallery_2.jpg') }}">
                    <figure class="gallery-img">
                        <img src="{{ asset('public/front/images/gallery_2.jpg') }}" alt="gallery image">
                    </figure>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter hdpe">
                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('public/front/images/gallery_3.jpg') }}">
                    <figure class="gallery-img">
                        <img src="{{ asset('public/front/images/gallery_3.jpg') }}" alt="gallery image">
                    </figure>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter spray">
                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('public/front/images/gallery_4.jpg') }}">
                    <figure class="gallery-img">
                        <img src="{{ asset('public/front/images/gallery_4.jpg') }}" alt="gallery image">
                    </figure>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter irrigation">
                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('public/front/images/gallery_5.jpg') }}">
                    <figure class="gallery-img">
                        <img src="{{ asset('public/front/images/gallery_5.jpg') }}" alt="gallery image">
                    </figure>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter sprinkle">
                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('public/front/images/gallery_6.jpg') }}">
                    <figure class="gallery-img">
                        <img src="{{ asset('public/front/images/gallery_6.jpg') }}" alt="gallery image">
                    </figure>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter hdpe">
                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('public/front/images/gallery_8.jpg') }}">
                    <figure class="gallery-img">
                        <img src="{{ asset('public/front/images/gallery_8.jpg') }}" alt="gallery image">
                    </figure>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter irrigation">
                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('public/front/images/gallery_7.jpg') }}">
                    <figure class="gallery-img">
                        <img src="{{ asset('public/front/images/gallery_7.jpg') }}" alt="gallery image">
                    </figure>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
