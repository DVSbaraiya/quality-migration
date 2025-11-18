@extends('layouts.default')
@section('title')
Business Visa
@endsection

@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Business Visa </h1>
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
                    Business Visa
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
                    <h3 class="title-anim text-danger">Explore Business and Investment Visa Options in Australia
                    </h3>
                    <p>Australia offers a range of visa opportunities for individuals looking to establish, manage, or
                        invest in businesses. Whether you’re planning a short business visit, starting a new venture, or
                        making significant investments, there is a visa to match your goals.
                    </p>
                </div>
                <div class="details-content">
                    <div class="container py-5">
                        <h4 class="text-center mb-5">Most Common Business Visas in Australia</h4>

                        <!-- Visa 188 -->
                        <div class="mb-5">
                            <h3 class="text-danger title-anim">Business Innovation and Investment (Provisional) Visa (Subclass 188)</h3>
                            <p class="mb-2">This visa enables applicants to manage or establish a business, engage in investment
                                activities, or pursue entrepreneurial ventures in Australia. It includes the
                                following streams:</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-mortarboard icon-bullet"></i>
                                    <strong>Business Innovation Stream:</strong>
                                    For individuals with business expertise looking to operate a new or existing business in Australia.
                                </li>
                                <li><i class="bi bi-cpu icon-bullet"></i>
                                    <strong>Investor Stream:</strong>
                                    Requires an investment of at least AUD 1.5 million in an Australian state or territory and ongoing business or investment activity.
                                </li>
                                <li><i class="bi bi-journal-richtext icon-bullet"></i>
                                    <strong>Significant Investor Stream:</strong>
                                    Demands a minimum investment of AUD 5 million in Australian investments that meet specific criteria.
                                </li>
                                <li><i class="bi bi-award icon-bullet"></i>
                                    <strong>Business Innovation Extension Stream:</strong>
                                    Allows holders of the Business Innovation Stream under Subclass 188 to extend their stay by two years.
                                </li>
                                <li><i class="bi bi-award icon-bullet"></i>
                                    <strong>Significant Investor Extension Stream:</strong>
                                    Permits holders of the Significant Investor Stream under Subclass 188 to extend their stay for up to four years.
                                </li>
                                <li><i class="bi bi-award icon-bullet"></i>
                                    <strong>Premium Investor Stream:</strong>
                                    Open to individuals nominated by the CEO of Austrade, requiring a minimum investment of AUD 15 million in Australian investments or philanthropic contributions.
                                </li>
                                <li><i class="bi bi-award icon-bullet"></i>
                                    <strong>Entrepreneur Stream:</strong>
                                    For individuals conducting entrepreneurial activities in Australia.
                                </li>
                                <li>
                                    <i class="bi bi-award icon-bullet"></i>
                                    <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/business-innovation-and-investment-188" target="_blank">
                                        <strong>More info:</strong>
                                        Business Innovation and Investment Visa (Subclass 188)
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header text-danger text-white">
                                Business Innovation and Investment (Provisional) Visa (Subclass 188)
                            </div>
                            <div class="card-body">
                                <p>This visa enables applicants to manage or establish a business, engage in investment
                                    activities, or pursue entrepreneurial ventures in Australia. It includes the
                                    following streams:</p>
                                <ul>
                                    <li>
                                        <strong>Business Innovation Stream:</strong>
                                        For individuals with business expertise looking to operate a new or existing business in Australia.
                                    </li>
                                    <li>
                                        <strong>Investor Stream:</strong>
                                        Requires an investment of at least AUD 1.5 million in an Australian state or territory and ongoing business or investment
                                        activity.
                                    </li>
                                    <li>
                                        <strong>Significant Investor Stream:</strong>
                                        Demands a minimum investment of AUD 5 million in Australian investments that meet specific criteria.
                                    </li>
                                    <li>
                                        <strong>Business Innovation Extension Stream:</strong>
                                        Allows holders of the Business Innovation Stream under Subclass 188 to extend their stay by two years.
                                    </li>
                                    <li>
                                        <strong>Significant Investor Extension Stream:</strong>
                                        Permits holders of the Significant Investor Stream under Subclass 188 to extend their stay for up to
                                        four years.
                                    </li>
                                    <li>
                                        <strong>Premium Investor Stream:</strong>
                                        Open to individuals nominated by the CEO of Austrade, requiring a minimum investment of AUD 15 million in Australian
                                        investments or philanthropic contributions.
                                    </li>
                                    <li>
                                        <strong>Entrepreneur Stream:</strong> For individuals conducting entrepreneurial
                                        activities in Australia.
                                    </li>
                                </ul>
                                <p>
                                    <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/business-innovation-and-investment-188"
                                        target="_blank">More info: Business Innovation and Investment Visa (Subclass 188)
                                    </a>
                                </p>
                            </div>
                        </div> -->

                        <!-- Visa 888 -->
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <img src="{{ asset('front/img/all-image/early/Business_Visa_Australia_Visa_188.jpg') }}"
                                    alt="Visa Benefits for Indian Nationals" class="img-fluid rounded shadow" />
                            </div>
                            <div class="col-md-6 align-content-center">
                                <h3 class="text-danger title-anim">Business Innovation and Investment (Permanent) Visa (Subclass 888)</h3>
                                <p>This permanent visa is ideal for entrepreneurs, investors, and business owners seeking to continue their activities in Australia indefinitely.</p>
                            </div>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                2. Business Innovation and Investment (Permanent) Visa (Subclass 888)
                            </div>
                            <div class="card-body">
                                <p>This permanent visa is ideal for entrepreneurs, investors, and business owners
                                    seeking to continue their activities in Australia indefinitely.</p>
                            </div>
                        </div> -->

                        <!-- Visa 132 -->
                        <div class="mb-5">
                            <h3 class="text-danger title-anim">Business Talent (Permanent) Visa (Subclass 132)</h3>
                            <p class="mb-4">Designed for experienced businesspeople and entrepreneurs, this visa allows for the establishment or development of businesses in Australia.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-mortarboard icon-bullet"></i>
                                    <strong>Significant Business History Stream:</strong>
                                    For seasoned business owners aiming to operate a business in Australia.
                                </li>
                                <li><i class="bi bi-cpu icon-bullet"></i>
                                    <strong>Venture Capital Entrepreneur Stream:</strong>
                                    For individuals who have secured venture capital funding from a member of the Australian Investment Council (AIC).
                                </li>
                            </ul>
                        </div>

                        <!-- <div class="card mb-4">
                            <div class="card-header bg-danger text-white">
                                3. Business Talent (Permanent) Visa (Subclass 132)
                            </div>
                            <div class="card-body">
                                <p>Designed for experienced businesspeople and entrepreneurs, this visa allows for the
                                    establishment or development of businesses in Australia.</p>
                                <ul>
                                    <li>
                                        <strong>Significant Business History Stream:</strong>
                                        For seasoned business owners aiming to operate a business in Australia.
                                    </li>
                                    <li>
                                        <strong>Venture Capital Entrepreneur Stream:</strong>
                                        For individuals who have secured venture capital funding from a member of the Australian Investment Council (AIC).
                                    </li>
                                </ul>
                            </div>
                        </div> -->

                        <!-- Why Invest -->
                        <div class="section-title">
                            <h3>Why Invest in Australia?</h3>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p>Australia’s stable economy, business-friendly environment, and vibrant multicultural
                                    society make it an ideal destination for investment and entrepreneurship. Benefits
                                    include:</p>
                                <ul>
                                    <li><strong>Access to Global Markets:</strong> Australia’s proximity to Asia offers
                                        opportunities for expansion and trade.</li>
                                    <li><strong>Supportive Ecosystem:</strong> Robust infrastructure, skilled workforce,
                                        and government incentives.</li>
                                    <li><strong>Pathways to Permanent Residency:</strong> Many business visas offer a
                                        clear route to PR.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-success">How Quality Migration Can Help</h5>
                            <p>Navigating Australia’s business visa pathways can be complex, but with Quality Migration,
                                you can achieve your business and residency goals seamlessly.</p>
                            <ul>
                                <li>• Personalized Guidance: Tailored solutions for your unique circumstances.</li>
                                <li>• Expert Advice: Registered Migration Agents with extensive knowledge of Australia’s
                                    visa requirements.</li>
                                <li>• Comprehensive Support: Assistance with documentation, nominations, and ongoing
                                    compliance.</li>
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