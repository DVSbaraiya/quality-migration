@extends('layouts.default')
@section('title')
Nursing in Australia – PR Pathways, Skilled Migration & Study Guide
@endsection

@section('description')
Learn how to build a nursing career in Australia. Explore PR pathways, skilled migration options, job demand, and study opportunities for international students and nurses.
@endsection

@section('tags')
nursing australia,
nursing pr pathway australia,
nurse visa australia,
skilled migration nurse,
registered nurse australia visa,
nursing study australia,
nursing jobs australia,
anzsco nurse australia,
international nursing australia,
nurse migration australia,
subclass 190 nursing,
subclass 491 nursing,
healthcare jobs australia
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Nursing</h1>
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
                        Nursing
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Coaching Section Start >>-->
    <section class="coaching-details-section fix section-padding">
        <div class="container">
            <div class="coaching-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="coaching-details-items">
                            <div class="details-image">
                                <img src="{{ asset('front/img/all-image/early/male-nurse-1-scaled.jpg') }}"
                                    alt="img">
                            </div>
                            <div class="details-content">
                                <h3 class="title-anim">Nursing </h3>
                                <p>Here’s a detailed draft tailored for <b> Quality Migration</b> with updates relevant to
                                    the
                                    current migration and study pathways for nurses in Australia:
                                </p>
                                <p>At <b>Quality Migration,</b> we specialize in guiding aspiring nurses toward a successful
                                    career
                                    in Australia. With nursing being one of the most in-demand occupations, there are
                                    numerous opportunities for international students and skilled workers to secure job
                                    roles and migration pathways.</p>
                                <div class="row justify-content-center mt-5">
                                    <div class="col-md-8 text-center">
                                        <h3 class="mb-4 section-title">Why Nursing?</h3>
                                        <ul class="list-group list-group-flush ">
                                            <li class="list-group-item">
                                                <strong>High Demand:</strong> Australia's healthcare system requires skilled
                                                nurses across various regions and specialties.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>PR Pathway:</strong> Nursing remains a priority occupation, making
                                                it a fast-tracked option for permanent residency (PR).
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Competitive Salaries:</strong> Nurses in Australia earn competitive
                                                pay, with opportunities for career growth and specialization.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
    </section>
    @include('pages.book')

    <!--<< Footer Section Start >>-->

    <!--<< All JS Plugins >>-->
@endsection
