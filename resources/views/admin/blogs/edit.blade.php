@extends('layouts.admin.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <!-- Card Start -->
            <div class="card shadow-lg border-0 rounded-4">

                <!-- Header -->
                <div class="card-header bg-primary text-white text-center py-3">
                    <h2>Edit Blog Post</h2>
                </div>

                <!-- Body -->
                <div class="card-body p-4">

                    <!-- Alert -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Update Your Blog Information ✍️

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert">
                        </button>
                    </div>

                    <!-- Form -->
                    <form action="{{ route('blogupdate', $data->id) }}" method="POST">

                        @csrf

                        <!-- Title -->
                        <div class="mb-3">

                            <label class="form-label">Title</label>

                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   placeholder="Enter title"
                                   value="{{ $data->title }}">

                            @error('title')
                                <span style="color:red">{{ $message }}</span>
                            @enderror

                        </div>

                        <!-- Subtitle -->
                        <div class="mb-3">

                            <label class="form-label">Subtitle</label>

                            <input type="text"
                                   name="subtitle"
                                   class="form-control"
                                   placeholder="Enter subtitle"
                                   value="{{ $data->subtitle }}">

                            @error('subtitle')
                                <span style="color:red">{{ $message }}</span>
                            @enderror

                        </div>

                        <!-- Description -->
                        <div class="mb-3">

                            <label class="form-label">Description</label>

                            <textarea name="description"
                                      rows="5"
                                      class="form-control"
                                      placeholder="Write description">{{ $data->description }}</textarea>

                            @error('description')
                                <span style="color:red">{{ $message }}</span>
                            @enderror

                        </div>

                        <!-- Author -->
                        <div class="mb-3">

                            <label class="form-label">Author</label>

                            <input type="text"
                                   name="author"
                                   class="form-control"
                                   placeholder="Enter author name"
                                   value="{{ $data->author }}">

                            @error('author')
                                <span style="color:red">{{ $message }}</span>
                            @enderror

                        </div>

                        <!-- Date -->
                        <div class="mb-3">

                            <label class="form-label">Date</label>

                            <input type="date"
                                   name="date"
                                   class="form-control"
                                   value="{{ $data->date }}">

                            @error('date')
                                <span style="color:red">{{ $message }}</span>
                            @enderror

                        </div>

                         <div class="mb-3">
                            <label class="form-label">Message</label>

                            <textarea name="message"
                                      rows="4"
                                      class="form-control"
                                      placeholder="Write your message">{{ $data->message }}</textarea>
                            @error('message')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>



                        <!-- Button -->
                        <div class="d-grid">

                            <button type="submit"
                                    class="btn btn-primary fw-bold">
                                Update Blog
                            </button>

                        </div>

                    </form>

                </div>

            </div>
            <!-- Card End -->

        </div>

    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
@endsection