
@extends('front.layouts.master')

@section('content')
<div class="container-fluid bg-image mb-5">
    <div class="text-center content">
        <p>
            <a href="{{ url('/') }}" class="text-light" style="color: white; font-size:23px;">Home</a> <span style="color: white">/</span>
            <a href="{{ url('/about') }}" class="text-light" style="color: white; font-size:23px;">About Us</a>
        </p>
    </div>
</div>

<section class="section-content-block">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-heading-wrapper no-padding">
                    <h2 class="text-center">
                        <span>About Us</span>
                    </h2>
                    <hr>
                </div>
                
                <div>
                    <h4>अष्टक फाउंडेशन: करुणा और सशक्तिकरण की एक परिवर्तनकारी यात्रा</h4>
                    <p>अष्टक फाउंडेशन, श्री सुरेंद्र मिश्रा , श्री रुद्र कुमार मिश्रा एवं श्री दिनेश खण्डेलवाल द्वारा संचालित एक पहल, आशा और करुणा की किरण के रूप में खड़ी है। सेवा और सहानुभूति के सिद्धांतों पर स्थापित, अष्टक फाउंडेशन एक ऐसी दुनिया की कल्पना करता है जहां हाशिए पर पड़े और वंचित लोगों को सांत्वना, जीविका और गरीबी और निराशा की बेड़ियों से मुक्त होने के साधन मिलें। यह व्यापक अन्वेषण संगठन की उत्पत्ति, उद्देश्यों, कार्यक्रमों, प्रभाव, चुनौतियों और भविष्य की आकांक्षाओं पर प्रकाश डालता है।</p>
                    
                    <h5>संस्थापक: श्री सुरेंद्र मिश्रा </h5>
                    <p>अष्टक फाउंडेशन का अस्तित्व इसके संस्थापकों, श्री सुरेंद्र मिश्रा , श्री रुद्र कुमार मिश्रा एवं श्री दिनेश खण्डेलवाल की दूरदर्शिता और प्रतिबद्धता के कारण है। समाज में सार्थक योगदान देने की गहरी इच्छा से प्रेरित होकर, उन्होंने एक ऐसे संगठन की स्थापना की यात्रा शुरू की जो सकारात्मक बदलाव के लिए उत्प्रेरक के रूप में काम करेगा। उनके नेतृत्व और समर्पण ने अष्टक फाउंडेशन को एक ऐसी इकाई के रूप में आकार दिया है जो न केवल तत्काल जरूरतों को पूरा करती है बल्कि सबसे महत्वपूर्ण मुद्दों के लिए स्थायी समाधान बनाने की दिशा में भी काम करती है।</p>
                    
                    <h5>अष्टक फाउंडेशन के उद्देश्य</h5>
                    <p><strong>1.	असहाय, विकलांग और गरीब लोगों के लिए कार्य करना</strong></p>
                    <p>अष्टक फाउंडेशन समाज के सबसे कमजोर सदस्यों तक पहुंचने को प्राथमिकता देता है। विभिन्न कार्यक्रमों के माध्यम से, संगठन का लक्ष्य उन लोगों का उत्थान करना है जो असहाय, विकलांग या गरीबी में रह रहे हैं, यह सुनिश्चित करना कि उनकी बुनियादी ज़रूरतें पूरी हों और उन्हें बेहतर जीवन के अवसर प्रदान किए जाएं।</p>
                    <p><strong>2.	भूखे को भोजन उपलब्ध कराना</strong></p>
                    <p>भूख दुनिया भर में एक व्यापक मुद्दा बनी हुई है, और अष्टक फाउंडेशन जमीनी स्तर पर इससे निपटने के लिए प्रतिबद्ध है। संगठन भोजन वितरण कार्यक्रम आयोजित करता है, यह सुनिश्चित करते हुए कि भूखे लोगों को स्वस्थ जीवन जीने के लिए पोषण और जीविका मिले।</p>
                    <p><strong>3.	मौसम के अनुसार कपड़े देना</strong></p>
                    <p>गरिमा और आराम के महत्व को पहचानते हुए, अष्टक फाउंडेशन मौजूदा मौसम की स्थिति के लिए उपयुक्तता पर ध्यान देने के साथ, जरूरतमंद लोगों को कपड़े उपलब्ध कराने की पहल करता है। यह सुनिश्चित करता है कि व्यक्ति न केवल कपड़े पहने हुए हैं बल्कि तत्वों से भी सुरक्षित हैं।</p>
                    <p><strong>4.	अनाथालय एवं वृद्धाश्रम का निर्माण</strong></p>
                    <p>अष्टक फाउंडेशन उन लोगों के लिए घर उपलब्ध कराने के लिए समर्पित है जिनके पास रहने के लिए कोई और जगह नहीं है। अनाथालयों और वृद्धाश्रमों के निर्माण और रखरखाव के माध्यम से, संगठन सुरक्षित और पोषण वातावरण बनाता है जहां व्यक्ति अपनेपन और देखभाल की भावना का अनुभव कर सकते हैं।</p>
                    <p><strong>5.	शिक्षा क्षेत्र में सहायता</strong></p>
                    <p>शिक्षा सशक्तिकरण के लिए एक शक्तिशाली उपकरण है, और अष्टक फाउंडेशन इसे सभी के लिए सुलभ बनाने के लिए प्रतिबद्ध है। यह सुनिश्चित करने के लिए कि प्रत्येक बच्चे को सीखने और बढ़ने का अवसर मिले, संगठन स्कूलों की स्थापना करता है, छात्रवृत्तियाँ प्रदान करता है और शैक्षिक पहलों का समर्थन करता है।</p>
                    <p><strong>6.	चिकित्सा क्षेत्र में सहायता</strong></p>
                    <p>स्वास्थ्य कल्याण का एक मूलभूत पहलू है, और अष्टक फाउंडेशन चिकित्सा क्षेत्र में अपनी पहुंच बढ़ाता है। संगठन जिन समुदायों में सेवा प्रदान करता है उनमें प्रचलित स्वास्थ्य समस्याओं के समाधान के लिए स्वास्थ्य शिविर आयोजित करता है, क्लीनिक संचालित करता है और चिकित्सा हस्तक्षेप का समर्थन करता है।</p>
                    <p><strong>7.	अविवाहित लड़कियों की शादी में मदद करना</strong></p>
                    <p>अष्टक फाउंडेशन विवाह के सामाजिक महत्व को पहचानता है और इसका उद्देश्य अविवाहित लड़कियों को जीवन साथी ढूंढने में सहायता करना है। विभिन्न कार्यक्रमों के माध्यम से, संगठन शादियों की सुविधा प्रदान करता है, यह सुनिश्चित करते हुए कि युवा महिलाओं को न केवल आर्थिक रूप से सहायता मिलती है बल्कि सामाजिक ताने-बाने में भी एकीकृत किया जाता है।</p>
                    <p><strong>8.	स्व-रोज़गार एवं आत्मनिर्भरता के क्षेत्र में सहायता</strong></p>
                    <p>व्यक्तियों को आत्मनिर्भर बनने के लिए सशक्त बनाना अष्टक फाउंडेशन के दर्शन की आधारशिला है। संगठन कौशल विकास प्रशिक्षण प्रदान करता है, नौकरी लगाने की सुविधा प्रदान करता है, और जरूरतमंद लोगों के लिए आजीविका के अवसर बढ़ाने के लिए उद्यमिता का समर्थन करता है।</p>
                    <p><strong>9.	पर्यावरण की शुद्धता के लिए कार्य करना</strong></p>
                    <p>अष्टक फाउंडेशन पर्यावरण संरक्षण की तत्काल आवश्यकता को पहचानता है। संगठन स्थायी प्रथाओं को बढ़ावा देने, पर्यावरण जागरूकता बढ़ाने और ग्रह के समग्र कल्याण में योगदान देने के लिए पहल करता है।</p>
                    <p><strong>10.	गाय और सनातन धर्म के लिए कार्य करना</strong></p>
                    <p>सांस्कृतिक और धार्मिक मूल्यों के अनुरूप, अष्टक फाउंडेशन सनातन धर्म (सनातन धर्म) के संरक्षण और गायों की भलाई के लिए अपने प्रयासों को बढ़ाता है। इसमें गाय संरक्षण, जानवरों के साथ नैतिक व्यवहार को बढ़ावा देना और आध्यात्मिक जागरूकता को बढ़ावा देने से संबंधित पहल शामिल हैं।</p>
                </div>
            </div>
        </div>

        
    </div>
