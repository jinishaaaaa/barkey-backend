<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Baking Gallery</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#f8f5f1;
        }

        /* Navbar */

        .navbar{
            background:#5c4033;
            padding:18px 0;
        }

        .navbar-brand{
            color:white !important;
            font-size:30px;
            font-weight:bold;
        }

        .nav-link{
            color:white !important;
            margin-left:20px;
            font-size:17px;
        }

        /* Hero Section */

/* HERO SECTION */

.hero{
    position:relative;
    width:100%;
    height:500px;
    overflow:hidden;

    display:flex;
    justify-content:center;
    align-items:center;
}

/* VIDEO */

.hero-video{

    position:absolute;

    top:50%;
    left:50%;

    width:177.77vh;
    height:56.25vw;

    min-width:100%;
    min-height:100%;

    transform:translate(-50%, -50%);

    pointer-events:none;
}

/* DARK OVERLAY */

.overlay{
    position:absolute;
    inset:0;
    background:rgba(0,0,0,0.5);
}

/* TEXT */

.hero-content{
    position:relative;
    z-index:2;

    text-align:center;
    color:white;
}

.hero-content h1{
    font-size:60px;
    font-weight:bold;
}

.hero-content p{
    font-size:20px;
    margin-top:10px;
}
        .section-title{
            text-align:center;
            margin-bottom:50px;
        }

        .section-title h2{
            font-size:42px;
            color:#5c4033;
            font-weight:bold;
        }

        .section-title p{
            color:gray;
        }

        /* Card */

        .gallery-card{
            border:none;
            border-radius:15px;
            overflow:hidden;
            transition:0.3s;
            display: flex;
            flex-direction: column;
        }

        .gallery-card:hover{
            transform:translateY(-10px);
        }

        .gallery-card img{
            height:250px;
            object-fit:cover;
        }

        .gallery-card .card-body{
            padding:25px;
        }

        .gallery-card h3{
            color:#5c4033;
            font-weight:bold;
        }

        .gallery-card h5{
            color:#888;
            font-size:16px;
        }

        .gallery-card small{
            color:gray;
        }

        /* Footer */

        footer{
            background:#5c4033;
            color:white;
            text-align:center;
            padding:25px;
            margin-top:60px;
        }

    </style>

</head>

<body>

    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <a class="navbar-brand"
               href="#">

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


    <!-- HERO SECTION START -->

<section class="hero">

    <!-- Background Video -->

    <iframe
    class="hero-video"

    src="https://www.youtube.com/embed/lAJ_zL5paMg?autoplay=1&mute=1&loop=1&playlist=lAJ_zL5paMg&controls=0"

    title="YouTube video"

    frameborder="0"

    allow="autoplay; encrypted-media"

    allowfullscreen>

</iframe>

    <!-- Overlay -->

    <div class="overlay"></div>

    <!-- Hero Content -->

    <div class="hero-content">

        <h1>Delicious Baking World</h1>

        <p>Fresh Cakes, Pastries & Bakery Collection</p>

    </div>

</section>

<!-- HERO SECTION END -->
    <!-- Gallery Section Start -->

    <section class="container py-5">

        <div class="section-title">

            <h2>
                Our Latest Baking Posts
            </h2>

            <p>
                Explore our delicious bakery creations
            </p>

        </div>

        <div class="row">

    @foreach($Datas as $data)

    <div class="col-md-4 mb-4">

        <div class="card gallery-card shadow h-100">

            <!-- Image -->
            <img src="{{ asset('storage/' . $data->image) }}"
                 class="card-img-top"
                 height="250"
                 style="object-fit:cover;">

            <!-- Card Body -->
            <div class="card-body">

                <h3>
                    {{ $data->title }}
                </h3>

                <h5>
                    {{ $data->subtitle }}
                </h5>

                <p>
                    {{ $data->description }}
                </p>

                <p>
                    {{ $data->message }}
                </p>

            </div>

            <!-- Footer -->
            <div class="card-footer bg-white border-0">

                <small>
                    {{ $data->author }}
                    |
                    {{ $data->date }}
                </small>

            </div>

        </div>

    </div>

    @endforeach

</div>

    </section>

    <!-- Gallery Section End -->


    <!-- Footer Start -->

    <footer>

        <h4>
            Baking Gallery
        </h4>

        <p>
            © 2026 All Rights Reserved
        </p>

    </footer>

    <!-- Footer End -->

</body>

</html>