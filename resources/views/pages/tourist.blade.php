@extends('layouts.default')
@section('title')
Tourist Visa
@endsection

@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Tourist Visa </h1>
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
                    Tourist Visa
                </li>
            </ul>
        </div>
    </div>
</div>

<!--<< Coaching Section Start >>-->
<section class="coaching-details-section fix">
    <div class="container px-4 px-md-0 pt-5">
        <div class="coaching-details-wrapper">
            <div class="row g-5">
                <div class="details-content">
                    <h3 class="title-anim text-danger">Visitor Visa (Subclass 600): Explore Australia for Leisure,
                        Family, or Business
                    </h3>
                    <p>The Visitor Visa (Subclass 600) provides an excellent opportunity for travelers to visit
                        Australia for various purposes, including tourism, family visits, short-term studies, or
                        business activities. With distinct streams tailored to individual needs, this visa offers
                        flexibility and convenience for temporary stays in Australia.
                    </p>
                </div>
                <div class="details-content">
                    <div class="py-5">
                        <h3 class="mb-3">Visitor Visa (Subclass 600) - Australia</h3>
                        <!-- Key Features -->
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('front/img/all-image/early/2424797867-1024x512.jpg') }}"
                                    alt="Visa Benefits for Indian Nationals" class="img-fluid rounded shadow" />
                            </div>
                            <div class="col-md-6">
                                <div class="section-div">
                                    <h3 class="">Key Features of the Visitor Visa (Subclass 600)</h3>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="bi bi-mortarboard icon-bullet"></i>
                                            <strong>Temporary Stay:</strong>
                                            Offers a stay period of 3, 6, or 12 months based on granted visa conditions.
                                        </li>
                                        <li><i class="bi bi-cpu icon-bullet"></i>
                                            <strong>Single or Multiple Entry:</strong>
                                            You may enter and exit Australia once or multiple times during visa validity.
                                        </li>
                                        <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                            <strong>Work Restrictions:</strong>
                                            Work is not permitted under this visa.
                                        </li>
                                        <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                            <strong>Medical Treatment Restrictions:</strong>
                                            Not allowed unless explicitly approved.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Eligibility Requirements -->
                        <div class="mb-5 section-div">
                            <h3 class="">Eligibility Requirements</h3>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-mortarboard icon-bullet"></i>
                                    <strong>Genuinely Intend Temporary Stay:</strong>
                                    Show evidence that you plan to leave Australia before your visa expires.
                                </li>
                                <li><i class="bi bi-cpu icon-bullet"></i>
                                    <strong>Health and Character Standards:</strong>
                                    Pass required checks and provide police clearance if requested.
                                </li>
                                <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                    <strong>Financial Capacity:</strong>
                                    Demonstrate sufficient funds to support your stay and return travel.
                                </li>
                            </ul>
                        </div>

                        <!-- Tourist Stream -->
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('front/img/all-image/early/tourist-visa.webp') }}"
                                    alt="Visa Benefits for Indian Nationals" class="img-fluid rounded shadow" />
                            </div>
                            <div class="col-md-6">
                                <div class="section-div">
                                    <h3 class="">Tourist Stream</h3>
                                    <ul class="list-unstyled text-start">
                                        <li><i class="bi bi-mortarboard icon-bullet"></i>
                                            <strong>Purpose:</strong>
                                            Ideal for visiting Australia for holidays, family visits, or recreational purposes.
                                        </li>
                                        <h5 class="primary-website-text mb-2 pt-3">Key Features:-</h5>
                                        <li><i class="bi bi-cpu icon-bullet"></i>
                                            <strong>Stay Duration:</strong>
                                            Up to 12 months.
                                        </li>
                                        <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                            <strong>Entry Options:</strong>
                                            Single or multiple entry, as stated in your visa grant letter.
                                        </li>
                                        <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                            <strong>Study Rights:</strong>
                                            Permitted to study for up to 3 months.
                                        </li>
                                        <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                            <strong>Limitations:</strong>
                                            No work or medical treatment allowed unless approved.
                                        </li>
                                        <h5 class="primary-website-text mb-2 pt-3">Eligibility:-</h5>
                                        <p>Genuine intention to stay temporarily in Australia.<br>
                                            Evidence of financial capacity to support travel and return.</p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Business Visitor Stream -->
                        <div class="mb-5">
                            <div class="section-div">
                                <h3 class="text-danger title-anim">Business Visitor Stream</h3>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-mortarboard icon-bullet"></i>
                                    <strong>Purpose:</strong>
                                    For business travelers attending meetings, conferences, or negotiations in Australia.
                                </li>
                                <h5 class="primary-website-text mb-2 pt-3">Key Features</h5>
                                <li><i class="bi bi-cpu icon-bullet"></i>
                                    <strong>Stay Duration::</strong>
                                    Up to 3 months.
                                </li>
                                <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                    <strong>Restrictions:</strong>
                                    No working or selling goods/services allowed.
                                </li>
                                <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                    <strong>Application Location:</strong>
                                    Must be applied for from outside Australia.
                                </li>
                                <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                    <strong>Limitations:</strong>
                                    No work or medical treatment allowed unless approved.
                                </li>
                                <h5 class="primary-website-text mb-2 pt-3">Eligibility</h5>
                                <p>A legitimate business purpose with documentation (e.g., invitation letters, conference details).<br>
                                    Sufficient funds for travel and accommodation.</p>
                            </ul>
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