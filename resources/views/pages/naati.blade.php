@extends('layouts.default')
@section('title')
    NAATI
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">NAATI</h1>
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
                        NAATI
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
                            <h3 class="title-anim text-danger">NAATI & CCL Testing</h3>
                            <p>The <b>Credential Community Language (CCL)</b> test offers a unique opportunity to earn <b>5
                                    points</b>
                                towards your Skilled Migration application in Australia. If you're looking to boost your
                                points and increase your chances of receiving a PR invitation faster, passing the CCL test
                                can be a game-changer.</p>
                        </div>
                    </div>
                    <div class="container py-5">
                        <div class="text-center mb-5">
                            <h3 class="section-title">What is CCL?</h3>
                            <p>The <span class="highlight">CCL test</span> assesses your ability to interpret conversations
                                at a community level between English and a Language Other Than English (LOTE).</p>
                            <p><strong>✅ Adds 5 migration points</strong> to your Skilled Visa application. <br>
                                <strong>🖥️ Online only</strong> – not a professional certification for working as an
                                interpreter.
                            </p>
                        </div>

                        <div class="row align-items-center mb-5">
                            <div class="col-md-5">
                                <img src="{{ asset('front/img/all-image/early/green-folder-with-checklist-isolated-vector-white-background_349999-919.avif') }}"
                                    alt="CCL Test" class="img-feature img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h3 class="section-title">About the Test</h3>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill icon-bullet"></i> Two pre-recorded dialogues:
                                        English speaker & LOTE speaker</li>
                                    <li><i class="bi bi-check-circle-fill icon-bullet"></i> Each dialogue: ~300 words in
                                        35-word segments</li>
                                    <li><i class="bi bi-check-circle-fill icon-bullet"></i> Topics include: Business,
                                        Health, Immigration, Education, Social Services, etc.</li>
                                    <li><i class="bi bi-calendar-check-fill icon-bullet"></i> <strong>Validity:</strong>
                                        <ul>
                                            <li>Before 9 Aug 2022: 3 years</li>
                                            <li>After 10 Aug 2022: 5 years</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row align-items-center mb-5">
                            <div class="col-md-6 order-md-2">
                                <img src="{{ asset('front/img/all-image/early/helpful tips cartoon image.jpg') }}"
                                    alt="Test Tips" class="img-feature img-fluid">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <h3 class="section-title">Test Tips</h3>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-lightbulb-fill icon-bullet"></i> Practice handling unknown words and
                                        repeats</li>
                                    <li><i class="bi bi-lightbulb-fill icon-bullet"></i> Learn techniques for tough
                                        translations</li>
                                    <li><i class="bi bi-lightbulb-fill icon-bullet"></i> Know real-life Aussie scenarios
                                        (health, social, etc.)</li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-center mb-4">
                            <h3 class="section-title">Preparation & Fees</h3>
                        </div>
                        <div class="service-wrapper p-0">

                            <div class="row text-center mb-5 justify-content-center">
                                <!-- <div class="col-md-6">
                                    <div class="service-card-items">
                                        <div class="border p-4 rounded shadow-sm">
                                            <h3 class="">Online Class Fee</h3>
                                            <p class="fs-4">$695</p>
                                            <p>Includes complete coaching to help you confidently pass the test.</p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="service-card-items">

                                        <div class="border p-4 rounded shadow-sm">
                                            <h3 class="">Exam Fee</h3>
                                            <p class="fs-4">$800</p>
                                            <p>Plan ahead, as available test dates can be limited.</p>
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
