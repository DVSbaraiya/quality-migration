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
        <div class="container">
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
                        <h3 class="title-anim text-danger">Migration and Study Options for Engineering Occupations</h3>
                        <p>Australia is a land of opportunity for engineers, with numerous pathways to permanent residency
                            (PR) and career growth. As the country's economy grows, the demand for skilled engineers
                            continues to rise across various disciplines.</p>
                        <p>At <b>Quality Migration,</b> we specialize in guiding engineers toward their migration and study
                            goals.</p>
                    </div>
                    <section class="pb-5 bg-light">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-12 mt-5">
                                    <h4 class="text-center text-danger mb-4">Recent Highlights for Engineering Occupations
                                    </h4>
                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title text-success">Massive Invitations for Engineers</h5>
                                            <ul>
                                                <li>Recent invitation rounds have benefited engineers across multiple
                                                    disciplines.</li>
                                                <li>PR invitations issued through subclass 189 and 190 have increased, with
                                                    applicants receiving invitations at competitive points thresholds.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title text-success">Flexible Skills Assessment Options</h5>
                                            <ul>
                                                <li>Engineering graduates from Australian-accredited courses may not require
                                                    work experience for migration skills assessments.</li>
                                                <li>Applicants with non-accredited qualifications can substitute work
                                                    experience with a Competency Demonstration Report (CDR).</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title text-success">Opportunities Across All States</h5>
                                            <ul>
                                                <li>Every Australian state offers tailored pathways for engineering
                                                    professionals.</li>
                                                <li>Some states have relaxed requirements for onshore and offshore
                                                    applicants.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title text-success">What is a CDR (Competency Demonstration
                                                Report)?</h5>
                                            <p>A CDR is a vital document assessed by Engineers Australia to determine your
                                                eligibility for migration as an engineer.</p>
                                            <ul>
                                                <li><strong>Three Career Episodes:</strong> Showcase your skills through
                                                    work experience or university projects.</li>
                                                <li><strong>Summary Statement:</strong> Highlight your engineering
                                                    competencies.</li>
                                                <li><strong>Continuing Professional Development (CPD):</strong> Document
                                                    your ongoing learning and professional growth.</li>
                                            </ul>
                                            <p><strong>Benefits of a CDR:</strong></p>
                                            <ul>
                                                <li>Apply for migration even without formal work experience.</li>
                                                <li>Qualify for multiple roles using a single qualification (e.g., Civil
                                                    Engineer, Draftsperson, Technician).</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title text-success">Diploma Pathways for Engineers</h5>
                                            <p>Diploma courses offer a cost-effective entry into the engineering field.</p>
                                            <ul>
                                                <li>Civil Construction Draftsperson</li>
                                                <li>Electrical Engineering Technician</li>
                                                <li>Telecommunications Technical Officer</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title text-success">State-Specific Updates for Engineers</h5>
                                            <ul>
                                                <li><strong>Western Australia (WA):</strong> Open to both onshore and
                                                    offshore candidates, graduate streams available, high demand for
                                                    engineers.</li>
                                                <li><strong>South Australia (SA):</strong> Flexible streams, exemptions from
                                                    working in nominated occupation, 400+ occupations listed.</li>
                                                <li><strong>Queensland (QLD):</strong> Broad list for subclass 190 and 491,
                                                    offshore applicants welcome, no job required.</li>
                                                <li><strong>Victoria:</strong> No minimum work experience needed, casual and
                                                    part-time work accepted.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card shadow-sm mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title text-success">Professional Year Program for Engineers
                                            </h5>
                                            <p>The PY Program combines formal education with real-world work experience for
                                                international engineering graduates.</p>
                                            <ul>
                                                <li>Enhances employability through internships.</li>
                                                <li>Earns additional migration points.</li>
                                                <li>Supports PR pathways via subclass 189, 190, and 491 visas.</li>
                                                <li><strong>Structure:</strong> 12 months – 7 months of classes (weekend
                                                    options available), 3-month internship placement.</li>
                                                <li><strong>Regional Advantage:</strong> Completing PY in Canberra adds 10
                                                    bonus points.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h5 class="card-title text-success">Why Choose Quality Migration?</h5>
                                            <ul>
                                                <li>Registered Migration Agents (MARA certified) offering genuine advice.
                                                </li>
                                                <li>Help with skills assessments, visas, and course enrollment.</li>
                                                <li>Specialized support for nurses with tailored advice on pathways.</li>
                                                <li>Multilingual support: English, Mandarin, Bangla, Tagalog, Vietnamese,
                                                    and more.</li>
                                            </ul>
                                        </div>
                                    </div>
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
