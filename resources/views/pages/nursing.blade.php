@extends('layouts.default')
@section('title')
    Nursing
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Nursing</h1>
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
                        Nursing
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
                                <img src="{{ asset('front/img/all-image/early/male-nurse-1-scaled.jpg') }}"
                                    alt="img">
                            </div>
                            <div class="details-content">
                                <h3 class="title-anim text-danger">Nursing </h3>
                                <p>Here’s a detailed draft tailored for <b> Quality Migration</b> with updates relevant to
                                    the
                                    current migration and study pathways for nurses in Australia:
                                </p>
                                <p>At <b>Quality Migration,</b> we specialize in guiding aspiring nurses toward a successful
                                    career
                                    in Australia. With nursing being one of the most in-demand occupations, there are
                                    numerous opportunities for international students and skilled workers to secure job
                                    roles and migration pathways.</p>
                                <div class="row justify-content-center mt-5">
                                    <div class="col-md-8 text-center">
                                        <h3 class="mb-4 section-title">Why Nursing?</h3>
                                        <ul class="list-group list-group-flush ">
                                            <li class="list-group-item">
                                                <strong>High Demand:</strong> Australia's healthcare system requires skilled
                                                nurses across various regions and specialties.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>PR Pathway:</strong> Nursing remains a priority occupation, making
                                                it a fast-tracked option for permanent residency (PR).
                                            </li>
                                            <li class="list-group-item">
                                                <strong>Competitive Salaries:</strong> Nurses in Australia earn competitive
                                                pay, with opportunities for career growth and specialization.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details-content">
                                    <h3 class="title-anim text-danger">Study Pathways for Nurses</h3>
                                    <div class="faq-content">
                                        <div class="faq-accordion">
                                            <div class="accordion" id="accordion">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                            <h4 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#nurse1"
                                                                    aria-expanded="true" aria-controls="nurse1">
                                                                    1. Diploma of Nursing
                                                                </button>
                                                            </h4>
                                                            <div id="nurse1" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordion">
                                                                <div class="accordion-body">
                                                                    <p>The Diploma of Nursing is a perfect entry-level
                                                                        qualification
                                                                        for those starting their journey in the healthcare
                                                                        field.
                                                                    </p>
                                                                    <ul class="list-group list-group-flush mb-4">
                                                                        <p class="list-group-item">
                                                                            <strong>Career Outcome:</strong> Become an
                                                                            Enrolled
                                                                            Nurse (EN).
                                                                        </p>
                                                                    </ul>

                                                                    <h5 class="mb-2">Study Locations:</h5>
                                                                    <ul class="list-group list-group-flush mb-4">
                                                                        <li class="list-group-item">
                                                                            Courses are available across Australia,
                                                                            including
                                                                            metropolitan cities like <strong>Perth,
                                                                                Adelaide,</strong> and <strong>Gold
                                                                                Coast</strong>,
                                                                            which are considered regional areas for
                                                                            migration
                                                                            benefits.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            Regional areas like <strong>Geelong,
                                                                                Bendigo,</strong>
                                                                            and <strong>Ballarat</strong> (near Melbourne)
                                                                            offer
                                                                            additional migration points.
                                                                        </li>
                                                                    </ul>

                                                                    <h5 class="mb-2">Benefits:</h5>
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item">Affordable course fees.
                                                                        </li>
                                                                        <li class="list-group-item">Pathway to
                                                                            <strong>Bachelor of
                                                                                Nursing</strong> for further qualification.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                                            <h4 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#nurse2"
                                                                    aria-expanded="false" aria-controls="nurse2">
                                                                    2. Bachelor of Nursing
                                                                </button>
                                                            </h4>
                                                            <div id="nurse2" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordion">
                                                                <div class="accordion-body">
                                                                    <p>The <b>Bachelor of Nursing</b> is the most popular
                                                                        and
                                                                        versatile
                                                                        program for aspiring Registered Nurses (RNs).</p>
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item">
                                                                            <strong>Eligibility:</strong> Open to both
                                                                            school
                                                                            leavers and those with a Diploma of Nursing or
                                                                            healthcare-related qualifications.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <strong>Duration:</strong> 3 years (or 2 years
                                                                            if credit
                                                                            is granted for prior learning).
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <strong>PR Pathway:</strong> Listed under the
                                                                            Medium and
                                                                            Long-term Strategic Skills List (MLTSSL), making
                                                                            it a
                                                                            direct route to PR.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <strong>Scholarships:</strong> Partial
                                                                            scholarships are
                                                                            available in several institutions.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <strong>Study Options:</strong> Programs are
                                                                            available
                                                                            in all Australian states, including regional
                                                                            universities for added migration points.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                                            <h4 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#nurse3"
                                                                    aria-expanded="false" aria-controls="nurse3">
                                                                    3. Master of Nursing
                                                                </button>
                                                            </h4>
                                                            <div id="nurse3" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordion">
                                                                <div class="accordion-body">
                                                                    <p>The <b>Master of Nursing</b> is ideal for career
                                                                        advancement
                                                                        or
                                                                        transitioning into nursing from another field.</p>
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item">
                                                                            <strong>For Nurses:</strong> Specialize in areas
                                                                            like
                                                                            clinical leadership, research, or education.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <strong>For Non-Nurses:</strong> Eligibility
                                                                            depends on
                                                                            completing a preparatory course in anatomy and
                                                                            physiology.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <strong>Duration:</strong> 2 years.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <strong>Migration Pathway:</strong> Combines
                                                                            upskilling
                                                                            with eligibility for a Temporary Graduate Visa
                                                                            (subclass
                                                                            485).
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                                            <h4 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#nurse4"
                                                                    aria-expanded="false" aria-controls="nurse4">
                                                                    4. Change of Course to Nursing
                                                                </button>
                                                            </h4>
                                                            <div id="nurse4" class="accordion-collapse collapse"
                                                                data-bs-parent="#accordion">
                                                                <div class="accordion-body">
                                                                    <p>The <b>Master of Nursing</b> is ideal for career
                                                                        advancement
                                                                        or
                                                                        transitioning into nursing from another field.</p>
                                                                    <ul class="list-group list-group-flush">
                                                                        <li class="list-group-item">
                                                                            <strong>Reasons to Switch:</strong> COVID-19,
                                                                            job market
                                                                            trends, or personal preferences.
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <strong>Eligibility:</strong> Many institutions
                                                                            allow
                                                                            credit transfers, reducing the duration of
                                                                            study.
                                                                        </li>

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
                                <div class="details-content">
                                    <h3 class="title-anim text-danger">Migration Pathways for Nurses</h3>
                                    <section class="py-4">
                                        <div class="container">
                                            <div class="card mb-4 shadow-sm">
                                                <div class="card-body">
                                                    <h5 class="card-title">Option 1: Temporary Graduate Visa (Subclass 485)
                                                    </h5>
                                                    <p class="card-text">This visa allows graduates to gain valuable work
                                                        experience in Australia for up to 2 years, providing a pathway to
                                                        PR.</p>
                                                </div>
                                            </div>
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <h5 class="card-title">Option 2: PR Pathways</h5>
                                                    <ul class="mb-0">
                                                        <li><strong>Skilled Independent Visa (Subclass 189):</strong> No
                                                            sponsorship required.</li>
                                                        <li><strong>Skilled Nominated Visa (Subclass 190):</strong> State or
                                                            territory nomination required.</li>
                                                        <li><strong>Skilled Work Regional (Provisional) Visa (Subclass
                                                                491):</strong> Ideal for those studying or working in
                                                            regional Australia.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <h4 class="mt-5 mb-3">For Overseas Registered Nurses</h4>

                                    <h5 class="fw-bold">1. Conversion Program</h5>
                                    <p class=" mb-2">If you are a Registered Nurse in your home country, you
                                        can transfer your qualifications through a 1-year Conversion Program.</p>
                                    <ul class="list-group list-group-flush  mb-3">
                                        <li class="list-group-item">
                                            <strong>Outcome:</strong> Obtain Australian accreditation as an RN.
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Combination Courses:</strong> Combine with additional courses to
                                            qualify for the subclass 485 visa.
                                        </li>
                                    </ul>

                                    <h5 class="fw-bold">2. Outcomes-Based Assessment (OBA)</h5>
                                    <p class=" mb-2">OBA has replaced the Bridging Program.</p>
                                    <ul class="list-group list-group-flush  mb-3">
                                        <li class="list-group-item"><strong>Steps:</strong></li>
                                        <li class="list-group-item">1. <strong>MCQ Exam:</strong> Test theoretical
                                            knowledge.</li>
                                        <li class="list-group-item">2. <strong>Practical Exam:</strong> Demonstrate
                                            hands-on skills.</li>
                                        <li class="list-group-item"><strong>Preparation Support:</strong> Access
                                            coaching for both exams.</li>
                                    </ul>

                                    <h5 class="fw-bold">3. Bachelor/Master Programs</h5>
                                    <p class="">If the OBA is not suitable, you can enroll in a Bachelor’s or
                                        Master’s program to gain Australian accreditation.</p>

                                    <hr class="my-5">

                                    <section class="py-5 bg-light">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-md-6 mb-4 mb-md-0">
                                                    <img src="{{ URL::asset('front/img/all-image/visa-detail/contact.jpg') }}"
                                                        alt="Quality Migration Support" class="img-fluid rounded shadow">
                                                </div>
                                                <div class="col-md-6">
                                                    <h3 class="mb-4 text-danger">Why Choose <span
                                                            class="text-dark">Quality Migration?</span></h3>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item bg-light"><strong>Experienced
                                                                Agents:</strong> Registered with MARA and equipped with the
                                                            latest migration policies.</li>
                                                        <li class="list-group-item bg-light"><strong>No Hidden
                                                                Fees:</strong> Free consultations for student visa
                                                            applications and course changes.</li>
                                                        <li class="list-group-item bg-light"><strong>Language
                                                                Support:</strong> Assistance available in multiple
                                                            languages, including English, Mandarin, Bangla, Vietnamese, and
                                                            more.</li>
                                                        <li class="list-group-item bg-light"><strong>Client
                                                                Satisfaction:</strong> Rated 4.9 out of 5 by our clients.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
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
