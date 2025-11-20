@extends('layouts.default')
@section('title')
    Employer Sponsored Visa
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Employer Sponsored Visa </h1>
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
                        Employer Sponsored Visa
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
                    <div class="details-content">
                        <h3 class="">Expanding Pathways to Permane  nt Residency for Skilled Workers in
                            Australia
                        </h3>
                        <p>Australia is committed to improving its migration system to provide clear and accessible pathways
                            to Permanent Residency (PR) for Temporary Skill Shortage (TSS) visa holders (Subclass 482).
                            These changes aim to attract skilled workers and offer greater certainty to both employers and
                            employees while simplifying the nomination process.
                        </p>
                    </div>
                    <div class="details-content">
                        <!-- Employer-Sponsored Visa Updates -->
                        <div class="container py-5">
                            <div class="text-center mb-5">
                                <h3 class="section-title">Employer-Sponsored Visa Updates</h3>
                            </div>

                            <div class="row g-4">
                                <!-- Nomination Changes -->
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Nomination Changes (TRT Stream – ENS/RSMS)</h5>
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-person-check icon-bullet"></i> <strong>Eligible
                                                        Visas:</strong> All TSS streams, including Short-term & Labour
                                                    Agreement.</li>
                                                <li><i class="bi bi-clock-history icon-bullet"></i> <strong>Work
                                                        Experience:</strong> Must hold TSS/457 visas for 2 out of 3 years.
                                                </li>
                                                <li><i class="bi bi-geo-alt icon-bullet"></i> <strong>RSMS Visa:</strong>
                                                    Still limited to transitional 457 & 482 visa holders.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Occupation & Age Changes -->
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Occupation & Age Requirement Changes</h5>
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-list-check icon-bullet"></i> <strong>Occupation Lists
                                                        Removed:</strong> No longer restricted to MLTSSL.</li>
                                                <li><i class="bi bi-diagram-3 icon-bullet"></i> Must align with
                                                    <strong>ANZSCO</strong> classifications.
                                                </li>
                                                <li><i class="bi bi-person-vcard icon-bullet"></i> <strong>Age
                                                        Exemptions:</strong> Available for regional medical practitioners &
                                                    high-income earners (45+).</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- TSMIT + PR Pathway -->
                            <div class="row mt-5 g-4">
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Higher TSMIT & PR Pathways</h5>
                                            <ul class="list-unstyled">
                                                <li><i class="bi bi-currency-dollar icon-bullet"></i> <strong>TSMIT
                                                        Increased:</strong> From $53,900 → $70,000 (July 1, 2023).</li>
                                                <li><i class="bi bi-graph-up-arrow icon-bullet"></i> New applications must
                                                    meet TSMIT or market salary rate.</li>
                                                <li><i class="bi bi-arrow-repeat icon-bullet"></i> <strong>PR Pathway (By
                                                        Dec 2023):</strong> TRT stream open to all TSS holders.</li>
                                                <li><i class="bi bi-hourglass icon-bullet"></i> Work experience now only 2
                                                    years with sponsor for PR.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Visa Options -->
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Employer-Sponsored Visa Options</h5>
                                            <ul class="list-unstyled">
                                                <li><strong>482 (TSS):</strong> Fill skill gaps with PR transition through
                                                    TRT.</li>
                                                <li><strong>186 (ENS):</strong> Direct Entry, TRT & Labour Agreement
                                                    streams.</li>
                                                <li><strong>407 (Training):</strong> 1–2 years full-time experience → 2
                                                    years stay.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Benefits & Expert Advice -->
                            <div class="row mt-5 g-4">
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Benefits for Employers & Employees</h5>
                                            <ul class="list-unstyled">
                                                <li><strong>Employers:</strong> Easier skilled worker retention & broader
                                                    occupation access.</li>
                                                <li><strong>Employees:</strong> Clear PR pathways, reduced time & costs for
                                                    transition.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Expert Guidance Matters</h5>
                                            <p>Employer-sponsored visas demand accuracy. Incorrect info or missing
                                                requirements can lead to refusal or cancellation. Get expert assistance for
                                                a smooth application.</p>
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
