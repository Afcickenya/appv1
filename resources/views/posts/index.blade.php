@extends('layouts.Main')
@section('content')

<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-lg-8 sm-padding">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-12 padding-15">
                        <div class="blog-item box-shadow">
                            <div class="blog-thumb">
                                <img src="{{asset('posts/'.$post->dp)}}" alt="post">
                                <span class="category"><a href="">{{ $post->created_at->diffForHumans()}}</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="/Blog/{{$post->id}}">{{$post->title}}</a></h3>
                                <p>
                                    {{Str::limit($post->description, 40) }}}
                                </p>
                                <a href="/Blog/{{$post->id}}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                   
                    
                </div>
               <!-- <ul class="pagination-wrap text-left mt-30">
                    <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                </ul>-->
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
                        <h4>Quick links</h4>
                        <ul class="widget-links">
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Designing</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Buildings</a></li>
                        </ul>
                    </div>
                   <!-- <div class="widget-content">
                        <h4>Recent Posts</h4>
                        <ul class="thumb-post">
                            <li><img src="img/post-1.jpg" alt="post"><a href="#">Minimalist trending in modern architecture 2019</a></li>
                            <li><img src="img/post-2.jpg" alt="post"><a href="#">Terrace in the town kentaro design workshop.</a></li>
                            <li><img src="img/post-3.jpg" alt="post"><a href="#">W270 house são arquitetos fabio architeqture.</a></li>
                        </ul>
                    </div>-->
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