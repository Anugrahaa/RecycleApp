<!DOCTYPE html>
<html>
    <head>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inventor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

  <!-- Compiled and minified JavaScript -->
    <script src="{{ asset('packages/materialize/js/materialize.min.js') }}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
        crossorigin="anonymous"></script>

       <style>
       body{
       	overflow-x: hidden;
       }
       .heading{
       		font-family: 'Indie Flower', cursive;
       		font-size:4rem;
       		font-weight: bold;
       		text-align: center;
       		color:black;
       }
       </style>  
</head>
    <body>
    <div class="row" id="loginorsignup" style="min-height:30%;">
    <div id="thebuttons" style="display:none;">
        <button onclick="login()" class="btn col m6 s6 offset-m3 offset-s3 btn-primary btn-medium" id="login">LOG IN
        </button>
        <button onclick="signup()" class="btn col m6 s6 offset-m3 offset-s3 btn-primary btn-medium" id="signup">SIGN UP
        </button>
        </div>

        <div id="loginform" style="display:none;">
        <form method="POST" name="formlogin" id="formlogin">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" id="username" name="username" placeholder="Username">
        <input type="password" id="password" name="password" placeholder="Password">
        <button type="submit" id="loginbutton">Login</button>
        </form>
        </div>

        <div id="signupform" style="display:none;">
        <form method="POST" name="sign-up" id="sign-up">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" name="username" placeholder="Enter Username">
        <input type="text" name="email" placeholder="Enter Email">
        <input type="password" name="password" placeholder="Enter Pasword">
        <button type="submit" id="signupbutton">Sign Up</button>

        </form>
        </div>
        </div>

        <div class="row" style="margin-top:10%;">
            <div class="col m10 s12 offset-m1 heading">
              {{ $details['name'] }}
            </div>
        </div>
        <div class="row">
        {{ $details['address']}} {{$details['landmark']}} 
        </div>
        @foreach($comments as $comment)
        <div class="row">
              {{$comment['username']}}  -  {{$comment['comments']}}
        </div>
        @endforeach
        <div class="row">
        <button class="btn col m6 s6 offset-m3 offset-s3 btn-primary btn-medium" id="Addcomment" onclick="popupdiv()">
        Add a comment!
        </button>
        </div>

<script>
var loginorsignup = document.getElementById('loginorsignup');
var thebuttons = document.getElementById('thebuttons');
var loginform = document.getElementById('loginform');
var signupform = document.getElementById('signupform');

function popupdiv(){
  var value = {!! $value !!};
  alert(value);
  if(value == null){

    thebuttons.style.display = "block";  
  }else {
    addcomment();
  }
}

function login(){
  thebuttons.style.display='none';
  loginform.style.display = 'block';
}
function signup(){
  thebuttons.style.display='none';
  signupform.style.display='block';
}
$(function(){
$('#formlogin').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

$.ajax({  
type: "POST",
url: "/userlogin",
data: $(this).serialize(),
cache: false,
success: function(html) {
alert(html['data']);
},
error: function(data){

        }
})
});
});

</script>
 
        <script src="{{  asset('packages/home/js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    </body>
</html>
