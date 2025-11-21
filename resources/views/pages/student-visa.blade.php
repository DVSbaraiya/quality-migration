@extends('layouts.default')

@section('title')
Australia Student Visa (Subclass 500) – Complete Guide & PR Pathway
@endsection

@section('description')
Your complete guide to Australia’s Student Visa (Subclass 500). Learn requirements, GS, CoE, work rights, documents, PR pathways, and expert visa assistance.
@endsection

@section('tags')
student visa australia,
subclass 500 visa,
study in australia visa,
australia student visa requirements,
genuine student gs requirement,
coe australia student visa,
immi student visa,
international student australia,
student visa process australia,
study visa migration agent,
post-study work visa australia,
pr pathway student visa australia,
education consultant australia
@endsection


@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Student Visa</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>•
                        <a href="{{ url('/') }}">
                            Home Page
                        </a>
                    </li>
                    <li>•
                        <i class="fal fa-minus"></i>
                    </li>
                    <li>•
                        Student Visa
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @if (Session::has('success'))
<section class="contact-success-section">
    <div class="success-container">
        <h1 class="success-heading">
            Thank you for contacting us, we are here to help.<br>
            We will be in touch shortly.
        </h1>

        <div class="success-box">
            <div class="success-icon">
                <i class="far fa-thumbs-up"></i>
            </div>

            <h2 class="success-title">We will be in touch shortly</h2>

            <p class="success-message">
                Thanks for getting in touch. We appreciate your enquiry and a member of our team
                will be in touch with you shortly.
            </p>
        </div>
    </div>
</section>
@endif


    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    <!--<< Coaching Section Start >>-->
    <section class="coaching-details-section fix pt-5">
        <div class="container">
            <div class="coaching-details-wrapper">
                <div class="row g-5">
                    <div class="col-12">
                        <section class="pb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="student-first-sec">
                                            <h2 class="text-danger mb-4">Your Trusted Partner for Australia Student Visas</h2>
                                            <p>Australia is one of the world’s top destinations for international students seeking quality education, vibrant cultural experiences, and excellent career prospects. The Australian Student Visa (Subclass 500) allows you to study full-time at a registered education institution while enjoying the benefits of living in a safe, multicultural, and dynamic country.
                                                At onboard Visas, we are registered MARA agents authorised by Australian Government. We provide expert guidance and support to help navigate the Australian Student Visa application process smoothly and confidently.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('front/img/all-image/early/student-visa.jpeg') }}"
                                            class="img-fluid" alt="Student Visa" style="border-radius: 10px;">
                                    </div>
                                </div>

                                <!-- Student Guardian Visa Section -->
                                <div class="my-5 why-choose-student-visa">
                                    <h3 class="">Why Choose a Student Visa for Australia?</h3>
                                    <ul class="mt-2">
                                        <li>• Access to world-class universities, colleges, and vocational training</li>
                                        <li>• Opportunity to work part-time while studying to support your living expenses</li>
                                        <li>• Pathways to permanent residency through post-study work and skilled migration</li>
                                        <li>• Experience Australia’s multicultural society and stunning natural environment</li>
                                        <li>• Gain internationally recognized qualifications to boost your career worldwide</li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="why-choose-student-visa">
                                            <h3 class="my-2">Key Features of the Australian Student Visa</h3>
									        <ul>
                                                <li><strong>Duration:</strong> Valid for the length of your course plus additional time for travel or further study</li>
                                                <li><strong>Work Rights:</strong> Up to 48 hours per fortnight during the study term and unlimited hours during scheduled breaks</li>
                                                <li><strong>Dependents:</strong> Allows eligible family members to accompany you</li>
                                                <li><strong>Health Insurance:</strong> Requires Overseas Student Health Cover (OSHC) for the visa duration</li>
                                                <li><strong>Genuine Student (GS) Requirement:</strong> You must prove your intention to study temporarily in Australia</li>
                                            </ul>								
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('front/img/student-visa-photo.webp') }}"
                                            class="img-fluid" alt="Guardian Visa" style="border-radius: 10px;">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="coaching-details-section fix pt-5">
        <div class="container">
            <div class="student-pass-visa-step">
                <h2>
                    Step-by-Step Process to Apply for Australian Student Visa
                </h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="step-by-step-student">
                            <h4>Step 1: Select Your Course and Institution</h4>
                            <p>Choose a registered Australian education provider and obtain an official offer letter.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="step-by-step-student">
                            <h4>Step 2: Fulfil the Genuine Student (GS) Requirement</h4>
                            <p>Prepare a GS statement (formerly GTE) demonstrating your genuine intention to study temporarily in Australia. Include details on your study objectives, financial capacity, and strong ties to your home country.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="step-by-step-student">
                            <h4>Step 3: Obtain Your Confirmation of Enrolment (CoE)</h4>
                            <p>After accepting your offer and paying the required tuition fees, your institution will issue a Confirmation of Enrolment (CoE), which is essential for your visa application.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="step-by-step-student">
                            <h4>Step 4: Prepare Required Documentation</h4>
                            <p>Gather all necessary documents, including proof of identity, academic transcripts, English proficiency test results, financial evidence, and Overseas Student Health Cover (OSHC).</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="step-by-step-student">
                            <h4>Step 5: Submit Your Visa Application</h4>
                            <p>Apply online via the ImmiAccount portal on the Department of Home Affairs website using your CoE.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="step-by-step-student">
                            <h4>Step 6: Complete Biometrics and Health Examinations</h4>
                            <p>Provide biometrics and undergo any required medical assessments as requested by the authorities.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="step-by-step-student">
                            <h4>Step 7: Await the Visa Decision</h4>
                            <p>Processing times may vary. You can monitor your application’s progress through the online tracking system.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="step-by-step-student">
                            <h4>Step 8: Prepare for Your Journey to Australia</h4>
                            <p>Once approved, finalise your travel arrangements and begin your studies with confidence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <section class="contact-main-area fix section-padding">
        <div class="container">
            <div class="contact-main-wrapper">
                <div class="student-pass-visa-step">
                    <h2 class="mb-2">Begin Your Australian Education Journey Today </h2>
                    <p>Studying in Australia opens doors to a bright future. Contact Onboard Visas now for a free consultation to explore your options and receive professional help with your student visa application.</p>
                </div>
                <div class="row g-4 mt-5">
                    <div class="col-lg-6">
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
                    <div class="col-md-6">
                        <div class="student-visa-contact-image">
                            <img src="{{ asset('front/img/contact-us.webp') }}" class="img-fluid" style="border-radius: 10px;" alt="Contact Us">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.book')

@endsection
