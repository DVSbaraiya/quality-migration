@extends('layouts.default')
@section('title')
Client Review
@endsection

@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Client Review </h1>
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
                    Client Review
                </li>
            </ul>
        </div>
    </div>
</div>

<!--<< Coaching Section Start >>-->
<section class="coaching-details-section fix section-padding">
    <div class="container">
        <!-- Client Review Section -->
        <div class="container pb-5 pt-2">
            <div class="text-center mb-5">
                <h3 class="title-anim text-danger">What Our Clients Say</h3>
                <p class="text-muted">Real experiences. Real stories. Trusted by clients worldwide.</p>
            </div>

            <div class="row g-4">
                <!-- Review Card 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/80?img=1" class="rounded-circle me-3" width="60"
                                height="60" alt="Client">
                            <div>
                                <h6 class="mb-0">Kuldeep Sheladiya</h6>
                                <small class="text-muted">Australia PR Visa</small>
                            </div>
                        </div>
                        <p class="text-muted fst-italic">
                            “I’m so grateful to Quality Migration - Education & Visa Services for their excellent support and guidance throughout my visa journey.
                            Special thanks to Ruchita Bhadani for always being available, answering every question with patience, and making the entire process smooth and stress-free.
                            I recently received my visa grant, and it wouldn't have been possible without your help! Highly recommended to anyone looking for reliable and professional visa and migration support. 🙌😊”</p>
                        <div class="text-warning">
                            ★★★★★
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/80?img=5" class="rounded-circle me-3" width="60"
                                height="60" alt="Client">
                            <div>
                                <h6 class="mb-0">Nehal Vaghasiya</h6>
                                <small class="text-muted">Student Visa </small>
                            </div>
                        </div>
                        <p class="text-muted fst-italic">“I had wonderful experience with quality migration and visa services. I would like to thank you very much for your time and support during my visa adjustment process and for helping me to obtain the desired outcome.👍👏”</p>
                        <div class="text-warning">
                            ★★★★★
                        </div>
                    </div>
                </div>

                <!-- Review Card 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://i.pravatar.cc/80?img=11" class="rounded-circle me-3" width="60"
                                height="60" alt="Client">
                            <div>
                                <h6 class="mb-0">Krishna Savani</h6>
                                <small class="text-muted">Tourist Visa </small>
                            </div>
                        </div>
                        <p class="text-muted fst-italic">“Thank you Rushita ma’am and the Quality Migration team for your amazing support. I received my positive skill assessment result earlier than expected, and I truly appreciate your efficient and professional guidance throughout the process.”</p>
                        <div class="text-warning">
                            ★★★★★
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection