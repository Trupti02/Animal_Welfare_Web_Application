@extends('front.layouts.master')
@section('content')
    <main>
        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="slider-active">

                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Our Helping to<br> the world.</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s">Stray animals roam the streets of India
                                        without food, veterinary care or refuge from the elements. Help us give them a
                                        chance.</P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="{{ route('donation') }}" class="btn hero-btn mb-10"
                                            data-animation="fadeInLeft" data-delay=".8s">Donate</a>
                                        <div class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                            <i class="flaticon-null"></i>
                                            <p>+91 9022686533</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
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
                        <a href="{{ route('about') }}" class="btn">About US</a>
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
        <!-- Our Cases Start -->
        <div class="our-cases-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Our Cases you can see</span>
                            <h2>Explore our latest causes that we works </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($donation as $donation)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cases mb-40">
                                <div class="cases-img">
                                    {{-- <img src="front/assets/img/gallery/case1.png" alt=""> --}}
                                    @if (empty($donation->donation_image))
                                        <img src="{{ asset('defaultblog.png') }}" />
                                    @else
                                        <img src="{{ asset('uploads/' . $donation->donation_image) }}" />
                                    @endif
                                </div>
                                <div class="cases-caption">
                                    <h3><a href="#">{{ $donation->name }}</a></h3>

                                    <div class="prices d-flex justify-content-between">
                                        <p>Raised:<span> Rs.{{ $donation->amount }}</span></p>
                                        {{-- <p>Goal:<span> Rs.{{ $donation->goal_amount }}</span></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Our Cases End -->
        <!-- Featured_job_start -->
        <section class="featured-job-area section-padding30 section-bg2"
            data-background="front/assets/img/gallery/section_bg03.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>What we are boing</span>
                            <h2>We arrange many social events for Animal donations</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($event as $event)
                        <div class="col-lg-9 col-md-12">
                            <!-- single-job-content -->

                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        @if (empty($event->image))
                                            <img class="company-img" width="300px" height="150px"
                                                src="{{ asset('defaultblog.png') }}">
                                        @else
                                            <img class="company-img" width="300px" height="150px"
                                                src="{{ asset('uploads/' . $event->image) }}">
                                        @endif

                                    </div>
                                    <div class="job-tittle">
                                        <a href="#">

                                            <h4>{{ $event->title }}</h4>
                                        </a>
                                        <ul>
                                            <li><i class="far fa-clock"></i>{{ $event->created_at }}</li>
                                            <li><i class="fas fa-sort-amount-down"></i>{{ $event->date }}</li>
                                            <li><i class="fas fa-map-marker-alt"></i>{{ $event->place }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="front/assets/img/gallery/socialEvents2.png"
                                        alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>A hand for Children</h4>
                                </a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="front/assets/img/gallery/socialEvents3.png"
                                        alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>Help for Children</h4>
                                </a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="front/assets/img/gallery/socialEvents1.png"
                                        alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>Donation is Hope</h4>
                                </a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="front/assets/img/gallery/socialEvents2.png"
                                        alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>A hand for Children</h4>
                                </a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="front/assets/img/gallery/socialEvents3.png"
                                        alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>Help for Children</h4>
                                </a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->
        <!--? Team Ara Start -->
        <div class="team-area pt-160 pb-160">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
                            <span>What we are doing</span>
                            <h2>Our Expert Volunteer Alwyes ready</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($volunteer as $volunteer)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <div class="team-img">
                                        @if (empty($volunteer->volunteer_image))
                                            <img class="team-img" width="250px" height="300px"
                                                src="{{ asset('defaultblog.png') }}">
                                        @else
                                            <img class="team-img" width="250px" height="300px"
                                                src="{{ asset('uploads/' . $volunteer->volunteer_image) }}">
                                        @endif

                                    </div>
                                    {{-- <img src="front/assets/img/gallery/team1.png" alt=""> --}}
                                    <!-- Blog Social -->
                                    <ul class="team-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-caption">
                                    <h3><a href="instructor.html">{{ $volunteer->fname }} {{ $volunteer->lname }}</a>
                                    </h3>
                                    <p>{{ $volunteer->address }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Team Ara End -->
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
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-90">
                            <span>Our recent blog</span>
                            <h2>Latest News from our recent blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($blog as $blog)
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="home-blog-single mb-30">
                                <div class="blog-img-cap">
                                    <div class="blog-img">
                                        <div class="blog-img">
                                            @if (empty($blog->blog_image))
                                                <img class="blog-img" width="250px" height="300px"
                                                    src="{{ asset('defaultblog.png') }}">
                                            @else
                                                <img class="blog-img" width="250px" height="350px"
                                                    src="{{ asset('uploads/' . $blog->blog_image) }}">
                                            @endif

                                        </div>
                                        {{-- <img src="front/assets/img/gallery/home-blog1.png" alt=""> --}}
                                        <!-- Blog date -->
                                        <div class="blog-date text-center">
                                            <span>24</span>
                                            <p>Now</p>
                                        </div>
                                    </div>
                                    <div class="blog-cap">
                                        <p>{{ $blog->name }}</p>
                                        <h3>{!! Str::words($blog->description, 10, '....') !!}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="front/assets/img/gallery/home-blog2.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>Creative derector</p>
                                    <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
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
