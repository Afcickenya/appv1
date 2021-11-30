@extends('layouts.Main')
@section('content')
<section class="project-single-section padding">
    <div class="container">
        <div class="row project-single-wrap align-items-center">
            <div class="col-md-6 sm-padding">
                <div id="project-single-carousel" class="project-single-carousel box-shadow owl-carousel">
                    <div class="single-carousel">
                        <img src="{{asset('frontend/asset/climate/climate1.jpg')}}" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="{{asset('frontend/asset/climate/climate3.jpg')}}" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="{{asset('frontend/asset/climate/climate7.jpg')}}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-padding">
                <div class="project-single-content">
                    <h2> Climate Change</h2>
                    <p>
                       
As climate change is affecting every country on every continent, Kenya is no exception. As such, Kenya has in the last few years experienced changed weather patterns that have resulted in long periods of drought and erratic rainfalls that result floods hence in food shortages and food insecurity in the country.
 Therefore, the need for solutions that will reduce carbon emissions and increase adaptation efforts are eminent.
                       
                    </p>
                    <ul class="project-details">
                        <span> MAKE A DIFFERENCE IN A CHILD'S LIFE::</span>
                       
We envision a world where all children access and attain equal opportunities. Your partnership and donations go a long way in 
bringing hope and changing the lives of millions of children in Kenya. Be a hero.
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="work-pro-section padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="work-pro-item text-center">
                    <span class="number">1</span>
                    <div class="number-line"></div>
                    <h3>  TREE PLANTING</h3>
                    <p>
                        TREE PLANTING
                        Action for Children thus recognizes this need and works ... <br>
                        AfCiC,  <a href=" Climate-Change" class=" btn btn-primary">Read More</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="work-pro-item text-center">
                    <span class="number">2</span>
                    <div class="number-line"></div>
                    <h3> RUNNING AWARENESS CAMPAIGNS</h3>
                    <p>
                       
Additionally, AfCiC runs awareness... <br>
                <a href=" Climate-Change" class=" btn btn-primary">Read More</a>
               
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="work-pro-item text-center">
                    <span class="number">3</span>
                    <div class="number-line"></div>
                    <h3>Specialized Projects</h3>
                    <p>We are committed building a sustainable future fostering a ... <br>
                        <a href=" Climate-Change" class=" btn btn-primary">Read More</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="work-pro-item text-center">
                    <span class="number">4</span>
                    <h3> ENCOURAGING RECYCLING</h3>
                    <p>
                       
Electronic material, usually named as e-waste, is one of the fastest growing ... <br>
<a href=" Climate-Change" class=" btn btn-primary">Read More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection