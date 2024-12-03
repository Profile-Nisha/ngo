
@extends('front.layouts.master')

@section('content')
<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ url('/about') }}" class="text-light" style="color: white; font-size:23px;">Our Vision</a>
        </p>
    </div>
</div>

<section class="section-content-block">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div style="max-width: 300px; margin: auto; border: 2px solid #e93307; border-radius: 8px">
                    <img src="{{ asset('public/front/images/placeholder.png') }}" class="img-fluid" alt="image" style="border-radius: 8px;">
                </div>
                <div>
                    <h4 class="text-center" style="margin: 0px 0px">Rudra Kumar Mishra</h4>
                    <p class="text-center" style="margin: 0px 0px"><strong>CEO & Director - Ashtak Foundation</strong></p>
                    <p class="text-center" style="margin: 0px 0px"><strong>Email - sahayata@ashtakfoundation.in</strong></p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body" style="padding: 10px 10px;">
                        <p>
                            Our journey began with a simple yet profound realization: that hunger, poverty, and suffering know no boundaries. 
                            We saw families living on the fringes, struggling to make ends meet, and children with dreams but no opportunities. 
                            We saw animals in distress, neglected and forgotten.
                        </p>
                        <p>
                            This sparked a sense of purpose within us – to serve, to care, and to make a difference. Ashtak Foundation was born,
                            driven by an unwavering commitment to provide sustenance, education, healthcare, and dignity to those who need it most.
                        </p>
                        <p>
                            Food, clothing, and medicine are fundamental rights, not privileges. Yet, countless individuals go without these basic necessities. We strive to change this narrative.
                        </p>
                        <p>
                            Our food distribution programs aim to nourish bodies and souls. We provide nutritious meals, groceries, and essentials to families, children, and the elderly, ensuring no one goes hungry.
                        </p>
                        <p>
                            Clothing is more than just a basic need; it's dignity. We collect, sort, and distribute clothing to those who cannot afford it, restoring self-worth and confidence.
                        </p>
                        <p>
                            Healthcare is a luxury for many. Our medical initiatives bring quality healthcare services, medicines, and treatments to marginalized communities, empowering them to live healthier lives.
                        </p>
                        <p>
                            Education is the key to breaking cycles of poverty. We establish learning centers, provide scholarships, and support educational initiatives, focusing on girls and women, who are often denied these opportunities.
                        </p>
                        <p>
                            Gauseva, or cow protection and welfare, is integral to our mission. We recognize the sacred place animals hold in our world and work tirelessly to:
                        </p>
                        <p>
                            Rescue and rehabilitate distressed animals
                        </p>
                        <p>
                            Provide shelter, nutrition, and medical care
                        </p>
                        <p>
                           Promote sustainable, cruelty-free practices 
                        </p>
                        <p>
                            Educate communities about animal welfare and compassion
                        </p>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>


@endsection