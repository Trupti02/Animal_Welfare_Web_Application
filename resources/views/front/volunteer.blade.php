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
                                <h2>Become a Volunteer</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12">
                        <form class="form-contact" action="{{ route('store.volunteer') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="fname" id="fname" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your First name'"
                                            placeholder="Enter your First name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="lname" id="lname" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Last name'"
                                            placeholder="Enter your Last name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control " name="mob_number" id="mob_number" type="number"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Mobile number'"
                                            placeholder="Enter Mobile number">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control " name="birth_date" id="birth_date" type="date"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Birth Date'"
                                            placeholder="Enter Birth Date">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control " name="volunteer_image" id="volunteer_image" type="file"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Volunteer Image'"
                                            placeholder="Enter Volunteer Image">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                            <textarea class="form-control w-100" name="address" id="address" cols="30" rows="3"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" placeholder=" Enter Address"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Submit</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
@endsection
