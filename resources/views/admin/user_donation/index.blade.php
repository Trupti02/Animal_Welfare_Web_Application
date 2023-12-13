@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>User Donation Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">User Donation</a></li>
                    <li class="breadcrumb-item">User Donation Tables</li>

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

                    {{-- <div class="col-md-12 float-right" >
                        <a href="{{ route('service.create') }}"><button type="button" class="btn btn-info">Add
                            </button></a>

                    </div> --}}



                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Donation Table</h5>




                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>

                                        <th scope="col">Contact No.</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($donation as $d)
                                        <tr>
                                            <td>{{ $d->id }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td> {{$d->email}}</td>
                                            <td> {{$d->contact_no}}</td>
                                            <td> Rs. {{$d->amount}}</td>




                                            <td>
                                                <a href="{{ route('user.contact.delete', $d->id) }}"><button
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
