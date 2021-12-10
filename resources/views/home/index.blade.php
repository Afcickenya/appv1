@extends('layouts.Main'); @section('content')
<!---Home slider--->
<div id="main-slider" class="dl-slider">
    <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url('{{asset('frontend/asset/homeslider/1.jpg')}}');"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-left">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="1s">Action</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2s">For Children</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2.5s">In Conflict.</div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="3s">
                                We are a leading child protection, <br> health and development organization <br> that promotes access to equal and <br> sustainable opportunities to children and vulnerable families.
                            </div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="/Donate" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">Donate <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url({{asset('frontend/asset/homeslider/2.jpg')}});"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-center">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-top" data-delay="1s">Our </div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-bottom" data-delay="2s">Focus</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-bottom" data-delay="2.5s">Areas</div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-bottom" data-delay="3s">
                                Our programs focus on the following outcomes: <br> rehabilitation and reintegration economic empowerment,<br> access to justice, education empowerment and climate change and safe environment. <br> The programs are all connected
                                and essential to ending the cycle of poverty.
                            </div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="/Education" class="dl-btn" data-animation="fade-in-bottom" data-delay="3.5s">Focus Areas <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url({{asset('frontend/asset/homeslider/3.jpg')}});"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-right">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="1s"> Our </div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="2s">Mission</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="2.5s">is To</div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="3s">

                                Enhance and support the growth and development of children,<br> young people and their families by facilitating access to justice, <br> education, health, and their psychosocial and economic support. <br> Putting communities
                                at the center and fostering their growth <br> through fair and sustainable opportunities.
                            </div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="/Donate" class="dl-btn" data-animation="fade-in-right" data-delay="3.5s">Donate to us <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- end Home slider--->
<!--- Who we are area--->
<section class="about-section padding">
    <div class="container">
        <div class="row about-wrap">
            <div class="col-lg-6 sm-padding">
                <div class="about-content wow fadeInLeft">
                    <h2>Our Mission</h2>
                    <p>

                        Enhance and support the growth and development of children, young people and their families by facilitating access to justice, education, health, and their psychosocial and economic support. Putting communities at the center and fostering their growth
                        through fair and sustainable opportunities.


                    </p>
                    <a href="/About-afcic" class="default-btn">More About Us</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <ul class="about-promo">
                    <li class="about-promo-item wow fadeInUp">
                        <!-- <i class="flaticon-factory"></i>-->
                        <div>
                            <h3>Who we are</h3>
                            <p>


                                We are a leading child protection, health and development organization that promotes access to equal and sustainable opportunities to children and vulnerable families.
                            </p>
                        </div>
                    </li>
                    <li class="about-promo-item wow fadeInUp" data-wow-delay="300ms">

                        <div>
                            <h3>What we do</h3>
                            <p>


                                We implement projects at the heart of the community aimed at child protection, education empowerment, health and community empowerment.


                            </p>
                        </div>
                    </li>
                    <li class="about-promo-item wow fadeInUp" data-wow-delay="500ms">

                        <div>
                            <h3> Why we do it</h3>
                            <p>

                                Through our programs we are ending the cycle of poverty by empowering children and impacting the community for future generations
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!---end  Who we are area--->

<!---galleryg-->
<section class="team-section bg-gray padding">
    <div class="dots"></div>
    <div class="container">
        <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
            <span>Our</span>
            <h2>Focus Areas</h2>
        </div>
        <div class="row team-wrap box-shadow">
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="team-item">
                    <div class="overlay"></div>
                    <img src="{{asset('frontend/asset/economic/eco1.jpg')}}" alt="team">
                    <div class="team-content">
                        <h3>01</h3>
                        <a href="/Economic">
                          <span> Economic Empowerment</span></a>
                    </div>
                    <ul class="team-social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="team-item">
                    <div class="overlay"></div>
                    <img src="{{asset('frontend/asset/focus/rehab.JPG')}}" alt="team">
                    <div class="team-content">
                        <h3>02</h3>
                       <a href="/Rehab"> <span>
                        Rehabilitation of Families</span></a>
                    </div>
                    <ul class="team-social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="team-item">
                    <div class="overlay"></div>
                    <img src="{{asset('frontend/asset/education/edu3.jpg')}}" alt="team">
                    <div class="team-content">
                        <h3>03</h3>
                       <a href="/Education"> <span>
                        Education Empowerment</span></a>
                    </div>
                    <ul class="team-social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="team-item">
                    <div class="overlay"></div>
                    <img src="{{asset('frontend/asset/climate/climate3.jpg')}}" alt="team">
                    <div class="team-content">
                        <h3>04</h3>
                       <a href="/Climate"> <span>
                             Climate Change</span></a>
                    </div>
                    <ul class="team-social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1641330624443!2d37.0693608037881!3d-1.0375715437445368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4e843493b01f%3A0x6ffa7381f0f7032e!2sAction%20for%20Children%20in%20Conflict!5e0!3m2!1sen!2sus!4v1637671205958!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <a href="https://www.emojilib.com/"></a>
    </div>
    <style>
        .mapouter {
            position: relative;
            text-align: right;
            height: 350px;
            width: 100%;
        }
        
        .gmap_canvas {
            overflow: hidden;
            background: none!important;
            height: 350px;
            width: 100%;
        }
    </style>
