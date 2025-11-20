@extends('layouts.default')
@section('title')
    Early Childhood & Secondary Teacher
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Early Childhood Teacher</h1>
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
                        Early Childhood Teacher
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
                                <img src="{{ asset('front/img/all-image/early/early-childhood-course.png') }}"
                                    alt="img">
                            </div>
                            <div class="details-content">
                                <h3 class="title-anim text-danger">Early Childhood & Secondary Teacher</h3>
                                <p class="mb-3">
                                    Australia is experiencing a significant demand for <b>Early Childhood and Secondary
                                        School
                                        Teachers,</b> presenting numerous opportunities for skilled professionals seeking
                                    Permanent
                                    Residency (PR). Recent policy updates and substantial government investments have
                                    further streamlined pathways for educators to establish and advance their careers in
                                    Australia.
                                </p>
                                <p>
                                    Need something changed or is there something not quite working the way you envisaged? Is
                                    your van a
                                    little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the
                                    printing and typesetting
                                    industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                    when an
                                    unknown printer took a galley of type and scrambled it to make.
                                </p>
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
