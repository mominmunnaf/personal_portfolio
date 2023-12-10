@extends('user.layout')

@section('title')
    Momin Munnaf - About
@endsection

@section('content')

<!--================ About Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-right">
                <h1>About Me</h1>
                <div class="page_link">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('user_about') }}">About</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End About Banner Area =================-->

<!--================ Start About Area =================-->
<section class="about-area section_gap gray-bg">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            
            <div class="col-lg-6 col-md-12 about-left">
                <div class="main-title text-left">
                    <h1>about myselt</h1>
                </div>
                <div class="mb-50 wow fadeIn" data-wow-duration=".8s">
                    <p>
                        I am a full stack web developer. A have completed some responsive, eye catching web applications. Also experienced in this field. I have been working with Laravel for 04 (four) years. I am passionate to deliver extra ordinary applications for my clients. I am fully dedicated in my work.
                    </p>
                </div>
                <a href="{{ route('user_resume') }}" class="btn btn-sm btn-outline-danger mt-5">More Info</a>
            </div>
            <div class="col-lg-5 about-right">
                <img class="img-fluid" src="{{ asset('frontend') }}/img/pic3.png" alt="">
            </div>
        </div>
    </div>
</section>
<!--================ End About Area =================-->
    
@endsection