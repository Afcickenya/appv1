@extends('layouts.Main')
@section('content')
    

<section class="service-section bg-grey padding">
    <div class="dark-bg"></div>
    <div class="section-heading dark-background text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
        <span>Center</span>
        <h2>School Feeding Program</h2>
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
                            Keeping children away from the streets
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
                        <p>Improving the nutritional status of the children attending school at St.Patricks</p>
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
                        <p>Monitoring with the school management in collaboration with the board of management at the organisation</p>
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
                        <p>Improving access,enrollment,retention,progression and successful completion of the children attending school thereby improving their grades</p>
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
                    <h2>  Main Objectives</h2>
                    <p>
                        
                        a. Providing meals at St. Patrick’s with the help of the local women who have been employed to do so.  <br>
                        
                        b. Monitoring with the school management in collaboration with the board of management at the organisation. <br>
                        
                        c. Holding debates annually with the participation of other schools. This increases their confidence, get a chance to interact with other children, develop and nurture debate skills, encourages sharing. This also creates a child friendly environment for the school going children. <br>
                        
                        d. Child rights training where they are taught,sensitized and fully become aware of their right  <br>

                    
                    </p>
                    <p>
                        ::School Dropout Prevention Programme
                        Action for Children in Conflict’s Education Empowerment Programme seeks to prevent children from dropping out of school, improve education levels in public primary schools, and reduce the number of street children. 
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