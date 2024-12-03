@extends('front.layouts.master')

@section('content')

<style>
  /* Style the dots */
.owl-dots {
  position: absolute;
  bottom: 0px;
  width: 100%;
  text-align: center;
}
.owl-dot {
  display: inline-block;
  width: 12px;
  height: 12px;
  margin: 0 5px;
  background: #ccc;
  border-radius: 50%;
  cursor: pointer;
  transition: background 0.3s;
}
.owl-dot.active {
  background: #000;
}

</style>
<section class="mt-2">
  <div class="slider-container owl-carousel" data-carousel="1" data-autoplay="true" data-autoplaytimeout="3000" data-items="1" data-dots="true">
    <div class="container-fluid">
      <div class="row section-banner" data-bg_img="{{asset('public/front/images/bannerslider.png')}}" data-gardient="true" data-bg_color="#000000" data-bg_opacity="0.1" data-bg_color_2="#000000" data-bg_opacity_2="0.7">
        <div class="col-md-12 col-sm-12">
          <div class="banner-content wow fadeInUp">
            <h2 class="mt-3">
              YOUR
              <span>SMALL</span>
              <br>DONATION CAN
              <br>BRING
              <span>HUGE</span>
              SMILE
            </h2>
            <h3>
              Ashtak Foundation, one of the leading NGOs working in PAN India.
              <br>
              We implement various projects focused on Poverty, Education, Health, Empowerment, and Environment.
            </h3>
            <div class="slider-button">
              <a href="#donate" class="btn btn-custom">Donate Now</a>
              <a href="{{route('join')}}" class="btn btn-custom-inverse">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row section-banner" data-bg_img="{{asset('public/front/images/bannerslider.png')}}" data-gardient="true" data-bg_color="#000000" data-bg_opacity="0.1" data-bg_color_2="#000000" data-bg_opacity_2="0.7">
        <div class="col-md-12 col-sm-12">
          <div class="banner-content wow fadeInUp">
            <h2 class="mt-3">
              YOUR
              <span>SMALL</span>
              <br>DONATION CAN
              <br>BRING
              <span>HUGE</span>
              SMILE
            </h2>
            <h3>
              Ashtak Foundation, one of the leading NGOs working in PAN India.
              <br>
              We implement various projects focused on Poverty, Education, Health, Empowerment, and Environment.
            </h3>
            <div class="slider-button">
              <a href="#donate" class="btn btn-custom">Donate Now</a>
              <a href="{{route('join')}}" class="btn btn-custom-inverse">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row section-banner" data-bg_img="{{asset('public/front/images/bannerslider.png')}}" data-gardient="true" data-bg_color="#000000" data-bg_opacity="0.1" data-bg_color_2="#000000" data-bg_opacity_2="0.7">
        <div class="col-md-12 col-sm-12">
          <div class="banner-content wow fadeInUp">
            <h2 class="mt-3">
              YOUR
              <span>SMALL</span>
              <br>DONATION CAN
              <br>BRING
              <span>HUGE</span>
              SMILE
            </h2>
            <h3>
              Ashtak Foundation, one of the leading NGOs working in PAN India.
              <br>
              We implement various projects focused on Poverty, Education, Health, Empowerment, and Environment.
            </h3>
            <div class="slider-button">
              <a href="#donate" class="btn btn-custom">Donate Now</a>
              <a href="{{route('join')}}" class="btn btn-custom-inverse">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  
</section>




