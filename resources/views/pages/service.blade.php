@extends('layouts.default')
@section('title')
    Service
@endsection
@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Visa</h1>
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
                        Services
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Service Section Start >>-->
    <section class="service-section section-bg-4 fix section-padding">
        <div class="container">
            <div class="title-section-area">
                <div class="section-title">
                    <span class="wow fadeInUp">Visa Categories</span>
                    <h2 class="title-anim">
                        Outstanding Immigration <br> Visa Services.
                    </h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    Transmds is the world’s driving worldwide coordinations supplier <br> uphold industry and exchange the
                    worldwide trade of merchandi <br>
                    do eiusmod tempor incididunt ut labore et simply free text dolore
                </p>
            </div>
            <div class="service-wrapper-3">
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon">
                        <i class="flaticon-workers"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('servicedetails') }}">
                                Working Visa
                            </a>
                        </h6>
                    </div>
                </div>
                <div class="service-box-items style-2 active wow fadeInUp" data-wow-delay=".5s">
                    <div class="icon">
                        <i class="flaticon-traveller"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('servicedetails') }}">
                                Tourist Visa
                            </a>
                        </h6>
                    </div>
                </div>
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".7s">
                    <div class="icon">
                        <i class="flaticon-passport-16"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('servicedetails') }}">
                                Medical Visa
                            </a>
                        </h6>
                    </div>
                </div>
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="flaticon-graduated"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('servicedetails') }}">
                                Student Visa
                            </a>
                        </h6>
                    </div>
                </div>
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".9s">
                    <div class="icon">
                        <i class="flaticon-passport"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{ route('servicedetails') }}">
                                Family Visa
                            </a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="service-text-area text-center mt-5 wow fadeInUp" data-wow-delay=".4s">
                <h5>
                    Bring them together and you overcome the ordinary.
                    <a href="{{ route('servicedetails') }}"> class="link-btn link-btn-2">
                        <span>View More Service</span>
                        <i class="fal fa-plus"></i>
                    </a>
                </h5>
            </div>
        </div>
    </section>

    <!--<< Service Section Start >>-->
    <section class="service-section fix section-padding">
        <div class="container">
            <div class="service-wrapper p-0">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-card-items mt-0">
                            <h3> <a href="{{ route('servicedetails') }}">Business Visa</a></h3>
                            <p>
                                Sit amet consectetur bestibulu ullamcorer arcustulla amet dolor tortor elementum
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-card-items mt-0">
                            <h3> <a href="{{ route('servicedetails') }}">Student Visa</a></h3>
                            <p>
                                Sit amet consectetur bestibulu ullamcorer arcustulla amet dolor tortor elementum
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-card-items active mt-0">
                            <h3> <a href="{{ route('servicedetails') }}">Work Visa</a></h3>
                            <p>
                                Sit amet consectetur bestibulu ullamcorer arcustulla amet dolor tortor elementum
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-card-items mt-0">
                            <h3> <a href="{{ route('servicedetails') }}">Touriest Visa</a></h3>
                            <p>
                                Sit amet consectetur bestibulu ullamcorer arcustulla amet dolor tortor elementum
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-card-items mt-0">
                            <h3> <a href="{{ route('servicedetails') }}">Business Visa</a></h3>
                            <p>
                                Sit amet consectetur bestibulu ullamcorer arcustulla amet dolor tortor elementum
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-card-items mt-0">
                            <h3> <a href="{{ route('servicedetails') }}">Student Visa</a></h3>
                            <p>
                                Sit amet consectetur bestibulu ullamcorer arcustulla amet dolor tortor elementum
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
                </div>
            </div>
        </div>
    </section>

    <!--<< Cta Contact Section Start >>-->
    <section class="cta-banner-contact-section fix section-padding bg-cover"
        style="background-image: url('front/img/all-image/banner/statistic.jpg');">
        <div class="container">
            <div class="cta-banner-concat-wrapper">
                <h2 class="title-anim">We Counsel Students to Get <br> Study Visas</h2>
                <a href="{{ route('contact') }}" class="theme-btn hover-white wow fadeInUp" data-wow-delay=".5s">
                    <span>
                        Contact Us
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!--<< Visa Service Section Start >>-->
    <section class="visa-service-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">Service We Provide</span>
                <h2 class="title-anim">Explore Our Visa Citizenship & <br> Immigration Services</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-visa-items">
                        <div class="service-visa-thumb">
                            <img src="{{ asset('front/img/all-image/visa/visa-2.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/all-image/visa/visa-2.jpg') }}" alt="img">
                            <a href="{{ route('servicedetails') }}" class="image-overlay">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-visa-content">
                            <h3><a href="{{ route('servicedetails') }}">Student Visa</a></h3>
                            <p>
                                Quis autem vel eum iure reprehenderit quin eaes voluptate velit esse quam
                            </p>
                            <a href="{{ route('servicedetails') }}" class="link-btn">
                                <span>read more</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="service-visa-items">
                        <div class="service-visa-thumb">
                            <img src="{{ asset('front/img/all-image/visa/visa-1.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/all-image/visa/visa-1.jpg') }}" alt="img">
                            <a href="{{ route('servicedetails') }}" class="image-overlay">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-visa-content">
                            <h3> <a href="{{ route('servicedetails') }}">business Visa</a></h3>
                            <p>
                                Quis autem vel eum iure reprehenderit quin eaes voluptate velit esse quam
                            </p>
                            <a href="{{ route('servicedetails') }}" class="link-btn">
                                <span>read more</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="service-visa-items">
                        <div class="service-visa-thumb">
                            <img src="{{ asset('front/img/all-image/visa/visa-3.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/all-image/visa/visa-3.jpg') }}" alt="img">
                            <a href="{{ route('servicedetails') }}" class="image-overlay">
                                <i class="fal fa-plus"></i>
                            </a>
                        </div>
                        <div class="service-visa-content">
                            <h3> <a href="{{ route('servicedetails') }}">Tourist Visa</a></h3>
                            <p>
                                Quis autem vel eum iure reprehenderit quin eaes voluptate velit esse quam
                            </p>
                            <a href="{{ route('servicedetails') }}" class="link-btn">
                                <span>read more</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
