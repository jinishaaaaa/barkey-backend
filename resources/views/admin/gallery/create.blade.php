<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Form</title>

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
                    <h2>Image Upload Form</h2>
                </div>

                <!-- Body -->
                <div class="card-body p-4">

                    <!-- Success Alert -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">

                        Upload Your Image 📸

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert">
                        </button>

                    </div>

                    <!-- Form Start -->
                    <form action="{{ route('gallery.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf

                        <!-- Title -->
                        <div class="mb-3">

                            <label class="form-label">
                                Image Title
                            </label>

                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   placeholder="Enter image title">

                            @error('title')
                                <span style="color:red">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">

                            <label class="form-label">
                                Upload Image
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
                                      placeholder="Write description"></textarea>

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

                                Upload Image

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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>