<section class="section-content-block hidden-sm hidden-xs">

    <div class="container" style="position: relative">
      <img src="{{asset('public/front/images/rectangle-lt.png')}}" alt="line" class="img-fluid" style="position: absolute; top: 207px; left: -17px; width: 150px;">
          <img src="{{asset('public/front/images/rectangle-rt.png')}}" alt="line" class="img-fluid" style="position: absolute; top: 227px; right: -25px; width: 165px;">
  
      <div class="row section-heading-wrapper">
  
        <div class="col-md-12 col-sm-12 text-center">
          <h2>
            <span>Objective of Ashtak Foundation</span>
          </h2>
          <h4>To promote sustainable development and empower communities through education, health initiatives, and environmental conservation.</h4>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
          
            <figure class="event-img text-center">
              <img src="{{asset('public/front/images/Icon - Food.jpg')}}" alt="img">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Food</a>
                <p style="    color: #e9230c;" class="text-center">Giving Food to the hungry</p>
              </h5>
            </div>
          
        </div>
  
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
          
            <figure class="event-img text-center">
              <img src="{{asset('public/front/images/Icon - Cloth.jpg')}}" alt="img">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Cloths</a>
                <p style="    color: #e9230c;" class="text-center">Giving Cloths to needy </p>
              </h5>
            </div>
          
        </div>
  
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
         
            <figure class="event-img text-center">
              <img src="{{asset('public/front/images/Icon - Medical.jpg')}}" alt="img">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Medical</a>
                <p style="    color: #e9230c;" class="text-center">Helping in medical field</p>
              </h5>
            </div>
          
        </div>
  
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
          
            <figure class="event-img text-center">
              <img src="{{asset('public/front/images/Icon - Education.jpg')}}" alt="img">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Education</a>
                <p style="    color: #e9230c;" class="text-center">Helping in education sector</p>
              </h5>
            </div>
          
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
         
            <figure class="event-img text-center">
              <img src="{{asset('public/front/images/Icon - Orphanage & Old Age Home.jpg')}}" alt="img">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Orphange & Old age</a>
                <p style="    color: #e9230c;" class="text-center">Helping in orphange</p>
              </h5>
            </div>
          
        </div>
  
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
         
            <figure class="event-img text-center">
              <img src="{{asset('public/front/images/Icon -Disaster Relief.jpg')}}" alt="img">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Disaster Relief</a>
                <p style="    color: #e9230c;" class="text-center">Helping relief in disaster</p>
              </h5>
            </div>
          
        </div>
  
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
         
            <figure class="event-img text-center">
              <img src="{{asset('public/front/images/Icon - Enviroment.jpg')}}" alt="img">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Environment</a>
                <p style="    color: #e9230c;" class="text-center">Helping in Natural sector</p>
              </h5>
            </div>
          
        </div>
  
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
         
            <figure class="event-img text-center">
              <img src="{{asset('public/front/images/Icon - Gauseva.jpg')}}" alt="img">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Gauseva</a>
                <p style="    color: #e9230c;" class="text-center">Helping in the field Gauseva</p>
              </h5>
            </div>
         
        </div>
        
      </div>
    </div>
  </section>

  

