<footer class="footer-section footer-bg">
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                             <a href="{{ url('/') }}">
                                 <img src="{{ asset("front/img/logo/logo.png")}}" width="200px" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                We believe it has the power to do <br>
                                amazing things.
                            </p>    
                            <a href="mailto:admin@qualitymigration.com" class="link">admin@qualitymigration.com</a>
                            {{-- <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 ps-lg-5 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Education</h5>
                        </div>
                        <ul class="list-items">
                            <li>
                               <a href="{{ route('student-visa') }}">
                                    Student Visa
                                </a>
                            </li>
                            <li>
                                  <a href="{{ route('pte') }}">
                                    PTE
                                </a>
                            </li>
                            <li>
                               <a href="{{ route('naati') }}">
                                    Naati
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('professional') }}">
                                    Professional Visa
                                </a>
                            </li>
                            <li>
                               <a href="{{ route('aat') }}">
                                    AAT
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 ps-lg-4 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Migration</h5>
                        </div>
                        <ul class="list-items">
                            <li>
                                <a href="{{ route('gsm') }}">
                                    GSM
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('family') }}">
                                    Partner Visa
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('employer') }}">
                                    Employer Visa
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('tourist') }}">
                                    Tourist Visa
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('holiday') }}">
                                    Working Holiday Visa
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Address:</h5>
                        </div>
                        <div class="footer-address-text">
                            <p>
                               1/18 Haughton Rd Oakleigh VIC-3166
                            </p>
                            <h5>Hours:</h5>
                            <p>
                                9.30am – 6.30pm <br>
                                Monday to Friday
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-3 ps-xl-5 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Instagram</h5>
                        </div>
                        <div class="footer-gallery">
                            <div class="gallery-wrap">
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <a href="front/img/footer/gallery-1.jpg" class="img-popup">
                                             <img src="{{ asset("front/img/all-image/footer/footer-widget-gallery-img-1.jpg")}}" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="front/img/footer/gallery-2.jpg" class="img-popup">
                                             <img src="{{ asset("front/img/all-image/footer/footer-widget-gallery-img-2.jpg")}}" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="front/img/footer/gallery-3.jpg" class="img-popup">
                                             <img src="{{ asset("front/img/all-image/footer/footer-widget-gallery-img-3.jpg")}}" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <a href="front/img/footer/gallery-4.jpg" class="img-popup">
                                             <img src="{{ asset("front/img/all-image/footer/footer-widget-gallery-img-4.jpg")}}" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="front/img/footer/gallery-5.jpg" class="img-popup">
                                             <img src="{{ asset("front/img/all-image/footer/footer-widget-gallery-img-5.jpg")}}" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="front/img/footer/gallery-6.jpg" class="img-popup">
                                             <img src="{{ asset("front/img/all-image/footer/footer-widget-gallery-img-6.jpg")}}" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                    Copyright © <script>document.write(new Date().getFullYear());</script> 
                    <a href="https://picode.in/">Picode</a>. All Rights Reserved.
                </p>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <li>
                       <a href="{{ route('about') }}">
                            Company
                        </a>
                    </li>
                    <li>
                       <a href="{{ route('contact') }}">
                            Support
                        </a>
                    </li>
                    {{-- <li>
                       <a href="{{ route('contact') }}">
                            Privacy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}">
                            Faqs
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</footer>