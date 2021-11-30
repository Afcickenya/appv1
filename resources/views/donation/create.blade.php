@extends('layouts.MainNav')@section('content')
    
<link rel="stylesheet" href="{{asset('donation/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('donation/css/fontAwesome.css')}}">
<link rel="stylesheet" href="{{asset('donation/css/hero-slider.css')}}">
<link rel="stylesheet" href="{{asset('donation/css/templatemo-main.css')}}">
<link rel="stylesheet" href="{{asset('donation/css/owl-carousel.css')}}">
<section class="banner-area relative" id="home" style="background-image: url('{{asset('frontend/child/child7.jpg')}}')">
  <div class="overlay overlay-bg"></div>
  <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
              <h1 class="text-white">
                 Donation form
              </h1>
              <p class="text-white link-nav"><a href="">Home </a> <span class="lnr lnr-arrow-right"></span><a href="">donation </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> make donation</a></p>
          </div>
      </div>
  </div>
</section>
<!-- End banner Area -->
<div class="parallax-content contact-content" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                    <div class="row">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="phone/contact " required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="descriptive mess on pic up location" required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Donate</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map">
                <!-- How to change your own map point
                       1. Go to Google Maps
                       2. Click on your location point
                       3. Click "Share" and choose "Embed map" tab
                       4. Copy only URL and paste it within the src="" field below
                -->

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1648294888105!2d37.0686205137349!3d-1.0370190992435426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4e843493b01f%3A0x6ffa7381f0f7032e!2sAction%20for%20Children%20in%20Conflict!5e0!3m2!1sen!2ske!4v1635467046710!5m2!1sen!2ske" width="100%" height="390" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
