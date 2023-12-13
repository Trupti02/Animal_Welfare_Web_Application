@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Donation</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Donation Table</a></li>
                    <li class="breadcrumb-item">Add Donation</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-12">


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Donation</h5>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Vertical Form -->
                            <form class="row g-3" action="{{ route('donation.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>


                                <div class="col-12">
                                    <label for="contact_no" class="form-label">Contact No:</label>
                                    <input type="integer" class="form-control" id="contact_no" name="contact_no">
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>

                                <div class="col-12">
                                    <label for="amount" class="form-label">Amount:</label>
                                    <input type="text" class="form-control" id="amount" name="amount">
                                </div>
                                <div class="col-12">
                                    <label for="goal_amount" class="form-label">Goal Amount:</label>
                                    <input type="text" class="form-control" id="goal_amount" name="goal_amount">
                                </div>

                                <div class="col-12">
                                    <label for="donation_image" class="form-label">Image:</label>
                                    <input type="file" class="form-control border-input" name="donation_image" id="donation_image" >
                                    <div id="thumb-output"></div>
                                </div>

                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main>
@endsection
