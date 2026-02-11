@extends('layouts.app')

@section('content')

<!-- Page Header -->
<div class="container-fluid page-header-gallery mb-5 wow fadeIn">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Gallery</h1>
        <p class="text-white">Explore moments from our events</p>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">

        <div class="row g-4" id="galleryGrid"></div>

        <!-- Load More -->
        <div class="text-center mt-5">
            <button id="loadMoreBtn" class="btn btn-outline-primary px-5 py-2">
                Load More Photos
            </button>
        </div>

        <!-- Loader -->
        <div class="text-center mt-3 d-none" id="loader">
            <span class="spinner-border text-primary"></span>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script>
let page = 1;
let loading = false;

function loadImages() {
    if (loading) return;
    loading = true;

    document.getElementById('loader').classList.remove('d-none');

    fetch(`/gallery/load?page=${page}`)
        .then(res => res.json())
        .then(data => {
            const grid = document.getElementById('galleryGrid');

            data.images.forEach(src => {
                grid.innerHTML += `
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item overflow-hidden rounded shadow-sm">
                            <img src="${src}" class="img-fluid w-100 gallery-img">
                        </div>
                    </div>
                `;
            });

            document.getElementById('loader').classList.add('d-none');

            if (!data.hasMore) {
                document.getElementById('loadMoreBtn').innerText = "No more images";
                document.getElementById('loadMoreBtn').disabled = true;
            }

            page++;
            loading = false;
        });
}

// Initial load
loadImages();

// Button click
document.getElementById('loadMoreBtn').addEventListener('click', loadImages);

// Auto-load on scroll
window.addEventListener('scroll', () => {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 200) {
        loadImages();
    }
});
</script>
@endpush
