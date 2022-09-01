<!doctype html>
<html lang="en">
<head>
<title>Sign Up 10</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/signup.css">
<script nonce="0c32f123-c5f9-413d-8ad5-1ffda2f954bf">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">Sign Up ST Global</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="wrap d-md-flex">
<div class="text-wrap p-4 p-lg-5 d-flex img d-flex align-items-end" style="background-image: url(images/login.jpg);">
<div class="text w-100">
<h2 class="mb-4">Welcome to signup form</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
</div>
</div>
<div class="login-wrap p-4 p-md-5">
<h3 class="mb-3">Create an account</h3>
<form method="POST" action="{{ route('data_store') }}" class="signup-form">
@csrf
<div class="row">
<div class="col-md-12">
<div class="form-group d-flex align-items-center">
<label class="label" for="name">Full Name</label>
<input type="text" class="form-control"name="name" placeholder="Full Name">
</div>
</div>
<div class="col-md-12">
<div class="form-group d-flex align-items-center">
<label class="label" for="email">Email Address</label>
<input type="text" class="form-control" name="email" placeholder="johndoe@email.com">
</div>
</div>
<div class="col-md-12">
<div class="form-group d-flex align-items-center">
<label class="label" for="phone">Phone no.</label>
<input type="text" class="form-control" name="phone" placeholder="+088">
</div>
</div>
<div class="col-md-12">
<div class="form-group d-flex align-items-center">
<label class="label" for="password">Password</label>
<input type="password" class="form-control" name="password" placeholder="Password">
</div>
</div>

<div class="col-md-12 my-4">
<div class="form-group">
<div class="w-100">
<label class="checkbox-wrap checkbox-primary">I agree all statements in terms of service
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<button type="submit" class="btn btn-secondary submit p-3">Create an account</button>
</div>
</div>
</div>
</form>
<div class="social-wrap">
<p class="or">
<span>or</span>
</p>
<p class="mb-3 text-center">Signup with this services</p>
<p class="social-media d-flex justify-content-center">
<a href="#" class="social-icon google d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
<a href="#" class="social-icon facebook d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
<a href="#" class="social-icon twitter d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
</p>
</div>
<div class="w-100 text-center">
<p class="mt-4">I'm already a member! <a href="#signin">Sign In</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"742f66a4da5149c0","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
