@extends('layouts.default')

@section('title')
Professional Year Program Australia – IT & Engineering | PR Pathway
@endsection

@section('description')
Learn how the Professional Year Program (IT & Engineering) helps international graduates gain experience, earn 5 PR points, and build a career in Australia.
@endsection

@section('tags')
professional year program australia,
professional year it,
professional year engineering,
py program australia,
5 pr points professional year,
professional year requirements,
australia graduate visa pathway,
professional year internship,
professional year bridging program,
it professional year australia,
engineering professional year australia,
migration agent melbourne
@endsection


@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Professional Year</h1>
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
                        Professional Year
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
                    <div class="col-12">
                        <div class="details-content">
                            <h3 class="">Professional Year Program in Australia</h3>
                            <p>Are you an international graduate from an Australian university? The Professional Year
                                Program (PYP) offers a structured pathway to enhance your skills, gain valuable work
                                experience, and maximize your migration prospects in Australia.</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="row align-items-center mb-5">
                            <div class="col-md-5">
                                <img src="{{ asset('front/img/all-image/early/images-Picsart-AiImageEnhancer.jpg') }}"
                                    alt="CCL Test" class="img-feature img-fluid" style="border-radius: 10px;">
                            </div>
                            <div class="col-md-6">
                                <div class="section-div">
                                    <h3 class="section-title">What is the Professional Year Program?</h3>
                                <p>The PYP combines formal learning with guaranteed internship placements in Australian
                                    companies. It is available in the following fields:</p>
                                <ul class="">
                                    <li>• IT Professional Year</li>
                                    <li>• Engineering Professional Year</li>
                                    <li>This program is a stepping stone for building your career in Australia and securing
                                        additional migration points.</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="container py-5">
                            <div class="section-div mb-5">
                                <h3 class="">Professional Year Program Benefits</h3>
                                <p class="mb-4">Boost your migration chances while gaining real-world Australian workplace
                                    experience.</p>
                                <ul class="text-start">
                                    <li> Earn <strong>5 migration
                                            points</strong> towards your PR application</li>
                                    <li> Gain professional skills and
                                        local work experience</li>
                                    <li> Build industry connections and
                                        peer networks</li>
                                    <li> Learn to navigate Australian
                                        workplace culture</li>
                                    <li> <strong>Many graduates secure
                                            full-time jobs</strong> after internship</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @include('pages.book')

@endsection
