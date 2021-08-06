@extends('layout.master')

@section('content')
@extends('layout.header')


<section class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-12">
                <div class="hero-content">
                    <h4 class="wow fadeInUp" data-wow-delay=".2s">Welcome to My Personal Portfolio Website</h4>
                    <h1 class="wow fadeInUp text-uppercase" data-wow-delay=".4s">My Name is Yulius</h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Find out more about me <br> Let know about me deeper from this website.
                    </p>
                    <div class="button wow fadeInUp" data-wow-delay=".8s">
                        <a href="#" class="btn ">Discover more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="hero-image">
                    <img class="main-image" src="assets/images/hero/hero-image.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>


<div class="services section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Discover more</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">About Me</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Life is to short to do small things</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-6 col-12 wow fadeInUp " data-wow-delay=".2s">
                <div class="single-service">
                    <h4 class="text-title text-start">Hi, I'm Yulius.</h4>
                    <p class="text-justify">I am 20 years old boy who want to be the best version of myself. I am an undergraduated student of Informatics Engineering at Satya Wacana Christian University. I have passion on Website Developer and Software Engineering. </p>
                    <div class="float-end">
                        <a href="#" class="btn btn-about-fill mt-3 shadow"> Download My CV</a>
                        <a href="#" class="btn btn-about-outline mt-3 shadow"> See More</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="single-service">
                    <div class="main-icon">
                        <i class="lni lni-keyword-research"></i>
                    </div>
                    <h4 class="text-title">Digital Marketing</h4>
                    <p>Invest in Bitcoin on the regular or save with one of the highest interest rates on the
                    market.</p>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>


<section class="portfolio-section section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s">Case Study</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s">Our Latest Works</h2>
<p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
 <div class="col-12">
<div class="portfolio-btn-wrapper wow fadeInUp" data-wow-delay=".4s">
<button class="portfolio-btn active" data-filter="*">All</button>
<button class="portfolio-btn" data-filter=".branding">Branding</button>
<button class="portfolio-btn" data-filter=".marketing">Marketing</button>
<button class="portfolio-btn" data-filter=".web">Web Design</button>
<button class="portfolio-btn" data-filter=".graphic">Graphic Design</button>
</div>
</div>
</div>
<div class="row grid">
<div class="col-lg-4 col-md-6 grid-item branding marketing">
<div class="portfolio-item-wrapper">
<div class="portfolio-img">
<img src="assets/images/portfolio/pf-1.jpg" alt="">
</div>
<div class="portfolio-overlay">
<div class="overlay-content">
<span>Branding</span>
<h4>Product Branding</h4>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 grid-item marketing graphic">
<div class="portfolio-item-wrapper">
<div class="portfolio-img">
<img src="assets/images/portfolio/pf-2.jpg" alt="">
</div>
<div class="portfolio-overlay">
<div class="overlay-content">
<span>Graphics Design</span>
<h4>Packaging Design</h4>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 grid-item branding">
<div class="portfolio-item-wrapper">
<div class="portfolio-img">
<img src="assets/images/portfolio/pf-3.jpg" alt="">
</div>
<div class="portfolio-overlay">
<div class="overlay-content">
<span>Branding</span>
<h4>Product Branding</h4>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 grid-item web">
<div class="portfolio-item-wrapper">
<div class="portfolio-img">
<img src="assets/images/portfolio/pf-4.jpg" alt="">
</div>
<div class="portfolio-overlay">
<div class="overlay-content">
<span>Web Development</span>
<h4>Beauty Care Web Apps</h4>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 grid-item graphic">
<div class="portfolio-item-wrapper">
<div class="portfolio-img">
<img src="assets/images/portfolio/pf-5.jpg" alt="">
</div>
<div class="portfolio-overlay">
<div class="overlay-content">
<span>Graphics Design</span>
<h4>Mocup Design</h4>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 grid-item web">
<div class="portfolio-item-wrapper">
 <div class="portfolio-img">
<img src="assets/images/portfolio/pf-6.jpg" alt="">
</div>
<div class="portfolio-overlay">
<div class="overlay-content">
<span>App Development</span>
<h4>Mobile Apps Design</h4>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="intro-video-area section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="inner-content-head">
<div class="inner-content">
<img class="shape1" src="assets/images/video/shape1.svg" alt="#">
<img class="shape2" src="assets/images/video/shape2.svg" alt="#">
<div class="section-title">
<span class="wow zoomIn" data-wow-delay=".2s">Create your own experience</span>
<h2 class="wow fadeInUp" data-wow-delay=".4s">Watch Our intro video</h2>
<p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of
Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
<div class="intro-video-play">
<div class="play-thumb wow zoomIn" data-wow-delay=".2s">
<a href="https://www.youtube.com/watch?v=r44RKWyfcFw&amp;fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM" class="glightbox video"><i class="lni lni-play"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="team section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s">Expert Team</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s">Meet Our Team</h2>
<p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".3s">

<div class="single-team">
<div class="team-image">
<img src="assets/images/team/team4.jpg" alt="#">
</div>
<div class="content">
<h4>Deco Milan
<span>Founder</span>
</h4>
<ul class="social">
<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
 </ul>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".5s">

