@extends('layouts.default')
@section('title')
    Engineering
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Engineering</h1>
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
                        Engineering
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
                                <img src="{{ asset('front/img/all-image/early/GettyImages-1414932669.png') }}"
                                    alt="img">
                            </div>
                    </div>
                    <div class="details-content mt-5">
                        <h3 class="title-anim ">Migration and Study Options for Engineering Occupations</h3>
                        <p>Australia is a land of opportunity for engineers, with numerous pathways to permanent residency
                            (PR) and career growth. As the country's economy grows, the demand for skilled engineers
                            continues to rise across various disciplines.</p>
                        <p>At <b>Quality Migration,</b> we specialize in guiding engineers toward their migration and study
                            goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.book')

@endsection
