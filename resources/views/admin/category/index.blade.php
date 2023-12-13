@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Category Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Category </a></li>
                    <li class="breadcrumb-item">Category Tables</li>

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
                        <a href="{{ route('category.create') }}"><button type="button" class="btn btn-info">Add
                            </button></a>

                    </div>



                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Category Table</h5>




                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($category as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>

                                            <td>

                                                @if ($category->status == 1)
                                                    <spam class="badge bg-primary">Active</spam>
                                                @else
                                                    <spam class="badge bg-danger">Inactive</spam>
                                                @endif
                                            </td>



                                            <td>
                                                <a href="{{ route('category.edit', $category->id) }}"><button
                                                        class="btn btn-success rounded-pill"
                                                        title="Edit">Edit</button></a>
                                                <a href="{{ route('category.delete', $category->id) }}"><button
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
