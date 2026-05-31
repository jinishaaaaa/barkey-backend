<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Simple Gallery</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

    <!-- Header Start -->
    <nav class="navbar navbar-dark bg-dark py-3">

        <div class="container">

            <a class="navbar-brand fw-bold"
               href="#">

                My Gallery

            </a>

        </div>

    </nav>
    <!-- Header End -->


    <!-- Gallery Section Start -->
    <div class="container py-5">


        <div class="row">

            <!-- Card 1 -->
             @foreach($Datas as $data)
            <div class="col-md-4 mb-4">

                <div class="card shadow border-0 rounded-4">

                    <img src="{{ asset('storage/' . $data->image) }}"
                         class="card-img-top"
                         height="250"
                         style="object-fit:cover;">

                    <div class="card-body">

                        <h4 class="fw-bold">
                            {{ $data->title  }}
                        </h4>

                        <p class="text-muted">
                            {{ $data->description }}
                        </p>

                    </div>

                </div>

            </div>
         @endforeach
        </div>

    </div>
    <!-- Gallery Section End -->


    <!-- Footer Start -->
    <footer class="bg-dark text-white text-center py-3">

        <p class="mb-0">
            © 2026 My Gallery. All Rights Reserved.
        </p>

    </footer>
    <!-- Footer End -->

</body>

</html>