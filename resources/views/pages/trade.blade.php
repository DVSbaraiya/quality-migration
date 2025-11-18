@extends('layouts.default')
@section('title')
    Trade Occupations
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Trade Occupations</h1>
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
                        Trade Occupations
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
                                <img src="{{ asset('front/img/all-image/early/Skilled-Trades-1.jpg') }}"
                                    alt="img">
                            </div>
                            <div class="details-content">
                                <h3 class="title-anim text-danger">Trade Occupations </h3>
                                <p>Here's a <b>comprehensive overview</b> of trade occupations in Australia that are
                                    currently in
                                    demand, along with updated migration and study pathways based on the latest regulations
                                    and government announcements:</p>
                                <p>Here’s a breakdown of popular trade occupations recognized for migration:</p>
                                <h3 class="mt-5">Here’s a breakdown of <b>popular trade occupations</b> recognized for
                                    migration:</h3>
                                <div class="row mt-5">
                                    <div class="col-lg-6">
                                        <h3 class="title-anim">🛠️ Construction & Engineering Trades</h3>
                                        <div class="single-icon-items">
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Carpenter and Joiner (ANZSCO 331211)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Bricklayer (ANZSCO 331111)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Painting Trades Worker (ANZSCO 332211)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Wall and Floor Tiler (ANZSCO 333411)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Roof Plumber (ANZSCO 334115)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">
                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Glazier (ANZSCO 333111)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Fibrous Plasterer (ANZSCO 333211)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Solid Plasterer (ANZSCO 333212)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Stonemason (ANZSCO 331112)</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="title-anim">🔧 Metal, Wood, and Related Trades</h3>
                                        <div class="single-icon-items">
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Sheetmetal Trades Worker (ANZSCO 322211)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Welder (First Class) (ANZSCO 322313)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Fitter (General) (ANZSCO 323211)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Metal Fabricator (ANZSCO 322311)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Cabinetmaker (ANZSCO 394111)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Joiner (ANZSCO 331213)</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-5">
                                        <h3 class="title-anim">🚗 Automotive & Electrical Trades</h3>
                                        <div class="single-icon-items">
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Motor Mechanic (General) (ANZSCO 321211)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Automotive Electrician (ANZSCO 321111)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Diesel Motor Mechanic (ANZSCO 321212)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Vehicle Painter (ANZSCO 324311)</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-5">
                                        <h3 class="title-anim">💇‍♀️ Personal Services</h3>
                                        <div class="single-icon-items">
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Hairdresser (ANZSCO 391111)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">
                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Chef (ANZSCO 351311)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Baker (ANZSCO 351111)</h6>
                                                </div>
                                            </div>
                                            <div class="icon-box">
                                                <div class="icon d-flex align-items-center">

                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <h6>Cook (ANZSCO 351411)</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="details-content">
                                <h3 class="title-anim text-danger">🧭 Migration Pathways for Trade Occupations</h3>
                                <div class="faq-content">
                                    <div class="faq-accordion">
                                        <div class="accordion" id="accordion">
                                            <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                <h4 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq1"
                                                        aria-expanded="false" aria-controls="faq1">
                                                        1. Skills Assessment
                                                    </button>
                                                </h4>
                                                <div id="faq1" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Conducted by recognized authorities such as <b> TRA (Trades
                                                            Recognition
                                                            Australia)</b> or <b>VETASSESS,</b> based on qualifications,
                                                        experience, and
                                                        sometimes a practical test.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                                <h4 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq2"
                                                        aria-expanded="true" aria-controls="faq2">
                                                        2. State Nomination (Subclass 190/491)
                                                    </button>
                                                </h4>
                                                <div id="faq2" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        <p>Each state offers nomination places based on its skills needs.
                                                            For
                                                            instance:</p>
                                                        <ul>
                                                            <li><b>• Victoria 2024–25 Program</b> offers 5,000 nomination
                                                                places
                                                                (3,000 for Subclass 190 and 2,000 for Subclass 491).</li>
                                                            <li><b>• NSW, SA,</b> and <b>WA</b> are also actively inviting
                                                                trade
                                                                workers, especially in regional zones.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                                <h4 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq3"
                                                        aria-expanded="false" aria-controls="faq3">
                                                        3. Temporary Graduate Visa (Subclass 485)
                                                    </button>
                                                </h4>
                                                <div id="faq3" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Students who complete certain trade qualifications (e.g.,
                                                        Certificate
                                                        III + Diploma) in Australia may be eligible for a <b> Temporary
                                                            Graduate
                                                            Visa </b> for up to 2 years, allowing them to gain local
                                                        experience.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="details-content">
                                <h3 class="title-anim text-danger">🎓 Study Options Leading to PR</h3>
                                <p>Many Registered Training Organizations (RTOs) offer accredited courses that are
                                    <b>directly
                                        aligned with the PR pathway:</b>
                                </p>
                                <div class="row g-5 mt-1">
                                    <div class="col-lg-6">
                                        <div class="thumb-2">
                                            <img src="{{ asset('front/img/all-image/coaching-detail/coaching-1-3.jpg') }}"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content">
                                            <h3>2-Year Packaged Courses</h3>
                                            <ul>
                                                <li><b>• Certificate III + Diploma in Carpentry</b></li>
                                                <li><b>• Certificate III + Diploma in Automotive Technology</b></li>
                                                <li><b>• Certificate III in Painting & Decorating</b></li>
                                                <li><b>• Certificate III in Hairdressing</b></li>
                                                <li><b>• Certificate III in Commercial Cookery + Diploma of Hospitality</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <h3>Features</h3>
                                            <ul>
                                                <li><b>• Tuition fees from <b>$7,500 per semester</b></b></li>
                                                <li><b><b>• Initial payment as low as $1,500</b></b></li>
                                                <li><b>• Industry placements included</b></li>
                                                <li><b>• Pathway to <b>skills assessment and state nomination</b></li>
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
    </section>
    @include('pages.book')


    <!--<< Footer Section Start >>-->

    <!--<< All JS Plugins >>-->
@endsection
