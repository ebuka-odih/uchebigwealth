
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/consor/consor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 07:18:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Consor - Business Consulting Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

</head>

<body>

<!-- Header Start  -->
<div class="header-area bg-dark">
    <div class="header-container container">

        <!-- Header Wrapper Start  -->
        <div class="header-wrapper">
            <!-- Header Logo Start -->
            <div class="header-logo">
                <a href="{{ route('index') }}">
                    <img src="img/logo.png" width="250" alt="Logo">
                </a>
            </div>
            <!-- Header Logo End -->

            <!-- Header Menu Start -->
            <div class="header-menu d-none d-lg-block">
                <ul class="nav-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li>
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="services.html">Services</a></li>
                            <li><a href="services-details.html">Services Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages </a>
                        <ul class="sub-menu">
                            <li><a href="cases.html">Cases</a></li>
                            <li><a href="cases-details.html">Cases Details</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="404-error.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

            </div>
            <!-- Header Menu End -->

            <!-- Header Menu Start -->
            <div class="header-btn d-none d-lg-block">
                <a href="#" class="btn btn-primary btn-hover-secondary">Get A Quote <i class="icofont-double-right"></i></a>
            </div>
            <!-- Header Menu End -->

            <!-- Header Mobile Toggle Start -->
            <div class="header-toggle d-lg-none">
                <a class="menu-toggle" href="javascript:void(0)">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <!-- Header Mobile Toggle End -->
        </div>
        <!-- Header Wrapper End -->

    </div>
</div>
<!-- Header End -->

<!-- Mobile Menu Start -->
<div class="mobile-menu">

    <!-- Menu Close Start -->
    <a class="menu-close" href="javascript:void(0)">
        <i class="icofont-close-line"></i>
    </a>
    <!-- Menu Close End -->

    <!-- Mobile Button Start -->
    <div class="mobile-btn">
        <a href="#" class="btn btn-primary btn-hover-secondary">Get A Quote <i class="icofont-double-right"></i></a>
    </div>
    <!-- Mobile Button End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-items">
        <ul class="nav-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li>
                <a href="#">Services</a>
                <ul class="sub-menu">
                    <li><a href="services.html">Services</a></li>
                    <li><a href="services-details.html">Services Details</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Pages </a>
                <ul class="sub-menu">
                    <li><a href="cases.html">Cases</a></li>
                    <li><a href="cases-details.html">Cases Details</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="404-error.html">404 Error</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Blog</a>
                <ul class="sub-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

    </div>
    <!-- Mobile Menu End -->

</div>
<!-- Mobile Menu End -->

<!-- Overlay Start -->
<div class="overlay"></div>
<!-- Overlay End -->

@yield('content')

<!-- Footer Start -->
<div class="section footer-section">

    <!-- Footer Top Start -->
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <a href="{{ route('index') }}">
                            <img  src="{{ asset('img/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <!-- Footer Logo End -->
                </div>
                <div class="col-md-4">
                    <!-- Footer Call Start -->
                    <div class="footer-call">
                        <div class="call-icon">
                            <img src="assets/images/phone-call.png" alt="Call">
                        </div>
                        <div class="call-content">
                            <h5 class="title">Call Us:</h5>
                            <p>+00 569 754 87</p>
                        </div>
                    </div>
                    <!-- Footer Call End -->
                </div>
                <div class="col-md-4">
                    <!-- Footer Call End -->
                    <div class="footer-social">
                        <ul class="social">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-dribbble"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Call End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->



    <!-- Footer Copyright Start -->
    <div class="footer-copyright">
        <div class="container">

            <!-- Footer Copyright Start -->
            <div class="copyright-wrapper">

                <!-- Footer Copyright Start -->
                <div class="copyright-text">
                    <p>&copy; 2022 <a href="https://Uchebigwealth.com" target="_blank">Uchebigwealth</a></p>
                </div>
                <!-- Footer Copyright End -->

            </div>
            <!-- Footer Copyright End -->

        </div>
    </div>
    <!-- Footer Copyright End -->

</div>
<!-- Footer End -->

<!--Back To Start-->
<a href="#" class="back-to-top">
    <i class="icofont-simple-up"></i>
</a>
<!--Back To End-->




<!-- JS
============================================ -->

<!-- Modernizer & jQuery JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>


<!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
<script src="{{ asset('assets/js/plugins.min.js') }}"></script>


<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>


<!-- Mirrored from htmldemo.net/consor/consor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 07:19:17 GMT -->
</html>
