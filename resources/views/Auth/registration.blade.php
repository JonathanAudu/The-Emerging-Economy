@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header-register mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">REGISTER</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Register</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    {{-- register page  --}}
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">REGISTER</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/register">
                            @csrf

                            <div class="row mb-3">
                                <label for="first_name" class="col-md-4 col-form-label text-md-end">First Name</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text"
                                        class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                        value="{{ old('first_name') }}" required autofocus>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="last_name" class="col-md-4 col-form-label text-md-end">Last Name</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                        class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                        value="{{ old('last_name') }}" required>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">Phone (WhatsApp)</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-end">City</label>
                                <div class="col-md-6">
                                    <select id="city" name="city" class="form-control @error('city') is-invalid @enderror" required>
                                        <option value="">Select City</option>
                                        <option value="Abuja" {{ old('city') == 'Abuja' ? 'selected' : '' }}>Abuja</option>
                                        <option value="Lagos" {{ old('city') == 'Lagos' ? 'selected' : '' }}>Lagos</option>
                                        <option value="Kenya" {{ old('city') == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                                    </select>
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-2 col-form-label text-md-end">Pass Type</label>
                                <div class="col-md-10">
                                    <div class="row g-3">
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card h-100">
                                                <div class="card-header text-center bg-light">
                                                    <strong>Entry Pass</strong>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-unstyled small mb-3">
                                                        <li>a) Free access to conference venue</li>
                                                        <li>b) Free access to all sessions</li>
                                                        <li>c) Post-conference newsletter</li>
                                                        <li>d) Complimentary resource from the Convener</li>
                                                    </ul>
                                                    <div class="text-center mb-2">
                                                        <span class="fw-bold">Fee: ₦0</span>
                                                    </div>
                                                    <div class="form-check text-center">
                                                        <input class="form-check-input" type="radio" name="pass_type" id="passEntry" value="Entry" required {{ old('pass_type') == 'Entry' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="passEntry">Select</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card h-100 border-primary">
                                                <div class="card-header text-center bg-primary text-white">
                                                    <strong>Standard Pass</strong>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-unstyled small mb-3">
                                                        <li>a) Free access to conference venue</li>
                                                        <li>b) Free access to all sessions</li>
                                                        <li>c) Priority sitting</li>
                                                        <li>d) 1 Complimentary drink</li>
                                                        <li>e) Guided networking with speakers and special guests</li>
                                                        <li>f) Conference board mention</li>
                                                        <li>g) Conference lunch session</li>
                                                        <li>h) Complimentary resource from the Convener</li>
                                                    </ul>
                                                    <div class="text-center mb-1">
                                                        <span class="badge bg-success">Early Bird: 20% off</span>
                                                    </div>
                                                    <div class="text-center mb-2">
                                                        <span class="fw-bold">Fee: ₦25,000</span>
                                                    </div>
                                                    <div class="form-check text-center">
                                                        <input class="form-check-input" type="radio" name="pass_type" id="passStandard" value="Standard" required {{ old('pass_type') == 'Standard' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="passStandard">Select</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card h-100 border-warning">
                                                <div class="card-header text-center bg-warning">
                                                    <strong>VIP Pass</strong>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-unstyled small mb-3">
                                                        <li>a) Free access to conference venue</li>
                                                        <li>b) Top priority sitting</li>
                                                        <li>c) Conference souvenirs</li>
                                                        <li>d) Complimentary professional headshot</li>
                                                        <li>e) Social media mention (video + posts)</li>
                                                        <li>f) Priority networking with speakers and special guests</li>
                                                        <li>g) Post-conference celebratory dinner</li>
                                                        <li>h) Conference lunch session</li>
                                                        <li>i) 2 Complimentary drinks</li>
                                                        <li>j) Access to the Green Room/Conference Lounge</li>
                                                    </ul>
                                                    <div class="text-center mb-1">
                                                        <span class="badge bg-success">Early Bird: 20% off</span>
                                                    </div>
                                                    <div class="text-center mb-2">
                                                        <span class="fw-bold">Fee: ₦50,000</span>
                                                    </div>
                                                    <div class="form-check text-center">
                                                        <input class="form-check-input" type="radio" name="pass_type" id="passVIP" value="VIP" required {{ old('pass_type') == 'VIP' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="passVIP">Select</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('pass_type')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="registerBtn">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="paymentModalLabel">Payment Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Please make your payment to the following account:</p>
            <ul>
              <li><strong>Account Name:</strong> Placeholder Name</li>
              <li><strong>Account Number:</strong> 0000000000</li>
              <li><strong>Bank Name:</strong> Placeholder Bank</li>
            </ul>
            <p>After payment, click the button below to complete your registration.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="confirmPaymentBtn">I have sent</button>
          </div>
        </div>
      </div>
    </div>

    <!-- WhatsApp Modal -->
    <div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="whatsappModalLabel">Join WhatsApp Group</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Thank you for registering! Please join our WhatsApp group for further updates:</p>
            <a href="https://chat.whatsapp.com/placeholder" target="_blank" class="btn btn-success">Join WhatsApp Group</a>
          </div>
        </div>
      </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
        const whatsappModal = new bootstrap.Modal(document.getElementById('whatsappModal'));
        const confirmPaymentBtn = document.getElementById('confirmPaymentBtn');
        let formData = null;

        form.addEventListener('submit', function(e) {
            // Get the selected pass type from radio buttons
            const selectedPass = document.querySelector('input[name="pass_type"]:checked');

            if(selectedPass && (selectedPass.value === 'Standard' || selectedPass.value === 'VIP')) {
                e.preventDefault();
                // Store form data
                formData = new FormData(form);
                paymentModal.show();
            }
        });

        confirmPaymentBtn.addEventListener('click', function() {
            if(formData) {
                // Show loading state
                confirmPaymentBtn.disabled = true;
                confirmPaymentBtn.textContent = 'Processing...';

                // Submit the form via AJAX
                fetch('/register', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success) {
                        paymentModal.hide();
                        whatsappModal.show();
                    } else {
                        alert('Registration failed. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error completing your registration. Please try again.');
                })
                .finally(() => {
                    // Reset button state
                    confirmPaymentBtn.disabled = false;
                    confirmPaymentBtn.textContent = 'I have sent';
                });
            }
        });
    });
    </script>
    {{-- end register page --}}
@endsection

@push('styles')
<style>
    /* Make registration card and pass options fill the screen on desktop */
    .container.py-5 > .row > .col-12 > .card {
        width: 100%;
        max-width: 100vw;
    }
    .row.g-3 {
        margin-left: 0;
        margin-right: 0;
    }
    .row.g-3 > [class^='col-'] {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }
    .card .card-body ul li {
        white-space: nowrap;
    }
    @media (max-width: 991.98px) {
        .row.g-3 > [class^='col-'] {
            min-width: 100% !important;
        }
    }
</style>
@endpush
