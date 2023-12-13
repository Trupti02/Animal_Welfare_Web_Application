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
                                <h2>latest causes </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- Our Cases Start -->
        <div class="our-cases-area section-padding30">
            <div class="container">
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
                                    <!-- Progress Bar -->
                                    <div class="single-skill mb-15">
                                        <div class="bar-progress">
                                            <div id="bar1" class="barfiller">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill" data-percentage="70"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / progress -->
                                    <div class="prices d-flex justify-content-between">
                                        <p>Raised:<span> Rs.{{ $donation->amount }}</span></p>
                                        <p>Goal:<span> Rs.{{ $donation->goal_amount }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Our Cases End -->
    </main>
@endsection
