@extends('layouts.Main')
@section('content')
    

<section class="service-section bg-grey padding">
    <div class="dark-bg"></div>
    <div class="section-heading dark-background text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
        <span>Temporary Rescue Center</span>
        <h2>Main Objectives</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div id="service-carousel" class="service-carousel box-shadow owl-carousel">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-3d-printer"></i>
                        </div>
                        <h3>1.</h3>
                        <p>
                             Rescue,rehabilitate,resocialize street and vulnerable children
                          </p>
                        <a href="#" class="read-more">Read More</a>
                        <div class="overlay-icon">
                            <i class="flaticon-3d-printer"></i>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-3d-printer"></i>
                        </div>
                        <h3>2</h3>
                        <p>Re-integrate the children with their families and back in school</p>
                        <a href="#" class="read-more">Read More</a>
                        <div class="overlay-icon">
                            <i class="flaticon-3d-printer"></i>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-3d-printer"></i>
                        </div>
                        <h3>3</h3>
                        <p>Provide a homely environment for the children</p>
                        <a href="#" class="read-more">Read More</a>
                        <div class="overlay-icon">
                            <i class="flaticon-assembly-line"></i>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-3d-printer"></i>
                        </div>
                        <h3>4</h3>
                        <p>Equip boys with basic life and literacy skills</p>
                        <a href="#" class="read-more">Read More</a>
                        <div class="overlay-icon">
                            <i class="flaticon-conveyor"></i>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-section padding">
    <div class="container">
        <div class="row content-wrap">
            <div class="col-lg-6 sm-padding">
                <div class="content-info wow fadeInRight" data-wow-delay="300ms">
                    <span></span>
                    <h2>Progam Activities</h2>
                    <p>
                    
                        a) Provide accommodation for the children.  <br>
                        
                        b) To educate and equip the children with life skills. <br>
                        
                        c) To equip the children with self-expression skills which in turn improves their self-esteem. <br>
                        
                        d) To detoxify the children and mitigate the impact of long-term use of alcoholic and drugs substance. <br>
                        
                        e) Education which for instance basic numeracy and literacy skills, fashion and art, photography, videography. <br>
                        
                        f) Sports, education, educational entertainment for example dance, theater and music. <br>
                        
                        g) Provide counselling and cater for spiritual, and psychological needs for the children and families <br>
                        
                        h) Reintergration and home visits <br>
                    
                    </p>

                    <a href="/Donate" class="default-btn">Donate </a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
                <img class="box-shadow" src="{{asset('frontend/asset/homeslider/1.jpg')}}" alt="img">
            </div>
        </div>
    </div>
</section>
@endsection