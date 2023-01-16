@extends('pages.layout.app')
@section('content')
    <style>
        .img2 {
            background-image: url('assets/images/slider/slider-2.png');
            background-repeat: no-repeat;
        }
    </style>

    <!-- Slider Section Start -->
    <div class="section slider-section slider-active">

        <div class="slider-shape-01"></div>
        <div class="slider-shape-02">
            <img src="assets/images/slider/shape-1.png" alt="shape">
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01">

                    <!-- Slider Left Start -->
                    <div class="slider-left">

                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <div class="content-wrapper">
                                <h5 class="sub-title">Get Direct</h5>
                                <h1 class="main-title"> <strong> Tutoring From Me.</strong></h1>
                                <a class="btn btn-outline-light" href="#">All Solution <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- Slider Content End -->

                    </div>
                    <!-- Slider Left End -->

                    <!-- Slider Right Start -->
                    <div class="slider-right">

                        <!-- Slider Images Start -->
                        <div class="slider-images">
                            <img src="assets/images/slider/slider-1.png" alt="Slider Images">
                        </div>
                        <!-- Slider Images End -->

                    </div>
                    <!-- Slider Right End -->

                </div>
                <!-- Single Slider End -->

                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01">

                    <!-- Slider Left Start -->
                    <div class="slider-left">

                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <div class="content-wrapper">
                                <h5 class="sub-title">Learn and Follow The Exact Same Techniques and Strategies I use to Make Min. $10k Monthly</h5>
{{--                                <h1 class="main-title"> <strong>Consulting</strong> for your future plan</h1>--}}
                                <a class="btn btn-outline-light" href="#">All Solution <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- Slider Content End -->

                    </div>
                    <!-- Slider Left End -->

                    <!-- Slider Right Start -->
                    <div class="slider-right">

                        <!-- Slider Images Start -->
                        <div class="slider-images" >
                            <div class="content-wrapper" >
                                <h5 class="sub-title">Learn and Follow The Exact Same Techniques and Strategies I use to Make Min. $10k Monthly</h5>
                            </div>
                            <img src="assets/images/slider/slider-2.png" alt="Slider Images">
                        </div>
                        <!-- Slider Images End -->
                    </div>
                    <!-- Slider Right End -->

                </div>
                <!-- Single Slider End -->

                <!-- Single Slider Start -->
                <div class="swiper-slide single-slider animation-style-01">

                    <!-- Slider Left Start -->
                    <div class="slider-left">

                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <div class="content-wrapper">
                                <h5 class="sub-title">OVER 28+ YEARS OF EXPERIENCE</h5>
                                <h1 class="main-title"> <strong>Consulting</strong> for your future plan</h1>
                                <a class="btn btn-outline-light" href="#">All Solution <i class="icofont-double-right"></i></a>
                            </div>
                        </div>
                        <!-- Slider Content End -->

                    </div>
                    <!-- Slider Left End -->

                    <!-- Slider Right Start -->
                    <div class="slider-right">

                        <!-- Slider Images Start -->
                        <div class="slider-images">
                            <img src="assets/images/slider/slider-3.png" alt="Slider Images">
                        </div>
                        <!-- Slider Images End -->

                    </div>
                    <!-- Slider Right End -->

                </div>
                <!-- Single Slider End -->
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <!-- Slider Section End -->


    <!-- Why Choose Us Section Start -->
    <div style="background-color: black" class="section section-padding why-choose-section mt-n10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content" data-aos="fade-right" data-aos-delay="200">

                        <!-- Why Choose Title Start -->
                        <div class="why-choose-title">
                            <h6 class="sub-title">Why Choose <span>Us?</span></h6>
                            <h2 class="main-title text-white"> Learn and See the way cash is made first hand, see it for yourself.</h2>
                        </div>
                        <!-- Why Choose Title End -->

                        <!-- Why Choose Items Start -->
                        <div class="why-choose-items">

                            <!-- Single Items Start -->
                            <div class="single-item">
                                <div class="item-content">
                                    <h4 style="color: grey" class="title"><span>1</span> Unlimited Daily Updates.</h4>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="item-content">
                                    <h4 style="color: grey" class="title"><span>2</span> 100% Valuable For Extreme Growth.</h4>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="item-content">
                                    <h4 style="color: grey" class="title"><span>3</span> 24/7 Support.</h4>
                                </div>
                            </div>
                            <!-- Single Items End -->

                        </div>
                        <!-- Why Choose Items End -->

                    </div>
                    <!-- Why Choose Content End -->

                </div>
                <div class="col-lg-6">

                    <!-- Why Choose Content Start -->
                    <div class="why-choose-images" data-aos="fade-left" data-aos-delay="200">
                        <div class="choose-images">
                            <img src="assets/images/why.png" alt="Why Choose">
                        </div>
                        <div class="choose-shape"></div>
                        <img class="choose-arrow" src="assets/images/arrow-1.png" alt="arrow">
                    </div>
                    <!-- Why Choose Content End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->


@endsection
