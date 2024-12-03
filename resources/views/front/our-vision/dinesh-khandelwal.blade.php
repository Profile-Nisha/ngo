
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
                    <img src="{{ asset('public/front/images/dinesh.jpg') }}" class="img-fluid" alt="image" style="border-radius: 8px;">
                </div>
                <div>
                    <h4 class="text-center" style="margin: 0px 0px">Dinesh Khandelwal</h4>
                    <p class="text-center" style="margin: 0px 0px"><strong>Executive Director - Ashtak Foundation</strong></p>
                    <p class="text-center" style="margin: 0px 0px"><strong>Email : dineshkhandelwal@ashtakfoundation.in</strong></p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body" style="padding: 10px 10px;">
                        <p>
                       मुझे मेरी पूज्यनीय माताराम गीता खण्डेलवाल से परोपकार करने की प्रवृति बचपन काल से ही मिली है जो आज भी है । कुछ लोग मेरे परोपकार भावनाओं को ठेस भी पहुचाते रहे हैं किन्तु परोपकार करना अपने कर्तव्यों का पालन करना मेरा स्वभाव बन जाने के कारण मैं अपने स्वभाव के साथ आज भी हूँ । जरूरतमन्दों तथा असहायजनों की मदद करें, वृक्षारोपन, गोशाला निर्माण एवं गोपालन, विद्यालय एवं चिकित्सालयों की स्थापना, भण्डारे का आयोजन, आवश्यक आवश्यकताओं की पूर्ति एक सेवा – सहयोग के रूप मे गरीब एवं असहाय जनों के लिए किया जाए । सभी सनातनी एक जूट हो कर देश से भूख एवं दुख को निकाल बाहर कर दें ; अतः मैं गुरु आज्ञानुसार “सेवाधर्म” निभा रहा हूँ और “अष्टक फ़ाउंडेशन” एक दिन सभी गरीबों – असहायों – जरूरतमन्दों के दिल पर राज करेगा और उन्हें सुखी जीवन देने में सफल होगा । गरीब कुमारी कन्याओं का विवाह – गरीब एवं असहाय क्षात्रों की शिक्षा – असहाय रोगियों की दवा – पर्यावरण शुद्धि के लिए वृक्षारोपण – असहायों में भोजन , वस्त्र , शैक्षणिक सामग्री , औषधि इत्यादि दान की पहल “अष्टक फ़ाउंडेशन” कर रहा है । हमारे साथ आप भी जुड़ कर इस कल्याणकारी कार्यों में हाथ बटावें और देश में भाईचारे का बढ़ावा देते हुए सनातन धर्म का अनुयायीबनकर “सेवा कर्म” करें इसी में आनन्द है ।
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>


@endsection