<section class="section-content-block1 hidden-lg hidden-md">
  <div class="container">
      <div class="row section-heading-wrapper">
          <div class="col-md-12 col-sm-12 text-center">
              <h2>
                  <span>Objective of Ashtak Foundation</span>
              </h2>
          </div>
      </div>

      <div class="row wow fadeIn">
          <div class="cause-container2 owl-carousel">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="image-line-container">
                      <figure class="event-img2 text-center">
                          <img src="{{asset('public/front/images/Icon - Food.jpg')}}" alt="img" style="width:110px;">
                      </figure>
                      <hr class="image-line">
                  </div>
                  <div class="event-content text-center justify-content-center">
                      <h5>
                          <a href="#" style="font-size:15px" class="custom-link">Food</a>
                          {{-- <p style="color: #e9230c; font-size:4px" class="text-center">Giving Food to the hungry</p> --}}
                      </h5>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="image-line-container">
                      <figure class="event-img2 text-center">
                          <img src="{{asset('public/front/images/Icon - Cloth.jpg')}}" alt="img" style="width:110px;">
                      </figure>
                      <hr class="image-line">
                  </div>
                  <div class="event-content text-center">
                      <h5>
                          <a href="#" style="font-size:15px" class="custom-link">Cloths</a>
                          {{-- <p style="color: #e9230c; font-size:4px" class="text-center">Giving Cloths to needy</p> --}}
                      </h5>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="image-line-container">
                      <figure class="event-img2 text-center">
                          <img src="{{asset('public/front/images/Icon - Medical.jpg')}}" alt="img" style="width:110px;">
                      </figure>
                      <hr class="image-line">
                  </div>
                  <div class="event-content text-center">
                      <h5>
                          <a href="#" style="font-size:15px" class="custom-link">Medical</a>
                          {{-- <p style="color: #e9230c; font-size:4px" class="text-center">Helping in medical field</p> --}}
                      </h5>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="image-line-container">
                      <figure class="event-img2 text-center">
                          <img src="{{asset('public/front/images/Icon - Education.jpg')}}" alt="img" style="width:110px;">
                      </figure>
                      <hr class="image-line">
                  </div>
                  <div class="event-content text-center">
                      <h5>
                          <a href="#" style="font-size:15px" class="custom-link">Education</a>
                          {{-- <p style="color: #e9230c; font-size:4px" class="text-center">Helping in education sector</p> --}}
                      </h5>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="image-line-container">
                      <figure class="event-img2 text-center">
                          <img src="{{asset('public/front/images/Icon - Orphanage & Old Age Home.jpg')}}" alt="img" style="width:110px;">
                      </figure>
                      <hr class="image-line">
                  </div>
                  <div class="event-content text-center">
                      <h5>
                          <a href="#" style="font-size:15px" class="custom-link">Orphanage</a>
                          {{-- <p style="color: #e9230c; font-size:4px" class="text-center">Helping in orphanage</p> --}}
                      </h5>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="image-line-container">
                      <figure class="event-img2 text-center">
                          <img src="{{asset('public/front/images/Icon -Disaster Relief.jpg')}}" alt="img" style="width:110px;">
                      </figure>
                      <hr class="image-line">
                  </div>
                  <div class="event-content text-center">
                      <h5>
                          <a href="#" style="font-size:15px" class="custom-link">Disaster</a>
                          {{-- <p style="color: #e9230c; font-size:4px" class="text-center">Helping relief in disaster</p> --}}
                      </h5>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="image-line-container">
                      <figure class="event-img2 text-center">
                          <img src="{{asset('public/front/images/Icon - Enviroment.jpg')}}" alt="img" style="width:110px;">
                      </figure>
                      <hr class="image-line">
                  </div>
                  <div class="event-content text-center">
                      <h5>
                          <a href="#" style="font-size:15px" class="custom-link">Environment</a>
                          {{-- <p style="color: #e9230c; font-size:4px" class="text-center">Helping in Natural sector</p> --}}
                      </h5>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <div class="image-line-container">
                      <figure class="event-img2 text-center">
                          <img src="{{asset('public/front/images/Icon - Gauseva.jpg')}}" alt="img" style="width:110px;">
                      </figure>
                      <hr class="image-line">
                  </div>
                  <div class="event-content text-center">
                      <h5>
                          <a href="#" style="font-size:15px" class="custom-link">Gauseva</a>
                          {{-- <p style="color: #e9230c; font-size:4px" class="text-center">Helping in the field Gausala</p> --}}
                      </h5>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

  
<section class="section-content-block section-secondary-bg" id="donate">

    <div class="container wow fadeIn">
  
      <div class="row">
  
        <div class="col-md-7">
          <figure class="urget-cause-image">
            <img src="{{asset('public/front/images/about-us.jpg')}}" alt="activity">
          </figure>
        </div>
  
        <div class="col-md-5">
  
          <div class="urgent-cause ">
  
            <div class="cause-content ">
  
              <div class="cause-text ">
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
  
