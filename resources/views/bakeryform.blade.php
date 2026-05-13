<!DOCTYPE html>
<html>
<head>
    <title>Baking Class Registration Form</title>

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
                <div class="card-header bg-danger text-white text-center py-3">
                    <h2>Baking Class Registration</h2>
                </div>

                <!-- Body -->
                <div class="card-body p-4">

                    <!-- Alert -->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Welcome to our Baking Class 🎂

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert">
                        </button>
                    </div>

                    <!-- Form -->
                    <form action="{{ route('bakerybutton') }}" method="POST">

                        @csrf

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>

                            <input type="text"
                                   name="fullname"
                                   class="form-control"
                                   placeholder="Enter your full name">
                            @error('fullname')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>

                            <input type="text"
                                   name="phonenumber"
                                   class="form-control"
                                   placeholder="Enter phone number">
                            @error('phonenumber')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>

                            <input type="email"
                                   name="emailaddress"
                                   class="form-control"
                                   placeholder="Enter email address">
                            @error('email')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Course -->
                        <div class="mb-3">
                            <label class="form-label">Select Course</label>

                            <select name="coursesection" class="form-select">
                                <option>Select Course</option>
                                <option>Basic Baking</option>
                                <option>Cake Decoration</option>
                                <option>Pastry Making</option>
                                <option>Chocolate Class</option>
                            </select>
                            @error('coursesection')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Duration -->
                        <div class="mb-3">
                            <label class="form-label">Class Duration</label>

                            <select name="durationsection" class="form-select">
                                <option>Select Duration</option>
                                <option>1 Month</option>
                                <option>2 Months</option>
                                <option>3 Months</option>
                            </select>
                            @error('durationsection')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Message -->
                        <div class="mb-3">
                            <label class="form-label">Message</label>

                            <textarea name="message"
                                      rows="4"
                                      class="form-control"
                                      placeholder="Write your message"></textarea>
                            @error('message')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Button -->
                        <div class="d-grid">
                            <button type="submit"
                                    class="btn btn-danger fw-bold">
                                Register Now
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