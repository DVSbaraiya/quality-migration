@extends('layouts.default')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@section('title')
    AAT
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">AAT </h1>
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
                        AAT
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
                        <h3 class="title-anim text-danger">What to Do If Your Visa is Rejected or Canceled
                        </h3>
                        <p>Receiving a visa refusal or a cancellation notice from the Department of Home Affairs can be
                            overwhelming. However, there’s no need to panic—many cases have solutions, and you may have the
                            option to appeal the decision.
                        </p>
                    </div>
                    <div class="details-content">
                        <!-- Alternative Visa Refusal Design -->
                        <div class="container py-5">
                            <div class="bg-light p-4 rounded mb-4 shadow-sm">
                                <h3 class="text-center text-danger mb-3">Top Reasons for Visa Refusal or Cancellation</h3>
                                <div class="row g-4">
                                    <!-- Reason 1 -->
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start p-3 border rounded bg-white h-100 shadow-sm">
                                            <i class="bi bi-x-circle-fill text-danger fs-3 me-3"></i>
                                            <div>
                                                <h6 class="fw-bold mb-1">Incorrect Visa Type</h6>
                                                <p class="mb-0">Applying for a visa that doesn’t match your actual
                                                    situation or purpose.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Reason 2 -->
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start p-3 border rounded bg-white h-100 shadow-sm">
                                            <i class="bi bi-file-earmark-excel-fill text-warning fs-3 me-3"></i>
                                            <div>
                                                <h6 class="fw-bold mb-1">False or Incomplete Documents</h6>
                                                <p class="mb-0">Missing, invalid, or dishonest information can result in
                                                    automatic refusal.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Reason 3 -->
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start p-3 border rounded bg-white h-100 shadow-sm">
                                            <i class="bi bi-person-x-fill text-secondary fs-3 me-3"></i>
                                            <div>
                                                <h6 class="fw-bold mb-1">Sponsor Issues</h6>
                                                <p class="mb-0">The sponsor fails to meet required obligations or
                                                    credibility checks.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Reason 4 -->
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start p-3 border rounded bg-white h-100 shadow-sm">
                                            <i class="bi bi-exclamation-circle-fill text-danger fs-3 me-3"></i>
                                            <div>
                                                <h6 class="fw-bold mb-1">Breach of Visa Conditions</h6>
                                                <p class="mb-0">Violating visa terms, such as overstaying or unauthorized
                                                    work.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Reason 5 -->
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start p-3 border rounded bg-white h-100 shadow-sm">
                                            <i class="bi bi-calculator-fill text-info fs-3 me-3"></i>
                                            <div>
                                                <h6 class="fw-bold mb-1">Points Miscalculation</h6>
                                                <p class="mb-0">Incorrectly calculating your eligibility points in skilled
                                                    migration visas.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Reason 6 -->
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start p-3 border rounded bg-white h-100 shadow-sm">
                                            <i class="bi bi-question-circle-fill text-primary fs-3 me-3"></i>
                                            <div>
                                                <h6 class="fw-bold mb-1">Lack of Clear Future Plans</h6>
                                                <p class="mb-0">Failure to demonstrate intentions to return home or
                                                    purpose of stay.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Next Steps Section -->
                            <div class="bg-danger text-white p-4 rounded shadow-sm mb-4">
                                <h3 class="mb-3"><i class="bi bi-arrow-repeat me-2"></i>Next Steps: Administrative Appeals
                                    Tribunal (AAT)</h3>
                                <p>If your visa was refused or canceled, you may be eligible to apply for a review through
                                    the <strong>Administrative Appeals Tribunal (AAT)</strong>.</p>
                                <ul>
                                    <li>The AAT reviews decisions independently under Commonwealth law.</li>
                                    <li>You must appeal within the timeframe mentioned in your notice.</li>
                                    <li>Some visa types require an application fee.</li>
                                    <li>Not all decisions are reviewable—check eligibility first.</li>
                                </ul>
                                <a href="{{ route('contact') }}" class="btn btn-light text-primary mt-3">Contact Us for
                                    Appeal Support</a>
                            </div>
                        </div>
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-success">Why Choose Quality Migration?</h5>
                                <ul>
                                    <li>• 🌟 20 Years of Experience: Trusted expertise in migration services.</li>
                                    <li>• 🌐 Comprehensive Support: Assistance with all visa types and courses.
                                    </li>
                                    <li>• 💬 Multilingual Team: English, Mandarin, Malay, Tagalog, and more.
                                    </li>
                                    <li>• ⭐ High Satisfaction: Rated 4.8/5 by our clients.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.book')

@endsection