<section class="">
    <div class="container">
      <div class="row section-heading-wrapper">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
          <h2>
            <span>Our Vision</span>
          </h2>
          <h4>Human Rights charities support the passage and enforcement.</h4>
        </div>
      </div>
      <div class="row">
        <div class="testimonial-container owl-carousel">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="testimony-layout-2 justify-content-center">
              <div class="visioncontent text-center">
                <img src="{{asset('public/front/images/Surendra Mishra - Founder & Director - Ashtak Foundation.jpg')}}" alt="img" class="visionimg" style="height:310px;">
  
                <div class="testimony-info">
                  <h4 style="color: white;">Surendra Mishra</h4>
                  <h6>Founder & Director - Ashtak Foundation</h6>
                  <h6>Email : surendramishra@ashtakfoundation.in</h6>
                  <hr class="line">
                </div>
              </div>
              <p class="testimony-text">
                मेरा जन्म सनातन धर्मावलम्बी ब्राह्मण परिवार में हुआ है और सनातनी धर्म का संस्कार भी दिया गया है । वेदों, पुराणों, शास्त्रों, उनिषदों ; सनातनी धर्मग्रन्थों का अध्यन कराया गया ; अध्यन के दौरान मुझे तीनों बातें ही समझ में आयी जिसमें (1) मानव जीवन का उदेश्य क्या है ? (2) ईश्वर प्राप्ति का सहज मार्ग क्या है ? (3) सुखद जीवन (लोक - परलोक) की प्राप्ति कैसे सम्भव है ? इन प्रश्नों के उत्तर में मुझे एक ही मार्ग (साधन) दिखा वह है “सेवा” । जहां सारी शक्तियां कुंठित हो जाती हैं वहाँ भी सेवा की शक्ति ...
              </p>
              
                <a class="btn btn-theme1 text-white" href="{{route('our-vision.surendra-mishra')}}" title="Read More">Read More</a>
              
              <div class="text-center">
                <a href="#" class=" float-end">
                
                  <img src="{{asset('public/front/images/instagram1.png')}}" style="width: 40px;" class="float-right">
              </a>
              <a href="#" class=" float-end">
                
                <img src="{{asset('public/front/images/youtube1.png')}}" style="width: 40px;" class="float-right">
            </a>
            <a href="#" class=" float-end">
                
              <img src="{{asset('public/front/images/facebook1.png')}}" style="width: 40px;" class="float-right">
          </a>
          <a href="#" class=" float-end">
                
            <img src="{{asset('public/front/images/twitter1.png')}}" style="width: 40px;" class="float-right">
        </a>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="testimony-layout-2 justify-content-center">
              <div class="visioncontent text-center">
                <img src="{{asset('public/front/images/dinesh.jpg')}}" alt="img" class="visionimg" style="height:310px;">
  
                <div class="testimony-info">
                  <h4 style="color: white;">Dinesh Khandelwal</h4>
                  <h6>Executive Director - Ashtak Foundation</h6>
                  <h6>email : dineshkhandelwal@ashtakfoundation.in</h6>
                  <hr class="line">
                </div>
              </div>
              <p class="testimony-text">
                मुझे मेरी पूज्यनीय माताराम गीता खण्डेलवाल से परोपकार करने की प्रवृति बचपन काल से ही मिली है जो आज भी है । कुछ लोग मेरे परोपकार भावनाओं को ठेस भी पहुचाते रहे हैं किन्तु परोपकार करना अपने कर्तव्यों का पालन करना मेरा स्वभाव बन जाने के कारण मैं अपने स्वभाव के साथ आज भी हूँ । जरूरतमन्दों तथा असहायजनों की मदद करें, वृक्षारोपन, गोशाला निर्माण एवं गोपालन, विद्यालय एवं चिकित्सालयों की स्थापना, भण्डारे का आयोजन, आवश्यक आवश्यकताओं की पूर्ति एक सेवा ...
              </p>
              <a class="btn btn-theme1 text-white" href="{{route('our-vision.dinesh-khandelwal')}}" title="Read More">Read More</a>
              <div class="text-center">
                <a href="#" class=" float-end">
                
                  <img src="{{asset('public/front/images/instagram1.png')}}" style="width: 40px;" class="float-right">
              </a>
              <a href="#" class=" float-end">
                
                <img src="{{asset('public/front/images/youtube1.png')}}" style="width: 40px;" class="float-right">
            </a>
            <a href="#" class=" float-end">
                
              <img src="{{asset('public/front/images/facebook1.png')}}" style="width: 40px;" class="float-right">
          </a>
          <a href="#" class=" float-end">
                
            <img src="{{asset('public/front/images/twitter1.png')}}" style="width: 40px;" class="float-right">
        </a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="testimony-layout-2 ">
              <div class="visioncontent text-center">
                <img src="{{asset('public/front/images/placeholder.png')}}" alt="img" class="visionimg" style="height:310px;">
                <div class="testimony-info">
                  <h4 style="color: white;">Rudra Kumar Mishra</h4>
                  <h6>CEO & Director - Ashtak Foundation</h6>
                  <h6>email : sahayata@ashtakfoundation.in</h6>
                  <hr class="line">
                </div>
              </div>
              <p class="testimony-text">
                Our journey began with a simple yet profound realization: that hunger, poverty, and suffering know no boundaries. We saw families living on the fringes, struggling to make ends meet, and children with dreams but no opportunities. We saw animals in distress, neglected and forgotten.
