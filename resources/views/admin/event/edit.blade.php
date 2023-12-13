@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Event</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Event</a></li>
                    <li class="breadcrumb-item">Add Event</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Event</h5>
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
                            <form class="row g-3" action="{{ route('event.update',$event->id) }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}">
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Description:</label>

                                    <textarea id="description" name="description" class="form-control" rows="4" cols="50">{{ $event->description }}</textarea>
                                </div>

                                <div class="col-12">
                                    <label for="place" class="form-label">Place:</label>
                                    <input type="text" class="form-control" id="place" name="place" value="{{$event->place}}">
                                </div>
                                <div class="col-12">
                                    <label for="date" class="form-label">Date:</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{$event->date}}">
                                </div>
                                <div class="col-12">
                                    <label for="date" class="form-label">Image:</label>
                                    <input type="file" class="form-control border-input" name="image" id="image" name="image" value="{{$event->image}}">
                                    <div id="thumb-output"></div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main>
@endsection
