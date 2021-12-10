@extends('layouts.Main')
@section('content')
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
<section class="contact-section bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="contact-wrap d-flex align-items-center row">
            <div class="col-md-6 padding-15">
                <div class="contact-info">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}
                    </div>
                @endif
                    <h2>Get in touch with us & <br>send us message today!</h2>
                    <p>
                        ...........</p>
                    <h3>
                        Section 9, Thika,
                        Kiambu, Kenya</h3>
                    <h4><span>Email:</span> 
                        info@actionchildren.or.ke <br> <span>Phone:</span> +254(0)
                         722 753 137<br> <span>Fax:</span> </h4>
                </div>
            </div>
            <div class="col-md-6 padding-15">
                <div class="contact-form">
                    <form action="/Contact/create" method="post" id="ajax_form" class="form-horizontal">
                        @csrf
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="{{old('name')?? 'Enter full name'}}" >
                            </div>
                            @error('name')
                                <p class="text-danger">
                                    {{$message}}
                                </p>
                            @enderror
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="{{old('name')?? 'Enter email'}}" >
                            </div>
                            @error('email')
                            <p class="text-danger">
                                {{$message}}
                            </p>
                        @enderror
                        </div>
                      

                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="body" cols="30" rows="5" class="form-control message" placeholder="  {{old('body')?? 'Enter detail information about yourself'}}"  >
                                  
                                </textarea>
                            </div>
                            @error('body')
                                <p class="text-danger">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">Contact Us now</button>
                            </div>
                           
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection