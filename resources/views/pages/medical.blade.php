@extends('layouts.default')
@section('title')
    Medical Laboratory
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Medical Laboratory</h1>
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
                        Medical Laboratory
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
                                <img src="{{ asset('front/img/all-image/early/cls_header.jpg') }}"
                                    alt="img">
                            </div>

                            <div class="details-content">
                                <h3 class="title-anim">Medical Laboratory Scientists: Your Pathway to Skilled
                                    Migration
                                </h3>
                                <p>Medical Laboratory Scientists play a vital role in the healthcare system by conducting
                                    tests that
                                    assist in diagnosing, treating, and preventing diseases. Australia offers a range of
                                    migration
                                    pathways for professionals in this field, making it an excellent destination to advance
                                    your
                                    career and secure permanent residency (PR).</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('pages.book')

@endsection
