@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Contact Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Contact</a></li>
                    <li class="breadcrumb-item">Contact Tables</li>

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
                        <a href="{{ route('event.create') }}"><button type="button" class="btn btn-info">Add
                            </button></a>

                    </div> --}}



                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact Table</h5>




                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Contact NO.</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($contact as $contact)
                                        <tr>
                                            <td>{{ $contact->id }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td> {{$contact->email}}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>{{ $contact->contact_no }}</td>
                                            



                                            <td>

                                                <a href="{{ route('contact.delete', $contact->id) }}"><button
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
