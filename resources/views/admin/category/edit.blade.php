@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Category</a></li>
                    <li class="breadcrumb-item">Edit Category</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Category</h5>
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
                            <form class="row g-3" action="{{ route('category.update',$category->id) }}" method="POST" >
                                @csrf
                                <div class="col-12">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
                                </div>


                                <div class="col-12">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status"class="form-control" id="status">
                                        <option value="{{$category->status}}" class="option_colour">Select Satus</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>


                                    </select>
                                </div>



                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="back" class="btn btn-secondary">Back</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main>
@endsection
