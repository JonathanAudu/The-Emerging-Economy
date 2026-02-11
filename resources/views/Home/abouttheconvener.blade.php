@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">DANIELLA OKEREKE</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white">
                        <!-- <h4>
                                <q style="color: #ffffffca; font-style: italic;">In you, Lord, I have taken refuge; let me never
                                    be put to shame;<br> deliver me in your righteousness. Turn your ear to me, come quickly to
                                    my rescue</q>
                            </h4> -->
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 645px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/dani1.jpg') }}" alt=""
                            style="object-fit: cover;" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Meet the Founder
                        </div>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">

                            <p class="text-dark mb-3">
                                Daniella Okereke Nneamaka is the Founder of <strong>The Emerging Economy</strong>, a
                                platform focused on
                                powering Africa’s next wave of economic prosperity by centring young people in value
                                creation,
                                enterprise, and long-term economic sustainability.
                            </p>

                            <p class="text-dark mb-3">
                                Her work sits at the intersection of youth development, entrepreneurship, economic
                                participation,
                                and emerging technologies. She is particularly interested in how early exposure to
                                enterprise,
                                combined with data-informed decision-making and evolving tools such as artificial
                                intelligence,
                                can reshape how young people build, collaborate, and contribute economically across Africa.
                            </p>

                            <p class="text-dark mb-3">
                                Daniella’s thinking is shaped by both practical experience and global exposure. She has
                                built and
                                experimented with early-stage ventures, gaining first-hand insight into the importance of
                                structure,
                                scale, and sustainability in business. These experiences have informed her focus on
                                system-building
                                over short-term success narratives, and on preparing young people to participate
                                meaningfully in
                                economic life from an early stage.
                            </p>

                            <p class="text-dark mb-3">
                                She is currently pursuing the <strong>MicroMasters in Data, Economics, and Design of Policy
                                    (DEDP)</strong>
                                at the Massachusetts Institute of Technology, deepening her understanding of how data,
                                policy design,
                                and economic systems interact to shape development outcomes at scale. She is also an active
                                member of
                                the <strong>Global Shapers Community</strong>, an initiative of the World Economic Forum,
                                where she engages
                                with other young leaders on questions of economic development, innovation, and inclusive
                                growth.
                            </p>

                            <p class="text-dark mb-4">
                                Through The Emerging Economy and its flagship initiative, <strong>SEDA (Socioeconomic
                                    Development for
                                    African Undergraduates)</strong>, Daniella is focused on building pathways that move
                                young people from
                                education into sustained economic participation. Her approach prioritises structure over
                                hype,
                                learning over visibility, and long-term economic resilience over speed.
                            </p>

                            <p class="text-dark mb-4">
                                She believes Africa’s greatest advantage lies not only in its youthful population, but in
                                how
                                deliberately that population is equipped to build, adapt, and lead within a rapidly changing
                                global economy.
                            </p>

                            <hr>

                            <span class="text-primary fw-semibold">
                                Daniella Okereke, Founder
                            </span>

                        </div>

                        <div class="team-text bg-light text-center">
                            <div class="team-social text-center"
                                style="display: flex; justify-content: center; gap: 70px; padding: 10px;">
                                <a class="btn btn-square" href="https://www.facebook.com/okereke.daniella"
                                    style="text-decoration: none; color: inherit; display: inline-block; padding: 10px; transition: all 0.3s;">
                                    <i class="fab fa-facebook-f" style="margin-right: 5px;"></i>
                                </a>
                                <a class="btn btn-square" href="https://x.com/DaniellaOkereke"
                                    style="text-decoration: none; color: inherit; display: inline-block; padding: 10px; transition: all 0.3s;">
                                    <i class="fab fa-twitter" style="margin-right: 5px;"></i>
                                </a>
                                <a class="btn btn-square" href="https://www.instagram.com/daniella_okereke"
                                    style="text-decoration: none; color: inherit; display: inline-block; padding: 10px; transition: all 0.3s;">
                                    <i class="fab fa-instagram" style="margin-right: 5px;"></i>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
@endsection

<style>
    .btn:hover {
        color: #fff !important;
        background-color: #ff6f0f !important;
    }

    .more-content {
        display: none;
    }

    .read-more-btn {
        color: #007bff;
        cursor: pointer;
    }
</style>
<script>
    function toggleReadMore() {
        const moreContent = document.querySelector('.more-content');
        const readMoreBtn = document.querySelector('.read-more-btn');
        if (moreContent.style.display === 'none') {
            moreContent.style.display = 'inline';
            readMoreBtn.textContent = 'Read Less...';
        } else {
            moreContent.style.display = 'none';
            readMoreBtn.textContent = 'Read More...';
        }
    }
</script>