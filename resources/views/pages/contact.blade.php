@extends('layouts.default')
@section('title')
    Contact
@endsection

@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
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
                        Contact Us
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif
    <!--<< Contact Section Start >>-->
    <section class="contact-main-area fix section-padding">
        <div class="container">
            <div class="contact-main-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="contact-content">
                            <div class="section-title mb-2">
                                <span class="wow fadeInUp">Get In Touch</span>
                                <h2 class="title-anim">Contact Us</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 wow fadeInUp mt-3" data-wow-delay=".5s">
                                    <div class="info-items">
                                        <div class="icon">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Phone</h5>
                                            <a href="tel:+09354587874">+61  426 876 249 </a> <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp mt-3" data-wow-delay=".7s">
                                    <div class="info-items">
                                        <div class="icon">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Email</h5>
                                            <a href="mailto:admin@qualitymigration.com"
                                                class="link">admin@qualitymigration.com</a> <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="contact-form-items">
                            <div class="contact-title">
                                <h3 class="wow fadeInUp" data-wow-delay=".3s">Fill Up The Form</h3>
                                <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published.
                                    Required fields are marked *</p>
                            </div>
                            <form action="{{ route('contact.send') }}" method="POST">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Your Name*">
                                            <div class="icon">
                                                <i class="fal fa-user"></i>
                                            </div>
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="tel" name="number" id="number" placeholder="Your number*">
                                            <div class="icon">
                                                <i class="fal fa-mobile"></i>
                                            </div>
                                            <span class="text-danger">
                                                @error('number')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email"
                                                placeholder="Email Address*">
                                            <div class="icon">
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Enter Your Message here"></textarea>
                                            <div class="icon">
                                                <i class="fal fa-edit"></i>
                                            </div>
                                            <span class="text-danger">
                                                @error('message')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                        <button type="submit" class="theme-btn">
                                            <span><i class="fal fa-paper-plane"></i>Get In Touch</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Map Section Start >>-->
    <div class="map-section">
        <div class="google-map wow fadeInUp" data-wow-delay=".7s">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3148.257115655251!2d145.08845689999998!3d-37.9010525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66a59f1aaba0d%3A0x5d34ee25bdc3f444!2s1%2F18%20Haughton%20Rd%2C%20Oakleigh%20VIC%203166%2C%20Australia!5e0!3m2!1sen!2sin!4v1751863626894!5m2!1sen!2sin"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
