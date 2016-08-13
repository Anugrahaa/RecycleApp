<!DOCTYPE html>
<html>
    <head>
<title>RecycleIt | Find Recyclers</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inventor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="{{ asset('packages/materialize/css/materialize.min.css') }}">

  <!-- Compiled and minified JavaScript -->
  <script src="{{ asset('packages/materialize/js/materialize.min.js') }}"></script>
          
</head>
    <body>
        <div class="row" style="margin-top:10%;">
            <div class="col m1"></div>
            <div class="col m10">
            	WHAT DO YOU WANT TO DISPOSE OF?
            </div>
        </div>
        <form>
        <div class="row">
        	<div class="col m3 s2"></div>
    		<div class="col m6 s5">
        		<input type="text" class="form-control">
        	</div>
        	<div class="col m1 s1">
        		<button type="button" class="btn btn-small" id="button-play-ws">
        			<img src="" alt="Mic"></img>
        		</button>
        	</div>
        </div>
        <div class="row">
        	<div class="col m3 s2"></div>
        	<div class="col m6 s5">
        		<button type="submit" class="btn btn-primary btn-large">
        		SO, WHICH BIN?
        		</button>
        	</div>
        </div>
        </div>
        </div>
    </form>

        <a href="biodegradable" class="col m4">

            <div class="card medium">
              <div class="card-image">
              <img src="{{ asset('home_images/decompose.jpg') }}" alt="Card image">
              <span class="card-title">Card Title</span>
                </div>
              <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div  class="card-action">
              Find out if your product is biodegradable
            </div>
            </div>
          </a>
            <div class="col m2"></div>
            <a href="discard" class="col m4">

            <div class="card medium">
              <div class="card-image">
              <img src="{{ asset('home_images/decompose.jpg') }}" alt="Card image">
              <span class="card-title">Card Title</span>
                </div>
              <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
            </div>
            </a>
    </div>
    </body>
</html>
