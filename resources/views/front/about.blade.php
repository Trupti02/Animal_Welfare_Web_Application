@extends('front.layouts.master')
@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2>About US</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Services Area Start -->
        <div class="service-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>What we are doing</span>
                            <h2>We Are In A Mission To Help The Animal</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($service as $service)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat text-center mb-50">
                                <div class="cat-icon">
                                    <span class="flaticon-null-1"></span>
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">{{ $service->title }}</a></h5>
                                    <p align="justify">{{ $service->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-think"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Safety</a></h5>
                            <p align="justify">Never bother a pet when it's eating or pull its food or water away. Don't tease a dog or cat or pull its tail or ears. Never bother a pet when it's sleeping. Don't take a toy or bone away from a cat or dog or hold it out of reach of the animal.
                                Teach children to always treat animals gently and calmly.
                            </p>
                        </div>
                    </div>
                </div> --}}
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-gear"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Clean Water</a></h5>
                            <p align="justify">The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.
                                The importance of the quality of drinking water is often underestimated, yet water is the most important part of animal sustenance. Animals take in more water daily than feed.
                            </p>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!--? About Law Start-->
        <section class="about-low-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>About our foundation</span>
                                <h2>We Are In A Mission To Help Animals</h2>
                            </div>
                            <p>To rescue and rehabilitate animals and nature in distress in our immediate environment. To
                                provide free medical care, shelter and lifetime care for those animals that cannot be
                                rehabilitated.</p>
                            <p>To analyse the causes of the existing problems and create solutions and improvements as to
                                how the suffering can be relieved or prevented. To promote animal friendly farm practices in
                                organic farming.</p>
                        </div>
                        {{-- <a href="about.html" class="btn">About US</a> --}}
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="front/assets/img/gallery/img1.jpg" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="front/assets/img/gallery/dog1.jpg" alt="" width="400px" height="500px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Law End-->
        <!-- Want To work -->
        <section class="wantToWork-area ">
            <div class="container">
                <div class="wants-wrapper w-padding2  section-bg"
                    data-background="front/assets/img/gallery/section_bg01.png">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-9 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Lets Chenge The World With Humanity</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <a href="#" class="btn white-btn f-right sm-left">Become A Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="front/assets/img/gallery/testimonial.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="front/assets/img/gallery/testimonial.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder">
                                        <div class="founder-img mb-40">
                                            <img src="front/assets/img/gallery/testimonial.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!--? Count Down Start -->
        <div class="count-down-area pt-25 section-bg" data-background="front/assets/img/gallery/section_bg02.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="count-down-wrapper">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">6,200</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Donation</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">80</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Fund Raised</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">256</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Donation</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <span class="counter color-green">256</span>
                                        <span class="plus">+</span>
                                        <p class="color-green">Donation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Count Down End -->
    </main>
@endsection
