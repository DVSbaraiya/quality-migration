@extends('layouts.default')
@section('title')
    Social Work
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Social Work</h1>
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
                        Social Work
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Coaching Section Start >>-->
    <section class="coaching-details-section fix section-padding">
        <div class="container px-4 px-md-0">
            <div class="coaching-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="coaching-details-items">
                            <div class="details-image">
                                <img src="{{ asset('front/img/social-worker.webp') }}"
                                    alt="img" style="border-radius: 10px;">
                            </div>
                        </div>
                    </div>
                    <div class="details-content">
                        <h3 class="title-anim text-danger">Social Workers and Community Workers: In-Demand Occupations in
                            Australia
                        </h3>
                        <p>Social Worker and Community Worker occupations are currently in high demand across Australia.
                            Over the past six months, there has been consistent invitation activity for both occupations,
                            providing excellent migration opportunities for qualified professionals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.book')

@endsection
