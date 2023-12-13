@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Volunteer</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Volunteer</a></li>
                    <li class="breadcrumb-item">Add Volunteer</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Volunteer</h5>
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
                            <form class="row g-3" action="{{route('volunteer.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-6">
                                    <label for="fname" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" id="fname" name="fname">
                                </div>
                                <div class="col-6">
                                    <label for="email" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="lname" name="lname">
                                </div>
                                <div class="col-6">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col-6">
                                    <label for="mob_number" class="form-label">Mobile Number:</label>
                                    <input type="number" class="form-control" id="mob_number" name="mob_number">
                                </div>
                                <div class="col-6">
                                    <label for="address" class="form-label">Address:</label>

                                    <textarea id="address" name="address" class="form-control" rows="1" cols="50"></textarea>
                                </div>
                                <div class="col-6">
                                    <label for="birth_date" class="form-label">Birth Date:</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date">
                                </div>

                                <div class="col-12">
                                    <label for="volunteer_image" class="form-label">Volunteer Image:</label>
                                    <input type="file" class="form-control border-input" name="volunteer_image" id="volunteer_image">
                                    <div id="thumb-output"></div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="back" class="btn btn-secondary">Back</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main>
@endsection
