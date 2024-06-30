@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">DANIELLA OKEREKE</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white">
                        <h4>
                            <q style="color: #ffffffca; font-style: italic;">In you, Lord, I have taken refuge; let me never
                                be put to shame;<br> deliver me in your righteousness. Turn your ear to me, come quickly to
                                my rescue</q>
                        </h4>
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
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About The Convener
                        </div>
                        <h1 class="display-6 mb-5"><q>The best time to start is now</q></h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Hey! I'm Daniella. I’m a lover of good food and good books. (Lol, that rhymed!).
                                <br>
                                From a young
                                age, I've been enthralled by money, finance, and the overall economy. I have a burning
                                desire to provide solutions to real problems, especially in the economic sector.
                                <br>
                                Yes, I began my first business at 8 years old (I also won a Japanese haiku competition
                                around this age). My business decrypted a real problem in my environment at the time. I
                                don't know where I got the guts. But boy, I was on a mission, providing solutions.
                                <span class="more-content">
                                    <br>
                                    Though a physiotherapist by training, I'm in every sense of the word an economist and
                                    educator by calling. Fast forward to years later, I'm still propelled with the same
                                    burning desire to solve problems, only with greater intensity and fierceness.
                                    <br>
                                    The Emerging Economy was birthed in 2020 amid the coronavirus pandemic and has impacted
                                    hundreds of people, especially undergraduates in my home country, Nigeria. (I love
                                    Nigeria.)
                                    <br>
                                    Burdened by the visceral economic hardship, the ever-widening gap between the rich and
                                    poor, especially in emerging economies, and dreams buried due to poor access to start-up
                                    funding, The Emerging Economy was born to provide answers. We partner with other
                                    stakeholders already doing tremendous work in the economic sector to change the
                                    narrative—one step at a time, one person at a time, one region at a time—until the
                                    entire society is enlightened, recast, and secure.
                                    <br>
                                    Though there are grave, peculiar challenges faced by citizens of emerging economies,
                                    unique business terrains that require the precision of a surgeon or the ruggedness of a
                                    bulldozer, there are also unique opportunities, untapped resources, and enormous
                                    possibilities for economic growth and sustainable development. Rather than focus
                                    squarely on the challenges, we must look the other way long enough into the realm of
                                    possibilities, harness, modify, and enthrone them.
                                    <br>
                                    In so doing, we bring to the spotlight the unquantifiable prospects for sustainable
                                    socio-economic growth and development in emerging economies around the globe, especially
                                    those of African descent.
                                    <br><br>
                                    That time is now!
                                </span>
                            </p>
                            <span class="read-more-btn" onclick="toggleReadMore()">Read More...</span>
                            <hr>
                            <span class="text-primary">Daniella Okereke, Founder</span>
                        </div>

                        <div class="team-text bg-light text-center">
                            <div class="team-social text-center"
                                style="display: flex; justify-content: center; gap: 70px; padding: 10px;">
                                <a class="btn btn-square" href=""
                                    style="text-decoration: none; color: inherit; display: inline-block; padding: 10px; transition: all 0.3s;">
                                    <i class="fab fa-facebook-f" style="margin-right: 5px;"></i>
                                </a>
                                <a class="btn btn-square" href=""
                                    style="text-decoration: none; color: inherit; display: inline-block; padding: 10px; transition: all 0.3s;">
                                    <i class="fab fa-twitter" style="margin-right: 5px;"></i>
                                </a>
                                <a class="btn btn-square" href=""
                                    style="text-decoration: none; color: inherit; display: inline-block; padding: 10px; transition: all 0.3s;">
                                    <i class="fab fa-instagram" style="margin-right: 5px;"></i>
                                </a>
                                <a class="btn btn-square" href=""
                                    style="text-decoration: none; color: inherit; display: inline-block; padding: 10px; transition: all 0.3s;">
                                    <i class="fab fa-linkedin-in" style="margin-right: 5px;"></i>
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
