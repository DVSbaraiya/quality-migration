@extends('layouts.default')
@section('title')
    Coaching
@endsection
@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Coaching</h1>
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
                        Coaching
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Coaching Section Start >>-->
    <section class="coaching-section fix section-padding section-bg">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="coaching-card-items">
                        <div class="coacing-image">
                            <img src="{{ asset('front/img/coaching/01.jpg') }}" alt="img">
                        </div>
                        <div class="icon">
                            <i class="flaticon-mortarboard"></i>
                        </div>
                        <div class="content text-center">
                            <h3><a href="{{ route('coachingdetails') }}">IELTS Courses</a></h3>
                            <p>
                                Sit amet conse bestibulume
                                ullamcorper nulla amet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="coaching-card-items">
                        <div class="coacing-image">
                            <img src="{{ asset('front/img/coaching/02.jpg') }}" alt="img">
                        </div>
                        <div class="icon">
                            <i class="flaticon-graduated"></i>
                        </div>
                        <div class="content text-center">
                            <h3><a href="{{ route('coachingdetails') }}">Citizenship Test</a></h3>
                            <p>
                                Sit amet conse bestibulume
                                ullamcorper nulla amet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="coaching-card-items active">
                        <div class="coacing-image">
                            <img src="{{ asset('front/img/coaching/03.jpg') }}" alt="img">
                        </div>
                        <div class="icon">
                            <i class="flaticon-plane-ticket"></i>
                        </div>
                        <div class="content text-center">
                            <h3><a href="{{ route('coachingdetails') }}">TOFEL Coaching</a></h3>
                            <p>
                                Sit amet conse bestibulume
                                ullamcorper nulla amet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="coaching-card-items">
                        <div class="coacing-image">
                            <img src="{{ asset('front/img/coaching/04.jpg') }}" alt="img">
                        </div>
                        <div class="icon">
                            <i class="flaticon-airplane-2"></i>
                        </div>
                        <div class="content text-center">
                            <h3><a href="{{ route('coachingdetails') }}">OET Coaching</a></h3>
                            <p>
                                Sit amet conse bestibulume
                                ullamcorper nulla amet
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Coaching Section Start >>-->
    <section class="coaching-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="coaching-box-items mt-0">
                        <div class="coaching-image">
                            <img src="{{ asset('front/img/coaching/05.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/coaching/05.jpg') }}" alt="img">
                            <a href="{{ route('coachingdetails') }}" class="image-overlay">
                                <i class="fal fa-plus"></i>
                            </a>
                            <h5 class="price">$170</h5>
                        </div>
                        <div class="content">
                            <h4><a href="{{ route('coachingdetails') }}">IELTS Course</a></h4>
                            <p>
                                We approached WiaTech with
                                complex project deliver
                            </p>
                            <a href="{{ route('coachingdetails') }}" class="link-btn link-btn-2">
                                <span>read more</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="coaching-box-items mt-0">
                        <div class="coaching-image">
                            <img src="{{ asset('front/img/coaching/06.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/coaching/06.jpg') }}" alt="img">
                            <a href="{{ route('coachingdetails') }}" class="image-overlay">
                                <i class="fal fa-plus"></i>
                            </a>
                            <h5 class="price">$170</h5>
                        </div>
                        <div class="content">
                            <h4><a href="{{ route('coachingdetails') }}">PTE Course</a></h4>
                            <p>
                                We approached WiaTech with
                                complex project deliver
                            </p>
                            <a href="{{ route('coachingdetails') }}" class="link-btn link-btn-2">
                                <span>read more</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="coaching-box-items mt-0">
                        <div class="coaching-image">
                            <img src="{{ asset('front/img/coaching/07.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/coaching/07.jpg') }}" alt="img">
                            <a href="{{ route('coachingdetails') }}" class="image-overlay">
                                <i class="fal fa-plus"></i>
                            </a>
                            <h5 class="price">$170</h5>
                        </div>
                        <div class="content">
                            <h4><a href="{{ route('coachingdetails') }}">TOEFL Course</a></h4>
                            <p>
                                We approached WiaTech with
                                complex project deliver
                            </p>
                            <a href="{{ route('coachingdetails') }}" class="link-btn link-btn-2">
                                <span>read more</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="coaching-box-items mt-0">
                        <div class="coaching-image">
                            <img src="{{ asset('front/img/coaching/08.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/coaching/08.jpg') }}" alt="img">
                            <a href="{{ route('coachingdetails') }}" class="image-overlay">
                                <i class="fal fa-plus"></i>
                            </a>
                            <h5 class="price">$170</h5>
                        </div>
                        <div class="content">
                            <h4><a href="{{ route('coachingdetails') }}">GRE Course</a></h4>
                            <p>
                                We approached WiaTech with
                                complex project deliver
                            </p>
                            <a href="{{ route('coachingdetails') }}" class="link-btn link-btn-2">
                                <span>read more</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Coaching Section Start >>-->
    <section class="coaching-section fix section-bg section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="coaching-box-items-2 mt-0">
                        <div class="coaching-image">
                            <img src="{{ asset('front/img/coaching/01.jpg') }}" alt="img">
                        </div>
                        <div class="coaching-content">
                            <h3><a href="{{ route('coachingdetails') }}">IELTS Courses</a></h3>
                            <p>
                                At Tech Genius Solution we understand that business
                                has unique IT needs offer a comprehensive
                            </p>
                            <a href="{{ route('newsdetails') }}" class="link-btn mt-2 d-inline-block">
                                Read More<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="coaching-box-items-2 mt-0">
                        <div class="coaching-image">
                            <img src="{{ asset('front/img/coaching/02.jpg') }}" alt="img">
                        </div>
                        <div class="coaching-content">
                            <h3><a href="{{ route('coachingdetails') }}">Citizenship Test</a></h3>
                            <p>
                                At Tech Genius Solution we understand that business
                                has unique IT needs offer a comprehensive
                            </p>
                            <a href="{{ route('newsdetails') }}" class="link-btn mt-2 d-inline-block">
                                Read More<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="coaching-box-items-2 mt-0">
                        <div class="coaching-image">
                            <img src="{{ asset('front/img/coaching/03.jpg') }}" alt="img">
                        </div>
                        <div class="coaching-content">
                            <h3><a href="{{ route('coachingdetails') }}">TOFEL Coaching</a></h3>
                            <p>
                                At Tech Genius Solution we understand that business
                                has unique IT needs offer a comprehensive
                            </p>
                            <a href="{{ route('newsdetails') }}" class="link-btn mt-2 d-inline-block">
                                Read More<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="coaching-box-items-2 mt-0">
                        <div class="coaching-image">
                            <img src="{{ asset('front/img/coaching/04.jpg') }}" alt="img">
                        </div>
                        <div class="coaching-content">
                            <h3><a href="{{ route('coachingdetails') }}">OET Coaching</a></h3>
                            <p>
                                At Tech Genius Solution we understand that business
                                has unique IT needs offer a comprehensive
                            </p>
                            <a href="{{ route('newsdetails') }}" class="link-btn mt-2 d-inline-block">
                                Read More<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