</div>
<section class="service-section section-2 bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="service-content wow fadeInLeft">
                    <span>Actionforchildren</span>
                    <h2>MAKE A DIFFERENCE IN A CHILD'S LIFE</h2>
                    <p>
                        Action for Children in Conflict is dedicated to the improvement of the lives of vulnerable children, women and communities by promoting their access to quality education, health, food, safe and clean environment, economic empowerment and the protection of their rights and fundamental freedoms.</p>
                    <a href="/Donate" class="default-btn">Donate today</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="row services-list">
                   
                    <div class="col-md-12 padding-15 offset-top">
                        <div class="service-item box-shadow wow fadeInUp" data-wow-delay="300ms">
                            <div class="fb-page" data-href="https://www.facebook.com/ActionChildren  " data-tabs="timeline" data-width="350" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ActionChildren" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ActionChildren">Action for Children in Conflict</a></blockquote></div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="counter-section padding">
    <div class="container">
        <div class="row counter-wrap">
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="counter-content wow fadeInUp" data-wow-delay="100ms">
                    <div class="counter"><span class="odometer" data-count="100">00</span></div>
                    <h4>Partners Worldwide</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="counter-content wow fadeInUp" data-wow-delay="200ms">
                    <div class="counter"><span class="odometer" data-count="325">00</span></div>
                    <h4>Employees and Stuffs</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="counter-content wow fadeInUp" data-wow-delay="300ms">
                    <div class="counter"><span class="odometer" data-count="10">00</span></div>
                    <h4>Year Of Experience</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="counter-content wow fadeInUp" data-wow-delay="400ms">
                    <div class="counter"><span class="odometer" data-count="554">00</span></div>
                    <h4>Projects Completed</h4>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!--action--->
<section class="content-section padding">
    <div class="container">
        <div class="row content-wrap">
            <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
               <!-- <img class="box-shadow" class="box-shadow" src="img/content-1.jpg" alt="img">-->
               <iframe width="560" height="315" src="https://www.youtube.com/embed/7jdUGCxX7-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="content-info wow fadeInRight" data-wow-delay="300ms">
                    <span>More Focus Area</span>
                    <h2>Legal Aid/ Advocacy</h2>
                    <p>
                        The Kenya Children’s Legal Aid Work (KCLAW) is a specific program by Action for Children in Conflict that seeks to promote access to justice, strengthen the rule of law, promote human rights and significantly reduce all forms of violence in the society.
                    </p>
                    <a href="/Justice" class="default-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--action--->
<!--Arihab-->
<div class="cta-section padding">
    <div class="container">
        <div class="cta-content text-center">
            <span class="wow fadeInUp">Agrihab Project</span>
            <h2 class="wow fadeInUp" data-wow-delay="300ms">Our Agrihab <br>Project</h2>
            <a href="#" class="default-btn wow fadeInUp" data-wow-delay="500ms">Visit</a>
        </div>
    </div>
</div>
<!--arihab--->
<!--action--->
<section class="content-section padding">
    <div class="container">
        <div class="row content-wrap">
            <div class="col-lg-6 sm-padding">
                <div class="content-info wow fadeInRight" data-wow-delay="300ms">
                    <span>Ligal-Aid::Conflict Resolution</span>
                    <h2>Ligal-Aid::Conflict Resolution</h2>
                    <p>
                        We beleive in using alternative dispute resolution to resolve ligal issues as first lineMeasure 
                        these methords include Mediation,Negotiation and Conciliation.
                    </p>
                    <h3>Retigation::</h3>
                    <p>
                        Afcic Represents Victims of gender based  Violence ,Child Protection in ligal matters before the court
                    </p>
                    <h3>Human Rights Advocacy::</h3>
                    <p>
                        For hman rights within descision  making programmes in collaboration with  National Goverment ,The judiciary, The National Police service & Department of Children Services.
                    </p>
                    <h3>Community Sanitisation</h3>
                    <p>
                        Afcic Educates and Trains number of local communities on how to protect human and child rights to human rights violation
                    </p>
                    <a href="#" class="default-btn">Get Free Quote</a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
                <img class="box-shadow" src="{{asset('frontend/asset/education/edu8.jpg')}}" alt="img">
            </div>
        </div>
    </div>
</section>

<!--action--->


@endsection