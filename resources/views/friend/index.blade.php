@extends('layouts.Main')
@section('content')
<style>
    .container-1 {
  margin: 20px 40px;
  color: white;
}

.heading {
  font-size: 60px;
  color: white;
}

.heading span {
  font-style: italic;
  font-size: 30px;
}

.profiles {
  display: flex;
  justify-content: space-around;
  margin: 20px 80px;
}

.profile {
  flex-basis: 260px;
}

.profile .profile-img {
  height: 260px;
  width: 260px;
  border-radius: 50%;
  filter: grayscale(0);
  
  cursor: pointer;
  transition: 400ms;
}

.profile:hover .profile-img {
  filter: grayscale(100%);
}

.user-name {
  margin-top: 30px;
  font-size: 25px !important;
}

.profile h5 {
  font-size: 18px;
  font-weight: 100;
  letter-spacing: 3px;
  color: #ccc;
}

.profile p {
  font-size: 16px;
  margin-top: 20px;
  text-align: justify;
}

@media only screen and (max-width: 1150px) {
  .profiles {
    flex-direction: column;
  }

  .profile {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .profile p {
    text-align: center;
    margin: 20px 60px 80px 60px;
    font-size: 20px;
  }
}

@media only screen and (max-width: 900px) {
  .heading {
    font-size: 40px;
    color: white;
    text-align: center;
  }

  .heading span {
    font-size: 15px;
  }

  .profiles {
    margin: 20px 0;
  }

  .profile p {
    margin: 20px 10px 80px 10px;
  }
}

</style>

<section class="page-header padding">
  <div class="container">
      <div class="page-content text-center">
          <h2>young Friends of Afcic</h2>
          <p>
            
          </p>
      </div>
  </div>
</section>
<link rel="stylesheet" href="{{asset('team/css/style.css')}}">
<!-- start banner Area -->


<!-- End banner Area -->
<div class="main">


    <div class="container-main">
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{asset('team/images/3.jpg')}}" alt="">
                </div>
                <div class="contentBx">
                    <h6><a href="/Friends/Diana">Diana Kemunto
                </a></h6>
                    <p>
                      My name is Diana Kemunto, a Teacher, social worker and a mentor. I joined Action for Children in Conflict in the year 2021. I was 
                        <a href="/Friends/Diana">learn more</a>
                    </p>
                </div>
                <!--
              <div class="sci">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>-->
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{asset('team/images/3.jpg')}}" alt="">
                </div>
                <div class="contentBx">
                    <h6><a href="/Friends/Priscila">PRISCILA MUMBI</a></h6>
                    <p>
                       
 
                    I am Priscilla Mumbi a specialist in Public health.
                     Being in a revolutionary world mankind is likely to be curbed with emerging and.. . <br>
                        <a href="/Friends/Priscila">Read more</a>
                    </p>
                </div>
                <!--
              <div class="sci">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>-->
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{asset('team/images/3.jpg')}}" alt="">
                </div>
                <div class="contentBx">
                    <h6><a href="/Friends/Eric"> ERIC MAINA
                </a></h6>
                    <p>
                     
                     
                      I am Eric Maina, an ICT Professional, I joined AfCiC  in the Year 2021 as an intern, I was impressed by the good deeds of humanity done  <a href="/Friends/Eric">Read more</a>
                    </p>
                </div>
                <!--
              <div class="sci">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>-->
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{asset('team/images/3.jpg')}}" alt="">
                </div>
                <div class="contentBx">
                    <h6><a href="/Friends/Andrew">ANDREW MWANGI</a></h6>
                    <p>
                      


My name is Andrew Mwangi an accountant and an auditor.
 I joined AfCiC in August 2021 as a finance intern.  <a href="/Friends/Andrew">Read more</a>
                    </p>
                </div>
                <!--
              <div class="sci">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>-->
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{asset('team/images/3.jpg')}}" alt="">
                </div>
                <div class="contentBx">
                    <h6><a href="/Friends/Sandra">SANDRA KABURU
                   
                      
                </a></h6>
                    <p>
                      MASS COMMUNICATION <a href="/Friends/Sandra">Read more</a>
                    </p>
                </div>
                <!--
              <div class="sci">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>-->
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="{{asset('team/images/3.jpg')}}" alt="">
                </div>
                <div class="contentBx">
                    <h6><a href="/Friends/Lilian">LILIAN ADHIAMBO</a></h6>
                    <p>
                  
My name is Lillian Atieno, a volunteer at AFCIC and a strong believer of the saying, "the best way to find yourself is 

                        <a href="/Friends/Lilian">Read More</a>
                    </p>
                </div>
                <!--
              <div class="sci">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>-->
            </div>
        </div>

    </div>
</div>
<div class="container">
   

    <div class="profiles">
      <div class="profile">
        <img src="{{asset('young/IMG-20211111-WA0000.jpg')}}" class="profile-img">

        <h3 class="user-name text-oran">Brillian Kanyuira</h3>
        <h5 ></h5>
        <p>
            
            My name is Brillian Njoki, I am a Law student at Kenyatta University Parklands Campus. In AFCIC I worked as a legal intern- providing free legal advice to parents
            <a href="/Friends/Brillian" class="btn btn-primary">Learn More</a>
        </p>
      </div>
      <div class="profile">
        <img src="{{asset('young/f6.jpeg')}}" class="profile-img">

        <h3 class="user-name text-oran"> Phoustine Wafula</h3>
        <h5></h5>
        <p>
           
            My name is Phostine Naliaka  Wafula. I studied bachelor of development studies at Mount Kenya University.
            
            I volunteered
            <a href="/Friends/Wafula" class="btn btn-primary">Learn More</a>
        </p>
      </div>
      <div class="profile">
        <img src="{{asset('young/f7.jpeg')}}" class="profile-img">

        <h3 class="user-name text-oran">Miriam Wacuka</h3>
        <h5></h5>
        <p>
            
            As a young budding Advocate of the High Court of Kenya, AFCIC has offered me numerous platforms to work with them in achieving their vision and mission of ensuring
            <a href="/Friends/Miriam" class="btn btn-primary">Learn More</a>
        </p>
      </div>
      
    </div>
  </div>
</div>
<div class="container">
    

    <div class="profiles">
      <div class="profile">
        <img src="{{asset('young/f1.jpeg')}}" class="profile-img">

        <h3 class="user-name text-oran">Prudence Karanja AKA Modo</h3>
        <h5 ></h5>
        <p>
            My name is Prudence Karanja, I am International realtions and diplomacy student at Maseno University and
            <a href="/Friends/Prudence" class="btn btn-primary">Learn More</a>
        </p>
      </div>
      <div class="profile">
        <img src="{{asset('young/f2.jpg')}}" class="profile-img">

        <h3 class="user-name text-oran">Cynthia Ngunjiri</h3>
        <h5></h5>
        <p>
            My name is Cynthia i am a  Gender and Development studies graduate from Kenyatta University. I worked as a project management intern 
            <a href="/Friends/Cynthia" class="btn btn-primary">Learn More</a>
        </p>
      </div>
      <div class="profile">
        <img src="{{asset('young/f4.jpeg')}}" class="profile-img">

        <h3 class="user-name text-oran">Caroline Mugo</h3>
        <h5></h5>
        <p>
            My name is Caroline Mugo , I am a law student  at Jomo Kenyatta University of Agriculture and Technology (Karen campus). For my legal aid
            <a href="/Friends/Caroline" class="btn btn-primary">Learn More</a>
        </p>
      </div>
      
    </div>
  </div>
</div>

@endsection