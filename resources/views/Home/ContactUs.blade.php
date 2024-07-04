@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header-contact-us mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Contact Us</div>
                    <h1 class="display-6 mb-5">For General Enquiries, Please Contact Us</h1>
                    <p class="mb-4">
                        At The Emerging Economy, we are always eager to connect with individuals, organizations, and
                        partners who share our vision for a better world. Whether you have questions, suggestions, or need
                        more information about our initiatives, we're here to help. Reach out to us through any of the
                        channels below, and we’ll get back to you as soon as possible.
                    </p>
                    <hr>
                    <br>
                    <p>
                        For general questions about our programs, events, or how you can get involved, please contact us at:
                    </p>
                    <p>Email: info@theemergingeconomy.org<br>
                        Phone: +123-456-7890</p>

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
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3940.3814505000237!2d7.461753074556938!3d9.028924288991094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1719779066263!5m2!1sen!2sng"
                            width="600" height="550" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
<style>
    .btn:hover {
        color: #fff !important;
        background-color: #ff6f0f !important;
    }
</style>