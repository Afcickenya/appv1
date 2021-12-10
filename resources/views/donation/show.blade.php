@extends('layouts.Main') @section('content')

<link rel="stylesheet" href="{{asset('donation/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('donation/css/fontAwesome.css')}}">
<link rel="stylesheet" href="{{asset('donation/css/hero-slider.css')}}">

<link rel="stylesheet" href="{{asset('donation/css/owl-carousel.css')}}">
<script src="{{asset('donation/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('donation/css/templatemo-main.css')}}">

<div class="tabs-content" id="our-story">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="wrapper">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <img src="{{asset('donation/booksj.jpg')}}" width="70%" alt="">
                            <p>
                                Donating For Basic Education & Scholarships Your donation will enable us rescue more children from the streets, rehabilitate them at our Temporary Rescue Centre where they are provided with food, clothing, healthcare, shelter and taught basic life skills;
                                and are finally reintegrated into the society.
                            </p>
                        </div>
                        <div id="tab2">
                            <img src="{{asset('donation/backet.jpg')}}" alt="">
                            <p>Aliquam eu ultrices risus, sed condimentum diam. Duis risus nulla, elementum vitae nisi a, ornare maximus nisl. Morbi et vehicula est. Cras at vulputate justo. Cras eu nulla metus. Ut et pretium velit. Pellentesque at neque
                                tristique dui tempor venenatis.</p>
                        </div>
                        <div id="tab3">
                            <img src="{{asset('donation/pencils.jpg')}}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia ligula est, at venenatis ex iaculis quis. Morbi sollicitudin nulla eget odio pellentesque, sed cursus diam iaculis.</p>
                        </div>
                        <div id="tab4">
                            <img src="{{asset('donation/personal.webp')}}" alt="">
                            <p>Duis risus nulla, elementum vitae nisi a, ornare maximus nisl. Morbi et vehicula est. Cras at vulputate justo. Cras eu nulla metus. Ut et pretium velit. Pellentesque at neque tristique.</p>
                        </div>
                    </section>
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                        <li><a href="#tab1" class="active">Books</a></li>
                        <li><a href="#tab2">Backets</a></li>
                        <li><a href="#tab3">Writing</a></li>
                        <li><a href="#tab4">Personal usage</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-content" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left-text">
                    <h4>Your Donation Can Change Lives</h4>
                    <div class="line-dec"></div>
                    <p>

                        At AfCiC we are a leading child protection, health and development organization that promotes access to equal and sustainable opportunities to children and vulnerable familie
                    </p>
                    <ul>
                        <li>- Praesent porta urna id eros</li>
                        <li>- Curabitur consectetur malesuada</li>
                        <li>- Nam pretium imperdiet enim</li>
                        <li>- Sed viverra arcu non nisi efficitur</li>
                    </ul>
                    <div class="primary-button">
                        <a href="/Donate">Learn More About Donations</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4> Electronic Transfer</h4>
                            <div class="line-dec"></div>
                            <p>


                                For Electronic Fund Transfer <br> Bank: <br> NIC BANK (Kenya) <br> Bank Code: <br> 07000 <br> Swift Code: <br> CBAFKENX <br> Account Name: <br> Action for Children in Conflict <br> Account Number: <br> 1005936264
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4> Cheque Donations
                            </h4>
                            <div class="line-dec"></div>
                            <p>
                                Cheque Donations Make a cheque payable to Action for Children in Conflict On the memo line of the check, please indicate that the donation is for “Action for Children in Conflict” Please mail your check to <br>: P.O. BOX 6439-01000 Thika, Kenya. <br> (call +254
                                722 753 137  <br> to let us know of your donation)
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>Mpesa</h4>
                            <div class="line-dec"></div>
                            <p>
                                <form action="" method="post">
                                    <label for="">Amount</label> <br>
                                    <input type="text" name="phone" id="">
                                             <br> <hr>
                                    <input type="submit" value="Donate" class="btn btn-primary">
                                </form>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item">
                            <h4>Stripe Api</h4>
                            <div class="line-dec"></div>
                            <p>
                                <form action="" method="post">
                                    <input type="submit" value="Donate" class="btn btn-primary">
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="phone" type="text" class="form-control" id="phone" placeholder="Your phone..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="knowus" type="text" class="form-control" id="knowus" placeholder="how did you know about us" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Please give a detailed location of picking up " required=""></textarea>
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

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1641330624443!2d37.0693608037881!3d-1.0375715437445368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4e843493b01f%3A0x6ffa7381f0f7032e!2sAction%20for%20Children%20in%20Conflict!5e0!3m2!1sen!2sus!4v1637671205958!5m2!1sen!2sus"
                        width="100%" height="390" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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