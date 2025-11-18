@extends('layouts.default')
@section('title')
Home
@endsection

@section('content')
<!--<< Hero Section Start >>-->
<section class="hero-section hero-1">
    <div class="swiper-dot">
        <div class="dot"></div>
    </div>
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            {{-- <div class="swiper-slide">
                    <div class="shape-image" data-animation="fadeInLeft" data-delay="2.1s">
                        <img src="{{ asset('front/img/all-image/banner/banner-3.jpg') }}" alt="1">
        </div>
        <div class="shape-image-2 fadeInRight animated" data-animation="fadeInRight" data-delay="2.3s">
            <img src="{{ asset('front/img/hero/right-shape.png') }}" alt="shape-img">
        </div>
        <div class="hero-image bg-cover"
            style="background-image: url('front/img/all-image/banner/banner-3.jpg');"></div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Your Most Trusted
                            Partners</h6>
                        <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                            Immigration & <br> Visa Consulting <br> Here...
                        </h1>
                        <p data-animation="slideInRight" data-duration="2s" data-delay=".7s">
                            Transmds is the world’s driving worldwide coordinations supplier we uphold <br>
                            industry and exchange the worldwide trade of merchandi
                        </p>
                        <div class="hero-button">
                            <a href="{{ url('/') }}" class="theme-btn theme-color-2"
                                data-animation="slideInRight" data-duration="2s" data-delay=".9s"><span>Learn
                                    More <i class="fas fa-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="swiper-slide">
        <div class="shape-image" data-animation="fadeInLeft" data-delay="2.1s">
            <img src="{{ asset('front/img/all-image/banner/bg3-1.jpg') }}" alt="shape-img">
        </div>
        <div class="shape-image-2 fadeInRight animated" data-animation="fadeInRight" data-delay="2.3s">
            <img src="{{ asset('front/img/hero/right-shape.png') }}" alt="shape-img">
        </div>
        <div class="hero-image bg-cover" style="background-image: url('front/img/all-image/banner/bg3-1.jpg');">
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Your Most Trusted
                            Partners</h6>
                        <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                            Professional Visa &<br> Immigration Services
                        </h1>
                        <p data-animation="slideInRight" data-duration="2s" data-delay=".7s">
                            Achieve your immigration goals faster with expert visa consulting and personalized support every step of the way.
                        </p>
                        <div class="hero-button">
                            <a href="{{ url('/') }}" class="theme-btn theme-color-2"
                                data-animation="slideInRight" data-duration="2s" data-delay=".9s"><span>Learn
                                    More <i class="fas fa-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="swiper-slide">
                    <div class="shape-image" data-animation="fadeInLeft" data-delay="2.1s">
                        <img src="{{ asset('front/img/all-image/banner/bg6-1.jpg') }}" alt="shape-img">
    </div>
    <div class="shape-image-2 fadeInRight animated" data-animation="fadeInRight" data-delay="2.3s">
        <img src="{{ asset('front/img/hero/right-shape.png') }}" alt="shape-img">
    </div>
    <div class="hero-image bg-cover" style="background-image: url('front/img/all-image/banner/bg6-1.jpg');">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="hero-content">
                    <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Your Most Trusted
                        Partners</h6>
                    <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                        Immigration & <br> Visa Consulting <br> Here...
                    </h1>
                    <p data-animation="slideInRight" data-duration="2s" data-delay=".7s">
                        Transmds is the world’s driving worldwide coordinations supplier we uphold <br>
                        industry and exchange the worldwide trade of merchandi
                    </p>
                    <div class="hero-button">
                        <a href="{{ url('/') }}" class="theme-btn theme-color-2"
                            data-animation="slideInRight" data-duration="2s" data-delay=".9s"><span>Learn
                                More <i class="fas fa-chevron-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> --}}
    <div class="swiper-slide">
        <div class="shape-image" data-animation="fadeInLeft" data-delay="2.1s">
            <img src="{{ asset('front/img/all-image/banner/bgb4.jpg') }}" alt="shape-img">
        </div>
        <div class="shape-image-2 fadeInRight animated" data-animation="fadeInRight" data-delay="2.3s">
            <img src="{{ asset('front/img/hero/right-shape.png') }}" alt="shape-img">
        </div>
        <div class="hero-image bg-cover" style="background-image: url('front/img/all-image/bgb4.jpg');"></div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h6 data-animation="slideInRight" data-duration="2s" data-delay=".3s">Your Most
                            Trusted Partners</h6>
                        <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                            Immigration & <br> Visa Consulting <br> Here...
                        </h1>
                        <p data-animation="slideInRight" data-duration="2s" data-delay=".7s">
                            Transmds is the world’s driving worldwide coordinations supplier we uphold <br>
                            industry and exchange the worldwide trade of merchandi
                        </p>
                        <div class="hero-button">
                            <a href="{{ url('/') }}" class="theme-btn theme-color-2"
                                data-animation="slideInRight" data-duration="2s" data-delay=".9s"><span>Learn
                                    More <i class="fas fa-chevron-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<!--<< About Section Start >>-->
<section class="about-section fix section-padding">
    <div class="container">
        <div class="about-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image-items">
                        <div class="border-shape">
                            <img src="{{ asset('front/img/about/border-shape.png') }}" alt="shape-img">
                        </div>
                        <div class="about-image bg-cover wow fadeInLeft" data-wow-delay=".3s"
                            style="background-image: url('front/img/about/about.jpg');">
                            <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ asset('front/img/about/about-2.jpg') }}" alt="about-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">About Company</span>
                            <h2 class="title-anim">
                                Welcome to Quality Migration: Your Trusted Partner in Education and Migration
                            </h2>
                        </div>
                        <p class=" mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            Quality Migration is a Registered Migration Agent (MARN2518800) and Education Agent,
                            assisting international students on their journey to PR, Migration, and Education.
                        </p>
                        <!-- <div class="circle-progress-bar-wrapper">
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".3s">
                                    <div class="circle-bar" data-percent="68" data-duration="1000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            Business <br>
                                            Strategy
                                        </h6>
                                    </div>
                                </div>
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".5s">
                                    <div class="circle-bar" data-percent="93" data-duration="1000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            Real Technology <br>
                                            Solutions
                                        </h6>
                                    </div>
                                </div>
                            </div> -->
                        <ul class="about-list wow fadeInUp" data-wow-delay=".7s">
                            <li>
                                <i class="far fa-check me-2"></i>
                                Immigration & Visa Consulting
                            </li>
                            <li>
                                <i class="far fa-check me-2"></i>
                                Direct Online Interview
                            </li>
                            <li>
                                <i class="far fa-check me-2"></i>
                                99% Visa Approvals
                            </li>
                        </ul>
                        <div class="about-author">
                            <div class="about-button wow fadeInUp" data-wow-delay=".8s">
                                <a href="{{ route('about') }}" class="theme-btn">
                                    <span>
                                        Learn More Us
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div>
                            <!-- <div class="author-image wow fadeInUp" data-wow-delay=".9s">
                                            <img src="{{ asset('front/img/about/author.png') }}" alt="author-img">
                                            <div class="content">
                                                <img src="{{ asset('front/img/about/signature.png') }}" alt="signature">
                                                <p>Ceo & Founder</p>
                                            </div>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<< Service Section Start >>-->
