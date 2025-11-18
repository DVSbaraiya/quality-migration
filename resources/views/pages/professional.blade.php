@extends('layouts.default')
@section('title')
    Professional
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
        <div class="container">
            <div class="coaching-details-wrapper">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="details-content">
                            <h3 class="title-anim text-danger">Professional Year Program in Australia</h3>
                            <p>Are you an international graduate from an Australian university? The Professional Year
                                Program (PYP) offers a structured pathway to enhance your skills, gain valuable work
                                experience, and maximize your migration prospects in Australia.</p>
                        </div>
                    </div>
                    <div class="container py-5">
                        <!-- <div class="text-center mb-5">
                            <h3 class="section-title">What is CCL?</h3>
                            <p>The <span class="highlight">CCL test</span> assesses your ability to interpret conversations
                                at a community level between English and a Language Other Than English (LOTE).</p>
                            <p><strong>✅ Adds 5 migration points</strong> to your Skilled Visa application. <br>
                                <strong>🖥️ Online only</strong> – not a professional certification for working as an
                                interpreter.
                            </p>
                        </div> -->

                        <div class="row align-items-center mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('front/img/all-image/early/images-Picsart-AiImageEnhancer.jpg') }}"
                                    alt="CCL Test" class="img-feature img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h3 class="section-title">What is the Professional Year Program?</h3>
                                <p>The PYP combines formal learning with guaranteed internship placements in Australian
                                    companies. It is available in the following fields:</p>
                                <ul class="list-unstyled">• IT Professional Year</li>
                                    <li>• Engineering Professional Year</li>
                                    <p>This program is a stepping stone for building your career in Australia and securing
                                        additional migration points.</p>
                                </ul>
                            </div>
                        </div>
                        <div class="container py-5">
                            <div class=" mb-5">
                                <h3 class="section-title text-center">Professional Year Program Benefits</h3>
                                <p class="mb-4">Boost your migration chances while gaining real-world Australian workplace
                                    experience.</p>
                                <ul class="list-unstyled text-start">
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

                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <h3 class="section-title mb-3">Program Details</h3>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-clock-fill icon-bullet"></i> <strong>Duration:</strong> 12
                                            months (7 months classes + 3 months internship)</li>
                                        <li><i class="bi bi-calendar-event-fill icon-bullet"></i> <strong>Schedule:</strong>
                                            1 day/week (weekend options available)</li>
                                        <li><i class="bi bi-briefcase-fill icon-bullet"></i> <strong>Internship:</strong>
                                            Guaranteed placement in an Australian company</li>
                                        <li><i class="bi bi-patch-check-fill icon-bullet"></i> <strong>Validity:</strong> 4
                                            years from the date of completion</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('front/img/all-image/early/program-detail.jpeg') }}"
                                        alt="Professional Year Program" class="img-fluid rounded shadow" />
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6 order-md-2">
                                    <h3 class="section-title mb-3">Eligibility Criteria</h3>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-person-check-fill icon-bullet"></i> Must hold a
                                            <strong>Temporary Graduate Visa (TR 485)</strong> or <strong>476 Visa</strong>
                                        </li>
                                        <li><i class="bi bi-calendar-check-fill icon-bullet"></i> Apply at least <strong>12
                                                months before</strong> your visa expires</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 order-md-1">
                                    <img src="{{ asset('front/img/all-image/early/1611030245phpBxvmpI.png') }}"
                                        alt="Eligibility" class="img-fluid rounded shadow" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <h3 class="section-title">Maximizing Migration Opportunities</h3>
                                <p>The Professional Year enhances your chances of securing:</p>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-8">
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-flag-fill icon-bullet"></i> Subclass 189 – Skilled Independent
                                            Visa</li>
                                        <li><i class="bi bi-globe-americas icon-bullet"></i> State & Regional migration
                                            pathways</li>
                                    </ul>
                                    <h5 class="mt-4">📍 <span class="highlight">Regional Opportunities</span></h5>
                                    <ul class="list-unstyled">
                                        <li><i class="bi bi-geo-alt-fill icon-bullet"></i> Completing the program in a
                                            regional area meets many state-specific requirements</li>
                                        <li><i class="bi bi-plus-circle icon-bullet"></i> Canberra Matrix: +5 extra points
                                            for 1 year of study in Canberra</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <section class="py-5 bg-light">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mb-4 mb-md-0">
                                        <img src="{{ URL::asset('front/img/all-image/visa-detail/contact.jpg') }}"
                                            alt="Quality Migration Support" class="img-fluid rounded shadow">
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-4 text-danger">Why Choose <span class="text-dark">Quality
                                                Migration?</span></h3>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-light">• Expert advice on documents and skills
                                                assessment.</li>
                                            <li class="list-group-item bg-light">• Access to scholarship opportunities.
                                            </li>
                                            <li class="list-group-item bg-light">• Tailored Professional Year options across
                                                Australia.
                                            </li>
                                            <li class="list-group-item bg-light">• Multilingual team (English, Mandarin,
                                                Vietnamese, Bangla, and more).
                                            </li>
                                            <li class="list-group-item bg-light">• 4+ years of experience and 4.9/5
                                                customer satisfaction.
                                            </li>
                                            <li class="list-group-item bg-light">• Registered Migration Agents and Education
                                                Agents.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    </section>
    @include('pages.book')

@endsection
