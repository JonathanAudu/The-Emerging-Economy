@extends('layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/emerging-economy-team.JPG') }}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">
                                        Let's Change The World With Humanity
                                    </h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">
                                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed
                                        stet lorem sit clita duo justo erat amet
                                    </p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Register Now
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100"
                            src="{{ asset('assets/img/66601D96-B018-46AE-B8A3-834361FBC2EA_1695001534.jpeg') }}" alt=""
                            style="object-fit: cover" />
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                            About Us
                        </div>
                        <h1 class="display-6 mb-5">
                            We Help People In Need Around The World
                        </h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed
                                stet lorem sit clita duo justo erat amet
                            </p>
                            <span class="text-primary">Jhon Doe, Founder</span>
                        </div>
                        <p class="mb-5">
                            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                            sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <a class="btn btn-primary py-2 px-3 me-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3" href="">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Causes Start -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    Feature Causes
                </div>
                <h1 class="display-6 mb-5">
                    Every Child Deserves The Opportunity To Learn
                </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Education</small>
                            </div>
                            <h5 class="mb-3">Education For African Children</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid"
                                src="{{ asset('assets/img/emerging-economy-student.JPG') }}"
                                alt="" />
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div
                        class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Pure Water</small>
                            </div>
                            <h5 class="mb-3">Ensure Pure Drinking Water</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('assets/img/emerging-economy-students.JPG') }}"
                                alt="" />
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>Healthy Life</small>
                            </div>
                            <h5 class="mb-3">Ensure Medical Treatment</h5>
                            <p>
                                Tempor erat elitr rebum at clita dolor diam ipsum sit diam
                                amet diam et eos
                            </p>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="{{ asset('assets/img/IMG-20230918-WA0003_1695161220.jpg') }}"
                                alt="" />
                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="">
                                    Read More
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    What We Do
                </div>
                <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/icon-1.png') }}" alt="" />
                        <h4 class="mb-3">Child Education</h4>
                        <p class="mb-4">
                            Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum
                            diam justo sed vero dolor duo.
                        </p>
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/icon-2.png') }}" alt="" />
                        <h4 class="mb-3">Medical Treatment</h4>
                        <p class="mb-4">
                            Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum
                            diam justo sed vero dolor duo.
                        </p>
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{ asset('assets/img/icon-3.png') }}" alt="" />
                        <h4 class="mb-3">Pure Drinking Water</h4>
                        <p class="mb-4">
                            Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum
                            diam justo sed vero dolor duo.
                        </p>
                        <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    Team Members
                </div>
                <h1 class="display-6 mb-5">Let's Meet With Our Ordinary Soldiers</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/dani1.jpg') }}" alt=""
                                style="object-fit: cover;" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/dani3.jpg') }}" alt=""
                                style="object-fit: cover;" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/dani4.JPG') }}" alt=""
                                style="object-fit: cover;" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/pic1.jpg') }}" alt=""
                                style="object-fit: cover;" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    Testimonial
                </div>
                <h1 class="display-6 mb-5">
                    Trusted By Thousands Of People And Nonprofits
                </h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/testimonial1.jpg') }}" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Hi! I am Chizaram Ogbonna an undergraduate at the Nnamdi Azikiwe University.
                            The Smart Money Student community has afforded me the opportunity to meet lots of like minds,
                            students like me, who believe so much in their potentials and are so intentional in bringing it
                            into light, and this has stirred up a high level of growth mindset in me. It has also afforded
                            me a networking leveraging
                            Also the conferences, especially the just concluded student edition of emerging economy tagged
                            So You Think You are an Entrepreneur? was a huge one for me, it as really an eye opener and now,
                            I understand what it actually means to be an entrepreneur even as someone offering services.
                            And yes! To top it all, I was one of the beneficiaries of the grant award of $100 for
                            undergraduates and it has helped me boost my business as a Virtual Assistant.
                            Thank you for impacting my life greatly.
                        </p>
                        <h5 class="mb-1">Chizaram Ogbonna</h5>
                        <span class="fst-italic">Undergraduate</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/testimonial2.jpg') }}" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            I'm Nnadi Ifeanyi, a medical student and a member of the Smart Money Student community.
                            What happened in the Smart money student conference (Emerging Economy 2.0) went beyond the
                            conference. It redirected the entire course of my life, taught me to dream big, play big, demand
                            the most out of life... Knowing that life would willing give.
                            Being in the community has opened my eyes to a whole lot of opportunities out there. Looking
                            back some 9 months ago when we had that conference, I'd say I'm already a better version of
                            myself...
                            And striving to become even better, and world class at what I do.
                            I was also a recipient of the undergraduate grant award of $100 on the 7th of November 2022.
                        </p>
                        <h5 class="mb-1">Nnadi Ifeanyi</h5>
                        <span class="fst-italic">Medical Student</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('assets/img/testimonial1.jpg') }}" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Hi! I am Chizaram Ogbonna an undergraduate at the Nnamdi Azikiwe University.
                            The Smart Money Student community has afforded me the opportunity to meet lots of like minds,
                            students like me, who believe so much in their potentials and are so intentional in bringing it
                            into light, and this has stirred up a high level of growth mindset in me. It has also afforded
                            me a networking leveraging
                            Also the conferences, especially the just concluded student edition of emerging economy tagged
                            So You Think You are an Entrepreneur? was a huge one for me, it as really an eye opener and now,
                            I understand what it actually means to be an entrepreneur even as someone offering services.
                            And yes! To top it all, I was one of the beneficiaries of the grant award of $100 for
                            undergraduates and it has helped me boost my business as a Virtual Assistant.
                            Thank you for impacting my life greatly.
                        </p>
                        <h5 class="mb-1">Chizaram Ogbonna</h5>
                        <span class="fst-italic">Undergraduate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
