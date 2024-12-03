<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Ashtak Foundation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="{{asset('public/front/images/favicon.ico')}}">



  <link rel="stylesheet" href="{{asset('public/front/css/bootstrap.min.css')}}">
  <link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="{{asset('public/front/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('public/front/css/animate.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('public/front/css/venobox.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{asset('public/front/css/styles.css')}}">
</head>


<body> 

@include('front.layouts.header')
@yield('content')
@include('front.layouts.footer')

<a id="backTop">Back To Top</a>

<script src="{{asset('public/front/js/jquery.min.js')}}"></script>
<script src="{{asset('public/front/js/bootstrap.min.js')}}"></script>

<script src="{{asset('public/front/js/wow.min.js')}}"></script>
<script src="{{asset('public/front/js/jquery.backTop.min.js ')}}"></script>
<script src="{{asset('public/front/js/waypoints.min.js')}}"></script>
<script src="{{asset('public/front/js/waypoints-sticky.min.js')}}"></script>
<script src="{{asset('public/front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('public/front/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('public/front/js/venobox.min.js')}}"></script>
<script src="{{asset('public/front/js/custom-scripts.js')}}"></script>
</body>
  
</html>  