@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Donation Table</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Donation</a></li>
                    <li class="breadcrumb-item">Donation Tables</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">


                <div class="col-lg-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="col-md-12 float-right" >
                        <a href="{{ route('donation.create') }}"><button type="button" class="btn btn-info">Add
                            </button></a>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Table</h5>
                            {{-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <a href="{{ route('donation.create') }}"><button type="button" class="btn btn-info">Add
                                        </button></a>

                                </div>
                            </div> --}}

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        {{-- <th scope="col">Email</th> --}}
                                        <th scope="col">Contact No.</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Goal Amount</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($donation as $donation)
                                        <tr>
                                            <td>{{ $donation->id }}</td>
                                            <td>{{ $donation->name }}</td>
                                            {{-- <td>{{ $donation->email }}</td> --}}
                                            <td>{{ $donation->contact_no }}</td>
                                            <td>{{ $donation->address}}</td>
                                            <td>{{ $donation->amount}}</td>
                                            <td>{{ $donation->goal_amount}}</td>
                                            <td>

                                                @if (empty($donation->donation_image))
                                                    <img src="{{ asset('defaultblog.png') }}" width="100px"
                                                        height="100px" />
                                                @else
                                                    <img src="{{ asset('uploads/' . $donation->donation_image) }}" width="100px"
                                                        height="100px" />
                                                @endif

                                            </td>

                                            <td>
                                                <a href="{{ route('donation.edit', $donation->id) }}"><button
                                                        class="btn btn-success rounded-pill"
                                                        title="Edit">Edit</button></a>
                                                <a href="{{ route('donation.delete', $donation->id) }}"><button
                                                        class="btn btn-danger rounded-pill"
                                                        title="Delete">Delete</button></a>

                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>







                </div>
            </div>
        </section>

    </main><br><br><br>
@endsection
