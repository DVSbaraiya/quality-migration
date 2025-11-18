@extends('layouts.default')
@section('title')
Protection Visa
@endsection

@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Protection Visa </h1>
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
                    Protection Visa
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
                    <h3 class="title-anim text-danger">Protection Visas in Australia: Safe Haven and a New Start
                    </h3>
                    <p>Australia provides various protection visas for individuals seeking asylum from persecution or
                        significant harm in their home countries. Among these, the Safe Haven Enterprise Visa (SHEV),
                        Temporary Protection Visa (TPV), and Protection Visa (Subclass 866) cater to different
                        situations, offering safety and opportunities for eligible applicants.
                    </p>
                </div>
                <div class="details-content">
                    <div class="container py-5">
                        <h3 class="text-center mb-5">Australia Protection & Humanitarian Visas</h3>

                        <!-- SHEV -->
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('front/img/all-image/early/How-much-bank-balance-is-required-for-US-business-visa-790x420.jpg') }}"
                                    alt="Visa Benefits for Indian Nationals" class="img-fluid rounded shadow" />
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-danger title-anim">Safe Haven Enterprise Visa (Subclass 790)</h3>
                                <p>The SHEV offers a temporary solution for asylum seekers, allowing them to stay in Australia for up to five years while creating pathways to other visas if conditions are met.</p>
                                <ul class="list-unstyled text-start">
                                    <h5>Key Features</h5>
                                    <li><i class="bi bi-mortarboard icon-bullet"></i>
                                        <strong>Duration:</strong>
                                        Up to 5 years.
                                    </li>
                                    <li><i class="bi bi-cpu icon-bullet"></i>
                                        <strong>Work and Study Rights:</strong>
                                        Permission to work and study.
                                    </li>
                                    <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                        <strong>Access to Services:</strong>
                                        Permission to work and study.
                                    </li>
                                    <h5>Eligibility</h5>
                                    <li>
                                        Must meet Australia's protection obligations or be a family member of an eligible applicant.<br>
                                        Fulfill health, character, and security requirements.<br>
                                        Declare intent to work or study in designated regional areas.
                                    </li>
                                    <h5>Pathway Opportunities</h5>
                                    <li>
                                        To access pathways to other visas, SHEV holders must:<br>
                                        Work in designated regional areas for 42 months without receiving Special Benefit payments, or<br>
                                        Study full-time in a SHEV regional area for the same duration.
                                    </li>
                                </ul>
                                <p><strong>Note:</strong>Refer to the Department of Home Affairs for updated regional area listings.</p>
                            </div>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">Safe Haven Enterprise Visa (Subclass 790)
                            </div>
                            <div class="card-body">
                                <p>The SHEV offers a temporary solution for asylum seekers, allowing them to stay in
                                    Australia for up to five years while creating pathways to other visas if conditions
                                    are met.</p>
                                <h5>Key Features</h5>
                                <ul>
                                    <li><strong>Duration:</strong> Up to 5 years.</li>
                                    <li><strong>Work and Study Rights:</strong> Permission to work and study.</li>
                                    <li><strong>Access to Services:</strong> Includes Medicare and some government
                                        benefits.</li>
                                </ul>
                                <h5>Eligibility</h5>
                                <ul>
                                    <li>Must meet Australia's protection obligations or be a family member of an
                                        eligible applicant.</li>
                                    <li>Fulfill health, character, and security requirements.</li>
                                    <li>Declare intent to work or study in designated regional areas.</li>
                                </ul>
                                <h5>Pathway Opportunities</h5>
                                <p>To access pathways to other visas, SHEV holders must:</p>
                                <ul>
                                    <li>Work in designated regional areas for 42 months without receiving Special
                                        Benefit payments, or</li>
                                    <li>Study full-time in a SHEV regional area for the same duration.</li>
                                </ul>
                                <p><strong>Note:</strong> Refer to the Department of Home Affairs for updated regional
                                    area listings.</p>
                            </div>
                        </div> -->

                        <!-- Protection Visa -->
                        <div class="mb-5">
                            <h3 class="text-danger title-anim">Protection Visa (Subclass 866)</h3>
                            <p>The Protection Visa is a permanent visa for individuals who meet Australia’s protection obligations due to persecution on grounds such as race, religion, nationality, social group, or political opinion.</p>
                            <ul class="list-unstyled text-start">
                                <h5>Key Features</h5>
                                <li><i class="bi bi-mortarboard icon-bullet"></i>
                                    <strong>Permanent Residency:</strong>
                                    Stay in Australia indefinitely.
                                </li>
                                <li><i class="bi bi-mortarboard icon-bullet"></i>
                                    <strong>Work and Study Rights:</strong>
                                    Full access to employment and education.s
                                </li>
                                <li><i class="bi bi-cpu icon-bullet"></i>
                                    <strong>Family Inclusion:</strong>
                                    Eligible family members can be included.
                                </li>
                                <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                    <strong>Access to Benefits:</strong>
                                    Includes Medicare, Centrelink, and more.
                                </li>
                                <h5>Eligibility</h5>
                                <li>
                                    Must be in Australia and meet protection obligations.<br>
                                    Must satisfy health, character, and security checks.<br>
                                    Exceptions may apply for holders of SHEV or TPV under specific conditions.
                                </li>
                                <h5>Pathway Opportunities</h5>
                                <li>
                                    Due to global humanitarian crises, processing times have increased, especially for applicants from:<br>
                                    Afghanistan<br>
                                    Palestine.
                                </li>
                            </ul>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">Protection Visa (Subclass 866)</div>
                            <div class="card-body">
                                <p>The Protection Visa is a permanent visa for individuals who meet Australia’s
                                    protection obligations due to persecution on grounds such as race, religion,
                                    nationality, social group, or political opinion.</p>
                                <h5>Key Features</h5>
                                <ul>
                                    <li><strong>Permanent Residency:</strong> Stay in Australia indefinitely.</li>
                                    <li><strong>Work and Study Rights:</strong> Full access to employment and education.
                                    </li>
                                    <li><strong>Family Inclusion:</strong> Eligible family members can be included.</li>
                                    <li><strong>Access to Benefits:</strong> Includes Medicare, Centrelink, and more.
                                    </li>
                                </ul>
                                <h5>Eligibility</h5>
                                <ul>
                                    <li>Must be in Australia and meet protection obligations.</li>
                                    <li>Must satisfy health, character, and security checks.</li>
                                    <li>Exceptions may apply for holders of SHEV or TPV under specific conditions.</li>
                                </ul>
                                <h5>Recent Updates</h5>
                                <p>Due to global humanitarian crises, processing times have increased, especially for
                                    applicants from:</p>
                                <ul>
                                    <li>Afghanistan</li>
                                    <li>Palestine</li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- TPV -->
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('front/img/all-image/early/Protection-Visa-866.webp') }}"
                                    alt="Visa Benefits for Indian Nationals" class="img-fluid rounded shadow" />
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-danger title-anim">Temporary Protection Visa (Subclass 785)</h3>
                                <P>The TPV offers temporary protection for asylum seekers who arrive in Australia without a valid visa but are found to meet the protection criteria.</P>
                                <ul class="list-unstyled text-start">
                                    <h5>Key Features</h5>
                                    <li><i class="bi bi-mortarboard icon-bullet"></i>
                                        <strong>Duration:</strong>
                                        Typically up to 3 years.
                                    </li>
                                    <li><i class="bi bi-mortarboard icon-bullet"></i>
                                        <strong>Work and Study Rights:</strong>
                                        Full access granted.
                                    </li>
                                    <li><i class="bi bi-cpu icon-bullet"></i>
                                        <strong>Access to Services:</strong>
                                        Includes Medicare, Centrelink, and trauma counseling.
                                    </li>
                                    <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                        <strong>Travel Restrictions:</strong>
                                        Overseas travel requires written approval; return to home country is prohibited.
                                    </li>
                                    <h5>Eligibility</h5>
                                    <li>
                                        Must face a well-founded fear of persecution or harm in home country.<br>
                                        Must meet health, character, and security requirements.<br>
                                        Must not have previously been refused a protection visa.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">Temporary Protection Visa (Subclass 785)
                            </div>
                            <div class="card-body">
                                <p>The TPV offers temporary protection for asylum seekers who arrive in Australia
                                    without a valid visa but are found to meet the protection criteria.</p>
                                <h5>Key Features</h5>
                                <ul>
                                    <li><strong>Duration:</strong> Typically up to 3 years.</li>
                                    <li><strong>Work and Study Rights:</strong> Full access granted.</li>
                                    <li><strong>Access to Services:</strong> Includes Medicare, Centrelink, and trauma
                                        counseling.</li>
                                    <li><strong>Travel Restrictions:</strong> Overseas travel requires written approval;
                                        return to home country is prohibited.</li>
                                </ul>
                                <h5>Eligibility</h5>
                                <ul>
                                    <li>Must face a well-founded fear of persecution or harm in home country.</li>
                                    <li>Must meet health, character, and security requirements.</li>
                                    <li>Must not have previously been refused a protection visa.</li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- Prioritization Section -->
                        <div class="mb-5">
                            <h3 class="text-danger title-anim">Prioritization for Protection Visa Applications</h3>
                            <p>Australia gives priority to applicants from countries facing severe humanitarian crises, including:</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-mortarboard icon-bullet"></i>
                                    <strong>Myanmar Nationals:</strong>
                                    Due to ongoing conflict.
                                </li>
                                <li><i class="bi bi-cpu icon-bullet"></i>
                                    <strong>Afghan Nationals:</strong>
                                    Supported by a humanitarian intake of 31,500 visas over 4 years.
                                </li>
                                <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                    <strong>Palestinian Nationals:</strong>
                                    Increased focus following recent conflicts in Gaza.
                                </li>
                            </ul>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">Prioritization for Protection Visa
                                Applications</div>
                            <div class="card-body">
                                <p>Australia gives priority to applicants from countries facing severe humanitarian
                                    crises, including:</p>
                                <ul>
                                    <li><strong>Myanmar Nationals:</strong> Due to ongoing conflict.</li>
                                    <li><strong>Afghan Nationals:</strong> Supported by a humanitarian intake of 31,500
                                        visas over 4 years.</li>
                                    <li><strong>Palestinian Nationals:</strong> Increased focus following recent
                                        conflicts in Gaza.</li>
                                </ul>
                            </div>
                        </div> -->
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