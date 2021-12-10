@extends('layouts.MainNav') @section('content')

<link rel="stylesheet" href="{{asset('donation/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('donation/css/fontAwesome.css')}}">
<link rel="stylesheet" href="{{asset('donation/css/hero-slider.css')}}">

<link rel="stylesheet" href="{{asset('donation/css/owl-carousel.css')}}">
<script src="{{asset('donation/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('donation/css/templatemo-main.css')}}">
<section class="banner-area relative" id="home" style="background-image: url('{{asset('frontend/child/child7.jpg')}}')">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Donation
                </h1>
                <p class="text-white link-nav"><a href="">Home </a> <span class="lnr lnr-arrow-right"></span><a href="">donation </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> make donation</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->




<div class="service-content" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-text">
                    <h4>Dear Donors</h4>
                    <p>

                        Thank you for your generous gift to Action for children in Conflict. We are thrilled to have your support. Through your donation we have been able to continue working towards the improvement of the lives of vulnerable children. You truly make the difference
                        for us, and we are extremely grateful!
                    </p>
                    <div class="line-dec"></div>
                    <p>€15 will provide sanitary packs for 1 year for a vulnerable girl
                    </p>
                    <ul>
                        <li>- €5 will provide 10 vulnerable pupils with a meal in the AfCiC School Nutrition Support Programme</li>
                        <li>- €20 will provide a rescued child with a back-to-school package </li>
                        <li>- €200 will cater for the rescue, rehabilitation and reintegration of a rescued street child </li>

                        <li>- €20 will provide a vulnerable family (5 members) with a food package to last a week</li>
                    </ul>
                    <div class="primary-button">
                        <a href="/donor/show">Donate Here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>Patnerships</h4>
                            <div class="line-dec"></div>
                            <p>
                                You can make a difference by patnering with us on various projects and programmes
                                <a href="/Partnership">Be our Partner</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4> Monetary</h4>
                            <div class="line-dec"></div>
                            <p>

                                Your donation will help in equipment and supplies required in our programmes
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4> Volunteer</h4>
                            <div class="line-dec"></div>
                            <p>

                                Our volunteer programme offers a tailor made volunteer experience
                                <a href="/Volunteer">Volunteer
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>social media ambassador</h4>
                            <div class="line-dec"></div>
                            <p>

                                get involved by agreeing to donate your voice in raising awareness of AfCiC.
                                <a href="/Social-ambassador">View</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--some more-->

<div class="tabs-content" id="our-story">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="wrapper">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <img src="{{asset('donation/img/d1.jpeg')}}" alt="">
                            <p>
                                Donating For Basic Education & Scholarships Your donation will enable us rescue more children from the streets, rehabilitate them at our Temporary Rescue Centre where they are provided with food, clothing, healthcare, shelter and taught basic life skills;
                                and are finally reintegrated into the society.
                            </p>
                        </div>
                        <div id="tab2">
                            <img src="{{asset('donation/img/d7.jpg')}}" alt="">
                            <p>
                                Donating For New School Building and school supplies Increase the number of enrollment of children in pre-primary, primary and secondary schools.
                            </p>
                        </div>
                        <div id="tab3">
                            <img src="{{asset('donation/img/d8.jpg')}}" alt="">
                            <p>
                                Dear Donors Thank you for your generous gift to Action for children in Conflict. We are thrilled to have your support. Through your donation we have been able to continue working towards the improvement of the lives of vulnerable children. You truly make
                                the difference for us, and we are extremely grateful!
                            </p>
                        </div>
                        <div id="tab4">
                            <img src="{{asset('donation/img/d6.jpg')}}" alt="">
                            <p>
                                Donation For Food Supplies Your donation of 1 £ (Euro) feeds one child in school for 1 (one) month. Therefore, 12 £ (Euros) can support a child in school for a whole year and make such a huge difference in a child’s life. For Children boarding at the
                                school, a donation of 530 £ (Euros) can help educate and maintain a child for a whole year!
                            </p>
                        </div>
                    </section>
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                        <li><a href="#tab1" class="active">A</a></li>
                        <li><a href="#tab2">B</a></li>
                        <li><a href="#tab3">C</a></li>
                        <li><a href="#tab4">D</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<script src="{{asset('donation/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
</script>
<script src="{{asset('donation/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('donation/js/plugins.js')}}"></script>
<script src="{{asset('donation/js/main.js')}}"></script>
<script>
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
</script>

<script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>
@endsection