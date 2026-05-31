<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Baking Gallery</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background:#f8f5f1;
            font-family:Arial, sans-serif;
        }

        /* Navbar */
        .navbar{
            background:#4e342e;
            padding:15px 0;
        }

        .navbar-brand{
            color:white !important;
            font-size:28px;
            font-weight:bold;
        }

        .nav-link{
            color:white !important;
            margin-left:20px;
            font-size:17px;
        }

        /* Hero Section */
        .hero{
            height:500px;
            background:url('https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=1200')
            center/cover no-repeat;

            display:flex;
            justify-content:center;
            align-items:center;
            text-align:center;
            color:white;
            position:relative;
        }

        .hero::before{
            content:'';
            position:absolute;
            inset:0;
            background:rgba(0,0,0,0.5);
        }

        .hero-content{
            position:relative;
            z-index:2;
        }

        .hero-content h1{
            font-size:60px;
            font-weight:bold;
        }

        .hero-content p{
            font-size:20px;
            margin-top:12px;
        }

        .hero-content a{
            margin-top:20px;
        }

        /* Section Title */
        .section-title{
            text-align:center;
            margin-bottom:50px;
        }

        .section-title h2{
            font-size:40px;
            color:#4e342e;
            font-weight:bold;
        }

        .section-title p{
            color:gray;
        }

        /* Gallery Card */
        .gallery-card{
            border:none;
            border-radius:15px;
            overflow:hidden;
            transition:0.3s;
        }

        .gallery-card:hover{
            transform:translateY(-10px);
        }

        .gallery-card img{
            height:200px;
            object-fit:cover;
        }

        .gallery-card .card-body{
            padding:20px;
        }

        .gallery-card h4{
            color:#4e342e;
            font-weight:bold;
        }

        /* Footer */
        footer{
            background:#4e342e;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:60px;
        }

    </style>

</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <a class="navbar-brand" href="#">
                Baking Gallery
            </a>

            <div>

                <a class="nav-link d-inline"
                   href="#">
                    Home
                </a>

                <a class="nav-link d-inline"
                   href="#">
                    Gallery
                </a>

                <a class="nav-link d-inline"
                   href="#">
                    Contact
                </a>

            </div>

        </div>

    </nav>
    <!-- Navbar End -->


    <!-- Hero Section Start -->
    <section class="hero">

        <div class="hero-content">

            <h1>
                Delicious Baking Creations
            </h1>

            <p>
                Fresh cakes, pastries and bakery items made with love.
            </p>

            <a href="#gallery"
               class="btn btn-warning btn-lg">

                Explore Gallery

            </a>

        </div>

    </section>
    <!-- Hero Section End -->


    <!-- Gallery Section Start -->
    <section class="container py-5"
             id="gallery">

        <div class="section-title">

            <h2>
                Our Baking Gallery
            </h2>

            <p>
                Sweet and delicious bakery collection
            </p>

        </div>

        <div class="row">

            <!-- Card 1 -->
             @foreach($Datas as $data)
            <div class="col-md-4 mb-4">

                <div class="card gallery-card shadow">

                    <img src="{{ asset('storage/' . $data->image) }}"
                         class="card-img-top">

                    <div class="card-body">

                        <h4>
                            {{ $data->name }}
                        </h4>

                        <p>
                            {{ $data->description }}
                        </p>

                    </div>

                </div>

            </div>

            

          @endforeach  

        </div>

    </section>
    <!-- Gallery Section End -->


    <!-- Footer Start -->
    <footer>

        <h5>
            Baking Gallery
        </h5>

        <p>
            © 2026 All Rights Reserved
        </p>

    </footer>
    <!-- Footer End -->


</body>

</html>