@extends('layouts.Main')
@section('content')
<section class="project-single-section padding">
    <div class="container">
        <div class="row project-single-wrap align-items-center">
            <div class="col-md-6 sm-padding">
                <div id="project-single-carousel" class="project-single-carousel box-shadow owl-carousel">
                    <div class="single-carousel">
                        <img src="{{asset('frontend/asset/education/edu5.jpg')}}" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="{{asset('frontend/asset/education/edu1.jpg')}}" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="{{asset('frontend/asset/education/edu4.jpg')}}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-padding">
                <div class="project-single-content">
                    <h2>About The Education Empowerment Program</h2>
                    <p>
                        With a regional fertility rate of 5.1, compared to a global average of 2.4, and a 2030 projected population size of 1.5 billion people, there needs to be an increase in the supply of educational opportunities for all children in order to meet the growing demand in sub-Saharan Africa.
                    </p>
                    <ul class="project-details">
                        <span>What The Programme Entails</span>: 
                         <p>
                            foundational years of primary school has adverse implications for knowledge and skills acquisition in later classes and for the long-term development and economic growth. With the current trend, it emerges that as a country
                               <a href="/Education-entail" class="btn btn-primary">Read More</a>
                         </p>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-lg-8 sm-padding">
                <div class="row">
                    <div class="col-lg-12 padding-15">
                        <div class="blog-item box-shadow">
                            <div class="blog-thumb">
                                <img src="{{asset('frontend/asset/education/edu1.jpg')}}" alt="post">
                                <span class="category"><a href="#">Education</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="/School-Sponsership">School Sponsorship</a></h3>
                                <p>
                                    ur interventions target working children, children affected by HIV, children from child headed households, orphans, street children
                                </p>
                                <a href="/School-Sponsership" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 padding-15">
                        <div class="blog-item box-shadow">
                            <div class="blog-thumb">
                                <img src="{{asset('frontend/asset/feed/1.JPG')}}" alt="post">
                                <span class="category"><a href="#">Education</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="/School-Feeding">School Feeding</a></h3>
                                <p>
                                    Additionally, AfCiC, in efforts to ensure street and vulnerable children access education and are kept
                                </p>
                                <a href="/School-Feeding" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 padding-15">
                        <div class="blog-item box-shadow">
                            <div class="blog-thumb">
                                <img src="{{asset('frontend/asset/homeslider/1.jpg')}}" alt="post">
                                <span class="category"><a href="#">Education</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="/School-clubs">School clubs.</a></h3>
                                <p>
                                    The programme has also created a platform for children to learn to speak out concerning different issues affecting them through Child Rights Clubs in primary schools. Children have a right to talk and be heard, and action taken to respond
                                </p>
                                <a href="/School-clubs" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination-wrap text-left mt-30">
                    <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                    <li><a href="/Economic" class="active">Next</a></li>
                   <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 padding-15">
                <div class="sidebar-wrap">
                    <div class="widget-content">
                        <form action="#" class="search-form">
                            <input type="text" class="form-control" placeholder="Type here">
                            <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget-content">
                        <h4>Quick Links</h4>
                        <ul class="widget-links">
                            <li><a href="/Team">Our Team</a></li>
                            <li><a href="/Centers">Our Centers</a></li>
                            <li><a href="/Contact">Contact Us</a></li>
                            <li><a href="/Friends">Young Friends</a></li>
                           
                        </ul>
                    </div>
                    <div class="widget-content">
                        <h4>Recent Photos</h4>
                        <ul class="thumb-post">
                            <li><img src="{{asset('frontend/asset/education/edu2.jpg')}}" alt="post"><a href="#"></a></li>
                            <li><img src="{{asset('frontend/asset/education/edu3.jpg')}}" alt="post"><a href="#">.</a></li>
                            <li><img src="{{asset('frontend/asset/education/edu5.jpg')}}" alt="post"><a href="#"> </a></li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <h4>Tag Clouds</h4>
                        <ul class="tags">
                            <li><a href="#"></a></li>
                           
                            <li><a href="#">Factory</a></li>
                            <li><a href="#">Material</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection