@extends('layouts.default')
@section('title')
    Student visa
@endsection

@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Student Visa</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>•
                        <a href="{{ url('/') }}">
                            Home Page
                        </a>
                    </li>
                    <li>•
                        <i class="fal fa-minus"></i>
                    </li>
                    <li>•
                        Student Visa
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
                            <h3 class="title-anim text-danger my-5">Student Visa (Subclass 500)</h3>
                            <p>The <b>Student Visa (Subclass 500)</b> is designed for international students who wish to
                                study at a
                                registered education institution in Australia.</p>
                        </div>
                        <section class="pb-5">
                            <div class="container">
                                <!-- Student Visa Section -->
                                <h4 class="text-center text-danger my-5">Key Features of the Student Visa</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="my-2">Key Features of the Student Visa:</h5>
                                        <ul>
                                            <li>• Eligibility: Available for students at all levels, from primary school to
                                                Ph.D.
                                                programs.</li>
                                            <li>• Family Inclusion: You can bring your family members to Australia with you.
                                            </li>
                                            <li>• Work Rights: Both you and your family members can work a specified number
                                                of
                                                hours while holding this visa.</li>
                                        </ul>
                                        <h5 class="my-2">Application Options:</h5>
                                        <ul>
                                            <li>• Can be applied for onshore (within Australia) or offshore (outside
                                                Australia).
                                            </li>
                                        </ul>
                                        <h5 class="my-2">Benefits of the Student Visa:</h5>
                                        <ul>
                                            <li>• Opportunity to participate in an eligible full-time course in Australia.
                                            </li>
                                            <li>• Flexibility to gain work experience while studying.</li>
                                            <li>• A pathway to explore potential migration opportunities after completing
                                                your
                                                studies.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('front/img/all-image/early/student-visa.jpeg') }}"
                                            class="img-fluid" alt="Student Visa">
                                    </div>
                                </div>

                                <!-- Student Guardian Visa Section -->
                                <h4 class="text-center text-danger my-5">Student Guardian Visa (Subclass 590)</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="my-2">Key Features of the Guardian Visa:</h5>
                                        <ul>
                                            <li>• Eligibility: For foreign nationals who wish to stay in Australia as a
                                                guardian
                                                for an international student.</li>
                                            <li>• Duration: The visa is valid for the same length of time as the student's
                                                visa.
                                            </li>
                                            <li>• Multiple Entry: Holders of this visa can enter and exit Australia multiple
                                                times
                                                during the visa’s validity.</li>
                                        </ul>
                                        <h5 class="my-2">Benefits of the Guardian Visa:</h5>
                                        <ul>
                                            <li>• Ensure the student has proper care and support during their time in
                                                Australia.
                                            </li>
                                            <li>• Reside legally in Australia alongside the student.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('front/img/all-image/early/visa-590.jpg') }}"
                                            class="img-fluid" alt="Guardian Visa">
                                    </div>
                                </div>

                                <!-- Why Choose Quality Migration Section -->
                                <h4 class="text-center text-danger my-5">Why Choose Quality Migration?</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>At Quality Migration, we provide expert advice and support to help you navigate
                                            the
                                            process of applying for a Student Visa or a Student Guardian Visa.</p>
                                        <h5 class="my-2">Our Services:</h5>
                                        <ul>
                                            <li>• Assistance with visa applications.</li>
                                            <li>• Guidance on selecting the right course and institution.</li>
                                            <li>• Information on visa conditions, work rights, and family inclusion.</li>
                                            <li>• Expert advice on pathways to further visas or permanent residency.</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Student Visa Extension Section -->
                                <h4 class="text-center text-danger my-5">Student Visa Extension</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="my-2">Is Your Visa Expiring Soon?</h5>
                                        <p>If your current visa is nearing its expiry date and you’re considering applying
                                            for a
                                            student visa, it is critical to take action before your current visa expires.
                                            Overstaying your visa is a breach of conditions and can have serious
                                            consequences.
                                        </p>
                                        <h5 class="my-2">When Should You Apply for a New Visa or Extension?</h5>
                                        <ul>
                                            <li>• Ideally, apply for a Student Visa or Student Visa extension 3–6 months
                                                before
                                                your current visa expiry date.</li>
                                            <li>• If your visa is expiring soon and you haven’t yet applied, don’t
                                                delay—contact
                                                us today for assistance!</li>
                                        </ul>
                                        <h5 class="my-2">Common Reasons for a Visa Extension:</h5>
                                        <ul>
                                            <li>• Commencing a New Course.</li>
                                            <li>• Extended Study Period.</li>
                                            <li>• Pending Research/PhD Proposal Outcome.</li>
                                            <li>• Uncompleted Course (Failed subjects, Leave of Absence, Reduced Study
                                                Load).
                                            </li>
                                            <li>• Administrative Cancellation.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('front/img/all-image/early/Visa_Extension_renewal.png') }}"
                                            class="img-fluid" alt="Visa Extension">
                                    </div>
                                </div>

                                <!-- Bridging Visas Section -->
                                <h4 class="text-center text-danger my-5">Bridging Visas for Onshore Applications</h4>
                                <div class="service-wrapper">

                                    <div class="row">
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s"
                                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                            <div class="service-card-items">
                                                <h5 class="my-2">Bridging Visa A (BVA):</h5>
                                                <p>Allows lawful stay in Australia while your visa is being processed.</p>
                                                <h5 class="my-2">Bridging Visa B (BVB):</h5>
                                                <p>Provides permission to travel outside Australia while waiting for your
                                                    visa
                                                    outcome.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s"
                                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                            <div class="service-card-items">

                                                <h5 class="my-2">Offshore Applications:</h5>
                                                <p>You must wait for your student visa to be granted before returning to
                                                    Australia.
                                                    Border restrictions may impact the process, so consult with our experts
                                                    for the
                                                    best
                                                    course of action.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Key Considerations Section -->
                                <h4 class="text-center text-danger my-5">Key Considerations for Visa Extensions</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="my-2">Documents Required:</h5>
                                        <ul>
                                            <li>• Health Check: Ensuring your medical requirements are met.</li>
                                            <li>• Financial Proof: Demonstrating your ability to support your studies and
                                                stay
                                                in
                                                Australia.</li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Why Choose Quality Migration Section -->
                                <h4 class="text-center text-danger my-5"></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="my-2">Affordable Service & Expertise:</h5>
                                        <p></p>
                                        <h5 class="my-2"></h5>
                                        <ul>
                                            <li>• Assistance with visa extensions, course changes, PR applications, TR 485,
                                                partner visas, regional migration, and more.</li>
                                        </ul>
                                    </div>
                                </div>
                                <section class="py-5 bg-light">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 mb-4 mb-md-0">
                                                <img src="{{ URL::asset('front/img/all-image/visa-detail/contact.jpg') }}"
                                                    alt="Quality Migration Support" class="img-fluid rounded shadow">
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="mb-4 text-danger">Why Choose <span class="text-dark">Quality
                                                        Migration?</span></h3>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item bg-light"><strong>Affordable Service &
                                                            Expertise:</strong>Over 20 years of experience with registered
                                                        migration agents (MARN: 2518800) and
                                                        education agents.</li>
                                                    <li class="list-group-item bg-light"><strong>Comprehensive
                                                            Support:</strong>Assistance with visa extensions, course
                                                        changes, PR applications, TR 485, partner visas, regional migration,
                                                        and more.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.book')

@endsection
