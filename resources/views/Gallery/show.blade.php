@extends('layouts.app')

@section('content')
    <style>
        .gallery-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
    </style>
    <div class="container-fluid page-header-gallery mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">{{ $year }} Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="/gallery">Gallery</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{ $year }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            @if (empty($images))
                <div class="text-center mx-auto">
                    <h1 class="mb-4">Coming Soon</h1>
                    <p class="mb-4">We are currently working on adding images for the {{ $year }} events. Stay tuned!</p>
                    <a class="btn btn-outline-primary py-2 px-3" href="/gallery">
                        Go Back To Gallery
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            @else
                <div class="row g-4 justify-content-center">
                    @foreach ($images as $image)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div
                                class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                                <div class="position-relative mt-auto">
                                    <img class="img-fluid gallery-image" src="{{ asset($image) }}"
                                        alt="Image for {{ $year }} Event" />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
