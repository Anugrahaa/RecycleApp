<!DOCTYPE html>
<html>
    <head>
<title>RecycleIt| Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inventor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  <style>
    .clickable:hover{
        opacity:0.9;
        color:white;
    }
    .clickable{
      background-color:#d87967;
      color:white;
      text-transform: uppercase;
      text-align:center;
    }
  </style>
</head>
    <body>
        <div class="row" style="height:80%; margin-top:10%;">
            <div class="col m1"></div>
        <div href="biodegradable" class="col m4">
            <div class="card medium">
              <div class="card-image">
              <img src="{{ asset('home_images/decompose.jpg') }}" alt="Card image" style="object-fit:contain;">
              <span class="card-title">Card Title</span>
                </div>
              <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <a class="clickable" href="biodegradable">
              <div  class="card-action">
              Which bin do I toss it in?
            </div>
            </a>
            </div>
          </div>
            <div class="col m2"></div>
            <div href="discard" class="col m4">

            <div class="card medium">
              <div class="card-image" style="text-align:center; vertical-align:middle;">
              <img src="{{ asset('home_images/discard.jpg') }}" alt="Where to recycle" style="object-fir:contain;">
              <span class="card-title">Card Title</span>
                </div>
              <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <a class="clickable" href="biodegradable">
            <div class="card-action">
            Where do I recycle?
            </div>
          </a>
            </div>
            </div>
    </div>
        <script src="{{  asset('packages/home/js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    </body>
</html>
