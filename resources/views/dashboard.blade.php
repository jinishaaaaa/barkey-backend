<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>

        body{
            background:#f4f6f9;
        }

        .sidebar{
            height:100vh;
            background:#212529;
            padding-top:20px;
        }

        .sidebar a{
            color:white;
            text-decoration:none;
            display:block;
            padding:12px 20px;
            margin-bottom:5px;
            border-radius:8px;
        }

        .sidebar a:hover{
            background:#0d6efd;
        }

        .dashboard-card{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }

    </style>

</head>

<body>

<div class="container-fluid">

    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">

            <h3 class="text-white text-center mb-4">
                Admin Panel
            </h3>

            <a href="#">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>

            <a href="#">
                <i class="bi bi-people"></i>
                Users
            </a>

            <a href="#">
                <i class="bi bi-table"></i>
                Tables
            </a>

            <a href="#">
                <i class="bi bi-file-earmark-text"></i>
                Blogs
            </a>

            <a href="#">
                <i class="bi bi-gear"></i>
                Settings
            </a>

            <a href="#">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </a>

        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <h2>
                    Welcome Admin 👋
                </h2>

                <button class="btn btn-primary">
                    Admin Profile
                </button>

            </div>

            <!-- Cards -->
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

        </div>

    </div>

</div>

</body>

</html>