@extends('layouts.default')
@section('title')
Working Holiday Visa
@endsection

@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Working Holiday Visa </h1>
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
                    Working Holiday Visa
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
                    <h3 class="title-anim text-danger">Working Holiday Visa: Experience Life in Australia While Working
                        and Exploring
                    </h3>
                    <p>Australia’s Working Holiday Visa (Subclass 462 & 417) offers young travelers the chance to work
                        and immerse themselves in one of the most beautiful and dynamic countries in the world. From
                        pristine beaches to bustling cities, this visa is the gateway to adventure, cultural exchange,
                        and valuable work experience.
                    </p>
                </div>
                <div class="details-content">
                    <div class="container py-5">
                        <h3 class="text-center mb-5">Working Holiday Visa - Australia</h3>

                        <!-- Why Choose -->
                        <div class="mb-5">
                            <h3 class="text-danger title-anim">Why Choose the Working Holiday Visa?</h3>
                            <p class="mb-2">The Working Holiday Visa allows you to:</p>
                            <ul class="list-unstyled text-start">
                                <li>
                                    Stay and travel across Australia for up to 12 months.
                                </li>
                                <li>
                                    Work with Australian employers for up to 12 months (maximum 6 months per employer).
                                </li>
                                <li>
                                    Study for up to 4 months.
                                </li>
                                <li>
                                    Apply for a Second or Third Working Holiday Visa if eligible.
                                </li>
                            </ul>
                            <p>This visa is perfect for combining work opportunities with exploration, offering the ultimate balance of earning and adventure.</p>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                Why Choose the Working Holiday Visa?
                            </div>
                            <div class="card-body">
                                <p>The Working Holiday Visa allows you to:</p>
                                <ul>
                                    <li>Stay and travel across Australia for up to 12 months.</li>
                                    <li>Work with Australian employers for up to 12 months (maximum 6 months per employer).</li>
                                    <li>Study for up to 4 months.</li>
                                    <li>Apply for a Second or Third Working Holiday Visa if eligible.</li>
                                </ul>
                                <p>This visa is perfect for combining work opportunities with exploration, offering the ultimate balance of earning and adventure.</p>
                            </div>
                        </div> -->

                        <!-- Eligibility -->
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('front/img/all-image/early/1611030245phpBxvmpI.png') }}"
                                    alt="Visa Benefits for Indian Nationals" class="img-fluid rounded shadow" />
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-danger title-anim mb-2">
                                    Eligibility Criteria
                                </h3>
                                <h5 class="mb-2">
                                    First Working Holiday Visa
                                </h5>
                                <ul class="list-unstyled text-start">
                                    <li>Be 18 to 30 years old (or up to 35 for specific countries).</li>
                                    <li>Hold a passport from an eligible country.</li>
                                    <li>Meet health and character requirements.</li>
                                    <li>Have sufficient funds for your stay and onward travel.</li>
                                    <li>Not bring dependent children with you.</li>
                                </ul>
                                <h5 class="mb-2 mt-2">Second Working Holiday Visa</h5>
                                <ul class="list-unstyled text-start">
                                    <li>Complete 3 months (88 days) of specified work in regional Australia.</li>
                                    <li>Be under the age limit for your country when applying.</li>
                                </ul>
                                <h5 class="mb-2 mt-2">Third Working Holiday Visa</h5>
                                <ul class="list-unstyled text-start">
                                    <li>Complete 6 months of specified work.</li>
                                    <li>Have held two previous Working Holiday Visas.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                Eligibility Criteria
                            </div>
                            <div class="card-body">
                                <h5>First Working Holiday Visa</h5>
                                <ul>
                                    <li>Be 18 to 30 years old (or up to 35 for specific countries).</li>
                                    <li>Hold a passport from an eligible country.</li>
                                    <li>Meet health and character requirements.</li>
                                    <li>Have sufficient funds for your stay and onward travel.</li>
                                    <li>Not bring dependent children with you.</li>
                                </ul>

                                <h5 class="mt-4">Second Working Holiday Visa</h5>
                                <ul>
                                    <li>Complete 3 months (88 days) of specified work in regional Australia.</li>
                                    <li>Be under the age limit for your country when applying.</li>
                                </ul>

                                <h5 class="mt-4">Third Working Holiday Visa</h5>
                                <ul>
                                    <li>Complete 6 months of specified work.</li>
                                    <li>Have held two previous Working Holiday Visas.</li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- Eligible Countries -->

                        <div class="mb-5">
                            <h3 class="text-danger title-anim">Eligible Countries for Working Holiday Visa</h3>
                            <!-- <p class="mb-2">The Working Holiday Visa allows you to:</p> -->
                            <ul class="list-unstyled text-start">
                                <h5 class="mb-2 mt-2">Subclass 462</h5>
                                <li>
                                    Countries include: Argentina, Brazil, India, Israel, China, the USA, and more.
                                </li>
                                <h5 class="mb-2 mt-2">Subclass 417</h5>
                                <li>
                                    Countries include: Canada, UK, France, Germany, Japan, Italy, and more.<br>
                                    Visit the Australian Government website for the complete list.
                                </li>
                            </ul>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                Eligible Countries for Working Holiday Visa
                            </div>
                            <div class="card-body">
                                <h5>Subclass 462</h5>
                                <p>Countries include: Argentina, Brazil, India, Israel, China, the USA, and more.</p>

                                <h5>Subclass 417</h5>
                                <p>Countries include: Canada, UK, France, Germany, Japan, Italy, and more.</p>

                                <p><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing"
                                        target="_blank">Visit the Australian Government website for the complete
                                        list</a>.</p>
                            </div>
                        </div> -->

                        <!-- Work Opportunities -->
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('front/img/all-image/early/job1.jpg') }}"
                                    alt="Visa Benefits for Indian Nationals" class="img-fluid rounded shadow" />
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-danger title-anim mb-2">
                                    Work Opportunities and Specified Work Requirements
                                </h3>
                                <h5 class="mb-2">
                                    Specified work includes employment in industries like:
                                </h5>
                                <ul class="list-unstyled text-start">
                                    <li>Agriculture</li>
                                    <li>Mining</li>
                                    <li>Construction</li>
                                    <li>These opportunities are in regional areas and help travelers contribute to Australia’s economy while extending their stay.</li>
                                    <!-- <li>Not bring dependent children with you.</li> -->
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                Work Opportunities and Specified Work Requirements
                            </div>
                            <div class="card-body">
                                <p>Specified work includes employment in industries like:</p>
                                <ul>
                                    <li>Agriculture</li>
                                    <li>Mining</li>
                                    <li>Construction</li>
                                </ul>
                                <p>These opportunities are in regional areas and help travelers contribute to
                                    Australia’s economy while extending their stay.</p>
                            </div>
                        </div> -->

                        <!-- Health and Financial -->
                        <div class="mb-5">
                            <h3 class="text-danger title-anim">Health and Financial Requirements</h3>
                            <!-- <p class="mb-2">The Working Holiday Visa allows you to:</p> -->
                            <ul class="list-unstyled text-start">
                                <li>Applicants must undergo a health check and provide police clearance
                                    certificates.
                                </li>
                                <li>
                                    Maintain sufficient funds to support your stay and purchase a return ticket.
                                </li>
                                <li>
                                    It’s recommended to obtain Overseas Visitor Health Cover (OVHC) for medical expenses.
                                </li>
                            </ul>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                Health and Financial Requirements
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Applicants must undergo a health check and provide police clearance
                                        certificates.
                                    </li>
                                    <li>
                                        Maintain sufficient funds to support your stay and purchase a return ticket.
                                    </li>
                                    <li>
                                        It’s recommended to obtain Overseas Visitor Health Cover (OVHC) for medical expenses.
                                    </li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- English Language -->
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('front/img/all-image/early/How-to-Learn-English-.jpg') }}"
                                    alt="Visa Benefits for Indian Nationals" class="img-fluid rounded shadow" />
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-danger title-anim">English Language Proficiency</h3>
                                <p class="mb-2">Proof of functional English can be shown by:</p>
                                <ul class="list-unstyled text-start">
                                    <li><i class="bi bi-mortarboard icon-bullet"></i>
                                        <strong>IELTS:</strong>
                                        4.5 overall score
                                    </li>
                                    <li><i class="bi bi-cpu icon-bullet"></i>
                                        <strong>TOEFL iBT:</strong>
                                        32 total score
                                    </li>
                                    <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                        <strong>PTE Academic:</strong>
                                        30 overall score
                                    </li>
                                </ul>
                                <p>Five years of study in English-medium education</p>
                            </div>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                English Language Proficiency
                            </div>
                            <div class="card-body">
                                <p>Proof of functional English can be shown by:</p>
                                <ul>
                                    <li><strong>IELTS:</strong> 4.5 overall score</li>
                                    <li><strong>TOEFL iBT:</strong> 32 total score</li>
                                    <li><strong>PTE Academic:</strong> 30 overall score</li>
                                    <li>Five years of study in English-medium education</li>
                                </ul>
                            </div>
                        </div> -->

                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-success">How Quality Migration Can Help</h5>
                            <p>At Quality Migration, we simplify your journey to Australia with:</p>
                            <ul>
                                <li>• Personalized Guidance: Expert advice tailored to your situation.</li>
                                <li>• Step-by-Step Support: From eligibility checks to application submission.</li>
                                <li>• Compliance Assurance: Ensuring all requirements are met for a seamless process.
                                </li>
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