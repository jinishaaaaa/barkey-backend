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
        @include('layouts.admin.sidebar')

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <!-- Header -->
            @include('layouts.admin.header')

            <!-- Cards -->
            @yield('content')

        </div>

    </div>

</div>

</body>

</html>