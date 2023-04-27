<!doctype html>
<html lang="zxx" class="dark">
<!-- Mirrored from www.pxdraft.com/wrap/mombo/html/blog/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 12:57:19 GMT -->

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
    <link rel="shortcut icon" href="https://www.pxdraft.com/wrap/mombo/assets/img/favicon.ico">
    <!-- CSS Template -->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Skippy & Prload -->
    <!-- skippy --> <a id="skippy" class="skippy visually-hidden-focusable overflow-hidden" href="#content">
        <div class="container"><span class="u-skiplink-text">Skip to main content</span></div>
    </a><!-- End skippy -->
    <!-- Preload -->
    <div id="loading" class="loading-preloader">
        <div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div><!-- End Preload -->
    <!-- Edn Skippy & Prload -->

    <div class="wrapper">
        <!-- Header -->
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
            <!-- Page Title -->
            <!-- Home Banner -->
            <section class="bg-center bg-cover bg-no-repeat section" style="background-image: url(../../assets/images/banner.jpg);">
                <div class="container position-relative">
                    <div class="row min-vh-50 align-items-center">
                        <div class="col-12">
                            <h1 class="display-4 text-black m-0 text-center">Flowers</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Home Banner -->
            <!-- Section -->
            <section class="section">
                <div class="container">

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
            </section><!-- End section -->
        </main><!-- End Main -->
        <!-- Footer -->
        <footer class="bg-dark footer">
            <hr class="m-0">
            <div class="container">
                <div class="row py-3 gy-3 align-items-center">
                    <div class="col-md-6">
                        <ul
                            class="nav justify-content-center justify-content-md-start my-2 links-white small list-unstyled footer-link-01 m-0">
                            <li class="p-0 mx-3 ms-md-0 me-md-3"><a href="#" class="link-white">Privace &amp;
                                    Policy</a></li>
                            <li class="p-0 mx-3 ms-md-0 me-md-3"><a href="#" class="link-white">Faq's</a></li>
                            <li class="p-0 mx-3 ms-md-0 me-md-3"><a href="#" class="link-white">Get a Quote</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <p class="text-white text-opacity-85 small m-0">© 2023 Flower Farm</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!--
    ========================
       End Wrapper
    ========================
    -->
    <!-- script start -->
    <!-- Theme JS -->
    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <!--bootstrap-->
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- headroom JS -->
    <script src="../../assets/vendor/headroom/headroom.min.js"></script><!-- swiper JS -->
    <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script><!-- purecounter JS -->
    <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script><!-- isotope JS -->
    <script src="../../assets/vendor/isotope/isotope.pkgd.min.js"></script><!-- magnific JS -->
    <script src="../../assets/vendor/magnific/jquery.magnific-popup.min.js"></script><!-- magnific JS -->
    <script src="../../assets/vendor/highlight/highlight.min.js"></script><!-- magnific JS -->
    <script src="../../assets/vendor/typed/typed.js"></script><!-- svginjector JS -->
    <script src="../../assets/vendor/svginjector/svg-injector.min.js"></script><!-- wow JS -->
    <script src="../../assets/vendor/wow/wow.min.js"></script><!-- wow JS -->
    <script src="../../assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script><!-- countdown JS -->
    <script src="../../assets/vendor/count-down/jquery.countdown.min.js"></script><!-- one-page JS -->
    <script src="../../assets/vendor/one-page/scrollIt.min.js"></script><!-- working form -->
    <script src="../../assets/vendor/mail/js/form.min.js"></script>
    <script src="../../assets/vendor/mail/js/script.js"></script><!-- Theme JS -->
    <script src="../../assets/js/theme-jquery.js"></script><!-- Theme JS -->
    <script src="../../assets/js/theme.js"></script><!-- End script start -->
</body>
<!-- Mirrored from www.pxdraft.com/wrap/mombo/html/blog/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 12:57:40 GMT -->

</html>
