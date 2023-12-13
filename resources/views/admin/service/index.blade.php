@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Service Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Service</a></li>
                    <li class="breadcrumb-item">Service Tables</li>

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
                        <a href="{{ route('service.create') }}"><button type="button" class="btn btn-info">Add
                            </button></a>

                    </div>



                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Service Table</h5>




                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>

                                        <th scope="col">Service Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($service as $service)
                                        <tr>
                                            <td>{{ $service->id }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td> {!! Str::words($service->description, 6, '....') !!}</td>



                                            <td>

                                                @if (empty($service->service_image))
                                                    <img src="{{ asset('defaultblog.png') }}" width="100px"
                                                        height="100px" />
                                                @else
                                                    <img src="{{ asset('uploads/' . $service->service_image) }}" width="100px"
                                                        height="100px" />
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{ route('service.edit', $service->id) }}"><button
                                                        class="btn btn-success rounded-pill"
                                                        title="Edit">Edit</button></a>
                                                <a href="{{ route('service.delete', $service->id) }}"><button
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