<section class="service-section fix section-padding pt-0">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">Service We Provide</span>
            <h2 class="title-anim">
                Explore Our Visa Citizenship <br>
                & Immigration Services
            </h2>
        </div>
    </div>
    <div class="service-wrapper">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="service-card-items">
                    <h3><a href="{{ route('servicedetails') }}">Business Visa</a></h3>
                    <p>
                        Australia offers a range of visa opportunities for individuals looking to establish, manage, or
                        invest in businesses.
                    </p>
                    <div class="service-thumb">
                        <img src="{{ asset('front/img/service/01.jpg') }}" alt="img">
                    </div>
                    <a href="{{ route('servicedetails') }}" class="link-btn">
                        <span>read more</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="service-card-items">
                    <h3><a href="{{ route('servicedetails') }}">Student Visa</a></h3>
                    <p>
                        The Student Visa (Subclass 500) is designed for international students who wish to study at a
                        registered education institution in Australia
                    </p>
                    <div class="service-thumb">
                        <img src="{{ asset('front/img/service/02.jpg') }}" alt="img">
                    </div>
                    <a href="{{ route('servicedetails') }}" class="link-btn">
                        <span>read more</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="service-card-items active">
                    <h3><a href="{{ route('servicedetails') }}">Family & Partner Visa </a></h3>
                    <p>
                        Australia has implemented significant changes to the Migration Regulations 1994 through the
                        Migration Amendment
                    </p>
                    <div class="service-thumb">
                        <img src="{{ asset('front/img/service/03.jpg') }}" alt="img">
                    </div>
                    <a href="{{ route('servicedetails') }}" class="link-btn">
                        <span>read more</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="service-card-items">
                    <h3><a href="{{ route('servicedetails') }}">Sponsored Visa</a></h3>
                    <p>
                        Australia is committed to improving its migration system to provide clear and accessible pathways to Permanent Residency (PR)
                    </p>
                    <div class="service-thumb">
                        <img src="{{ asset('front/img/service/04.jpg') }}" alt="img">
                    </div>
                    <a href="{{ route('servicedetails') }}" class="link-btn">
                        <span>read more</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!--<< Countries Section Start >>-->
{{-- <section class="countries-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Countries we offer</span>
                <h2 class="title-anim">Countries We Support <br> for Immigration.</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="countries-card-items">
                        <div class="thumb">
                            <img src="{{ asset('front/img/flag/turkey.png') }}" alt="img">
</div>
<div class="content">
    <h3><a href="{{ route('countrydetails') }}">turkey </a></h3>
    <p>Average time to resolve a
        cyber.</p>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
    <div class="countries-card-items">
        <div class="thumb">
            <img src="{{ asset('front/img/flag/france.png') }}" alt="img">
        </div>
        <div class="content">
            <h3><a href="{{ route('countrydetails') }}">france </a></h3>
            <p>Average time to resolve a
                cyber.</p>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
    <div class="countries-card-items">
        <div class="thumb">
            <img src="{{ asset('front/img/flag/aus.jpg') }}" alt="img">
        </div>
        <div class="content">
            <h3><a href="{{ route('countrydetails') }}">Australia </a></h3>
            <p>Average time to resolve a
                cyber.</p>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
    <div class="countries-card-items">
        <div class="thumb">
            <img src="{{ asset('front/img/flag/us.png') }}" alt="img">
        </div>
        <div class="content">
            <h3><a href={{ route('countrydetails') }}>United States </a></h3>
            <p>Average time to resolve a
                cyber.</p>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
    <div class="countries-card-items">
        <div class="thumb">
            <img src="{{ asset('front/img/flag/india.png') }}" alt="img">
        </div>
        <div class="content">
            <h3><a href="{{ route('countrydetails') }}">India</a></h3>
            <p>Average time to resolve a
                cyber.</p>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
    <div class="countries-card-items">
        <div class="thumb">
            <img src="{{ asset('front/img/flag/dubai.png') }}" alt="img">
        </div>
        <div class="content">
            <h3><a href="{{ route('countrydetails') }}">Dubai</a></h3>
            <p>Average time to resolve a
                cyber.</p>
        </div>
    </div>
</div>
</div>
</div>
</section> --}}

