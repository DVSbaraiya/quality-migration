<header class="header-section-1">
    <div class="header-top-section fix">
        <div class="container-fluid px-5">
            <div class="header-top-wrapper">
                <ul class="contact-list mx-3">
                    <li>
                        <i class="far fa-envelope"></i>
                        <a href="mailto:admin@qualitymigration.com" class="link">admin@qualitymigration.com</a>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+61385185858" class="link">+61 385185858</a>
                    </li>
                    {{-- <li>
                        <i class="fas fa-map-marker-alt"></i>
                        55 Main Street, 2nd block, Malborne ,Australia
                    </li> --}}
                </ul>
                <div class="top-right">
                    <div class="social-icon d-flex align-items-center">
                                <a href="https://www.facebook.com/share/1a6hNZVHxC/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/qualitymigration_australia/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.tiktok.com/@quality.migration?_r=1&_t=ZS-91V2tAd44bh"><i class="fab fa-tiktok"></i></a>
                            </div>
                </div>
            </div>
        </div>
    </div>

    <div id="header-sticky" class="header-1">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ url('/') }}" class="header-logo">
                                <img src="{{ asset('front/img/logo/logo.png') }}" width="250px" alt="logo-img">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{ url('/') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">About </i>
                                            </a>
                                        </li>

                                        <li class="has-dropdown">
                                            <a href="#">
                                                Education
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li class="has-dropdown">
                                                    <a href="#">
                                                        Pathway Courses
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('early') }}">
                                                                Early Childhood Teacher
                                                            </a>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('trade') }}">
                                                                Trade Occupations
                                                            </a>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('nursing') }}">
                                                                Nursing
                                                            </a>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('it') }}">
                                                                IT
                                                            </a>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('engineering') }}">
                                                                Engineering
                                                            </a>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('medical') }}">
                                                                Medical Laboratory Science
                                                            </a>
                                                        </li>
                                                        <li class="has-dropdown">
                                                            <a href="{{ route('social.work') }}">
                                                                Social Work & Community Services
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="{{ route('student-visa') }}">
                                                        Student Visa
                                                    </a>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="{{ route('pte') }}">
                                                        PTE
                                                    </a>
                                                </li>
                                                <li><a href="{{ route('naati') }}">NAATI/ NAATI CCL</a>
                                                </li>
                                                <li><a href="{{ route('professional') }}"> professional year</a>
                                                </li>
                                                {{-- <li><a href="{{ route('coachingdetails') }}">VAT courses</a></li> --}}
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="#">Migration <i
                                                    class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('gsm') }}">GSM</a></li>
                                                <li><a href="{{ route('temporary') }}">Temporary Graduate Visa (Subclass 485)</a></li>
                                                <li><a href="{{ route('family') }}">Family & Partner visa</a></li>
                                                <li><a href="{{ route('employer') }}">Employer sponsorship</a>
                                                </li>
                                                <li><a href="{{ route('business') }}">Business Visa</a></li>
                                                <li><a href="{{ route('holiday') }}">Working Holiday Visa</a></li>
                                                <li><a href="{{ route('tourist') }}">Tourist visa</a></li>
                                                <li><a href="{{ route('protection') }}">Protection Visa</a></li>
                                                <li><a href="{{ route('aat') }}">ART</a></li>
                                            </ul>
                                        </li>
                                        {{-- <li>
                                            <a href="{{ route('coachingdetails') }}">
                                                Resources
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('ptecoaching') }}">PTE preparation</a></li>
                                                <li><a href="{{ route('ieltscoaching') }}">IELTS preparation</a></li>
                                                <li><a href="{{ route('tofelcoaching') }}">TOEFL preparation</a></li>
                                                <!-- <li><a href="{{ route('coachingdetails') }}">PTE preparation</a></li> -->
                                                <!-- <li><a href="{{ route('coachingdetails') }}">PTE preparation</a></li> -->
                                                <!-- <li><a href="{{ route('coachingdetails') }}">PTE preparation</a></li> -->
                                                <li><a href="{{ route('naaticoaching') }}">Naati preparion</a></li>
                                                <li><a href="{{ route('coachingdetails') }}">Articles</a></li>
                                            </ul>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('blogs') }}">Blogs</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('review') }}">Client Review</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="contact-info">
                            <div class="icon">
                                <img src="{{ asset('front/img/call.png') }}" alt="img">
                            </div>
                            <div class="content">
                                {{-- <p>Phone:</p> --}}
                                <h6>
                                    <a href="tel:+61385185858">+61 385185858</a>
                                </h6>
                            </div>
                        </div>
                        <div class="header-button">
                            <a href="{{ route('contact') }}" class="link-btn">
                                <span>Get A Quote</span>
                                <i class="fas fa-chevron-right"></i>

                            </a>
                        </div>
                        {{-- <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a> --}}
                        <div class="header__hamburger d-lg-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="far fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('front/img/logo/logo.png') }}" width="180px" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                {{-- <p class="d-none d-lg-block">
                    Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signiferumque vim te. Ex
                    mea quem munere lobortis. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                </p> --}}
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">1/18 Haughton Rd Oakleigh Vic 3166</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center" style="text-transform: none;">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:admin@qualitymigration.com"><span
                                        class="mailto:admin@qualitymigration.com">admin@qualitymigration.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Monday-friday, 10:00 am - 06:30 pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+61385185858">+61 385185858</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="{{ route('contact') }}" class="theme-btn text-center">
                            <span>Contact Us<i class="fas fa-chevron-right"></i></span>
                        </a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="https://www.instagram.com/qualitymigration_australia/profilecard/?igsh=MWgzbWV1azV6ZzUzaQ=="><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/share/1XwsN6Y2hc/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a>
                        <!-- <a href="#"><i class="fab fa-youtube"></i></a> -->
                        <a href="https://www.linkedin.com/company/quality-migration-australia/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="cursor-inner d-none"></div>
<div class="cursor-outer d-none"></div>
