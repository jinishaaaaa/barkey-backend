@extends('layouts.admin.master')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <!-- Card Start -->
            <div class="card shadow-lg border-0 rounded-4">

                <!-- Header -->
                <div class="card-header bg-primary text-white text-center py-3">
                    <h2>Edit Image Form</h2>
                </div>

                <!-- Body -->
                <div class="card-body p-4">

                    <!-- Alert -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">

                        Update Your Image 📸

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert">
                        </button>

                    </div>

                    <!-- Form Start -->
                    <form action="{{ route('gallery.update', $gallery->id) }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <!-- Title -->
                        <div class="mb-3">

                            <label class="form-label">
                                Image Title
                            </label>

                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   placeholder="Enter image title"
                                   value="{{ $gallery->title }}">

                            @error('title')
                                <span style="color:red">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Old Image -->
                        <div class="mb-3 text-center">

                            <img src="{{ asset($gallery->image) }}"
                                 width="150"
                                 class="rounded shadow">

                        </div>

                        <!-- New Image Upload -->
                        <div class="mb-3">

                            <label class="form-label">
                                Upload New Image
                            </label>

                            <input type="file"
                                   name="image"
                                   class="form-control">

                            @error('image')
                                <span style="color:red">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Description -->
                        <div class="mb-3">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea name="description"
                                      rows="4"
                                      class="form-control"
                                      placeholder="Write description">{{ $gallery->description }}</textarea>

                            @error('description')
                                <span style="color:red">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">

                            <button type="submit"
                                    class="btn btn-primary fw-bold">

                                Update Image

                            </button>

                        </div>

                    </form>
                    <!-- Form End -->

                </div>

            </div>
            <!-- Card End -->

        </div>

    </div>

</div>

@endsection