This sparked a sense of purpose within us – to serve, to care, and to make a difference. Ashtak Foundation was born, driven by an unwavering ...
              </p>
              <a class="btn btn-theme1 text-white" href="{{route('our-vision.rudra-kumar-mishra')}}" title="Read More">Read More</a>
              <div class="text-center">
                <a href="#" class=" float-end">
                
                  <img src="{{asset('public/front/images/instagram1.png')}}" style="width: 40px;" class="float-right">
              </a>
              <a href="#" class=" float-end">
                
                <img src="{{asset('public/front/images/youtube1.png')}}" style="width: 40px;" class="float-right">
            </a>
            <a href="#" class=" float-end">
                
              <img src="{{asset('public/front/images/facebook1.png')}}" style="width: 40px;" class="float-right">
          </a>
          <a href="#" class=" float-end">
                
            <img src="{{asset('public/front/images/twitter1.png')}}" style="width: 40px;" class="float-right">
        </a>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="testimony-layout-2 ">
              <div class="visioncontent text-center">
                <img src="{{asset('public/front/images/ravikumar.JPG')}}" alt="img" class="visionimg" style="height:310px;">
                <div class="testimony-info">
                  <h4 style="color: white;">Ravi Kumar</h4>
                  <h6>Security Head - Ashtak Foundation</h6>
                  <h6>email : ravikumar@ashtakfoundation.in</h6>
                  <hr class="line">
                </div>
              </div>
              <p class="testimony-text">
                हमारे शरीर की उंगलियां जब तक अलग – अलग है तब तक हम कोई भी बड़ा साहसिक कार्य, संग्राम में अच्छी सफलता नहीं ले सकते ; यदि किसी का अभिवादन भी करना है तो हाथ की उँगलियों को जोड़ना पड़ता है यदि युद्ध भी करना है तो कम से कम पाँच उँगलियों को आपस में मिलाना ही पड़ता है तभी कोई आत्म रक्षा भी कर पाता है। ठीक उसी प्रकार जैसे कि सनातनी साधुओं के पास ज्ञान, भक्ति , वैराग, सेवा और शक्ति होती है जिसे मिलाकर जग परिवर्तन को अच्छाई में बदलते हैं ...
              </p>
              <a class="btn btn-theme1 text-white" href="{{route('our-vision.ravi-kumar')}}" title="Read More">Read More</a>
              <div class="text-center">
                <a href="#" class=" float-end">
                
                  <img src="{{asset('public/front/images/instagram1.png')}}" style="width: 40px;" class="float-right">
              </a>
              <a href="#" class=" float-end">
                
                <img src="{{asset('public/front/images/youtube1.png')}}" style="width: 40px;" class="float-right">
            </a>
            <a href="#" class=" float-end">
                
              <img src="{{asset('public/front/images/facebook1.png')}}" style="width: 40px;" class="float-right">
          </a>
          <a href="#" class=" float-end">
                
            <img src="{{asset('public/front/images/twitter1.png')}}" style="width: 40px;" class="float-right">
        </a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  
  <section class="donatecontent hidden-sm hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="event-wrapper-1">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/Icon - Food.jpg')}}" alt="image">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Food</a>
                <p style="color: green;" class="text-center">Giving Food to the hungry</p>
                <div class="navbar-contact ">
                  <ul>
                    <li><a class="btn btn-theme1" href="#donate" title="Donate Now" style="color:white;">Donate Now</a></li>
                  </ul>
                </div>
              </h5>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="event-wrapper-1">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/Icon - Cloth.jpg')}}" alt="image">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Cloths</a>
                <p style="color: green;" class="text-center">Giving Cloths to needy people</p>
                <div class="navbar-contact ">
                  <ul>
                    <li><a class="btn btn-theme1" href="#donate" title="Donate Now" style="color:white;">Donate Now</a></li>
                  </ul>
                </div>
              </h5>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="event-wrapper-1">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/Icon - Medical.jpg')}}" alt="image">
            </figure>
            <div class="event-content text-center">
              <h5>
                <a href="#">Medical</a>
                <p style="color: green;" class="text-center">Helping in medical field</p>
                <div class="navbar-contact ">
                  <ul>
                    <li><a class="btn btn-theme1" href="#donate" title="Donate Now" style="color:white;">Donate Now</a></li>
                  </ul>
                </div>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-content-block  hidden-lg hidden-md">

    <div class="container">
  
    <div class="row wow fadeIn">
  
        <div class="cause-container1 owl-carousel">
  
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="event-wrapper-1">
              <figure class="event-img1 text-center">
                <img src="{{asset('public/front/images/Icon - Food.jpg')}}" alt="image">
              </figure>
              <div class="event-content text-center">
                <h5>
                  <a href="#">Food</a>
                  <p style="color: green;" class="text-center">Giving Food to the hungry</p>
                  <div class="navbar-contact ">
                    <ul>
                      <li><a class="btn btn-theme1" href="#donate" title="Donate Now" style="color:white;">Donate Now</a></li>
                    </ul>
                  </div>
                </h5>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="event-wrapper-1">
              <figure class="event-img1 text-center">
                <img src="{{asset('public/front/images/Icon - Cloth.jpg')}}" alt="image">
              </figure>
              <div class="event-content text-center">
                <h5>
                  <a href="#">Cloths</a>
                  <p style="color: green;" class="text-center">Giving Cloths to needy people</p>
                  <div class="navbar-contact ">
                    <ul>
                      <li><a class="btn btn-theme1" href="#donate" title="Donate Now" style="color:white;">Donate Now</a></li>
                    </ul>
                  </div>
                </h5>
              </div>
            </div>
          </div>
         
  
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="event-wrapper-1">
              <figure class="event-img1 text-center">
                <img src="{{asset('public/front/images/Icon - Medical.jpg')}}" alt="image">
              </figure>
              <div class="event-content text-center">
                <h5>
                  <a href="#">Medical</a>
                  <p style="color: green;" class="text-center">Helping in medical field</p>
                  <div class="navbar-contact ">
                    <ul>
                      <li><a class="btn btn-theme1" href="#donate" title="Donate Now" style="color:white;">Donate Now</a></li>
                    </ul>
                  </div>
                </h5>
              </div>
            </div>
          </div>
          
  
        </div>
  
  
      </div>
     
  
    </div>
   
  
  </section>
  

  

  <section class="section-content-block section-secondary-bg hidden-sm hidden-xs">
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
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_1.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_1.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter sprinkle">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_2.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_2.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter hdpe">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_3.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_3.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter spray">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_4.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_4.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter irrigation">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_5.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_5.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter sprinkle">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_6.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_6.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter hdpe">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_8.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_8.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter irrigation">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_7.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_7.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
      </div>
    </div>
  </section>
  
  
   <section class="section-content-block section-secondary-bg hidden-lg hidden-md">
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

        <div class="testimonial-container owl-carousel">
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter hdpe">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_1.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_1.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter sprinkle">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_2.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_2.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter hdpe">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_3.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_3.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter spray">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_4.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_4.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter irrigation">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_5.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_5.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter sprinkle">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_6.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_6.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter hdpe">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_8.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_8.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>
  
        <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter irrigation">
          <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{asset('public/front/images/gallery_7.jpg')}}">
            <figure class="gallery-img">
              <img src="{{asset('public/front/images/gallery_7.jpg')}}" alt="gallery image">
            </figure>
          </a>
        </div>

      </div>
      </div>
    </div>
  </section>
  
  <section class="section-content-block section-secondary-bg">
  <div class="container">

    <div class="row section-heading-wrapper  wow fadeIn">

      <div class="col-md-12 col-sm-12 text-center">
        <h2>  
          <span>What We Do</span>
        </h2>
        <h4>"Together, we can transform lives and create a brighter future for those in need."</h4>
      </div>
    </div>

  </div>

  <div class="container">

  <div class="row ">
            <div class="col-md-12">
            <ul class="list-group" style="list-style-type: disc; padding-left: 5px;">
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Working for helpless, disabled, and poor people.</li>
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Giving food to the hungry.</li>
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Giving clothes according to the season.</li>
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Construction of orphanages and old age homes.</li>
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Helping in the education sector.</li>
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Helping in the medical field.</li>
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Helping in the marriage of unmarried poor girls.</li>
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Helping in the field of self-employment and self-reliance.</li>
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Working for the purity of the environment.</li>
    <li class="list-group-item" style="color: black;"><i class="bi bi-dot"></i> Working for cow and Sanatan Dharma.</li>
