<!doctype html>
<html lang="zxx" class="dark">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="pxdraft">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="keywords" content="Flower Farm">
    <meta name="description" content="Flower Farm">
    <!-- title -->
    <title>Flower Farm</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://www.pxdraft.com/wrap/mombo/assets/img/favicon.ico"><!-- CSS Template -->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Skippy & Prload -->
    <!-- skippy -->
    <a id="skippy" class="skippy visually-hidden-focusable overflow-hidden" href="#content">
        <div class="container">
            <span class="u-skiplink-text">Skip to main content</span>
        </div>
    </a>
    <!-- End skippy -->
    <!-- Preload -->
    <div id="loading" class="loading-preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <div class="wrapper">
        <header class="main-header main-header-01 headroom navbar-light fixed-top">
            <nav class="navbar navbar-expand-lg">

                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand header-navbar-brand" style="width:300px" href="/">
                        <img class="logo-dark" src="{{ asset('assets/images/svg/logo-no-background.svg') }}" title="" alt="">
                        <img class="logo-light" src="{{ asset('assets/images/svg/logo-white.svg') }}" title="" alt="">
                    </a>
                    <!-- Logo -->
                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="toggler-icon"></span></button>
                    <!-- End Mobile Toggle -->

                    <div class="nav flex-column flex-lg-row d-none d-lg-flex">
                        <ul class="navbar-nav ms-auto align-items-center">
                            <li class="nav-item"><a href="/flowers" class="mb-0 ms-2 text-nowrap">Flowers</a></li>
                            <li class="nav-item"><a href="/login" class="btn btn-sm btn-primary mb-0 ms-2 text-nowrap">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header><!-- End Header -->
        <!-- End Header -->
        <!-- Main -->
        <main>
            <!-- Section -->
            <section class="section pt-2 pb-0">
                <div class="container">
                    <div class="row justify-content-center align-items-center pt-8">
                        <div class="col-lg-8">
                            <div class="col-12 col-lg-12 text-center wow fadeInUp" data-wow-duration="0.5s">
                                <h1 class="display-4 lh-1 fw-800 mb-4">Find a flower you want.</h1>
                                <div class="w-lg-90 w-xl-75 mx-auto">
                                    <p class="lead">Search for flowers and their origin. We update our database every day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-11 pt-2 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.05s">
                                <form class="d-flex flex-row mb-2 p-1 bg-white input-group shadow-input shadow-lg-hover rounded-3 active" action="{{ route('search-flower') }}" method="POST" >
                                    @csrf
                                    <input type="text" name="search" id="search" class="form-control form-control-lg rounded-3 border-0 me-4" placeholder="Flower Name">
                                    <button class="btn btn-primary rounded-3 flex-shrink-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 pt-5 wow fadeInUp rounded-3" data-wow-duration="0.5s" data-wow-delay="0.1s">
                            <img class="rounded-3" src="{{ asset('assets/images/home-1.png') }}" title="" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->

            <!-- Section -->
            <section class="section bg-gray-100">
                <div class="container">
                    <div class="row justify-content-center section-heading wow fadeInUp" data-wow-duration="0.5s">
                        <div class="col-lg-8 text-center">
                            <h3 class="h1 mb-0">Top Flowers</h3>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($flowers as $flower)
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="hover-top card shadow-only-hover">
                                <div style="">
                                    <img class="card-img-top" src="{{ asset('images/' . $flower->image_name) }}" title="" alt="">
                                </div>

                                <div class="card-body p-3"><label class="small mb-2">{{ $flower->flowerType->name }}</label>
                                    <h5 class="mb-3">
                                        <a class="text-dark stretched-link" href="/flower-farm/{{ $flower->id }}">{{ $flower->name }}</a>
                                    </h5>
                                    <p>{{ \Illuminate\Support\Str::words($flower->description, 20, '...') }}</p>
                                    <div class="nav small border-top pt-3">
                                        <a class="me-2 text-body" href="/flower-farm/{{ $flower->id }}"> <i class="fa fa-calendar"></i> {{ $flower->created_at }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </section>
            <!-- End section -->
            <!-- Section -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center section-heading wow fadeInUp" data-wow-duration="0.5s">
                        <div class="col-lg-8 text-center">
                            <h3 class="h1 mb-0">Frequently Asked Questions(FAQs)</h3>
                        </div>
                    </div>
                    <div class="col-lg-12 ms-lg-auto">
                        <div id="basics">
                            <h3>Our Basic Helps!</h3>
                            <div class="accordion shadow" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">What is the difference between Pro and Ultimate?</button></h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is the difference between Pro and Ultimate?</button></h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I try before I buy?</button></h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_4"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">Is this a subscription service?</button></h2>
                                    <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="heading_4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="syncing" class="pt-6">
                            <h3>Our Syncing Helps!</h3>
                            <div class="accordion shadow" id="accordionExample_02">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_01_1"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_01_1" aria-expanded="true" aria-controls="collapse_01_1">Can I change plans later on?</button></h2>
                                    <div id="collapse_01_1" class="accordion-collapse collapse" aria-labelledby="heading_01_1" data-bs-parent="#accordionExample_02">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_01_2"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_01_2" aria-expanded="false" aria-controls="collapse_01_2">What is the difference between Pro and Ultimate?</button></h2>
                                    <div id="collapse_01_2" class="accordion-collapse collapse" aria-labelledby="heading_01_2" data-bs-parent="#accordionExample_02">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_01_3"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_01_3" aria-expanded="false" aria-controls="collapse_01_3">Can I try before I buy?</button></h2>
                                    <div id="collapse_01_3" class="accordion-collapse collapse" aria-labelledby="heading_01_3" data-bs-parent="#accordionExample_02">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_01_4"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_01_4" aria-expanded="false" aria-controls="collapse_01_4">Is this a subscription service?</button></h2>
                                    <div id="collapse_01_4" class="accordion-collapse collapse" aria-labelledby="heading_01_4" data-bs-parent="#accordionExample_02">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="account" class="pt-6">
                            <h3>Our Account Helps!</h3>
                            <div class="accordion shadow" id="accordionExample_03">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_02_1"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_02_1" aria-expanded="false" aria-controls="collapse_02_1">Can I change plans later on?</button></h2>
                                    <div id="collapse_02_1" class="accordion-collapse collapse" aria-labelledby="heading_02_1" data-bs-parent="#accordionExample_03" style="">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_02_2"><button class="py-3 text-start accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_02_2" aria-expanded="true" aria-controls="collapse_02_2">What is the difference between Pro and Ultimate?</button></h2>
                                    <div id="collapse_02_2" class="accordion-collapse collapse show" aria-labelledby="heading_02_2" data-bs-parent="#accordionExample_03" style="">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_02_3"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_02_3" aria-expanded="false" aria-controls="collapse_02_3">Can I try before I buy?</button></h2>
                                    <div id="collapse_02_3" class="accordion-collapse collapse" aria-labelledby="heading_02_3" data-bs-parent="#accordionExample_03">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_02_4"><button class="py-3 text-start accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_02_4" aria-expanded="false" aria-controls="collapse_02_4">Is this a subscription service?</button></h2>
                                    <div id="collapse_02_4" class="accordion-collapse collapse" aria-labelledby="heading_02_4" data-bs-parent="#accordionExample_03">
                                        <div class="accordion-body border-start border-5 border-primary"><strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Section -->
            <section class="section bg-gray-100">
                <div class="container">
                    <div class="row section-heading justify-content-center text-center wow fadeInUp" data-wow-duration=".4s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="col-lg-8 col-xl-6">
                            <h3 class="h1 bg-primary-after after-50px pb-3 mb-3">Contact Us</h3>
                            <div class="lead">For any Inquiries or comments please feel free to reach out to us.</div>
                        </div>
                    </div>
                    <div class="row justify-content-center gy-4">
                        <div class="col-md-7 col-lg-7 wow fadeInUp" data-wow-duration=".4s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="bg-white shadow p-4 p-lg-6 border rounded-3">
                                <div class="pb-4">
                                    <h5 class="m-0">Contact Us</h5>
                                </div>
                                <form class="rd-mailform" method="post" action="{{ route('contact') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label rd-input-label focus not-empty">Name</label>
                                                <input id="contact-name" type="text" name="name" placeholder="John Doe" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child">
                                                <span class="invalid-feedback"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label rd-input-label focus not-empty">Email address</label>
                                                <input id="contact-email" type="email" name="email" placeholder="johndoe@example.com" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child">
                                                <span class="invalid-feedback"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label class="form-label rd-input-label focus not-empty">Comment</label>
                                                <textarea class="form-control form-control-has-validation form-control-last-child" id="contact-message" name="message" rows="3" placeholder="Hi there, I would like to ..." data-constraints="@Required"></textarea>
                                                <span class="invalid-feedback"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 pt-2">
                                            <button class="btn btn-primary" type="submit" name="send">Contact Us</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-duration=".4s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="bg-white p-2 shadow rounded-3 h-100 ms-xl-6">
                                <div class="py-5 px-4 bg-primary h-100">
                                    <h5 class="h6 text-white mb-2">Our address info</h5>
                                    <p class="text-white text-opacity-65 mb-5">Hampron Suites, Kasarani Seasons Rd</p>
                                    <h5 class="h6 text-white mb-2">Our contact info</h5>
                                    <p class="mb-2"><a class="link-light" href="mailto:support@domain.com">support@flowerfarm.com</a></p>
                                    <p class="m-0"><a class="link-light" href="tel:+18005551212">+254 (712) 345-6789</a></p>
                                    <h5 class="h6 text-white mb-3 mt-5">Our contact info</h5>
                                    <div class="nav">
                                        <a class="icon-sm bg-light rounded-circle me-2" href="#"><i class="fa fa-facebook"></i> </a>
                                        <a class="icon-sm bg-light rounded-circle me-2" href="#"><i class="fa fa-twitter"></i> </a>
                                        <a class="icon-sm bg-light rounded-circle me-2" href="#"><i class="fa fa-instagram"></i> </a>
                                        <a class="icon-sm bg-light rounded-circle me-2" href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
        </main>
        <!-- End Main -->
        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row py-3 gy-3 align-items-center">
                    <div class="col-sm-12 text-center">
                        <p class="text-black text-opacity-85 m-0">© 2023 Flower Farm </p>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer -->
        <!-- End Footer -->
    </div>
    <!--
    ========================
       End Wrapper
    ========================
    -->
    <!-- script start -->
    <!-- Theme JS -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!--bootstrap-->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- headroom JS -->
    <script src="{{ asset('assets/vendor/headroom/headroom.min.js') }}"></script>
    <!-- swiper JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- purecounter JS -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <!-- isotope JS -->
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- magnific JS -->
    <script src="{{ asset('assets/vendor/magnific/jquery.magnific-popup.min.js') }}"></script>
    <!-- magnific JS -->
    <script src="{{ asset('assets/vendor/highlight/highlight.min.js') }}"></script>
    <!-- magnific JS -->
    <script src="{{ asset('assets/vendor/typed/typed.js') }}"></script>
    <!-- svginjector JS -->
    <script src="{{ asset('assets/vendor/svginjector/svg-injector.min.js') }}"></script>
    <!-- wow JS -->
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <!-- wow JS -->
    <script src="{{ asset('assets/vendor/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <!-- countdown JS -->
    <script src="{{ asset('assets/vendor/count-down/jquery.countdown.min.js') }}"></script>
    <!-- one-page JS -->
    <script src="{{ asset('assets/vendor/one-page/scrollIt.min.js') }}"></script>
    <!-- working form -->
    <script src="{{ asset('assets/vendor/mail/js/form.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/mail/js/script.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme-jquery.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <!-- End script start -->
</body>
<!-- Mirrored from www.pxdraft.com/wrap/mombo/html/home/index-21.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 12:54:28 GMT -->

</html>
