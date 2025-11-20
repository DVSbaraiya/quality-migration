@extends('layouts.default')
@section('title')
    Temporary Graduate
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Temporary Graduate </h1>
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
                        Temporary Graduate
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
                    <div class="details-content">
                        <h3 class="title-anim text-danger">Temporary Graduate Visa (TR 485) Updates – 2024
                        </h3>
                        <p>As part of the <b>Migration Overhaul Strategy</b> and <b>Migration Review 2024,</b> several
                            significant changes
                            to the Temporary Graduate Visa (TR 485) have been announced, taking effect from <b>1st July
                                2024.</b>
                        </p>
                    </div>
                    <div class="details-content">
                        <h3 class="title-anim text-danger">Key Changes to TR 485
                        </h3>
                        <div class="service-wrapper p-0">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="service-card-items">
                                        <h3><a href="#">Stream Name Updates</a></h3>
                                        <p>
                                            • Graduate Work Stream → Renamed to Post-Vocational Education Work Stream.
                                        </p>
                                        <p>• Post-Study Work Stream → Renamed to Post-Higher Education Work Stream.</p>
                                        <p>• Second Post-Study Work Stream → Renamed to Second Post-Higher Education Work
                                            Stream.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="service-card-items">
                                        <h3><a href="#">Eligibility and Age Limits</a></h3>
                                        <p>• Age limit: Applicants must be under 35 years.</b>
                                        </p>
                                        <p>• Hong Kong and British National Overseas (BNO) passport holders remain eligible
                                            up to 50 years of age.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="service-card-items">
                                        <h3><a href="#">Graduate Work Stream Requirements</a>
                                        </h3>
                                        <p>• Must hold an associate degree, diploma, or trade qualification closely related
                                            to a nominated occupation on the Medium and Long-term Strategic Skills List
                                            (MLTSSL).</p>

                                        <p>• Applicants with a degree-level qualification or higher will no longer be
                                            eligible for this stream.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="container py-5">
                                <div class="mb-5 section-div">
                                    <h3 class="">Post-Study Work Stream Changes</h3>
                                    <p class="mb-2">Duration updates:</p>
                                    <ul class="list-unstyled text-start">
                                        <li>• Bachelor/Master by
                                            Coursework: 2 years.
                                        </li>
                                        <li>• Master by Research/PhD: 3
                                            years.</li>
                                        <li>• The ‘select degree’ 2-year
                                            extension has been discontinued.
                                        </li>
                                    </ul>
                                </div>
                                <div class="container py-5">
                                    <div class="mb-5 section-div">
                                        <h3 >Special Provisions for Indian Nationals</h3>
                                        <p class="mb-4">Benefits under the Australian Indian – Economic Cooperation and
                                            Trade Agreement (AI-ECTA):</p>
                                        <ul class="list-unstyled text-start">
                                            <li><i class="bi bi-mortarboard icon-bullet"></i> <strong>Bachelor Degrees
                                                    (including honours):</strong> Up to 2 years</li>
                                            <li><i class="bi bi-cpu icon-bullet"></i> <strong>STEM Bachelor Degrees (1st
                                                    Class Honours):</strong> Up to 3 years</li>
                                            <li><i class="bi bi-journal-richtext icon-bullet"></i> <strong>Masters
                                                    (Coursework/Extended/Research):</strong> Up to 3 years</li>
                                            <li><i class="bi bi-award icon-bullet"></i> <strong>Doctoral Degrees
                                                    (PhD):</strong> Up to 4 years</li>
                                        </ul>
                                    </div>

                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <div class="section-div">
                                                <h3 class="">English Language Requirement Updates</h3>
                                            <p><strong>Effective: 23rd March 2024</strong></p>
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-translate icon-bullet"></i> <strong>Minimum Overall
                                                        Score:</strong> IELTS 6.5 (or equivalent)</li>
                                                <li><i class="bi bi-x-circle icon-bullet"></i> <strong>No Component
                                                        Below:</strong> 5.5</li>
                                                <li><i class="bi bi-calendar-check icon-bullet"></i> <strong>Test
                                                        Validity:</strong> Within 1 year of application</li>
                                                <li><i class="bi bi-flag icon-bullet"></i> <strong>Exception:</strong> Hong
                                                    Kong & BNO passport holders retain IELTS 6.0 (no band < 5.0)</li>
                                            </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('front/img/all-image/early/How-to-Learn-English-.jpg') }}"
                                                alt="Visa Benefits for Indian Nationals" class="img-fluid rounded shadow" />
                                        </div>
                                    </div>

                                    <div class="text-center mb-4">
                                        <h3 class="text-danger title-anim">Post-Study Work Visa Streams</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow-sm">
                                                <div class="card-body">
                                                    <h5 class="card-title">Post-Vocational Education Work Stream</h5>
                                                    <p class="card-text">For graduates with qualifications tied to MLTSSL
                                                        occupations.</p>
                                                    <p><strong>Visa Validity:</strong> 24 months <span
                                                            class="text-muted">(previously 18 months)</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow-sm">
                                                <div class="card-body">
                                                    <h5 class="card-title">Post-Higher Education Work Stream</h5>
                                                    <p class="card-text">For graduates with higher education qualifications.
                                                    </p>
                                                    <ul class="mb-0">
                                                        <li><strong>Bachelor / Master by Coursework:</strong> 2 years</li>
                                                        <li><strong>Master by Research / PhD:</strong> 3 years</li>
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
            </div>
        </div>
    </section>
    @include('pages.book')
@endsection

