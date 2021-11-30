@extends('layouts.Main') @section('content')
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-lg-8 padding-15">
                <div class="blog-single-wrap">
                    <div class="blog-thumb">
                        <img src="{{asset('frontend/asset/logos/main.jpg')}}" alt="img">
                    </div>
                    <div class="blog-single-content">
                        <h2><a href="#">Access to Justice Legal Aid Programme (AJLAP)</a></h2>
                        <ul class="single-post-meta">
                            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
                            <li><i class="fa fa-calendar"></i> <a href="#">19 Feb, 2019</a></li>
                            <li><i class="fa fa-comments"></i> <a href="#">2 Comments</a></li>
                        </ul>
                        <p>

                            Access to Justice Legal Aid Programme (AJLAP) is a specific program by Action for Children in Conflict that seeks to promote access to justice, strengthen the rule of law, promote human rights and significantly reduce all forms of violence in the society.
                        </p>
                        <blockquote>
                            <div class="dots"></div>
                            <p>
                                MAKE A DIFFERENCE IN A CHILD'S LIFE We envision a world where all children access and attain equal opportunities. Your partnership and donations go a long way in bringing hope and changing the lives of millions of children in Kenya. Be a hero.
                            </p>
                            <span class="quoter">- AFCIC</span>
                        </blockquote>
                        <p>
                            AIMS OF AJLAP: To offer legal aid services in children matters ranging from custody and maintenance to land and succession issues. To be a major policy and legislation influencer on children rights issues both at national and county levels of government.
                            To inform and create awareness on issues of child rights To promote access to justice for and by children victims and/or offenders
                        </p>
                        <ul class="post-tags">

                            <li><a href="#">Contact </a></li>
                        </ul>
                        <div class="author-box bg-grey">
                            <img src="{{asset('frontend/asset/logos/main.jpg')}}" width="50%" alt="img">
                            <div class="author-info">
                                <h3>Quote Of the Day</h3>
                                <p>
                                    "The cry of the poor is not always just, but if you don't listen to it, you will never know what justice is."
                                </p>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#"><i class="ti-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-navigation row">
                            <div class="col prev-post">
                                <a href="#"><i class="ti-arrow-left"></i>Prev Post</a>
                            </div>
                            <div class="col next-post">
                                <a href="#">Next Post <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="comments-area">
                            <div class="comments-section">
                                <h3 class="comments-title">Find out what to do when facing legal issues</h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        <div id="div-comment-1">
                                            <div class="comment-thumb">
                                                <div class="comment-img"><img src="{{asset('frontend/asset/icons/dom3.png')}}" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>CHILD PROTECTION <span class="comments-date">|</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>
                                                            What to do for the protection of children from violence, abuse and neglect.
                                                        .</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="/Child-Protection"><span class="btn btn-primary">Read More</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div>
                                                    <div class="comment-thumb">
                                                        <div class="comment-img"><img src="{{asset('frontend/asset/icons/Domestic violence graphic 4.png')}}" alt=""></div>
                                                    </div>
                                                    <div class="comment-main-area">
                                                        <div class="comment-wrapper">
                                                            <div class="comments-meta">
                                                                <h4>PARENTAL RIGHTS <span class="comments-date">|</span></h4>
                                                            </div>
                                                            <div class="comment-area">
                                                                <p>
                                                                    What are the you rights as a parent, and what to do if you are denied your rights.
                                                                .</p>
                                                                <div class="comments-reply">
                                                                    <a class="comment-reply-link" href="#"><span>Keep Reading</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="comment">
                                                        <div>
                                                            <div class="comment-thumb">
                                                                <div class="comment-img"><img src="{{asset('frontend/asset/icons/dom1.png')}}" alt=""></div>
                                                            </div>
                                                            <div class="comment-main-area">
                                                                <div class="comment-wrapper">
                                                                    <div class="comments-meta">
                                                                        <h4>DOMESTIC VIOLENCE <span class="comments-date"> at 8:00</span></h4>
                                                                    </div>
                                                                    <div class="comment-area">
                                                                        <p>
                                                                            hat to do when face with violence or abuse by someone in a domestic set-up.
                                                                            .</p>
                                                                        <div class="comments-reply">
                                                                            <a class="comment-reply-link" href="/Domestic-violence"><span class="btn btn-primary" >Read More</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                   
                                </ol>
                            </div>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Volunteer to work with us</h3>
                                <form method="post" id="commentform" class="comment-form">
                                    <div class="form-textarea">
                                        <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                    </div>
                                    <div class="form-inputs">
                                        <input placeholder="Website" type="url">
                                        <input placeholder="Name" type="text">
                                        <input placeholder="Email" type="email">
                                    </div>
                                    <div class="form-submit">
                                        <input id="submit" value="Post Comment" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <li><a href="#">Architecture</a></li>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection