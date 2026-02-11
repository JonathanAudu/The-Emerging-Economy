@extends('layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/240_F_1111621678_NWjaDfm9h7M0UXPP9nEYlUxdv8Csqu3N.jpg') }}"
                        alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5 pt-md-3 pt-sm-2">
                                    <h1 class="text-white mb-3 animated slideInDown"
                                        style="font-family: 'Bodoni Moda SC', serif;">
                                        Building Africa’s Next Wave of Prosperity, Starting with Young People
                                    </h1>
                                    {{-- <p class="fs-5 text-white-60 mb-4 animated slideInDown"
                                        style="font-family: 'Rubik Wet Paint SC', serif; font-style: italic;">

                                    </p> --}}
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown mb-3 mb-md-0" href="/register">
                                        Register
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
                        <img src="{{ asset('assets/img/emergingeconomyimg.jpeg') }}" alt="Emerging Economy"
                            class="img-fluid w-100 h-100 object-fit-cover" style="object-fit: cover;" />
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                            About Us
                        </div>

                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                The Emerging Economy is a socioeconomic development platform focused on powering Africa’s
                                next wave of economic prosperity by positioning young people at the centre of value
                                creation.
                                We work through tertiary institutions and early enterprise pathways, supporting practical
                                skills development, entrepreneurship, and collaboration that strengthen local economies and
                                prepare young people to participate meaningfully in a changing economic landscape.
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
                        <h4 class="mb-3">Socioeconomic Development for African Undergraduates (SEDA)</h4>
                        <p class="mb-4">
                            SEDA is the primary execution arm of The Emerging Economy.
                            It supports undergraduates and young entrepreneurs with the skills, mindset, mentorship, and
                            exposure needed to build sustainable ventures and participate actively in economic life. By
                            engaging young people early, SEDA strengthens enterprise formation and contributes to long-term
                            economic continuity.
                            SEDA is where strategy translates into action.
                        </p>
                        <a class="btn btn-outline-primary px-3" href="/seda">
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
                        <h4 class="mb-3">Emerging Economy Annual Conference</h4>
                        <p class="mb-4">
                            The Emerging Economy Annual Conference is a Nigeria-based convening focused on how Africa’s next
                            phase of economic growth can be built, beginning with young people, enterprise, and practical
                            economic participation.
                            It brings together young entrepreneurs, builders, educators, policymakers, ecosystem leaders,
                            and partners in Nigeria to explore how youth-centred enterprise and innovation can drive
                            sustainable prosperity within local economies, with relevance for the wider African context.
                        </p>
                        <a class="btn btn-outline-primary px-3" href="/conference">
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
                            The Emerging Economy is a socioeconomic development platform focused on powering Africa’s next
                            wave of economic prosperity by positioning young people at the centre of value creation.
                            We work through tertiary institutions and early enterprise pathways, supporting practical skills
                            development, entrepreneurship, and collaboration that strengthen local economies and prepare
                            young people to participate meaningfully in a changing economic landscape.
                        </p>
                        <a class="btn btn-outline-primary px-3" href="/about-the-convener">
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
                <h1 class="display-6 mb-5">Let's Meet With Our Team Members</h1>
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
                                <a class="btn btn-square" href="https://www.facebook.com/okereke.daniella"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://x.com/DaniellaOkereke"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/daniella_okereke"><i
                                        class="fab fa-instagram"></i></a>
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
                                <a class="btn btn-square" href="https://www.facebook.com/Ndubuisi.Kelechi.Blessed"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.x.com/Adaa_Samm"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/kel_samm"><i
                                        class="fab fa-instagram"></i></a>
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
                                <a class="btn btn-square" href="https://www.facebook.com/obikechima"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.x.com/obikechima"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/obikechima"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/Jonathan.jpg') }}" alt=""
                                style="object-fit: cover;" />
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>JONATHAN AUDU</h5>
                            <p class="text-primary">Tech/IT Support</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="https://www.facebook.com/jonathan.audu"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://x.com/Jon_D_Audu"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/jon_audu/"><i
                                        class="fab fa-instagram"></i></a>
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