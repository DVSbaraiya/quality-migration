@extends('layouts.default')
@section('title')
Employer-Sponsored Visa Australia – 482, 186 & 494 PR Pathways (2024)
@endsection

@section('description')
Explore updated employer-sponsored visas in Australia, including 482, 186 & 494. Learn PR pathways, TSMIT updates, age exemptions, nomination changes, and migration options.
@endsection

@section('tags')
employer sponsored visa australia,
subclass 482 visa,
subclass 186 visa,
subclass 494 visa,
tss visa australia,
ens visa australia,
labour agreement visa,
tsmit 2024,
employer visa pr pathway,
migration overhaul employer visas,
sponsored visa australia,
regional sponsored visa,
482 to pr australia,
employer nomination scheme
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
    <section class="coaching-details-section fix">
        <div class="container px-4 px-md-0">
            <div class="coaching-details-wrapper">
                <div class="row g-5">
                    {{-- <div class="details-content">
                        <h3 class="">Expanding Pathways to Permane  nt Residency for Skilled Workers in
                            Australia
                        </h3>
                        <p>Australia is committed to improving its migration system to provide clear and accessible pathways
                            to Permanent Residency (PR) for Temporary Skill Shortage (TSS) visa holders (Subclass 482).
                            These changes aim to attract skilled workers and offer greater certainty to both employers and
                            employees while simplifying the nomination process.
                        </p>
                    </div> --}}
                    <div class="details-content">
                        <!-- Employer-Sponsored Visa Updates -->
                        <div class="container py-5">
                            <div class="text-center mb-3">
                                <h3 class="section-title">Employer-Sponsored Visa Updates</h3>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Subclass 482 – Skills in Demand (SID)</h5>
                                            <ul class="list-unstyled">
                                                <li>•	Employer-sponsored</li>
                                                <li>•	Stay up to 2–4 years</li>
                                                <li>•	Core Skills, Specialist & Labour Agreement streams</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Subclass 186 – Employer Nomination Scheme (ENS)</h5>
                                            <ul class="list-unstyled">
                                                <li>•	Permanent Residency (PR) visa</li>
                                                <li>•	Direct Entry, TR Transition & Labour Agreement streams</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 g-4">
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Subclass 494 – Skilled Employer Sponsored Regional</h5>
                                            <ul class="list-unstyled">
                                                <li>•	Work in regional Australia</li>
                                                <li>•	5-year visa with PR pathway via Subclass 191</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Subclass 407 – Training Visa</h5>
                                            <ul class="list-unstyled">
                                                <li>•	For workplace-based skill development and professional training</li>
                                                <li>•	Stay up to 2 years</li>
                                                <li>•	For applicants nominated by an approved employer/organization</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 g-4">
                                <div class="col-md-6">
                                    <div class="card h-100 shadow-sm border-start border-danger border-2 border-dotted">
                                        <div class="card-body">
                                            <h5 class="card-title">Labour Agreement Visas</h5>
                                            <ul class="list-unstyled">
                                                <li>•	For occupations not on the Skilled Occupation List</li>
                                                <li>•	Suitable for hospitality, trades, aged care, agriculture & more</li>
                                                <li>•	We assist in preparing company-specific labour agreements</li>
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
    </section>

    @include('pages.book')

@endsection
