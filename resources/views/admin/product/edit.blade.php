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
                    <h2>Edit Product Page</h2>
                </div>

                <!-- Body -->
                <div class="card-body p-4">

                    <!-- Alert -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Update Your Product Information ✍️

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert">
                        </button>
                    </div>

                    <!-- Form -->
                    <form action="{{ route('product.update', $product->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mb-3">

                            <label class="form-label">Name</label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Enter name"
                                   value="{{ $product->name }}">

                            @error('name')
                                <span style="color:red">{{ $message }}</span>
                            @enderror

                        </div>

                        

                        </div>

                        <!-- Description -->
                        <div class="mb-3">

                            <label class="form-label">Description</label>

                            <textarea name="description"
                                      rows="5"
                                      class="form-control"
                                      placeholder="Write description">{{ $product->description }}</textarea>

                            @error('description')
                                <span style="color:red">{{ $message }}</span>
                            @enderror

                        </div>

                        <!-- Price -->
                        <div class="mb-3">

                            <label class="form-label">Price</label>

                            <input type="text"
                                   name="price"
                                   class="form-control"
                                   placeholder="Enter price"
                                   value="{{ $product->price }}">

                            @error('price')
                                <span style="color:red">{{ $message }}</span>
                            @enderror

                        </div>

                        <!-- Date -->
                        <div class="mb-3">

                            <label class="form-label">Category</label>

                            <input type="text"
                                   name="category"
                                   class="form-control"
                                   value="{{ $product->category }}">

                            @error('category')
                                <span style="color:red">{{ $message }}</span>
                            @enderror

                        </div>




                        <!-- Button -->
                        <div class="d-grid">

                            <button type="submit"
                                    class="btn btn-primary fw-bold">
                                Update Product
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