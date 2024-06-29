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
                        <h1 class="display-6 mb-5">We Help People In Need Around The World</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem
                                sit clita duo justo erat amet</p>
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
</style>
