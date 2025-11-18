@extends('layouts.default')
@section('title')
    Country
@endsection
@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Country</h1>
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
                        Country

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Countries Section Start >>-->
    <section class="countries-section fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="countries-card-items mt-0">
                        <div class="thumb">
                            <img src="{{ asset('front/img/flag/turkey.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3> <a href="{{ route('countrydetails') }}">turkey </a></h3>
                            <p>Average time to resolve a
                                cyber.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="countries-card-items mt-0">
                        <div class="thumb">
                            <img src="{{ asset('front/img/flag/france.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3> <a href="{{ route('countrydetails') }}">france </a></h3>
                            <p>Average time to resolve a
                                cyber.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="countries-card-items mt-0">
                        <div class="thumb">
                            <img src="{{ asset('front/img/flag/aus.jpg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3> <a href="{{ route('countrydetails') }}">Australia </a></h3>
                            <p>Average time to resolve a
                                cyber.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="countries-card-items mt-0">
                        <div class="thumb">
                            <img src="{{ asset('front/img/flag/us.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3> <a href="{{ route('countrydetails') }}">United States </a></h3>
                            <p>Average time to resolve a
                                cyber.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="countries-card-items mt-0">
                        <div class="thumb">
                            <img src="{{ asset('front/img/flag/india.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3> <a href="{{ route('countrydetails') }}">India</a></h3>
                            <p>Average time to resolve a
                                cyber.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="countries-card-items mt-0">
                        <div class="thumb">
                            <img src="{{ asset('front/img/flag/dubai.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3> <a href="{{ route('countrydetails') }}">Dubai</a></h3>
                            <p>Average time to resolve a
                                cyber.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Case Studies Start >>-->
    <div class="marque-section">
        <div class="marquee-wrapper text-slider style-height">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Visa Processing</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Help in Documentation</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Immigrations</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Travel Partners</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Tours & Travel Agency</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Visa Processing</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Help in Documentation</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Immigrations</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Travel Partners</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Tours & Travel Agency</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Country Section Start >>-->
    <section class="country-section fix section-padding section-bg-3 bg-cover"
        style="background-image: url('front/img/flag/lines-waves1.png');">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="country-box-items mt-0">
                        <div class="flag-thumb">
                            <img src="{{ asset('front/img/flag/eng.png') }}" alt="img">
                        </div>
                        <div class="flag-content">
                            <h3> <a href="{{ route('countrydetails') }}">England</a></h3>
                            <p>
                                creative agency we believe in the Eid
                                and innovation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="country-box-items mt-0">
                        <div class="flag-thumb">
                            <img src="{{ asset('front/img/flag/russ.png') }}" alt="img">
                        </div>
                        <div class="flag-content">
                            <h3> <a href="{{ route('countrydetails') }}">Russia</a></h3>
                            <p>
                                creative agency we believe in the Eid
                                and innovation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="country-box-items mt-0">
                        <div class="flag-thumb">
                            <img src="{{ asset('front/img/flag/bra.png') }}" alt="img">
                        </div>
                        <div class="flag-content">
                            <h3> <a href="{{ route('countrydetails') }}">Brazil</a></h3>
                            <p>
                                creative agency we believe in the Eid
                                and innovation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="country-box-items mt-0">
                        <div class="flag-thumb">
                            <img src="{{ asset('front/img/flag/ger.png') }}" alt="img">
                        </div>
                        <div class="flag-content">
                            <h3> <a href="{{ route('countrydetails') }}">Germany</a></h3>
                            <p>
                                creative agency we believe in the Eid
                                and innovation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Case Studies Start >>-->
    <div class="marque-section">
        <div class="marquee-wrapper text-slider style-height">
            <div class="marquee-inner to-right">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Visa Processing</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Help in Documentation</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Immigrations</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Travel Partners</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Tours & Travel Agency</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Visa Processing</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Help in Documentation</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Immigrations</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Travel Partners</span>
                    </li>
                    <li class="marquee-item style-2">
                        <span class="text-slider"><i class="fas fa-plane"></i></span><span
                            class="text-slider text-style">Tours & Travel Agency</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Country Section Start >>-->
    <section class="country-section-4 fix section-padding">
        <div class="container">
            <div class="swiper flag-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="country-box-items style-2 mt-0">
                            <div class="flag-thumb">
                                <img src="{{ asset('front/img/flag/eng.png') }}" alt="img">
                            </div>
                            <div class="flag-content">
                                <h3> <a href="{{ route('countrydetails') }}">England</a></h3>
                                <p>
                                    creative agency we believe in the Eid
                                    and innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="country-box-items style-2 mt-0">
                            <div class="flag-thumb">
                                <img src="{{ asset('front/img/flag/russ.png') }}" alt="img">
                            </div>
                            <div class="flag-content">
                                <h3> <a href="{{ route('countrydetails') }}">Russia</a></h3>
                                <p>
                                    creative agency we believe in the Eid
                                    and innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="country-box-items style-2 mt-0">
                            <div class="flag-thumb">
                                <img src="{{ asset('front/img/flag/bra.png') }}" alt="img">
                            </div>
                            <div class="flag-content">
                                <h3> <a href="{{ route('countrydetails') }}">Brazil</a></h3>
                                <p>
                                    creative agency we believe in the Eid
                                    and innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="country-box-items style-2 mt-0">
                            <div class="flag-thumb">
                                <img src="{{ asset('front/img/flag/ger.png') }}" alt="img">
                            </div>
                            <div class="flag-content">
                                <h3> <a href="{{ route('countrydetails') }}">Germany</a></h3>
                                <p>
                                    creative agency we believe in the Eid
                                    and innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
