@extends('admin.layouts.master')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Blog</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Blog</a></li>
                    <li class="breadcrumb-item">Add Blog</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Blog</h5>
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
                            <form class="row g-3" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col-12">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Description:</label>

                                    <textarea id="description" name="description" class="form-control" rows="4" cols="50"></textarea>
                                </div>

                                <div class="col-12">
                                    <label>Select Category</label>
                                    <select name="category_id"class="form-control">
                                        <option value="" class="option_colour">Select Category</option>
                                        @foreach ($category as $c)
                                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach


                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status"class="form-control" id="status">
                                        <option value="" class="option_colour">Select Satus</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>


                                    </select>
                                </div>


                                <div class="col-12">
                                    <label for="blog_image" class="form-label">Blog Image:</label>
                                    <input type="file" class="form-control border-input" name="blog_image" id="blog_image">
                                    <div id="thumb-output"></div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
