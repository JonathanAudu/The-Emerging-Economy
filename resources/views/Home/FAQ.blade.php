@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header-faq mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">FAQs</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">About Us</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#"></a>The Emerging Economy</li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Frequently Asked Questions</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- FAQ Section Start -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="mb-5">Some Frequestly Asked Questions.</h1>
            </div>
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                <strong>What is The Emerging Economy?</strong>
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The Emerging Economy is an initiative aimed at bridging the gap between emerging economies
                                and more developed countries by fostering mutual growth, innovation, and stability.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                <strong>How does The Emerging Economy support undergraduates?</strong>
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer start-up grants and economic seminars specifically designed for African
                                undergraduates to empower them with the knowledge and resources needed for socioeconomic
                                development.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse2">
                                <strong>What do I need to apply for a grant with your organization?</strong>
                            </button>
                        </h2>
                        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You are required to be an active member of The Emerging Economy. You are also required to
                                have a business idea which will be evaluated by our team.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                <strong>What are the main activities of The Emerging Economy?</strong>
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our main activities include hosting annual conferences focusing on business,
                                entrepreneurship, and corporate finance, as well as providing support and resources for
                                innovation execution, economic leadership, and human capital development.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                <strong>Can I get involved with The Emerging Economy?</strong>
                            </button>
                        </h2>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can get involved by attending our events, participating in our programs, volunteering,
                                or partnering with us to help drive our mission forward. YOu can use our <a href="">Contact US Form</a> for more
                                information on how to join our efforts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Section End -->
@endsection