<!--<< Cta Banner Section Start >>-->
<div class="cta-banner-section bg-cover section-padding"
    style="background-image: url('front/img/all-image/banner/statistic.jpg');">
    <div class="container">
        <div class="cta-banner-wrapper section-padding pt-0">
            <div class="video-box">
                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-buttton ripple video-popup">
                    <i class="fas fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--<< Feature Icon Box Section Start >>-->
<section class="feature-icon-box-area">
    <div class="container">
        <div class="feature-icon-box-wrapper">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon-box-items">
                        <div class="icon">
                            <i class="flaticon-passport-5"></i>
                        </div>
                        <div class="content">
                            <h3>Visa Process</h3>
                            <p>
                                Simplify your journey abroad with expert guidance through every step of the visa application process.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="icon-box-items active">
                        <div class="icon">
                            <i class="flaticon-visa-2"></i>
                        </div>
                        <div class="content">
                            <h3>99% Visa Approvals</h3>
                            <p>
                                Experience peace of mind with our trusted team boasting a 99% visa approval success rate.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="icon-box-items">
                        <div class="icon">
                            <i class="flaticon-immigration-law"></i>
                        </div>
                        <div class="content">
                            <h3>Immigration</h3>
                            <p>
                                Navigate immigration confidently with our support—legal expertise, timely updates, and end-to-end assistance provided.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--<<Choose us section Start >>-->
