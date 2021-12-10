@extends('layouts.Main')
@section('content')
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-lg-8 padding-15">
                <div class="blog-single-wrap">
                    <div class="blog-thumb">
                        <img src="{{asset('posts/'.$post->dp)}}" alt="img">
                    </div>
                    <div class="blog-single-content">
                        <h2><a href="#">{{$post->title}}</a></h2>
                        <ul class="single-post-meta">
                            <li><i class="fa fa-user"></i> <a href="#">{{$post->slug}}</a></li>
                            <li><i class="fa fa-calendar"></i> <a href="#">{{ $post->created_at->diffForHumans()}}</a></li>
                            <li><i class="fa fa-comments"></i> <a href="#"></a></li>
                        </ul>
                        <p>
                            {{$post->description}}
                        </p>
                        <blockquote>
                            <div class="dots"></div>
                            <p>
                                “The most truly generous persons are those who give silently without hope of praise or reward.”
</p>
                            <span class="quoter">― Carol Ryrie Brink, Caddie Woodlawn's Family</span>
                        </blockquote>
                       
                        <ul class="post-tags">
                            <li><a href="#">Economic</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Rehab</a></li>
                            <li><a href="#">Climate</a></li>
                        </ul>
                        <div class="author-box bg-grey">
                            <img src="{{asset('frontend/img/1.jpg')}} "width="50%" alt="img">
                            <div class="author-info">
                                <h3>ActionForChildren</h3>
                                <p>
                                    .....</p>
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
                        <!--<div class="comments-area">
                            <div class="comments-section">
                                <h3 class="comments-title">Posts Comments</h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        <div id="div-comment-1">
                                            <div class="comment-thumb">
                                                <div class="comment-img"><img src="img/comment-1.png" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Jhon Castellon <span class="comments-date">jan 05, 2020 at 8:00</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment">
                                                <div>
                                                    <div class="comment-thumb">
                                                        <div class="comment-img"><img src="img/comment-2.png" alt=""></div>
                                                    </div>
                                                    <div class="comment-main-area">
                                                        <div class="comment-wrapper">
                                                            <div class="comments-meta">
                                                                <h4>José Carpio <span class="comments-date">jan 15, 2020 at 8:00</span></h4>
                                                            </div>
                                                            <div class="comment-area">
                                                                <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                                <div class="comments-reply">
                                                                    <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="comment">
                                                        <div>
                                                            <div class="comment-thumb">
                                                                <div class="comment-img"><img src="img/comment-3.png" alt=""></div>
                                                            </div>
                                                            <div class="comment-main-area">
                                                                <div class="comment-wrapper">
                                                                    <div class="comments-meta">
                                                                        <h4>Valentin Lacoste <span class="comments-date">jan 25, 2020 at 8:00</span></h4>
                                                                    </div>
                                                                    <div class="comment-area">
                                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                                        <div class="comments-reply">
                                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
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
                                    <li class="comment">
                                        <div>
                                            <div class="comment-thumb">
                                                <div class="comment-img"><img src="img/comment-4.png" alt=""></div>
                                            </div>
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>Kyle Frederick <span class="comments-date">jan 02, 2020 at 8:00</span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>Home renovations, especially those involving plentiful of demolition can be a very dusty affair. This nasty dust can easily free flow through your house.</p>
                                                        <div class="comments-reply">
                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Write a Comment</h3>
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
                        </div>-->
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
                        <h4>Quicklinks</h4>
                        <ul class="widget-links">
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Designing</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Buildings</a></li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <h4>Recent Posts</h4>
                        <ul class="thumb-post">
                            <li><img src="img/post-1.jpg" alt="post"><a href="#">Minimalist trending in modern architecture 2019</a></li>
                            <li><img src="img/post-2.jpg" alt="post"><a href="#">Terrace in the town kentaro design workshop.</a></li>
                            <li><img src="img/post-3.jpg" alt="post"><a href="#">W270 house são arquitetos fabio architeqture.</a></li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <h4>Tag Clouds</h4>
                        <ul class="tags">
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Designing</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Buildings</a></li>
                            <li><a href="#">Industrial</a></li>
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