</ul>

</div>

  </div>


</section>

<section class="section-content-block">

  <div class="container">

    <div class="row section-heading-wrapper">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <h2>
          <span>Our Testimonials</span>
        </h2>
        <h4>Human Rights charities support the passage and enforcement.</h4>
      </div>
     
    </div>

    <div class="row">

      <div class="testimonial-container owl-carousel">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Ashtak Foundation's dedication to the poor is truly inspiring."
            </p><br>
            <div class="testimony-info">
              <h4 style="color: white">Varun Singh</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Their education initiatives gave my daughter a bright future. Thank you, Ashtak Foundation!"
            </p>
            <div class="testimony-info">
              <h4 style="color: white">Sarita Mohan</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Ashtak Foundation's medical aid saved my husband's life. We're indebted to their kindness."
            </p>
            <div class="testimony-info">
              <h4 style="color: white">Rekha Devi</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Their gauseva work inspires compassion and kindness in our community."
            </p>
            <div class="testimony-info">
              <h4 style="color: white">Dr. Kumar, Volunteer</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Ashtak Foundation's clothing drives restored dignity to our underprivileged neighbors."
            </p>
            <div class="testimony-info">
              <h4 style="color: white">Shriya, Volunteer</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Ashtak Foundation's food distribution saved our family from hunger. We're grateful for their selfless service."
            </p>
            <div class="testimony-info">
              <h4 style="color: white">Ramesh Kumar</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Ashtak Foundation's animal welfare work is remarkable. They're making a difference!"
            </p>
            <div class="testimony-info">
              <h4 style="color: white">Dr. Kumar</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Their tireless efforts bring hope to the hopeless. Keep up the great work!"
            </p>
            <div class="testimony-info">
              <h4 style="color: white">Father of Somya</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Gauseva initiatives by Ashtak Foundation promote harmony between humans and animals."
            </p>
            <div class="testimony-info">
              <h4 style="color: white">Environmentalist</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="testimony-layout-2">
            <figure class="event-img1 text-center">
              <img src="{{asset('public/front/images/placeholder.png')}}" alt="">
            </figure>
            <p class="testimony-text">
              "Ashtak Foundation's selfless service embodies the true spirit of humanity."
            </p>
            <div class="testimony-info">
              <h4 style="color: white">Arya Singh</h4>
              <!--<h6>Mumbai, India</h6>-->
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
    

  </div>
  