<div class="single-team">
<div class="team-image">
<img src="assets/images/team/team1.jpg" alt="#">
</div>
<div class="content">
<h4>Liza Marko
<span>Developer</span>
</h4>
<ul class="social">
<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
</ul>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".7s">

<div class="single-team">
<div class="team-image">
<img src="assets/images/team/team2.jpg" alt="#">
</div>
<div class="content">
<h4>John Smith
<span>Designer</span>
</h4>
<ul class="social">
<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
</ul>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".9s">

<div class="single-team">
<div class="team-image">
<img src="assets/images/team/team3.jpg" alt="#">
</div>
<div class="content">
<h4>Amion Doe
<span>Co-Founder</span>
</h4>
<ul class="social">
<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
</ul>
</div>
</div>

</div>
</div>
</div>
</section>


<section class="testimonials style2 section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s">Customer Reviews</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s">Our Testimonials</h2>
<p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row testimonial-slider">
<div class="col-lg-6 col-12 ">

<div class="single-testimonial">
<div class="inner-content">
<div class="quote-icon">
<i class="lni lni-quotation"></i>
</div>
<div class="text">
<p>“A vast number of clients decide to create dedicated software is the
online store. It is nothing but a website with a catalog of products and the
possibility.”</p>
</div>
<div class="author">
<img src="assets/images/testimonial/testi-1.png" alt="#">
<h4 class="name">Somalia D Silva
<span class="deg">Business Manager</span>
</h4>
</div>
</div>
</div>

</div>
<div class="col-lg-6 col-12 ">

<div class="single-testimonial">
<div class="inner-content">
<div class="quote-icon">
<i class="lni lni-quotation"></i>
</div>
<div class="text">
<p>“A vast number of clients decide to create dedicated software is the
online store. It is nothing but a website with a catalog of products and the
possibility.”</p>
</div>
<div class="author">
<img src="assets/images/testimonial/testi-2.png" alt="#">
<h4 class="name">David Warner
<span class="deg">Web Developer</span>
</h4>
</div>
</div>
</div>

</div>
<div class="col-lg-6 col-12 ">

<div class="single-testimonial">
<div class="inner-content">
<div class="quote-icon">
<i class="lni lni-quotation"></i>
</div>
<div class="text">
<p>“A vast number of clients decide to create dedicated software is the
online store. It is nothing but a website with a catalog of products and the
possibility.”</p>
</div>
<div class="author">
<img src="assets/images/testimonial/testi-3.png" alt="#">
<h4 class="name">Jems Gilario
<span class="deg">Graphics Designer</span>
</h4>
</div>
</div>
</div>
 
</div>
<div class="col-lg-6 col-12 ">

<div class="single-testimonial">
<div class="inner-content">
<div class="quote-icon">
<i class="lni lni-quotation"></i>
</div>
<div class="text">
<p>“A vast number of clients decide to create dedicated software is the
online store. It is nothing but a website with a catalog of products and the
possibility.”</p>
</div>
<div class="author">
<img src="assets/images/testimonial/testi-2.png" alt="#">
<h4 class="name">David Warner
<span class="deg">Web Developer</span>
</h4>
</div>
</div>
</div>

</div>
<div class="col-lg-6 col-12 ">

<div class="single-testimonial">
<div class="inner-content">
<div class="quote-icon">
<i class="lni lni-quotation"></i>
</div>
<div class="text">
<p>“A vast number of clients decide to create dedicated software is the
online store. It is nothing but a website with a catalog of products and the
possibility.”</p>
</div>
<div class="author">
<img src="assets/images/testimonial/testi-3.png" alt="#">
<h4 class="name">Jems Gilario
<span class="deg">Graphics Designer</span>
</h4>
</div>
</div>
</div>

</div>
</div>
</div>
</section>


<section class="blog-section section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s">Blogs</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s">Our Latest News</h2>
<p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">

<div class="single-blog-grid">
<div class="blog-img">
<a href="blog-single.html">
<img src="assets/images/blog/blog-1.png" alt="#">
</a>
</div>
<div class="blog-content">
<div class="meta-info">
<a class="date" href="javascript:void(0)"><i class="lni lni-timer"></i> 10 June 2023
</a>
<a class="author" href="javascript:void(0)"><i class="lni lni-user"></i> Anjelio Joly
</a>
</div>
<h4>
<a href="blog-single.html">Branding Involves Developing a Strategy to Creating.</a>
</h4>
<p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod tempor
ividunt dolore.</p>
<div class="button">
<a href="blog-single.html" class="btn">Read More</a>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">

<div class="single-blog-grid">
<div class="blog-img">
<a href="blog-single.html">
<img src="assets/images/blog/blog-2.png" alt="#">
</a>
</div>
<div class="blog-content">
<div class="meta-info">
<a class="date" href="javascript:void(0)"><i class="lni lni-timer"></i> 5 Aug 2023
</a>
<a class="author" href="javascript:void(0)"><i class="lni lni-user"></i> Kumila ksusi
</a>
</div>
<h4>
<a href="blog-single.html">Design is a Plan or The Construction of an
Object.</a>
</h4>
<p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod tempor
ividunt dolore.</p>
<div class="button">
<a href="blog-single.html" class="btn">Read Blog</a>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s">

