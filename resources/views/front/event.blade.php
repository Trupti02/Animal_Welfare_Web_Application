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
                                <h2>social events </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
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
        <!-- Featured_job_start -->
        <section class="featured-job-area section-padding30 section-bg2"
            data-background="front/assets/img/gallery/section_bg03.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>What we are boing</span>
                            <h2>We arrange many social events for charity donations</h2>
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
                                        {{-- <a href="#"><img src="{{ asset('uploads/' . $event->image) }}"
                                                alt=""></a> --}}
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
    </main>
@endsection