</section>

{{--
<section class="section-content-block">

  <div class="container">

    <div class="row section-heading-wrapper">

      <div class="col-md-12 col-sm-12 text-center">
        <h2>
          <span>Featured In</span>
        </h2>
        <h4>Provide integrated services for local communities.</h4>
      </div>
      

    </div>
    


    <div class="row wow fadeIn">

      <div class="cause-container owl-carousel">

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

          <div class="cause-layout-1">

            <figure class="cause-img text-center">
              <img src="{{asset('public/front/images/cause_1.jpg')}}" alt="Cause">
            </figure>
            
            <div class="fund-info">
              <div class="fund-item-text">
                <span class="fund-goal-text">
                  <strong>TARGET:</strong>
                  $4,000</span>
                <span data-raised_percentage="50" class="fund-raised">50%</span>
                <span class="fund-raised-text">
                  <strong>RAISED:</strong>
                  $1,999</span>
              </div>
              
            </div>

            <div class="cause-content text-center">
              <h5>
                <a href="#">Protect Children Rights</a>
              </h5>
              <p>
                Ashtak Foundation has been featured in various media outlets for its impactful work in addressing critical social issues across India.
              </p>

              <div class="clearfix">
                <a class="btn btn-theme1 text-uppercase" href="#">Donate Now</a>
              </div>

            </div>
            

          </div>
          

        </div>
        

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

          <div class="cause-layout-1">

            <figure class="cause-img text-center">
              <img src="{{asset('public/front/images/cause_2.jpg')}}" alt="Cause">
            </figure>
           

            <div class="fund-info">
              <div class="fund-item-text">
                <span class="fund-goal-text">
                  <strong>TARGET:</strong>
                  $9,900</span>
                <span data-raised_percentage="50" class="fund-raised">70%</span>
                <span class="fund-raised-text">
                  <strong>RAISED:</strong>
                  $7,912</span>
              </div>
             
            </div>

            <div class="cause-content text-center">
              <h5>
                <a href="#">Ensure Safe Foods</a>
              </h5>
              <p>
                Our initiatives in poverty alleviation, education, and health have garnered recognition, showcasing our commitment and driving.
              </p>

              <div class="clearfix">
                <a class="btn btn-theme1 text-uppercase" href="#">Donate Now</a>
              </div>

            </div>
           

          </div>
          

        </div>
       

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

          <div class="cause-layout-1 text-center">

            <figure class="cause-img text-center">
              <img src="{{asset('public/front/images/cause_3.jpg')}}" alt="Cause">
            </figure>
            

            <div class="fund-info">
              <div class="fund-item-text">
                <span class="fund-goal-text">
                  <strong>TARGET:</strong>
                  $3,331</span>
                <span data-raised_percentage="50" class="fund-raised">60%</span>
                <span class="fund-raised-text">
                  <strong>RAISED:</strong>
                  $2,991</span>
              </div>
             
            </div>

            <div class="cause-content text-center">
              <h5>
                <a href="#">Stop Child Abuse</a>
              </h5>
              <p>
                The alliance for children rights is dedicated solely to protecting the rights of impovere, abused and neglected children.
              </p>

              <div class="clearfix">
                <a class="btn btn-theme1 text-uppercase" href="#">Donate Now</a>
              </div>

            </div>
            

          </div>
         

        </div>
        

      </div>


    </div>
   

  </div>
 

</section>
--}}

  <section class="section-newsletter">

  <div class="container">

    <div class="row wow fadeIn">

      <div class="col-md-6">
        <h2 class="newsletter-heading">Ashtak Foundation</h2>
        <p class="newsletter-subheading">
          We implement various kind of project like Poverty, Education, Health, Empowerment and Environment, but our main works and projects are related to present issues and problems.
        </p>
      </div>


      <div class="col-md-6">
        <div class="horizontal-newsletter-2">
          <form id="mc-form" class="mc-form fix" action="#">
            <div class="news-subscription">
              <input id="mc-email" name="EMAIL" placeholder="Give Some Donation" type="email">
              <button id="mc-submit" type="submit">
                Donate</button>
            </div>
          </form>
        </div>

      </div>


    </div>

  </div>

</section>




@endsection