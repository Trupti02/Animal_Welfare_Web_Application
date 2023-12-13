@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>User Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">User</a></li>
                    <li class="breadcrumb-item">User Tables</li>

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

                    <div class="col-md-12 float-right">
                        <a href="{{ route('user.create') }}"><button type="button" class="btn btn-info">Add
                            </button></a>

                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Table</h5>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email Id</th>
                                        <th scope="col">Registered At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($user as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at->diffForHumans() }}</td>

                                            <td>


                                                <a href="{{route('user.edit',$user->id)}}"><button class="btn btn-primary rounded-pill"
                                                    >Edit</button></a>
                                                <a href="{{ route('user.delete', $user->id) }}"><button
                                                        class="btn btn-danger rounded-pill"
                                                        title="Block User">Delete</button></a>
                                                {{--
                                                <a href=""><button class="btn btn-primary rounded-pill"
                                                title="Details">Details</button></a> --}}
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
