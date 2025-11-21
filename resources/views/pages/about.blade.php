@extends('layouts.default')
@section('title')
About Quality Migration – Registered Migration & Education Consultants
@endsection

@section('description')
Learn about Quality Migration, a Registered Migration & Education Consultancy (MARN2518800) offering expert guidance for visas, PR pathways, education services, and student support.
@endsection

@section('tags')
about quality migration,
migration agent australia,
registered migration agent,
education consultant melbourne,
student visa specialist,
pr pathway consultation,
australian immigration services,
family visa consultant,
partner visa consultant,
visa experts melbourne,
skilled migration consultant,
marn migration agent,
international student support
@endsection


@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">about us</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ url('/') }}">
                            Home Page
                        </a>
                    </li>
                    <li>
                        <i class="fal fa-minus"></i>
                    </li>
                    <li>
                        About Us
                    </li>
                </ul>
            </div>
        </div>
    </div>

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
                                style="background-image: url('front/img/about/about-us-2.png');">
                                <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">
                                    <img src="{{ asset('front/img/about/about-us.png') }}" alt="about-img">
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
                                With years of expertise, Quality Migration is dedicated to providing reliable and
                                comprehensive migration and education services tailored to your needs. We take pride in
                                assisting individuals and families in achieving their Australian education and migration
                                goals.
                            </p>

                            <div class="circle-progress-bar-wrapper">
                                <!-- <div class="single-circle-bar wow fadeInUp" data-wow-delay=".3s">
                                    <div class="circle-bar" data-percent="88" data-duration="1000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            Quick & Easy <br>Process
                                        </h6>
                                    </div>
                                </div> -->
                                <!-- <div class="single-circle-bar wow fadeInUp" data-wow-delay=".5s">
                                    <div class="circle-bar" data-percent="99" data-duration="1000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            99% Visa <br>Approvals
                                        </h6>
                                    </div>
                                </div> -->
                            </div>
                            <ul class="about-list wow fadeInUp" data-wow-delay=".7s">
                               <li>
                                <i class="far fa-check me-2"></i>
                               Educational & Migration consultant
                            </li>
                            <li>
                                <i class="far fa-check me-2"></i>
                                Skill Assessment Experts
                            </li>
                            <li>
                                <i class="far fa-check me-2"></i>
                               PR Pathway Experts
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
                            <!-- <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">• Experienced Team: With extensive
                                industry knowledge, we’ve been helping clients with visa applications and educational
                                opportunities in Australia.</p> -->
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
                                    <p>With extensive industry knowledge, we’ve been helping clients with visa applications
                                    </p>
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
                                        <img src="{{ asset('front/img/all-image/choose-us/about-thumb-1.png') }}"
                                            alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="choose-image-2 bg-cover wow fadeInUp" data-wow-delay=".3s"
                                        style="background-image: url('front/img/all-image/choose-us/02.png');"></div>
                                    <div class="choose-image-3 wow fadeInUp" data-wow-delay=".5s">
                                        <img src="{{ asset('front/img/all-image/choose-us/about-thumb-2.png') }}"
                                            alt="img">
                                    </div>
                                </div>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="service-card-items">
                        <h3><a href="{{ route('contact') }}#contact-us-form">Education Services</a></h3>

                        <ul>
                            <li>
                                <p>•<b>Course Applications:</b> Assistance with applying to Australian schools and securing
                                    offer letters—free of charge.</p>
                            </li>
                            <li>
                                <p>•<b>Professional Programs:</b> Help with applications for Professional Year Programs,
                                    NAATI/NAATI CCL courses.</p>
                            </li>
                            <li>
                                <p>•<b>PTE Crash Courses:</b> Tailored preparation programs for English language
                                    proficiency.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="service-card-items">
                        <h3><a href="{{ route('contact') }}#contact-us-forma">Migration Services</a></h3>
                        <ul>
                            <li>
                                <p>•<b>Student Visas:</b>500 Student Visa and Student Visa Extensions.</p>
                            </li>
                            <li>
                                <p>•<b>Graduate Visas:</b> Subclass 485 Temporary Graduate Visa (TR/PSW).</p>
                            </li>
                            <li>
                                <p>•<b>Skilled Migration Visas: </b> Assistance with Subclass 189, 190, 491, and more.</p>
                            </li>
                            <li>
                                <p><b>Family Visas:</b>Partner Visas, Parent Visas, and other family migration solutions.
                                </p>
                            </li>
                            <li>
                                <p><b>Employer-Sponsored Visas:</b>Temporary and Permanent Sponsorship options.</p>
                            </li>
                            <li>
                                <p><b>Business Visas: </b>Temporary and Investment Visas.</p>
                            </li>
                            <li>
                                <p><b>Administrative Appeals Tribunal (ART):</b>Guidance for appealing visa refusals or
                                    cancellations.</p>
                            </li>
                            <li>
                                <p><b>Training and Regional Sponsorship Visas:</b>Tailored support for specific needs.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="service-card-items">
                        <h3><a href="{{ route('contact') }}#contact-us-form">Personalized Consultation Services</a></h3>
                        <ul>
                            <li>
                                <p>•<b>PR Pathway Consultation:</b>Explore your Permanent Residency (PR) options with a
                                    detailed consultation. Book your session with our Registered Migration Agent to find the
                                    pathway that’s right for you</p>
                            </li>
                            <li>
                                <p>•<b>Study and Visa Queries:</b>Need help with your education plans or student visa?
                                    Schedule a FREE Consultation with our Education Team.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Service Section Start >>-->
    <section class="service-section section-bg-4 fix section-padding">
        <div class="container">
            <div class="title-section-area">
                <div class="section-title">
                    <span class="wow fadeInUp">Visa Categories</span>
                    <h2 class="title-anim">
                        Why Work with Quality Migration?
                    </h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                <ul>
                    <li>• <b>Genuine Advice:</b> We value honesty and transparency in our guidance.</li>
                    {{-- <li>• <b>Affordable Support:</b> No service fees for onshore student visa applications.</li> --}}
                    <li>• <b>High Success Rate:</b> Trusted by clients across Australia for consistent results</li>
                </ul>
                </p>
            </div>
            <div class="service-wrapper-3">
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon">
                        <i class="flaticon-workers"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('contact') }}#contact-us-form"> Working Visa </a>
                        </h6>
                    </div>
                </div>
                <div class="service-box-items style-2 active wow fadeInUp" data-wow-delay=".5s">
                    <div class="icon">
                        <i class="flaticon-traveller"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('contact') }}#contact-us-form">  Tourist Visa </a>
                        </h6>
                    </div>
                </div>
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".7s">
                    <div class="icon">
                        <i class="flaticon-passport-16"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('contact') }}#contact-us-form">Medical Visa </a>
                        </h6>
                    </div>
                </div>
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="flaticon-graduated"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('contact') }}#contact-us-form">Student Visa</a>
                        </h6>
                    </div>
                </div>
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".9s">
                    <div class="icon">
                        <i class="flaticon-passport"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('contact') }}#contact-us-form">Family Visa</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="service-text-area text-center mt-5 wow fadeInUp" data-wow-delay=".4s">
                <h5>
                    Start your journey with Quality Migration today and let us help you turn your goals into reality! <br>

                    Your dream of building a successful career in Australia starts here with Quality Migration!
                    </a>
                </h5>
            </div>
        </div>
    </section>
    @include('pages.book')


    <!--<< News Section Start >>-->
    {{-- <section class="news-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">News & Blog</span>
                <h2 class="title-anim">Read Our Latest News & Blog</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-box-items">
                        <div class="news-image">
                            <img src="{{ asset('front/img/all-image/about/close-up-of-woman-handing-visa-application.jpg') }}"
                                alt="img">
                            <img src="{{ asset('front/img/all-image/about/close-up-of-woman-handing-visa-application.jpg') }}"
                                alt="img">
                            <h6 class="date">26 <span>Nov</span></h6>
                        </div>
                        <div class="news-content">
                            <ul class="post-date">
                                <li>
                                    <i class="far fa-user-circle"></i>
                                    Shikhon .H
                                </li>
                                <li>
                                    <i class="fal fa-comments"></i>
                                    Comments (03)
                                </li>
                            </ul>
                            <h3><a href="{{ route('newsdetails') }}">Navigating Borders Ultimate Guide to Visa Success</a>
                            </h3>
                            <p>
                                Transmds is the world’s driving worldwide coordinations supplier
                                we uphold.
                            </p>
                            <a href="{{ route('newsdetails') }}" class="link-btn">
                                <span>Read More</span> <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="news-box-items">
                        <div class="news-image">
                            <img src="{{ asset('front/img/all-image/about/female-traveler-giving-passport-to-check-at-airline-service-counter.jpg') }}"
                                alt="img">
                            <img src="{{ asset('front/img/all-image/about/female-traveler-giving-passport-to-check-at-airline-service-counter.jpg') }}"
                                alt="img">
                            <h6 class="date">11 <span>Dec</span></h6>
                        </div>
                        <div class="news-content">
                            <ul class="post-date">
                                <li>
                                    <i class="far fa-user-circle"></i>
                                    Shikhon .H
                                </li>
                                <li>
                                    <i class="fal fa-comments"></i>
                                    Comments (03)
                                </li>
                            </ul>
                            <h3><a href="{{ route('newsdetails') }}">Unlocking Opportunities The Visa Journey Unveiled</a>
                            </h3>
                            <p>
                                Transmds is the world’s driving worldwide coordinations supplier
                                we uphold.
                            </p>
                            <a href="{{ route('newsdetails') }}" class="link-btn">
                                <span>Read More</span> <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-box-items">
                        <div class="news-image">
                            <img src="{{ asset('front/img/all-image/about/young-man-smiling-and-reviwing-tickets-passport-with-visa.jpg') }}"
                                alt="img">
                            <img src="{{ asset('front/img/all-image/about/young-man-smiling-and-reviwing-tickets-passport-with-visa.jpg') }}"
                                alt="img">
                            <h6 class="date">27 <span>Sep</span></h6>
                        </div>
                        <div class="news-content">
                            <ul class="post-date">
                                <li>
                                    <i class="far fa-user-circle"></i>
                                    Shikhon .H
                                </li>
                                <li>
                                    <i class="fal fa-comments"></i>
                                    Comments (03)
                                </li>
                            </ul>
                            <h3><a href="{{ route('newsdetails') }}">Navigating Borders Ultimate Guide to Visa Success</a>
                            </h3>
                            <p>
                                Transmds is the world’s driving worldwide coordinations supplier
                                we uphold.
                            </p>
                            <a href="{{ route('newsdetails') }}" class="link-btn">
                                <span>Read More</span> <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
