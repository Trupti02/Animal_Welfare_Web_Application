@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Event Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Event</a></li>
                    <li class="breadcrumb-item">Event Tables</li>

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
                            <h5 class="card-title">Event Table</h5>




                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Place</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Event Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($event as $event)
                                        <tr>
                                            <td>{{ $event->id }}</td>
                                            <td>{{ $event->title }}</td>
                                            <td> {!! Str::words($event->description, 6, '....') !!}</td>
                                            <td>{{ $event->place }}</td>
                                            <td>{{ $event->date }}</td>


                                            <td>

                                                @if (empty($event->image))
                                                    <img src="{{ asset('defaultblog.png') }}" width="100px"
                                                        height="100px" />
                                                @else
                                                    <img src="{{ asset('uploads/' . $event->image) }}" width="100px"
                                                        height="100px" />
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{ route('event.edit', $event->id) }}"><button
                                                        class="btn btn-success rounded-pill"
                                                        title="Edit">Edit</button></a>
                                                <a href="{{ route('event.delete', $event->id) }}"><button
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
