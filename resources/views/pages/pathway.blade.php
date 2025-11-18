@extends('layouts.default')
@section('title')
    Pathway Courses
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Pathway Courses</h1>
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
                        Pathway Courses
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
                                <img src="{{ asset('front/img/all-image/coaching-detail/service-details.jpg') }}"
                                    alt="img">
                            </div>
                            <div class="details-content">
                                <h2 class="title-anim text-danger">1. Early Childhood & Secondary Teacher</h2>
                                <p class="mb-3">
                                    Australia is experiencing a significant demand for <b>Early Childhood and Secondary
                                        School
                                        Teachers,</b> presenting numerous opportunities for skilled professionals seeking
                                    Permanent
                                    Residency (PR). Recent policy updates and substantial government investments have
                                    further streamlined pathways for educators to establish and advance their careers in
                                    Australia.
                                </p>
                                <p>
                                    Need something changed or is there something not quite working the way you envisaged? Is
                                    your van a
                                    little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the
                                    printing and typesetting
                                    industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                    when an
                                    unknown printer took a galley of type and scrambled it to make.
                                </p>
                                <div class="row g-4 mt-3 mb-4">
                                    <div class="col-lg-6">
                                        <div class="details-thumb-2">
                                            <img src="{{ asset('front/img/all-image/coaching-detail/coaching-three-1-3-1.jpg') }}"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="details-thumb-2">
                                            <img src="{{ asset('front/img/all-image/coaching-detail/coaching-7.jpg') }}"
                                                alt="img">
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-3">
                                    Early Childhood Teacher – Your Pathway to Permanent Residency
                                </p>
                                <p>Updated Skills Assessment Process</p>
                                <p>As of <b>7 December 2024,</b> the <b>Australian Children's Education & Care Quality
                                        Authority
                                        (ACECQA)</b> has become the new assessing authority for Early Childhood Teacher
                                    skills
                                    assessments, replacing the Australian Institute for Teaching and School Leadership
                                    (AITSL). This change aims to simplify and expedite the assessment process for
                                    applicants.</p>
                                <p><b>Revised English Language Proficiency Requirements</b></p>
                                <p>The English language proficiency criteria have been adjusted to be more accessible:</p>
                                <ul>
                                    <li><b>• Study-Based Exemption:</b> Completion of at least <b>one full year</b> of
                                        tertiary education in English in a recognized country (previously four years were
                                        required).</li>
                                    <li><b>• IELTS Academic:</b> Minimum scores of <b> 7.0 in Reading and Writing, and 8.0
                                            in
                                            Speaking and Listening.</b></li>
                                </ul>
                                <p>These modifications facilitate a more straightforward pathway for non-native English
                                    speakers to qualify. </p>

                                <div class="row g-5 mt-2 align-items-center">
                                    <div class="col-lg-6">
                                        <div class="thumb-2">
                                            <img src="{{ asset('front/img/all-image/coaching-detail/coaching-1-3.jpg') }}"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content">
                                            <h3>Government Initiatives and Investments:</h3>
                                            <p>The Australian Government has launched several initiatives to support the
                                                early childhood education sector:</p>
                                            <ul>
                                                <li>
                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <b>Practicum Exchange Living Allowance (PELA):</b> Assists students with
                                                    living and travel expenses during practical placements in rural or
                                                    remote areas.
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <b>Paid Practicum Subsidy:</b> Enables early learning providers to offer
                                                    paid leave to educators undertaking required practical placements.
                                                </li>
                                                <li>
                                                    <i class="fas fa-check-circle me-2"></i>
                                                    <b>Professional Development Subsidy:</b> Covers training costs for
                                                    qualified early childhood education and care workers.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-5">These programs are part of a <b>$72.4 million Early Childhood Education
                                        Workforce Package,</b>
                                    aiming to attract and retain skilled educators.
                                </p>
                                <p>
                                    Additionally, <b>a 15% wage increase</b> has been implemented for early childhood
                                    educators,
                                    enhancing the sector's appeal.
                                </p>
                                <h2 class="mt-5 title-anim">Victoria's Skilled Visa Nomination Program</h2>
                                <div class="content">
                                    <p>
                                        Victoria offers nomination for the following visas:
                                    </p>
                                    <ul>
                                        <li><b>• Skilled Nominated Visa (Subclass 190):</b> A permanent visa allowing
                                            skilled migrants to live and work anywhere in Victoria.</li>
                                        <li><b>• Skilled Regional (Provisional) Visa (Subclass 491): </b> A five-year
                                            provisional visa for living and working in regional Victoria, with a pathway to
                                            permanent residency after three years.</li>
                                    </ul>
                                    <p>Early Childhood Teachers are on Victoria's skilled occupation list and are encouraged
                                        to submit a Registration of Interest (ROI) through the <b>Live in Melbourne
                                            website.</b>
                                        The program does not require a job offer or employer sponsorship and provides a
                                        pathway to permanent residency. </p>
                                </div>
                                <hr>
                                <h2 class="mt-5 title-anim">Secondary School Teacher </h2>
                                <div class="content">
                                    <p>The demand for <b>Secondary School Teachers</b> remains robust, with pathways to PR
                                        available through various visa subclasses. While specific assessment criteria are
                                        similar to those for Early Childhood Teachers, applicants typically need to complete
                                        a <b>Bachelor or Master of Teaching.</b> Recent PR invitations have been extended to
                                        both
                                        onshore and offshore applicants, even with points as low as <b>65,</b> and often
                                        <b>without
                                            requiring prior work experience.</b>
                                    </p>
                                </div>
                            </div>
                            <div class="details-content">
                                <h2 class="title-anim text-danger">2. Trade Occupations </h2>
                                <p>Here's a <b>comprehensive overview</b> of trade occupations in Australia that are
                                    currently in
                                    demand, along with updated migration and study pathways based on the latest regulations
                                    and government announcements:</p>
                                <p>Here’s a breakdown of popular trade occupations recognized for migration:</p>
                                <h3 class="mt-5">Here’s a breakdown of <b>popular trade occupations</b> recognized for
                                    migration:</h3>
                                <div class="row mt-5">
                                    <div class="col-lg-6">
                                        <h2 class="title-anim">🛠️ Construction & Engineering Trades</h2>
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
                                        <h2 class="title-anim">🔧 Metal, Wood, and Related Trades</h2>
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
                                        <h2 class="title-anim">🚗 Automotive & Electrical Trades</h2>
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
                                        <h2 class="title-anim">💇‍♀️ Personal Services</h2>
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
                                <h2 class="title-anim text-danger">🧭 Migration Pathways for Trade Occupations</h2>
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
                                <h2 class="title-anim text-danger">🎓 Study Options Leading to PR</h2>
                                <p>Many Registered Training Organizations (RTOs) offer accredited courses that are
                                    <b>directly
                                        aligned with the PR pathway:</b>
                                </p>
                                <div class="row g-5 mt-5">
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
                            <div class="details-content">
                                <h2 class="title-anim text-danger">3. Nursing </h2>
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
                                        <h2 class="mb-4 section-title">Why Nursing?</h2>
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
                                    <h2 class="title-anim text-danger">Study Pathways for Nurses</h2>
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
                                    <h2 class="title-anim text-danger">Migration Pathways for Nurses</h2>
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
                                                    <h2 class="mb-4 text-danger">Why Choose <span
                                                            class="text-dark">Quality Migration?</span></h2>
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
                        <div class="details-content">
                            <h3 class="title-anim text-danger">IT Occupations: Migration Pathways and Study Options</h3>
                            <p>At <b>Quality Migration,</b> we offer expert guidance on securing a bright future in
                                Australia for
                                IT professionals. With a high demand for skilled workers in the tech industry, the
                                Australian government has prioritized IT occupations, providing a clear pathway to permanent
                                residency (PR).</p>
                        </div>
                        <section class="py-5 bg-light">
                            <div class="container">
                                <h5 class="text-center text-danger mb-4">Recent Updates in Migration for IT Occupations
                                </h5>
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="card h-100 shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title text-success">Massive PR Invitations Issued</h5>
                                                <ul>
                                                    <li>• The Department of Home Affairs recently conducted extensive
                                                        invitation rounds for Skilled Independent Visas (subclass 189).</li>
                                                    <li>• Applicants with only 65 points received invitations for a range of
                                                        occupations, including IT roles.</li>
                                                    <li>• Both onshore and offshore applicants benefited from these
                                                        invitations.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="card h-100 shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title text-success">Reduced Visa Processing Time</h5>
                                                <ul>
                                                    <li>• The visa backlog has been significantly reduced, leading to faster
                                                        processing times.</li>
                                                    <li>• This change has made Australia more accessible for IT
                                                        professionals worldwide.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="card h-100 shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title text-success">Increased Migration Quotas</h5>
                                                <ul>
                                                    <li>• The 2023-24 migration program includes an additional 35,000
                                                        places.</li>
                                                    <li>• These places are allocated across skilled migration and
                                                        state-sponsored visas.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="py-5">
                            <div class="container">
                                <h4 class="text-center text-danger mb-4">Migration Pathways for IT Professionals</h2>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <h5 class="card-title text-success">Skilled Independent Visa (Subclass
                                                        189)</h5>
                                                    <p>This visa provides a direct route to PR for IT professionals.</p>
                                                    <ul>
                                                        <li><strong>Eligibility:</strong> Requires a positive skills
                                                            assessment in your nominated occupation.</li>
                                                        <li><strong>No sponsorship required</strong></li>
                                                        <li><strong>Invitations issued with as low as 65 points</strong>
                                                        </li>
                                                        <li><strong>Open to both onshore and offshore applicants</strong>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <h5 class="card-title text-success">State and Regional Sponsor Visas
                                                        (Subclass 190 and Subclass 491)</h5>
                                                    <p><strong>Benefits of State Sponsorship:</strong></p>
                                                    <ul>
                                                        <li>Additional points for state/territory nomination</li>
                                                        <li>Flexibility for both offshore and onshore candidates</li>
                                                    </ul>
                                                    <p><strong>Updates for Key States:</strong></p>
                                                    <ul>
                                                        <li><strong>Victoria:</strong> Relaxed requirements, no minimum work
                                                            experience needed, casual or part-time work considered.</li>
                                                        <li><strong>NSW:</strong> Open to applicants from any occupation on
                                                            the state list, monthly invitation rounds.</li>
                                                        <li><strong>WA:</strong> Welcomes candidates from other Australian
                                                            states or overseas, graduate stream available for IT
                                                            professionals with a 2-year course in WA.</li>
                                                        <li><strong>ACT (Canberra):</strong> Frequent invitation rounds (3-4
                                                            per month), additional points for residing or studying in
                                                            Canberra.</li>
                                                        <li><strong>Queensland:</strong> Broad occupation list for IT roles,
                                                            open to offshore applicants with no job requirement.</li>
                                                        <li><strong>Tasmania:</strong> Migration Tasmania Gateway open for
                                                            subclass 491 and 190 nominations, no occupation restrictions,
                                                            study options from $6,500.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <h5 class="card-title text-success">Study Pathways for IT Professionals
                                                    </h5>
                                                    <ul>
                                                        <li>Eligible for skills assessment as "Telecommunications Network
                                                            Planner" or "Telecommunications Technical Officer"</li>
                                                        <li>Study options include 2-year Advanced Diploma programs in
                                                            Information Technology (Networking)</li>
                                                        <li><strong>Benefits:</strong> Affordable fees, opens pathways for
                                                            subclass 485 (Temporary Graduate Visa)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">Bachelor and Master’s Degrees in IT</h5>
                                        <ul>
                                            <li><strong>Bachelor of IT:</strong> Comprehensive 3-year programs across
                                                Australia, suitable for skilled migration with focus areas such as software
                                                development, cybersecurity, and networking.</li>
                                            <li><strong>Master of IT:</strong> Specialized programs for advanced knowledge
                                                in data science, AI, or IT management. Scholarships available for eligible
                                                students.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">Skills Assessment for IT Occupations</h5>
                                        <p>A positive skills assessment is mandatory to apply for skilled migration.</p>
                                        <p><strong>Popular IT Occupations:</strong></p>
                                        <ul>
                                            <li>ICT Business Analyst</li>
                                            <li>System Analyst</li>
                                            <li>Developer Programmer</li>
                                            <li>ICT Security Specialist</li>
                                        </ul>
                                        <p><strong>Key Requirements:</strong></p>
                                        <ul>
                                            <li>A relevant qualification (Diploma, Bachelor’s, or Master’s)</li>
                                            <li>1-year post-study work experience in your nominated occupation</li>
                                        </ul>
                                        <p><strong>Skills Assessment Body:</strong> ACS (Australian Computer Society)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">Migration Pathways for IT Professionals</h5>
                                        <ul>
                                            <li><strong>Subclass 485 – Temporary Graduate Visa:</strong> Allows graduates to
                                                gain work experience in their field for up to 2 years, providing a bridge to
                                                PR through skilled migration pathways.</li>
                                            <li><strong>Subclass 189/190/491:</strong> Apply directly for PR or
                                                state-sponsored visas. Combine study and work experience to maximize
                                                eligibility.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">Why Choose Quality Migration?</h5>
                                        <ul>
                                            <li>Expertise in IT Migration: Tailored advice for IT professionals and students
                                            </li>
                                            <li>Experienced Agents: Registered with MARA, ensuring up-to-date and accurate
                                                guidance</li>
                                            <li>Comprehensive Support: Assistance with visas, course enrollment, and skills
                                                assessments</li>
                                            <li>Client-Centric Services: Rated 4.9/5 for exceptional service</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="details-content">
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
                    <div class="details-content">
                        <h3 class="title-anim text-danger">Medical Laboratory Scientists: Your Pathway to Skilled Migration
                        </h3>
                        <p>Medical Laboratory Scientists play a vital role in the healthcare system by conducting tests that
                            assist in diagnosing, treating, and preventing diseases. Australia offers a range of migration
                            pathways for professionals in this field, making it an excellent destination to advance your
                            career and secure permanent residency (PR).</p>
                    </div>
                    <section class="pb-5 bg-light">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-12 mt-5">
                                    <h4 class="text-center text-danger mb-4">Migration Insights for Medical Laboratory
                                        Scientists</h2>

                                        <div class="card shadow-sm mb-4">
                                            <div class="card-body">
                                                <h5 class="card-title text-success">Key Responsibilities of Medical
                                                    Laboratory
                                                    Scientists</h5>
                                                <ul>
                                                    <li>Preparing tissue sections for microscopic examination.</li>
                                                    <li>Analyzing samples of body tissues and fluids to aid in diagnosing
                                                        diseases.</li>
                                                    <li>Studying the effects of microbial infections on health.</li>
                                                    <li>Advising medical practitioners on test interpretations and
                                                        diagnostic
                                                        methods.</li>
                                                    <li>Setting protocols for laboratory testing.</li>
                                                    <li>Operating and maintaining laboratory equipment.</li>
                                                    <li>Ensuring laboratory quality assurance and safety standards.</li>
                                                    <li>Preparing scientific reports and research papers.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card shadow-sm mb-4">
                                            <div class="card-body">
                                                <h5 class="card-title text-success">Skills Assessment for Medical
                                                    Laboratory
                                                    Scientists</h5>
                                                <p><strong>For AIMS-Accredited Applicants:</strong></p>
                                                <ul>
                                                    <li>Applicants with an AIMS-accredited program are directly classified
                                                        as
                                                        Medical Laboratory Scientists.</li>
                                                    <li>No requirement to undertake the AIMS Medical Laboratory Scientist
                                                        Professional Examination.</li>
                                                </ul>
                                                <p><strong>For Non-AIMS-Accredited Applicants:</strong></p>
                                                <ul>
                                                    <li>Stage 1: Document assessment.</li>
                                                    <li>Stage 2: Written examination (AIMS Medical Laboratory Scientist
                                                        Professional Examination).</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card shadow-sm mb-4">
                                            <div class="card-body">
                                                <h5 class="card-title text-success">PR Invitations for Medical Laboratory
                                                    Scientists</h5>
                                                <ul>
                                                    <li>Medical Laboratory Scientists have consistently received PR
                                                        invitations
                                                        under subclass 189 and state-sponsored visas.</li>
                                                    <li><strong>January 2022:</strong> Among the few occupations to receive
                                                        subclass 189 invitations.</li>
                                                    <li><strong>FY 2020-21:</strong> Second-highest PR invitations (261
                                                        invitations), after Nursing.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card shadow-sm mb-4">
                                            <div class="card-body">
                                                <h5 class="card-title text-success">Regional Study Benefits for Migration
                                                </h5>
                                                <ul>
                                                    <li>Earn extra points for studying and residing in a regional area.</li>
                                                    <li>Access extended post-study work rights through the Temporary
                                                        Graduate
                                                        Visa (subclass 485).</li>
                                                </ul>
                                                <p><strong>Regional Area Highlights:</strong></p>
                                                <ul>
                                                    <li>Metropolitan Regional Cities: Perth, Adelaide, and Gold Coast.</li>
                                                    <li>Nearby Regional Areas: Geelong, Bendigo, and Ballarat (just an
                                                        hour’s
                                                        drive from Melbourne).</li>
                                                </ul>
                                                <p><strong>Temporary Graduate Visa (Subclass 485):</strong></p>
                                                <ul>
                                                    <li>Master’s Graduates: Eligible for up to 3 years of work rights (4
                                                        years
                                                        if studied in a regional area).</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title text-success">Why Choose Quality Migration?</h5>
                                                <p><strong>Comprehensive Support for Medical Laboratory Scientists:</strong>
                                                </p>
                                                <ul>
                                                    <li>Assistance with skills assessments, including AIMS documentation and
                                                        examinations.</li>
                                                    <li>Tailored advice on PR pathways and state-sponsored opportunities.
                                                    </li>
                                                    <li>Support for onshore and offshore candidates.</li>
                                                </ul>
                                                <p><strong>Benefits of Working with Us:</strong></p>
                                                <ul>
                                                    <li>Expertise in healthcare migration pathways.</li>
                                                    <li>Multilingual team fluent in English, Bangla, Mandarin, Tagalog, and
                                                        more.</li>
                                                    <li>Personalized migration strategies to match your unique needs.</li>
                                                </ul>
                                            </div>
                                        </div>

                                </div>

                            </div>
                        </div>
                    </section>
                    <div class="details-content">
                        <h3 class="title-anim text-danger">Social Workers and Community Workers: In-Demand Occupations in
                            Australia
                        </h3>
                        <p>Social Worker and Community Worker occupations are currently in high demand across Australia.
                            Over the past six months, there has been consistent invitation activity for both occupations,
                            providing excellent migration opportunities for qualified professionals.</p>
                    </div>
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-success">Recent PR Invitation Trends</h5>
                            <ul>
                                <li><strong>Community Workers:</strong> Received invitations this year from all states
                                    except Queensland. ACT issued invitations with only 80 points in the 1st round of this
                                    financial year.</li>
                                <li><strong>Social Workers:</strong> Received invitations with as low as 60 points, making
                                    it one of the most accessible occupations for migration.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-success">How to Become an Accredited Social Worker</h5>
                            <p>To practice as a Social Worker in Australia, you must hold at least a Bachelor’s degree or
                                higher qualification. Relevant experience or on-the-job training may also be required in
                                some cases.</p>
                            <p><strong>Education and Assessment Requirements:</strong></p>
                            <ul>
                                <li>A degree in Social Work is sufficient to attain a Migration Skills Assessment.</li>
                                <li>A minimum English test score is required.</li>
                            </ul>
                            <p><strong>Study Options for Social Work:</strong></p>
                            <ul>
                                <li><strong>Bachelor of Social Work:</strong> Duration: 4 years. Initial Deposit: Contact us
                                    for details.</li>
                                <li><strong>Master of Social Work:</strong> Duration: 2.5 years (for applicants without
                                    prior relevant study background). Initial Deposit: Contact us for details.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-success">How to Become an Accredited Community Worker</h5>
                            <p>To practice as a Community Worker, a minimum qualification of AQF Associate Degree, Advanced
                                Diploma, or Diploma is required. An ACWA-accredited degree is necessary for a Migration
                                Skills Assessment.</p>
                            <p><strong>Skills Assessment Notes:</strong></p>
                            <ul>
                                <li>VETASSESS requires 1 year of work experience in the nominated occupation.</li>
                                <li>Ensure that your course is accredited by the relevant skills assessment body.</li>
                            </ul>
                            <p><strong>Professional Guidance:</strong> Choosing the right course is critical. At Quality
                                Migration, our team provides expert advice to help you select the best pathway.</p>
                            <p><strong>Free Student Visa Assistance:</strong> Apply for a course through us and enjoy no
                                service fees for your student visa application.</p>
                        </div>
                    </div>

                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-success">Migration Pathways and Additional Opportunities</h5>
                            <p>Explore various pathways to attain positive skills assessments for related occupations like
                                Community Arts Worker and Welfare Centre Manager.</p>
                            <ul>
                                <li><strong>Community Worker Migration Pathway</strong></li>
                                <li><strong>Welfare Worker Migration Pathway</strong></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-success">Why Choose Quality Migration?</h5>
                            <p><strong>Our Expertise:</strong></p>
                            <ul>
                                <li>Comprehensive support for Social Workers and Community Workers.</li>
                                <li>Guidance on skills assessments and accredited study options.</li>
                                <li>Personalized migration strategies tailored to your unique profile.</li>
                            </ul>
                            <p><strong>Our Advantages:</strong></p>
                            <ul>
                                <li>Experienced Registered Migration Agents.</li>
                                <li>Multilingual team fluent in English, Bangla, Mandarin, and more.</li>
                                <li>No service fees for student visa applications when you apply for a course through us.
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
    </section>

    <!--<< Footer Section Start >>-->

    <!--<< All JS Plugins >>-->
@endsection
