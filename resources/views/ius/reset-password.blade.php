@extends('layout.master')
@section('title')
    {{ "Reset Password Page" }}
@endsection 
@section('content')
@extends('layout.header')


<div class="breadcrumbs">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 offset-lg-3 col-md-12 col-12">
<div class="breadcrumbs-content">
<h1 class="page-title">Reset Password</h1>
<ul class="breadcrumb-nav">
<li><a href="index-2.html">Home</a></li>
<li>Reset Password</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="account-login section">
<div class="container">
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
<form class="card login-form inner-content" method="post">
<div class="card-body">
<div class="title">
<h3>Reset Password</h3>
<p>Need to reset your password? No problem! Just enter your email & click the button
below.</p>
</div>
<div class="input-head">
<div class="form-group input-group">
<label><i class="lni lni-envelope"></i></label>
<input class="form-control" type="email" id="reg-email" placeholder="Enter your email" required>
</div>
</div>
<div class="button" style="margin-top: 20px;">
<button class="btn" type="submit">Send Rest Link</button>
</div>
<h4 class="create-account">Login to your account <a href="signin.html">Click here</a>
</h4>
</div>
 </form>
</div>
</div>
</div>
</div>


<footer class="footer section">

<div class="footer-top">
<div class="container">
<div class="inner-content">
<div class="row">
<div class="col-lg-4 col-md-6 col-12">

<div class="single-footer f-about">
<div class="logo">
<a href="index-2.html">
<img src="assets/images/logo/white-logo.svg" alt="#">
</a>
</div>
<p>Making the world a better place through constructing elegant hierarchies.</p>
<h4 class="social-title">Follow Us On:</h4>
<ul class="social">
<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
</ul>
</div>

</div>
<div class="col-lg-2 col-md-6 col-12">

<div class="single-footer f-link">
<h3>Solutions</h3>
<ul>
<li><a href="javascript:void(0)">Marketing</a></li>
<li><a href="javascript:void(0)">Analytics</a></li>
<li><a href="javascript:void(0)">Commerce</a></li>
<li><a href="javascript:void(0)">Insights</a></li>
</ul>
</div>

</div>
<div class="col-lg-2 col-md-6 col-12">

<div class="single-footer f-link">
<h3>Support</h3>
<ul>
<li><a href="javascript:void(0)">Pricing</a></li>
<li><a href="javascript:void(0)">Documentation</a></li>
<li><a href="javascript:void(0)">Guides</a></li>
<li><a href="javascript:void(0)">API Status</a></li>
</ul>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-footer newsletter">
<h3>Subscribe</h3>
<p>Subscribe to our newsletter for the latest updates</p>
<form action="#" method="get" target="_blank" class="newsletter-form">
<input name="EMAIL" placeholder="Email address" required="required" type="email">
<div class="button">
 <button class="sub-btn"><i class="lni lni-envelope"></i>
</button>
</div>
</form>
</div>

</div>
</div>
</div>
</div>
</div>


<div class="copyright-area">
<div class="container">
<div class="inner-content">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<p class="copyright-text">© 2023 CryptoLand - All Rights Reserved</p>
</div>
<div class="col-lg-6 col-md-6 col-12">
<p class="copyright-owner">Designed and Developed by <a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a>
</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="scroll-top">
<i class="lni lni-chevron-up"></i>
</a>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection