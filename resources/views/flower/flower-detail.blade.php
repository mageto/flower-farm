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
            <!-- Page section -->
            <section class="bg-center bg-cover bg-no-repeat section"
                style="background-image: url(../../assets/images/banner.jpg);">
                <div class="container position-relative">
                    <div class="row min-vh-50 align-items-center">
                        <div class="col-12">
                            <h1 class="display-4 text-black m-0 text-center">{{ $flower->name }}</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Page section -->
            <!-- section -->
            <div class="container position-relative bg-white z-index-1 mb-10">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <article class="card card-body mt-n10">
                            <figure class="figure lightbox-gallery">
                                <a href="{{ asset('images/' . $flower->image_name) }}" class="gallery-link">
                                    <img alt="Image placeholder" src="{{ asset('images/' . $flower->image_name) }}" class="img-fluid shadow rounded">
                                </a>
                                <figcaption class="mt-3 text-muted text-sm text-left">{{ $flower->name }}</figcaption>
                            </figure>
                            <p>{{ $flower->name }}</p>
                            <div class="border-top pt-4 mt-3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="media align-items-center">
                                            <div class="media-body ps-3">
                                                <span>Published on {{ $flower->created_at }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="nav justify-content-end">
                                            <a class="icon-sm rounded-circle bg-primary text-white ms-2" href="#"><i class="fa fa-facebook"></i> </a>
                                            <a class="icon-sm rounded-circle bg-primary text-white ms-2" href="#"><i class="fa fa-twitter"></i> </a>
                                            <a class="icon-sm rounded-circle bg-primary text-white ms-2" href="#"><i class="fa fa-instagram"></i> </a>
                                            <a class="icon-sm rounded-circle bg-primary text-white ms-2" href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div><!-- end section -->
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
<!-- Mirrored from www.pxdraft.com/wrap/mombo/html/blog/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 12:57:49 GMT -->

</html>
