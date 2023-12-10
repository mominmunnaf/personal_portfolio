@extends('user.layout')

@section('title')
    Momin Munnaf - Contact
@endsection

@section('content')
<!--================ Start Contact Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-right">
                <h1>Contact Me</h1>
                <div class="page_link">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('user_contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Contact Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <span class="text-dark">Siddikia Manjil, <br> Shahid Javed Osman Road</span><br>
                        <span class="text-dark">Stadium Para, Meherpur, <br> Bangladesh</span><br><br>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <span><a href="#" class="text-dark">+880 1303 088 494</a></span><br><br>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <span><a href="#" class="text-dark">mominmunnaf1983@gmail.com</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="primary-btn"><span>Send Message</span></button>
                    </div>
                </form>
            </div>
        </div>
        <div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
            data-mlat="40.701083" data-mlon="-74.1522848">
        </div>
    </div>
</section>
<!--================Contact Area =================-->
    
@endsection