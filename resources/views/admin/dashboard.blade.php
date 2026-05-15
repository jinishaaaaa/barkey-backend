@extends('layouts.admin.master')
@section('content')
    <div class="row">

                <!-- Total Users -->
                <div class="col-md-4 mb-4">

                    <div class="card dashboard-card bg-primary text-white">

                        <div class="card-body">

                            <h5>Total Users</h5>

                            <h2>120</h2>

                        </div>

                    </div>

                </div>

                <!-- Blogs -->
                <div class="col-md-4 mb-4">

                    <div class="card dashboard-card bg-success text-white">

                        <div class="card-body">

                            <h5>Total Blogs</h5>

                            <h2>45</h2>

                        </div>

                    </div>

                </div>

                <!-- Messages -->
                <div class="col-md-4 mb-4">

                    <div class="card dashboard-card bg-danger text-white">

                        <div class="card-body">

                            <h5>Messages</h5>

                            <h2>30</h2>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Table -->
            <div class="card dashboard-card mt-4">

                <div class="card-header bg-dark text-white">
                    Recent Users
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-hover text-center">

                        <thead class="table-light">

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>john@gmail.com</td>
                                <td>
                                    <span class="badge bg-success">
                                        Active
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Jane Smith</td>
                                <td>jane@gmail.com</td>
                                <td>
                                    <span class="badge bg-danger">
                                        Inactive
                                    </span>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>
@endsection