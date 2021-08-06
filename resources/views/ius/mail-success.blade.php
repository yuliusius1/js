@extends('layout.master')
@section('title')
    {{ "Mail Success Page" }}
@endsection 
@section('content')
<!-- noheade -->


<div class="maill-success">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="success-content">
<h1>Awesome!</h1>
<p>Your message sent successfully, We will <br> get back to you asap.</p>
<div class="button">
<a href="index-2.html" class="btn">Back to Home</a>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script>
    window.onload = function () {
      window.setTimeout(fadeout, 500);
    }

    function fadeout() {
      document.querySelector('.preloader').style.opacity = '0';
      document.querySelector('.preloader').style.display = 'none';
    }
  </script>
@endsection