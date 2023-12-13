@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Adoption Table</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Adoption</a></li>
                    <li class="breadcrumb-item">Adoption Tables</li>

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
                        <a href="{{ route('event.create') }}"><button type="button" class="btn btn-info">Add
                            </button></a>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Adoption Table</h5>
                            {{-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <a href="{{ route('adoption.create') }}"><button type="button" class="btn btn-info">Add
                                        </button></a>

                                </div>
                            </div> --}}

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Place</th>

                                        <th scope="col">Animal Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($adoption as $adoption)
                                        <tr>
                                            <td>{{ $adoption->id }}</td>
                                            <td>{{ $adoption->name }}</td>
                                            <td>{{ $adoption->place }}</td>

                                            <td>

                                                @if (empty($adoption->adoption_image))
                                                    <img src="{{ asset('defaultblog.png') }}" width="100px"
                                                        height="100px" />
                                                @else
                                                    <img src="{{ asset('uploads/' . $adoption->adoption_image) }}" width="100px"
                                                        height="100px" />
                                                @endif

                                            </td>

                                            <td>
                                                <a href="{{ route('adoption.edit', $adoption->id) }}"><button
                                                        class="btn btn-success rounded-pill"
                                                        title="Edit">Edit</button></a>
                                                <a href="{{ route('adoption.delete', $adoption->id) }}"><button
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
