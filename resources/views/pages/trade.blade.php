@extends('layouts.default')
@section('title')
Trade Occupations in Australia – In-Demand Jobs & PR Visa Pathways
@endsection

@section('description')
Explore Australia’s most in-demand trade occupations including carpenters, welders, mechanics, chefs and more. Learn about ANZSCO codes, PR pathways, and visa options.
@endsection

@section('tags')
trade occupations australia,
anzsco trade occupations,
skilled trade jobs australia,
trade occupations pr pathway,
carpenter australia visa,
welder visa australia,
mechanic visa australia,
chef visa australia,
bricklayer migration australia,
metal fabricator australia,
trade worker subclass 190,
trade worker subclass 491,
australian immigration trades
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
        <div class="container px-4 px-md-0">
            <div class="coaching-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="coaching-details-items">
                            <div class="details-image">
                                <img src="{{ asset('front/img/all-image/early/Skilled-Trades-1.jpg') }}"
                                    alt="img">
                            </div>
                            <div class="details-content">
                                <h3 class="">Trade Occupations </h3>
                                <p>Here's a <b>comprehensive overview</b> of trade occupations in Australia that are
                                    currently in
                                    demand, along with updated migration and study pathways based on the latest regulations
                                    and government announcements:</p>
                                <p>Here’s a breakdown of popular trade occupations recognized for migration:</p>
                                <h4 class="mt-5">Here’s a breakdown of <b>popular trade occupations</b> recognized for
                                    migration:</h4>
                                <div class="row mt-5 trade-section">

        <!-- Construction -->
        <div class="col-lg-6 mb-4">
        <div class="trade-card">
            <h3>🛠️ Construction & Engineering Trades</h3>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Carpenter and Joiner (ANZSCO 331211)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Bricklayer (ANZSCO 331111)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Painting Trades Worker (ANZSCO 332211)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Wall and Floor Tiler (ANZSCO 333411)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Roof Plumber (ANZSCO 334115)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Glazier (ANZSCO 333111)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Fibrous Plasterer (ANZSCO 333211)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Solid Plasterer (ANZSCO 333212)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Stonemason (ANZSCO 331112)</h6></div>
        </div>
        </div>
    
        <!-- Metal Trades -->
        <div class="col-lg-6 mb-4">
        <div class="trade-card">
            <h3>🔧 Metal, Wood & Related Trades</h3>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Sheetmetal Trades Worker (ANZSCO 322211)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Welder (First Class) (ANZSCO 322313)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Fitter (General) (ANZSCO 323211)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Metal Fabricator (ANZSCO 322311)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Cabinetmaker (ANZSCO 394111)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Joiner (ANZSCO 331213)</h6></div>
        </div>
        </div>
    
        <!-- Automotive Trades -->
        <div class="col-lg-6 mb-4">
        <div class="trade-card">
            <h3>🚗 Automotive & Electrical Trades</h3>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Motor Mechanic (General) (ANZSCO 321211)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Automotive Electrician (ANZSCO 321111)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Diesel Motor Mechanic (ANZSCO 321212)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Vehicle Painter (ANZSCO 324311)</h6></div>
        </div>
        </div>
    
    <!-- Personal Services -->
    <div class="col-lg-6 mb-4">
        <div class="trade-card">
            <h3>💇‍♀️ Personal Services</h3>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Hairdresser (ANZSCO 391111)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Chef (ANZSCO 351311)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Baker (ANZSCO 351111)</h6></div>
            <div class="icon-item"><i class="fas fa-check-circle"></i><h6>Cook (ANZSCO 351411)</h6></div>
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
