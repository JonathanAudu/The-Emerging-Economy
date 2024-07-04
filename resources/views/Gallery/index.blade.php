@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header-gallery mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Gallery</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">About Us</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="/">The Emerging Economy</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Events & Gallery</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                Galleries
            </div>
            <h1 class="display-6 mb-5">
                Explore our event galleries
            </h1>
        </div>
        <div class="row g-4 justify-content-center">
            @php
                $events = [
                    ['year' => '2023', 'folder' => '2023'],
                    ['year' => '2024', 'folder' => '2024'],
                    ['year' => '2025', 'folder' => '2025'],
                ];
            @endphp
            @foreach ($events as $event)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>{{ $event['year'] }}</small>
                        </div>
                        <h5 class="mb-3">{{ $event['year'] }} Events</h5>
                        <p>
                            Click to view the gallery of events held in {{ $event['year'] }}.
                        </p>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{ asset('assets/img/' . $event['folder'] . '/cover/cover.jpg') }}" alt="{{ $event['year'] }} Events" />
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{ url('/gallery/' . $event['year']) }}">
                                View Gallery
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