</section>




<section class="section-content-block">

    <div class="container">

      <div class="row section-heading-wrapper">
        <div class="col-lg-12 col-md-12 col-sm-12 text-left">
          <h2 class="text-center">
            <span>Our Team Member</span>
          </h2>
          <h4 class="text-center">Volunteer also include community centers and settlement houses that provide integrated services.</h4>
        </div>
        
      </div>

      <div class="row wow fadeIn">

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

          <div class="team-layout-1">

            <figure class="team-member">
              <a href="#">
                <img src="{{asset('public/front/images/surendra-team.jpg')}}" alt="Surendra Mishra">
              </a>

            </figure>
            

            <article class="team-info">
              <h3>
                Surendra Mishra
                <span>/ Founder & Director</span>
              </h3>

              <div class="team-social-share text-center clearfix">
                <a href="#" title="Facebook">
                  {{-- <i class="fa fa-facebook rectangle"></i> --}}
                  <img src="{{asset('public/front/images/facebook.png')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/instagram.webp')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/twitter.jpg')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/youtube.png')}}">
                  
                </a>
              </div>
              

            </article>
            <div class="text-center">
                <a href="#" class="view-more" style="color: #068d06; text-decoration: none; font-weight: bold;">View More</a>
              </div>

          </div>
          

        </div>
        

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

          <div class="team-layout-1">

            <figure class="team-member">
              <a href="#">
                <img src="{{asset('public/front/images/dinesh-team.jpg')}}" alt="Dinesh Khandelwal">
              </a>
            </figure>
            

            <article class="team-info">
              <h3>
                Dinesh Khandelwal 
                <span>/ Executive Director</span>
              </h3>

              <div class="team-social-share text-center clearfix">
                <a href="#" title="Facebook">
                  {{-- <i class="fa fa-facebook rectangle"></i> --}}
                  <img src="{{asset('public/front/images/facebook.png')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/instagram.webp')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/twitter.jpg')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/youtube.png')}}">
                  
                </a>
              </div>

            </article>

            <div class="text-center">
                <a href="#" class="view-more" style="color: #068d06; text-decoration: none; font-weight: bold;">View More</a>
              </div>

          </div>
          

        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

          <div class="team-layout-1">

            <figure class="team-member">
              <a href="#" >
                <img src="{{asset('public/front/images/placeholder-team.jpg')}}" alt="img">
              </a>
            </figure>
            

            <article class="team-info">
              <h3>
                Rudra Kumar Mishra
                <span>/ CEO & Director</span>
              </h3>

              <div class="team-social-share text-center clearfix">
                <a href="#" title="Facebook">
                  {{-- <i class="fa fa-facebook rectangle"></i> --}}
                  <img src="{{asset('public/front/images/facebook.png')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/instagram.webp')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/twitter.jpg')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/youtube.png')}}">
                  
                </a>
              </div>
            </article>
            <div class="text-center">
                <a href="#" class="view-more" style="color: #068d06; text-decoration: none; font-weight: bold;">View More</a>
            </div>
            </div>
        </div>
       
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

          <div class="team-layout-1">
            <figure class="team-member">
              <a href="#">
                <img src="{{asset('public/front/images/ravi-team.jpg')}}" alt="img">
              </a>
            </figure>
           

            <article class="team-info">
              <h3>
                Ravi Kumar
                <span>/ Security Head</span>
              </h3>
              <div class="team-social-share text-center clearfix">
                <a href="#" title="Facebook">
                  {{-- <i class="fa fa-facebook rectangle"></i> --}}
                  <img src="{{asset('public/front/images/facebook.png')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/instagram.webp')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/twitter.jpg')}}">
                </a>
                <a href="#" title="Facebook">
                    <img src="{{asset('public/front/images/youtube.png')}}">
                  
                </a>
              </div>
              
            </article>

            <div class="text-center">
                <a href="#" class="view-more" style="color: #068d06; text-decoration: none; font-weight: bold;">View More</a>
              </div>

          </div>
          
        </div>
        


      </div>
     
    </div>
   
  </section>
   
<div class="row no-gutter margin-top-30">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="about-highlight-1">
            <i class="bi bi-pip-fill"></i>
            <div class="about-content">
                <h3>
                    <a href="#">Our Vision</a>
                </h3>
                <p class="about-text">We envision a future where social and economic disparities are bridged, and every person has the resources and support they need to lead fulfilling lives. We strive to foster an inclusive society that values diversity and promotes equality.</p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="about-highlight-1 about-featured-block">
            <i class="bi bi-ticket"></i>
            <div class="about-content">
                <h3>
                    <a href="#">Our Mission</a>
                </h3>
                <p class="about-text">At Asthak Foundation, we believe in a world where every individual has the opportunity to thrive. Our mission is to create sustainable change in underserved communities by empowering individuals through education, healthcare, and economic development.</p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="about-highlight-1">
            <i class="bi bi-file-person-fill"></i>
            <div class="about-content">
                <h3>
                    <a href="#">Who We Are</a>
                </h3>
                <p class="about-text">Founded in ____, Asthak Foundation was established by a group of passionate individuals committed to making a difference. Our team consists of dedicated professionals and volunteers who share a common goal: to uplift communities and inspire positive change.</p>
            </div>
        </div>
    </div>
</div>
@endsection