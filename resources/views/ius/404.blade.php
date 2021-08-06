@extends('layout.master')
@section('title')
    {{ "404 Not Found Page" }}
@endsection 
@section('content')



<div class="error-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="error-content">
          <h1>404</h1>
          <h2>The page you were looking for<br> doesn't exist anymore.</h2>
          <p>It might have been moved or deleted.</p>
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