<div class="single-blog-grid">
<div class="blog-img">
<a href="blog-single.html">
<img src="assets/images/blog/blog-3.png" alt="#">
</a>
</div>
<div class="blog-content">
<div class="meta-info">
<a class="date" href="javascript:void(0)"><i class="lni lni-timer"></i> 25 Dec 2023
</a>
<a class="author" href="javascript:void(0)"><i class="lni lni-user"></i> Alex Jendro
</a>
</div>
<h4>
<a href="blog-single.html">The Data-Driven Approach to Understanding.</a>
</h4>
<p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod tempor
ividunt dolore.</p>
<div class="button">
<a href="blog-single.html" class="btn">Read Blog</a>
</div>
</div>
</div>

</div>
</div>
</div>
</section>


<section class="faq section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s">Faq</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s">frequently asked questions</h2>
<p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
Ipsum available, but the majority have
suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-12 col-12">
<div class="accordion" id="accordionExample">
<div class="accordion-item">
<h2 class="accordion-header" id="heading1">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
<span class="title">Can I cancel my subscription at anytime?</span><i class="lni lni-plus"></i>
</button>
</h2>
<div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu
erat mattis lorem.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
amet ante nec vulputate.</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="heading2">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
<span class="title">Can I change my plan later on?</span><i class="lni lni-plus"></i>
</button>
</h2>
<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor
brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
</p>
<p>
sunt alqua put a bird on it squid single-origin coffee nulla assumenda
shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson
cred nesciunt sapiente ea proident.</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="heading3">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
<span class="title">Will you renew my subscription automatically?</span><i class="lni lni-plus"></i>
</button>
</h2>
<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas expedita,
repellendus est nemo cum quibusdam optio, voluptate hic a tempora facere, nihil
non itaque alias similique quas quam odit consequatur.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-12 xs-margin">
<div class="accordion" id="accordionExample2">
<div class="accordion-item">
<h2 class="accordion-header" id="heading11">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
<span class="title">How many sites can I install the widgets of this app
to?</span><i class="lni lni-plus"></i>
</button>
</h2>
<div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample2">
<div class="accordion-body">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu
erat mattis lorem.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
amet ante nec vulputate.</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="heading22">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
<span class="title">Do you offer any discounts?</span><i class="lni lni-plus"></i>
</button>
</h2>
<div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#accordionExample2">
<div class="accordion-body">
<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor
brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
</p>
<p>
sunt alqua put a bird on it squid single-origin coffee nulla assumenda
shoreditch et. Nihil anim ke ffiyeh helvetica, craft beer labore wes anderson
cred nesciunt sapiente ea proident.</p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="heading33">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
<span class="title">Do I get updates for the app?</span><i class="lni lni-plus"></i>
</button>
</h2>
<div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33" data-bs-parent="#accordionExample2">
<div class="accordion-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas expedita,
repellendus est nemo cum quibusdam optio, voluptate hic a tempora facere, nihil
non itaque alias similique quas quam odit consequatur.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="client-logo bg-white">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-3 col-md-3 col-12 text-center">
<div class="single-logo">
<img src="assets/images/client-logo/graygrids-logo.svg" alt="#">
</div>
</div>
<div class="col-lg-3 col-md-3 col-12 text-center">
<div class="single-logo">
<img src="assets/images/client-logo/lineicons-logo.svg" alt="#">
</div>
</div>
<div class="col-lg-3 col-md-3 col-12 text-center">
<div class="single-logo">
<img src="assets/images/client-logo/ayro-logo.svg" alt="#">
</div>
</div>
<div class="col-lg-3 col-md-3 col-12 text-center">
<div class="single-logo">
<img src="assets/images/client-logo/uideck-logo.svg" alt="#">
</div>
</div>
</div>
</div>
</div>


<section class="call-action">
<div class="container">
<div class="inner-content">
<div class="row align-items-center">
<div class="col-lg-6 col-md-7 col-12">
<div class="text">
<h2>Ready to dive in?
<br> <span>Start your free trial today.</span>
</h2>
</div>
</div>
<div class="col-lg-6 col-md-5 col-12">
<div class="button">
<a href="pricing.html" class="btn">Get started
</a>
<a href="about-us.html" class="btn btn-alt">Learn More
</a>
</div>
</div>
</div>
</div>
</div>
</section>


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
<p class="copyright-text">© 2023 Craft - All Rights Reserved</p>
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
<script src="assets/js/imagesloaded.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/main.js"></script>
<script>

        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

        //============== isotope masonry js with imagesloaded
        imagesLoaded('#container', function () {
            var elem = document.querySelector('.grid');
            var iso = new Isotope(elem, {
                // options
                itemSelector: '.grid-item',
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: '.grid-item'
                }
            });

            let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
            filterButtons.forEach(e =>
                e.addEventListener('click', () => {

                    let filterValue = event.target.getAttribute('data-filter');
                    iso.arrange({
                        filter: filterValue
                    });
                })
            );
        });

    </script>
@endsection