<section class="choose-us-section section-padding pt-0">
    <div class="container">
        <div class="choose-us-wrapper">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="choose-us-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">Why Choose Us</span>
                            <!-- <h2 class="title-anim">Some Reasons People <br> Like Our Consultancy</h2> -->
                        </div>
                        <!-- <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">•	Experienced Team: With extensive industry knowledge, we’ve been helping clients with visa applications and educational opportunities in Australia.</p> -->
                        <div class="icon-box-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="flaticon-customer-service"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-2">Multilingual Support</h3>
                                <p>Our friendly team speaks English, Hindi, Gujarati, Urdu, Marathi and more.</p>
                            </div>
                        </div>
                        <div class="icon-box-items wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <i class="flaticon-immigration-law-2"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-2"> Experienced Team</h3>
                                <p>With extensive industry knowledge, we’ve been helping clients with visa applications</p>
                            </div>
                        </div>
                        <div class="icon-box-items wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="flaticon-document"></i>
                            </div>
                            <div class="content">
                                <h3 class="mb-2">Highly Rated</h3>
                                <p>Clients consistently rate us for exceptional service and genuine advice.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="choose-us-image-items">
                        <div class="row g-4">
                            <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                                <div class="choose-image-1">
                                    <img src="{{ asset('front/img/all-image/choose-us/about-thumb-1.jpg') }}"
                                        alt="img">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="choose-image-2 bg-cover wow fadeInUp" data-wow-delay=".3s"
                                    style="background-image: url('front/img/choose-us/02.jpg');"></div>
                                <div class="choose-image-3 wow fadeInUp" data-wow-delay=".5s">
                                    <img src="{{ asset('front/img/all-image/choose-us/about-thumb-2.png') }}"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="choose-box">
                            <h3>10m+ Trusted <br> Customer</h3>
                            <!-- <img src="{{ asset('front/img/all-image/choose-us/client.jpg') }}" alt="author-img"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<< Counter Section Start >>-->
<section class="counter-section section-padding section-bg">
    <div class="container">
        <div class="counter-wrapper">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="counter-items text-center">
                        <div class="icon center">
                            <i class="flaticon-around"></i>
                        </div>
                        <div class="content">
                            <h2><span class="count">3</span>+</h2>
                            <p>
                                Countries <br>
                                Represented
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="counter-items text-center">
                        <div class="icon center">
                            <i class="flaticon-visa-2"></i>
                        </div>
                        <div class="content">
                            <h2><span class="count">853</span>+</h2>
                            <p>
                                Completed <br>
                                Visa Passport
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="counter-items text-center">
                            <div class="icon center">
                                <i class="flaticon-money"></i>
                            </div>
                            <div class="content">
                                <h2><span class="count">55</span>M+</h2>
                                <p>
                                    Revenew <br>
                                    In per year
                                </p>
                            </div>
                        </div>
                    </div> -->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="counter-items text-center">
                        <div class="icon center">
                            <i class="flaticon-immigration-officer"></i>
                        </div>
                        <div class="content">
                            <h2><span class="count">4</span>+</h2>
                            <p>
                                Experience <br>
                                immigration officer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<< Testimonial Section Start >>-->
