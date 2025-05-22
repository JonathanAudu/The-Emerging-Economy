@extends('layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/240_F_1111621678_NWjaDfm9h7M0UXPP9nEYlUxdv8Csqu3N.jpg') }}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5 pt-md-3 pt-sm-2">
                                    <h1 class="text-white mb-3 animated slideInDown" style="font-family: 'Bodoni Moda SC', serif;">
                                      Powering the Next Wave of Africa’s Economic Prosperity
                                    </h1>
                                    <p class="fs-5 text-white-60 mb-4 animated slideInDown" style="font-family: 'Rubik Wet Paint SC', serif; font-style: italic;">
                                      Through innovative entrepreneurship
                                    </p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown mb-3 mb-md-0" href="/register">
                                      Register for 2025
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
            <div class="row">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden" style="min-height: 400px">
                        <img
                          src="{{ asset('assets/img/emergingeconomyimg.jpeg') }}"
                          alt="Emerging Economy"
                          class="img-fluid w-100 h-100 object-fit-cover"
                          style="object-fit: cover;"
                        />
                      </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                            About Us
                        </div>

                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                               We are a community of bold, forward-thinking entrepreneurs dedicated to unlocking Africa’s next wave of economic prosperity. We believe innovation is the key and we're committed to nurturing groundbreaking ideas, empowering young leaders, and building platforms where entrepreneurship thrives.

                                From hosting dynamic annual conferences across major cities connecting aspiring changemakers with seasoned industry leaders to offering grants that support student ventures and early stage businesses, we are creating a collaborative ecosystem where big ideas flourish and real impact is made.

                                We live and breathe business, economic growth, and entrepreneurship because we know that innovative entrepreneurship is the key to unlocking the next wave of Africa’s prosperity.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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
                        <h4 class="mb-3">Smart Money Student</h4>
                        <p class="mb-4">
                            To instill smart money mindset In the younger generation and provide financial awareness and opportunities, insights, skills so as to curb the high rising tendency of internet fraud and scams amongst them and empowering them unto profitable enterprises.
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
                        <h4 class="mb-3">Annual Conference</h4>
                        <p class="mb-4">
                            The Emerging Economy annual summit is where it all happens. Brainstorm, analyze, innovate on the common opportunities for socioeconomic development, the unique challenges and propel a way forward.
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
                        <h4 class="mb-3">Emerging Economy</h4>
                        <p class="mb-4">
                            Bridging the gap between emerging economies and more developed countries to improve the overall global economy.Improving the overall global economy through national contribution and development.
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
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/dani4.JPG') }}" alt=""
                                style="object-fit: cover;" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>DANIELLA OKEREKE</h5>
                            <p class="text-primary">Executive Director/Convener</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.facebook.com/okereke.daniella"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://x.com/DaniellaOkereke"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/daniella_okereke"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/Ndubisi_kelechi.JPG') }}" alt=""
                                style="object-fit: cover;" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>NDUBUSI KELECHI BLESSED</h5>
                            <p class="text-primary">Secretary</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.facebook.com/Ndubuisi.Kelechi.Blessed"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.x.com/Adaa_Samm"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/kel_samm"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/Chima_obike.jpg') }}" alt=""
                                style="object-fit: cover;" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>CHIMA OBIKE</h5>
                            <p class="text-primary">Project Manager</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.facebook.com/obikechima"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.x.com/obikechima"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/obikechima"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/Jonathan_audu.JPG') }}" alt=""
                                style="object-fit: cover;" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>JONATHAN AUDU</h5>
                            <p class="text-primary">Tech/IT Support</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.facebook.com/jonathan.audu"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://x.com/Jon_D_Audu"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/jon_audu/"><i class="fab fa-instagram"></i></a>
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
