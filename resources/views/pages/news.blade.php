@extends('layouts.default')
@section('title')
    Latest Updates on Visa Services & Migration Blog - Quality Migration
@endsection

@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('front/img/breadcrumb.jpg');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Blogs</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ url('/') }}"> Home Page </a>
                    </li>
                    <li>
                        <i class="fal fa-minus"></i>
                    </li>
                    <li>
                        Blogs
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< News Section Start >>-->
    <section class="news-section fix section-padding">
    <div class="container">
        <div class="row g-4">

            <x-blog-card
                title="What Are the Key Requirements for a Skilled Visa in Australia in 2025?"
                slug="what-are-the-key-requirements-for-a-skilled-visa-in-australia-in-2025"
                image="front/img/blog/what-are-the-key-requirements-for-a-skilled-visa-in-australia-in-2025.jpeg"
                excerpt="Australia attracts skilled workers worldwide by offering various skilled visas that provide pathways to live and work..."
            />

            <x-blog-card
                title="Partner Visa Processing Time Update – June 2025"
                slug="partner-visa-processing-time-update-june-2025"
                image="front/img/blog/partner-visa-processing-time-update-june-2025.jpeg"
                excerpt="As winter sets in across Australia, many couples are seeking clarity on how long it may take to reunite with their partners through the Partner Visa Australia program. With..."
            />

            <x-blog-card
                title="Migration Agent Melbourne: Trusted Support for Your Australian Visa"
                slug="migration-agent-melbourne-trusted-support-for-your-australian-visa"
                image="front/img/blog/migration-agent-melbourne-trusted-support-for-your-australian-visa.jpeg"
                excerpt="Finding the right migration agent in Melbourne can make a significant difference to your visa journey. Whether you plan to study..."
            />

            <x-blog-card
                title="New Updates and Changes to Subclass 189, 190 & 491 Visas in Australia (2025)"
                slug="new-updates-and-changes-to-subclass-189-190-491-visas-in-australia-2025"
                image="front/img/blog/new-updates-and-changes-to-subclass-189-190-491-visas-in-australia-2025.jpeg"
                excerpt="Australia remains one of the world’s most attractive destinations for skilled professionals seeking long-term stability, career growth, and..."
            />

            <x-blog-card
                title="Australia’s 482 Visa Changes: What Skilled Workers Must Know"
                slug="australias-482-visa-changes-what-skilled-workers-must-know"
                image="front/img/blog/australias-482-visa-changes-what-skilled-workers-must-know.jpeg"
                excerpt="If you are considering a career move to Australia, staying informed has never been more important. In 2025, Australia introduced some..."
            />

            <x-blog-card
                title="Australia Student Visa 500 Guide for Students & Parents"
                slug="australia-student-visa-500-guide-for-students-parents"
                image="front/img/blog/australia-student-visa-500-guide-for-students-parents.jpeg"
                excerpt="Australia remains one of the most sought-after study destinations in the world, known for its high-quality education system, multicultural environment..."
            />

        </div>
    </div>
</section>


@endsection
