
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
                    <img src="{{ asset('public/front/images/Surendra Mishra - Founder & Director - Ashtak Foundation.jpg') }}" class="img-fluid" alt="image" style="border-radius: 8px;">
                </div>
                <div>
                    <h4 class="text-center" style="margin: 0px 0px">Surendra Mishra</h4>
                    <p class="text-center" style="margin: 0px 0px"><strong>Founder & Director - Ashtak Foundation</strong></p>
                    <p class="text-center" style="margin: 0px 0px"><strong>Email : surendramishra@ashtakfoundation.in</strong></p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body" style="padding: 10px 10px;">
                        <p>
                           मेरा जन्म सनातन धर्मावलम्बी ब्राह्मण परिवार में हुआ है और सनातनी धर्म का संस्कार भी दिया गया है । वेदों, पुराणों, शास्त्रों, उनिषदों ; सनातनी धर्मग्रन्थों का अध्यन कराया गया ; अध्यन के दौरान मुझे तीनों बातें ही समझ में आयी जिसमें (1) मानव जीवन का उदेश्य क्या है ? (2) ईश्वर प्राप्ति का सहज मार्ग क्या है ? (3) सुखद जीवन (लोक - परलोक) की प्राप्ति कैसे सम्भव है ? इन प्रश्नों के उत्तर में मुझे एक ही मार्ग (साधन) दिखा वह है “सेवा” । जहां सारी शक्तियां कुंठित हो जाती हैं वहाँ भी सेवा की शक्ति सब कुछ कर देने में समर्थ है । इसकी सत्यता के लिए मैंने विविध साधनायें भी की तो ज्ञात हुआ कि मानव जीवन को सफल करने के लिए “सेवा कर्म” ही सर्वोपरी है जो मुझे सब कुछ देने में समर्थ है ; अब एक प्रश्न से मैं तंग हो रहा था कि किसकी सेवा कि जाय जिससे मानव जीवन सफल हो सके ? तो इसका उत्तर मुझे मेरे आराध्य कि ओर से संकेत रूप में मिला कि जो प्राणी प्रकृति – काल – सनातन धर्म – गुरुआज्ञा- निज कर्तव्य पालन के अनुसार चलता हुआ दुर्भाग्यवश या प्रारब्धिक भोगों में दुःखद जीवन पाया हो और जरूरतमन्द तथा असहाय हो उन जनों की सेवा – सहयोग – साहस – साधन मेरे अनुसार प्रदान करो क्योंकि “मैं सबमें हूँ और सभी मुझमें हैं” अर्थात्त् जो प्रकृति की शोभा है चाहे मानव हों, पशु-पक्षी हों, या पादप हों ; इनकी सेवा प्रकृति की साम्य व्यवस्था बनाए रखने के लिए सबको करना चाहिए । इस संकेत को ईश्वरीय आज्ञा मान कर मैंने “अष्टक फ़ाउंडेशन” एक संघ की स्थापना किया जिस नाम के आलोक में मैं अपने मतावलम्बियों के साथ जनकल्याण एवं जनकल्याण के क्षेत्र में वृक्षारोपण – गौपालन – शिक्षादान – औषधिदान – भोजनदान – वस्त्रदान सहित साहस – धनोपार्जन की शिक्षा और सहयोग करने चल पड़ा हूँ ; आप भी मेरे साथ होकर “अष्टक फ़ाउंडेशन” संघ के सहारे जरूरी सज्जन बन कर जगत की, देश की, समाज की, जनों की सेवा करें ।
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>


@endsection