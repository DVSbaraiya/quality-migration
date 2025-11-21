@extends('layouts.default')

@section('title')
General Skilled Migration Australia – 189, 190 & 491 Visa Pathways
@endsection

@section('description')
Explore Australia’s General Skilled Migration visas, including Subclass 189, 190, and 491. Learn PR pathways, eligibility, points test requirements, and nomination options.
@endsection

@section('tags')
general skilled migration australia,
gsm visa australia,
subclass 189 visa,
subclass 190 visa,
subclass 491 visa,
skilled independent visa,
skilled nominated visa,
regional skilled visa australia,
points test australia,
skilled migration agent,
australia pr skilled worker,
state nomination australia,
491 regional visa pathway
@endsection

@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">General Skilled Migration </h1>
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
                    General Skilled Migration
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
                    <h3 class="title-anim text-danger">Visa Options for Points-Tested Skilled Workers
                    </h3>
                    <p>Australia offers several visa pathways for skilled workers who wish to live and work in the
                        country permanently but do not have an employer sponsoring them. These General Skilled Migration
                        (GSM) visas cater to independent migrants, those sponsored by relatives, or individuals
                        nominated by a State or Territory government.</p>
                </div>
                <div class="details-content">
                    <h3 class="title-anim text-danger">Visa Pathways
                    </h3>
                    <div class="service-wrapper p-0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="service-card-items">
                                    <h3><a href="#">Skilled Independent Visa (Subclass 189)</a></h3>
                                    <p>
                                        • A points-based visa for skilled workers not sponsored by an employer,
                                        state/territory, or family member.
                                    </p>
                                    <p>• Provides <b>permanent residency</b> with the ability to live and work anywhere
                                        in
                                        Australia.</p>
                                    <p>• Certain family members can be included in the application.</p>
                                    <p>• Popular for highly skilled workers aiming for maximum independence.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="service-card-items">
                                    <h3><a href="#">Skilled Nominated Visa (Subclass 190)</a></h3>
                                    <p>
                                        • A points-based visa for skilled workers nominated by a <b>state or territory
                                            government.</b>
                                    </p>
                                    <p>• Grants <b>permanent residency</b> with no restriction on where the visa holder
                                        can
                                        live or work in Australia.</p>
                                    <p>• Certain family members can be included in the application.</p>
                                    <p>• <b>State nomination</b> often provides additional points to meet eligibility
                                        criteria.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="service-card-items">
                                    <h3><a href="#">Skilled Work Regional (Provisional) Visa (Subclass 491)</a>
                                    </h3>
                                    <p>• Replaced the <b>Subclass 489 Visa</b> on <b>16 November 2019.</b>
                                    </p>
                                    <p>• Points-tested visa for applicants nominated by a state/territory government
                                        agency or sponsored by an eligible family member living in a <b>designated
                                            regional
                                            area.</b></p>
                                    <p>• Valid for <b>5 years,</b> requiring holders to live, work, and study in
                                        specified
                                        regional areas.</p>
                                    <p>• Pathway to <b>permanent residency</b> (Subclass 191 Visa) after:
                                    <ul class="ms-2">
                                        <li>• Living in a designated regional area for at least 3 years.</li>
                                        <li>• Earning the minimum taxable income as required by the Department of Home
                                            Affairs.</li>
                                    </ul>
                                    </p>
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