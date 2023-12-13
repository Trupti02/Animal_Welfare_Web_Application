@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Volunteer Table</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Volunteer</a></li>
                    <li class="breadcrumb-item">Volunteer Tables</li>

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
                        <a href="{{ route('volunteer.create') }}"><button type="button" class="btn btn-info">Add
                            </button></a>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Volunteer Table</h5>
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
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email </th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Birth date</th>
                                        <th scope="col">Volunteer Image</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($volunteer as $volunteer)
                                        <tr>
                                            <td>{{ $volunteer->id }}</td>
                                            <td>{{ $volunteer->fname }}</td>
                                            <td>{{ $volunteer->lname }}</td>
                                            <td>{{ $volunteer->email }}</td>
                                            <td>{{ $volunteer->mob_number}}</td>
                                            <td>{{ $volunteer->address}}</td>
                                            <td>{{ $volunteer->birth_date}}</td>
                                            <td>

                                                @if (empty($volunteer->volunteer_image))
                                                    <img src="{{ asset('defaultblog.png') }}" width="100px"
                                                        height="100px" />
                                                @else
                                                    <img src="{{ asset('uploads/' . $volunteer->volunteer_image) }}" width="100px"
                                                        height="100px" />
                                                @endif

                                            </td>

                                            <td>
                                                <a href="{{ route('volunteer.edit', $volunteer->id) }}"><button
                                                        class="btn btn-success rounded-pill"
                                                        title="Edit">Edit</button></a>
                                                <a href="{{ route('volunteer.delete', $volunteer->id) }}"><button
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
