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
        <div class="container">
            <div class="coaching-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="coaching-details-items">
                            <div class="details-image">
                                <img src="{{ asset('front/img/all-image/early/1681527898606.jpg') }}"
                                    alt="img">
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
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-success">Recent PR Invitation Trends</h5>
                            <ul>
                                <li><strong>Community Workers:</strong> Received invitations this year from all states
                                    except Queensland. ACT issued invitations with only 80 points in the 1st round of this
                                    financial year.</li>
                                <li><strong>Social Workers:</strong> Received invitations with as low as 60 points, making
                                    it one of the most accessible occupations for migration.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-success">How to Become an Accredited Social Worker</h5>
                            <p>To practice as a Social Worker in Australia, you must hold at least a Bachelor’s degree or
                                higher qualification. Relevant experience or on-the-job training may also be required in
                                some cases.</p>
                            <p><strong>Education and Assessment Requirements:</strong></p>
                            <ul>
                                <li>A degree in Social Work is sufficient to attain a Migration Skills Assessment.</li>
                                <li>A minimum English test score is required.</li>
                            </ul>
                            <p><strong>Study Options for Social Work:</strong></p>
                            <ul>
                                <li><strong>Bachelor of Social Work:</strong> Duration: 4 years. Initial Deposit: Contact us
                                    for details.</li>
                                <li><strong>Master of Social Work:</strong> Duration: 2.5 years (for applicants without
                                    prior relevant study background). Initial Deposit: Contact us for details.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-success">How to Become an Accredited Community Worker</h5>
                            <p>To practice as a Community Worker, a minimum qualification of AQF Associate Degree, Advanced
                                Diploma, or Diploma is required. An ACWA-accredited degree is necessary for a Migration
                                Skills Assessment.</p>
                            <p><strong>Skills Assessment Notes:</strong></p>
                            <ul>
                                <li>VETASSESS requires 1 year of work experience in the nominated occupation.</li>
                                <li>Ensure that your course is accredited by the relevant skills assessment body.</li>
                            </ul>
                            <p><strong>Professional Guidance:</strong> Choosing the right course is critical. At Quality
                                Migration, our team provides expert advice to help you select the best pathway.</p>
                            <p><strong>Free Student Visa Assistance:</strong> Apply for a course through us and enjoy no
                                service fees for your student visa application.</p>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-success">Migration Pathways and Additional Opportunities</h5>
                            <p>Explore various pathways to attain positive skills assessments for related occupations like
                                Community Arts Worker and Welfare Centre Manager.</p>
                            <ul>
                                <li><strong>Community Worker Migration Pathway</strong></li>
                                <li><strong>Welfare Worker Migration Pathway</strong></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-success">Why Choose Quality Migration?</h5>
                            <p><strong>Our Expertise:</strong></p>
                            <ul>
                                <li>Comprehensive support for Social Workers and Community Workers.</li>
                                <li>Guidance on skills assessments and accredited study options.</li>
                                <li>Personalized migration strategies tailored to your unique profile.</li>
                            </ul>
                            <p><strong>Our Advantages:</strong></p>
                            <ul>
                                <li>Experienced Registered Migration Agents.</li>
                                <li>Multilingual team fluent in English, Bangla, Mandarin, and more.</li>
                                <li>No service fees for student visa applications when you apply for a course through us.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.book')

@endsection