<section class="testimonial-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">Our Testimonials</span>
            <h2 class="title-anim">
                Let’s Explore Why People Say <br> About Our Services
            </h2>
        </div>
        <div class="testimonial-carousel-active">
            <div class="testimonial-card-items">
                <div class="author-items">
                    <div class="author-image bg-cover"
                        style="background-image: url('front/img/all-image/team/team-1.jpg');"></div>
                    <div class="author-content">
                        <h5>kaushik lakhani</h5>
                        <!-- <span>Web Developer</span> -->
                    </div>
                </div>
                <p>
                    I had an amazing experience working with Quality migration for my work permit application. From the initial consultation to the final approval, they were professional, knowledgeable, and incredibly supportive throughout the process.
                    Thanks to their expertise and attention to detail, my work permit was granted without any issues. I truly appreciate their dedication and highly recommend them to anyone needing help with visas or migration services.
                </p>
                <ul>
                    <li>July 19, 2025</li>
                </ul>
            </div>

            <div class="testimonial-card-items">
                <div class="author-items">
                    <div class="author-image bg-cover"
                        style="background-image: url('front/img/all-image/team/team-2.jpg');"></div>
                    <div class="author-content">
                        <h5>Mayur Sakhareliya</h5>
                        <!-- <span>UI Designer</span> -->
                    </div>
                </div>
                <p>
                    I recently went through the process of getting my wife's B.Com degree assessed with the help of Quality Migration, and I want to sincerely thanks to Naisargi for her exceptional support.
                    She was honest, knowledgeable, and guided us in the right direction throughout the entire process. Her clear communication and genuine dedication made the experience smooth and stress-free.
                    I truly appreciate her efforts and highly recommend Quality Migration for anyone seeking professional and trustworthy migration services.
                </p>
                <ul>
                    <li>July 28, 2025</li>
                </ul>
            </div>

            <div class="testimonial-card-items">
                <div class="author-items">
                    <div class="author-image bg-cover"
                        style="background-image: url('front/img/all-image/team/team-3.jpg');"></div>
                    <div class="author-content">
                        <h5>Utsav Vaghani</h5>
                        <!-- <span>WordPress Developer</span> -->
                    </div>
                </div>
                <p>
                    I had a wonderful experience working with Rushita mam from Quality Migration.
                    From the very beginning, she was incredibly supportive and always available whenever I had questions or concerns—no matter the time.
                    Communication was smooth and effortless, and I truly appreciated how fast and clearly she responded to every message.
                </p>
                <ul>
                    <li>June 30, 2025</li>
                </ul>
            </div>

            <div class="testimonial-card-items">
                <div class="author-items">
                    <div class="author-image bg-cover"
                        style="background-image: url('front/img/all-image/team/team-4.jpg');"></div>
                    <div class="author-content">
                        <h5>Nirali Maniya</h5>
                        <!-- <span>Frontend Engineer</span> -->
                    </div>
                </div>
                <p>
                    Dear Quality Migration,
                    I wanted to take a moment to thank you for your support in submitting my skill assessment file. 
                    I’m thrilled to hear that it received a positive response!
                    Your professionalism and attention to detail throughout the process made the entire experience seamless
                </p>
                <ul>
                    <li>July 01, 2025</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('pages.book')

<!--<< News Section Start >>-->
{{-- <section class="process-work-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Working Process</span>
                <h2 class="title-anim">4 Step Follow You Can Get <br>
                    Your Visa Easily</h2>
            </div>
            <div class="process-work-wrapper">
                <div class="line-shape">
                    <img src="{{ asset('front/img/linepng.png') }}" alt="img">
</div>
<div class="row">
    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
        <div class="work-process-items text-center">
            <div class="icon">
                <i class="flaticon-passport-5"></i>
                <h6 class="number">
                    1
                </h6>
            </div>
            <div class="content">
                <h4>Choose A Service</h4>
                <p>
                    In a free hour, when our power of choice is untrammeled and
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
        <div class="work-process-items text-center">
            <div class="content style-2">
                <h4>Documents and Payments</h4>
                <p>
                    In a free hour, when our power of choice is untrammeled and
                </p>
            </div>
            <div class="icon">
                <i class="flaticon-money"></i>
                <h6 class="number">
                    2
                </h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
        <div class="work-process-items text-center">
            <div class="icon">
                <i class="flaticon-customer-service"></i>
                <h6 class="number">
                    3
                </h6>
            </div>
            <div class="content">
                <h4>Request A Meeting</h4>
                <p>
                    In a free hour, when our power of choice is untrammeled and
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
        <div class="work-process-items text-center">
            <div class="content style-2">
                <h4>Receive your Visa Now</h4>
                <p>
                    In a free hour, when our power of choice is untrammeled and
                </p>
            </div>
            <div class="icon">
                <i class="flaticon-visa"></i>
                <h6 class="number">
                    4
                </h6>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section> --}}
@endsection