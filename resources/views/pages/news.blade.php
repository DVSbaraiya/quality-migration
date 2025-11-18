@extends('layouts.default')
@section('title')
    News & Events
@endsection

@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">News And Article</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ url('/') }}"> Home Page </a>
                    </li>
                    <li>
                        <i class="fal fa-minus"></i>
                    </li>
                    <li>
                        News And Article
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< News Section Start >>-->
    <section class="news-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-box-items mt-0">
                        <div class="news-image">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
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
                            <h3> <a href="#">Navigating Borders Ultimate Guide to Visa Success</a></h3>
                            <p>
                                Transmds is the world’s driving worldwide coordinations supplier
                                we uphold.
                            </p>
                            <a href="#" class="link-btn">
                                <span>Read More</span> <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="news-box-items mt-0">
                        <div class="news-image">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
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
                            <h3> <a href="#">Unlocking Opportunities The Visa Journey Unveiled</a></h3>
                            <p>
                                Transmds is the world’s driving worldwide coordinations supplier
                                we uphold.
                            </p>
                            <a href="#" class="link-btn">
                                <span>Read More</span> <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-box-items mt-0">
                        <div class="news-image">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
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
                            <h3> <a href="#">Navigating Borders Ultimate Guide to Visa Success</a></h3>
                            <p>
                                Transmds is the world’s driving worldwide coordinations supplier
                                we uphold.
                            </p>
                            <a href="#" class="link-btn">
                                <span>Read More</span> <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-box-items mt-0">
                        <div class="news-image">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
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
                            <h3> <a href="#">Navigating Borders Ultimate Guide to Visa Success</a></h3>
                            <p>
                                Transmds is the world’s driving worldwide coordinations supplier
                                we uphold.
                            </p>
                            <a href="#" class="link-btn">
                                <span>Read More</span> <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="news-box-items mt-0">
                        <div class="news-image">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
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
                            <h3> <a href="#">Unlocking Opportunities The Visa Journey Unveiled</a></h3>
                            <p>
                                Transmds is the world’s driving worldwide coordinations supplier
                                we uphold.
                            </p>
                            <a href="#" class="link-btn">
                                <span>Read More</span> <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-box-items mt-0">
                        <div class="news-image">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
                            <img src="{{ asset('front/img/news.jpg') }}" alt="img">
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
                            <h3> <a href="#">Navigating Borders Ultimate Guide to Visa Success</a></h3>
                            <p>
                                Transmds is the world’s driving worldwide coordinations supplier
                                we uphold.
                            </p>
                            <a href="#" class="link-btn">
                                <span>Read More</span> <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
