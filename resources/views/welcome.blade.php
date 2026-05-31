<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* top bar */
        .top-navbar {
          display: flex;
          justify-content: space-between;
          align-items: center;
          /* gap: 25px; */
          padding: 12px 20px;
          background-color:#e6c9a2;
          color: black;
          font-size: 18px;
          min-height: 3px;
          font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
       } 
       .top-navbar div{
        display: flex;
        align-items: center;
        gap: 4px;
        height: 5px;
       }

       body {
  font-family: Arial, sans-serif;
  
}

         /* topbar end */

/* NAVBAR */
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 18px 50px;
  background-color: #0c1b2a;
  position: relative;
}

/* LOGO */
.logo h2 {
  color: #c8a96a;
  letter-spacing: 5px;
}

.logo span {
  font-size: 10px;
  color: #c8a96a;
}

/* MENU */
.nav-menu {
  display: flex;
  list-style: none;
  gap: 200px;
}

.nav-menu li a {
  text-decoration: none;
  color:#c8a96a ;
  font-size: 20px;
  position: relative;
  padding-bottom: 5px;
}

/* underline effect */
.nav-menu li a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 2px;
  background-color: #c8a96a;
  transition: 0.3s;
}

.nav-menu li a:hover::after,
.nav-menu li a.active::after {
  width: 100%;
}

/* BUTTON */
.nav-btn a {
  text-decoration: none;
  color: #c8a96a;
  border: 1px solid #c8a96a;
  padding: 10px 18px;
  font-size: 18px;
}

/* HAMBURGER */
.hamburger {
  display: none;
  font-size: 26px;
  color: #c8a96a;
  cursor: pointer;
}

/* ---------------- MOBILE ---------------- */
@media (max-width: 900px) {

  .nav-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #0c1b2a;
    width: 100%;
    flex-direction: column;
    text-align: center;
    display: none;
  }

  .nav-menu.active {
    display: flex;
  }

  .nav-menu li {
    padding: 15px 0;
  }

  .nav-btn {
    display: none;
  }

  .hamburger {
    display: block;
  }
}

/* ===== HERO SECTION ===== */
.hero {
  width: 100%;
  height: 550px;
  background-image: url("./momo.jpg");
  background-size: cover;
  background-position: center;
  position: relative;
  margin-top: 0;
}

/* dark overlay */
.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.45);
}

/* text center */
.hero-overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;

}

/* title */
.hero-overlay h1 {
  font-size: 48px;
  letter-spacing: 4px;
  margin-bottom: 12px;
}

/* breadcrumb text */
.hero-overlay p {
  font-size: 12px;
  letter-spacing: 2px;
  opacity: 0.85;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .hero {
    height: 300px;
  }

  .hero-content h1 {
    font-size: 30px;
  }
}

/* ===== SECTION ===== */
.special-menu {
  background-color: #1f2b38;
  padding: 90px 7%;
  text-align: center;
  color: #fff;
}

/* small text */
.menu-tag {
  display: block;
  font-size: 14px;
  letter-spacing: 2px;
  color: #c9a45c;
  margin-bottom: 12px;
}

/* heading */
.special-menu h2 {
  font-size: 45px;
  margin-bottom: 18px;
  color: #e6c9a2;
}

/* paragraph */
.menu-text {
  max-width: 720px;
  margin: 0 auto 55px;
  font-size: 20px;
  line-height: 1.7;
  color: #d8d8d8;
}

/* ===== GRID ===== */
.menu-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 25px;
  padding: 0 90px;
}

/* ===== CARD ===== */
.menu-card {
  position: relative;
  height: 550px;
  overflow: hidden;
  object-fit: cover;
}

/* image */
.menu-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
  border-radius: 4px;
}

/* ===== OVERLAY ===== */
.menu-overlay {
  position: absolute;
  inset: 0;
  background: rgba(15, 23, 32, 0.85);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 30px;
  opacity: 0;
  transition: opacity 0.4s ease;
  text-align: center;
}

/* overlay text */
.menu-overlay h3 {
  font-size: 20px;
  margin-bottom: 10px;
  color: #fff;
}

.menu-overlay p {
  font-size: 14px;
  color: #d6d6d6;
  line-height: 1.6;
  margin-bottom: 15px;
}

.menu-overlay .price {
  font-size: 18px;
  color: #c9a45c;
  font-weight: bold;
}

/* ===== HOVER EFFECT ===== */
.menu-card:hover img {
  transform: scale(1.1);
}

.menu-card:hover .menu-overlay {
  opacity: 1;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 900px) {
  .menu-grid {
    grid-template-columns: 1fr;
  }

  .menu-card {
    height: 300px;
  }

  /* mobile touch support */
  .menu-card:active .menu-overlay {
    opacity: 1;
  }
}

.menu-section {
  background: #f6f2ec;
  padding: 80px 0;
}

.menu-container {
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
}

.menu-title {
  text-align: center;
  margin-bottom: 60px;
}

.menu-title span {
  font-size: 15px;
  letter-spacing: 2px;
  color:#0c1b2a;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.menu-title h2 {
  font-size: 36px;
  margin-top: 10px;
  letter-spacing: 2px;
  color: #1f2b38;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.menu-grid2 {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 60px;
}

.menu-item {
  margin-bottom: 35px;
}

.menu-head {
  display: flex;
  align-items: center;
}

.menu-head h4 {
  font-size: 20px;
  letter-spacing: 1px;
  white-space: nowrap;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.menu-head .line {
  flex: 1;
  height: 1px;
  border-bottom: 1px solid #c8a96a;
  margin: 0 12px;
}

.menu-head .price {
  font-weight: bold;
  font-size: 14px;
}

.menu-item p {
  font-size: 13px;
  color: #686868;
  margin-top: 6px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

@media (max-width: 768px) {
  .menu-grid2 {
    grid-template-columns: 1fr;
  }
}

/* images */

.single-image-section {
  background: #f6f2ec;
  padding: 80px 0;
  text-align: center;   /* 👈 image center */
}

.single-image-section img {
  width: 80%;           /* size control */
  max-width: 1200px;
  height: 480px;
  object-fit: cover;
}

/* responsive */

@media (max-width: 768px) {
  .single-image-section img {
    height: 300px;
    width: 90%;
  }
}


.menu-section2 {
  background: #f6f2ec;
  padding: 80px 0;
}

.menu-container2 {
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
}

/* GRID */
.menu-grid2 {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 80px;
}

/* COLUMN HEADING */
.column-heading {
  margin-bottom: 45px;
}

.column-heading span {
  font-size: 12px;
  letter-spacing: 2px;
  color: #777;
}

.column-heading h3 {
  font-size: 30px;
  margin-top: 8px;
  letter-spacing: 2px;
  color:#1f2b38;
}

/* MENU ITEM */
.menu-item2 {
  margin-bottom: 35px;
}

.menu-head2 {
  display: flex;
  align-items: center;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.menu-head2 h4 {
  font-size: 20px;
  letter-spacing: 1px;
  white-space: nowrap;
}

.menu-head2 .line {
  flex: 1;
  border-bottom: 1px solid #c9a45c;
  margin: 0 12px;
}

.menu-head2 .price {
  font-weight: bold;
  font-size: 14px;
}

.menu-item2 p {
  font-size: 13px;
  color: #777;
  margin-top: 6px;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .menu-grid2 {
    grid-template-columns: 1fr;
  }
}

/* images2 */

.single-image-section2 {
  background: #f6f2ec;
  padding: 80px 0;
  text-align: center;   /*  image center */
}

.single-image-section2 img {
  width: 90%;           /* size control */
  max-width: 1000px;
  height: 500px;
  object-fit: cover;
}

/* responsive */

@media (max-width: 768px) {
  .single-image-section2 img {
    height: 300px;
    width: 90%;
  }
}
  

/* formbooking */

.booking-section {
  background: #f6f2ec;
  padding: 90px 0;
  text-align: center;
}

.booking-container {
  max-width: 17000px;
  margin: auto;
  padding: 0 20px;
}

.sub-title {
  font-size: 15px;
  letter-spacing: 2px;
  color: #777;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.booking-container h2 {
  font-size: 40px;
  letter-spacing: 2px;
  margin: 12px 0;
  color:#1f2b38;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.desc {
  font-size: 19px;
  color: #666;
  max-width: 650px;
  margin: 0 auto 60px;
  line-height: 1.6;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  
}

/* CONTENT */
.booking-content {
  display: grid;
  grid-template-columns: 1fr 2fr 1fr;
  align-items: center;
  gap: 40px;
}

/* ROUND IMAGES */
.booking-img img {
  width: 260px;
  height: 260px;
  object-fit: cover;
  border-radius: 50%;
  margin: auto;
}

/* FORM */
.booking-form {
  display: flex;
  flex-direction: column;
  gap: 30px;
}

.booking-form input {
  padding: 17px;
  border: 1px solid #bbb;
  background: transparent;
  font-size: 15px;
  outline: none;
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 15px;
}

.booking-form button {
  margin-top: 20px;
  padding: 6px 28px;
  background: transparent;
  border: 1px solid #1f2b38;
  font-size: 12px;
  letter-spacing: 2.5px;
  cursor: pointer;
  transition: 0.3s;
  width: auto;
  height: 50px;
  display: block;
  margin: 30px auto 30px;
  color: #1f2b38;
}

.booking-form button:hover {
  background: #1f2b38;
  color: #c9a45c;
  transition: all 0.3s ease;
}


/* RESPONSIVE */
@media (max-width: 900px) {
  .booking-content {
    grid-template-columns: 1fr;
  }

  .booking-img img {
    width: 220px;
    height: 220px;
  }
}


/* footer */

.footer{
  background:#0c1b2a;
  color:#fff;
  padding:80px 0 30px;
  font-family:Arial, sans-serif;
}

.footer-container{
  max-width:1200px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:50px;
}

.footer-col h4{
  letter-spacing:2px;
  font-size:14px;
  color: #e6c9a2;
}

.line{
  width:40px;
  height:2px;
  background:#caa56a;
  margin:12px 0 25px;
}

.footer-col p{
  font-size:17px;
  line-height:1.8;
  opacity:.9;
}

.center{
  text-align:center;
  border-left:1px solid rgba(255,255,255,.15);
  border-right:1px solid rgba(255,255,255,.15);
  padding:0 40px;
}

.center h2{
  letter-spacing:4px;
  margin-bottom:8px;
  color: #e6c9a2;
}

.tagline{
  font-size:12px;
  letter-spacing:2px;
  opacity:.8;
  color: #e6c9a2;
}

.desc2{
  margin:25px 0;
  font-size:14px;
}

.social-icons{
  display:flex;
  justify-content:center;
  gap:15px;
}

.social-icons a{
  width:40px;
  height:35px;
  border:1px solid rgba(255,255,255,.4);
  display:flex;
  align-items:center;
  justify-content:center;
  border-radius:50%;
  color:#fff;
  transition:.3s;
}

.social-icons a:hover{
  background:#caa56a;
  border-color:#caa56a;
}

/* responsive */

@media(max-width:900px){
  .footer-container{
    grid-template-columns:1fr;
    text-align:center;
  }

  .center{
    border:none;
    padding:0;
  }

  
}




    </style>
</head>
<body>
    
    <!-- topbar start -->
    <div class="main-top">
    <div class="container">
        <div class="top-navbar">
            <div class="face logo">
                <i class="ri-facebook-circle-line"></i>
            <p>Facebook</p>
    </div>
    <div class="mail logo">
        <i class="ri-mail-line"></i>
        <p>chojola123@gmail.com</p>
    </div>
    <div class="phone logo">
        <i class="ri-phone-line"></i>
        <p>9829273994</p>
    </div>
</div>
</div>
</div>

<!-- top bar end -->


<nav class="navbar">

  <!-- Logo -->
  <div class="logo">
    <h2>CHOJOLA</h2>
    <span>RESTAURANT · BAR · COFFEE</span>
  </div>

  <!-- Menu -->
  <ul class="nav-menu" id="navMenu">
    <li><a href="index.html">HOME</a></li>
    <li><a href="pages.html">PAGES</a></li>
    <li><a href="menu.html">MENU</a></li>
    <li><a href="portfolio.html">PORTFOLIO</a></li>
    <li><a href="Blog.html">BLOG</a></li>
    <li><a href="contact.html">CONTACT</a></li>
  </ul>

  <!-- Button -->
  <div class="nav-btn">
    <a href="#">BOOK A TABLE</a>
  </div>

  <!-- Hamburger -->
  <div class="hamburger" id="hamburger">
    <i class="ri-menu-3-line"></i>
  </div>

</nav>

<!-- ===== HERO SECTION ===== -->
<section class="hero">
  <div class="hero-overlay">
    <h1>**MENU LIST**</h1>
    <p>HOME / MENU LIST</p>
  </div>
</section>


<!-- special menu -->
<section class="special-menu">

  <span class="menu-tag">TASTE THE BEST THAT SURPRISE YOU</span>
  <h2>OUR SPECIAL MENU</h2>

  <p class="menu-text">
    Enjoy the unique dishes from our restaurant that only our restaurant has.
    Our restaurant food shows the taste, texture, aroma, and appearance.
  </p>

  <div class="menu-grid">

    <!-- CARD 1 -->
    <div class="menu-card">
       <div data-aos="fade-left"  data-aos-duration="1000">
      <img src="./gralic bread.jpg" alt="Food">
      <div class="menu-overlay">
        <h3>Four Cheese Garlic Bread</h3>
        <p>Toasted French bread, cheddar cheese, garlic butter.</p>
        <span class="price">$18</span>
      </div>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="menu-card">
       <div data-aos="fade-up"  data-aos-duration="1000">
      <img src="./steak.jpg" alt="Food">
      <div class="menu-overlay">
        <h3>Tender Ribeye & Fennel</h3>
        <p>Citrus, wild rocket condiment, olive oil.</p>
        <span class="price">$25</span>
      </div>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="menu-card">
       <div data-aos="fade-right"  data-aos-duration="1000">
      <img src="./taos.jpg" alt="Food">
      <div class="menu-overlay">
        <h3>Mexican Beef Tacos</h3>
        <p>Grilled beef, avocado salsa, soft tortilla.</p>
        <span class="price">$22</span>
      </div>
   </div>
</div>

</section>

<section class="menu-section">
  <div class="menu-container">

    <div class="menu-title">
      <span>TOP RATED DISHES</span>
      <h2>-- MAIN MENU --</h2>
    </div>

    <div class="menu-grid2">

      <!-- LEFT COLUMN -->
      <div class="menu-column">
       <div data-aos="fade-up"  data-aos-duration="1000">
        <div class="menu-item">
          <div class="menu-head">
            <h4>TENDER OCTOPUS AND FENNEL</h4>
            <span class="line"></span>
            <span class="price">$25</span>
          </div>
          <p>Citrus, wild rocket condiment.</p>
        </div>

        <div class="menu-item">
          <div class="menu-head">
            <h4>PURPLE CORN TOSTADA</h4>
            <span class="line"></span>
            <span class="price">$36</span>
          </div>
          <p>Ricotta, goat cheese, beetroot and datterini.</p>
        </div>

        <div class="menu-item">
          <div class="menu-head">
            <h4>BRUNO’S SCRIBBLE</h4>
            <span class="line"></span>
            <span class="price">$59</span>
          </div>
          <p>Culatello, Spalla Cotta, Mortadella.</p>
        </div>
 
          <div class="menu-item">
          <div class="menu-head">
            <h4>BRUNO’S SCRIBBLE</h4>
            <span class="line"></span>
            <span class="price">$59</span>
          </div>
          <p>Culatello, Spalla Cotta, Mortadella.</p>
        </div>


         <div class="menu-item">
          <div class="menu-head">
            <h4>BRUNO’S SCRIBBLE</h4>
            <span class="line"></span>
            <span class="price">$59</span>
          </div>
          <p>Culatello, Spalla Cotta, Mortadella.</p>
        </div>
</div>

      </div>

      <!-- RIGHT COLUMN -->
      <div class="menu-column">
       <div data-aos="fade-up" data-aos-duration="1000">
        <div class="menu-item">
          <div class="menu-head">
            <h4>WILD MUSHROOM ARANCINI</h4>
            <span class="line"></span>
            <span class="price">$25</span>
          </div>
          <p>Citrus, wild rocket condiment.</p>
        </div>

        <div class="menu-item">
          <div class="menu-head">
            <h4>CRISPY SKIN CHICKEN</h4>
            <span class="line"></span>
            <span class="price">$36</span>
          </div>
          <p>Ricotta, goat cheese, beetroot.</p>
        </div>

        <div class="menu-item">
          <div class="menu-head">
            <h4>PRICKLY PEAR TONIC</h4>
            <span class="line"></span>
            <span class="price">$18</span>
          </div>
          <p>Prickly Pear, Chancaca, Key Lime.</p>
        </div>

         <div class="menu-item">
          <div class="menu-head">
            <h4>PRICKLY PEAR TONIC</h4>
            <span class="line"></span>
            <span class="price">$18</span>
          </div>
          <p>Prickly Pear, Chancaca, Key Lime.</p>
        </div>

         <div class="menu-item">
          <div class="menu-head">
            <h4>PRICKLY PEAR TONIC</h4>
            <span class="line"></span>
            <span class="price">$18</span>
          </div>
          <p>Prickly Pear, Chancaca, Key Lime.</p>
        </div>

      </div>

</div>

    </div>

  </div>
</section>


<!-- images -->

<section class="single-image-section">
  <div data-aos="fade-up" data-aos-duration="1000">
  <img src="./korean bbq.jpg" alt="Food">
  </div>
</section>


<section class="menu-section2">
  <div class="menu-container2">

    <div class="menu-grid2">

      <!-- LEFT : SEAFOOD -->
      <div class="menu-column">
       <div data-aos="fade-up" data-aos-duration="1000">
        <div class="column-heading">
          <span>FRESH FROM THE OCEAN</span>
          <h3>SEAFOOD</h3>
        </div>

        <div class="menu-item2">
          <div class="menu-head2">
            <h4>TENDER OCTOPUS AND FENNEL</h4>
            <span class="line"></span>
            <span class="price">$25</span>
          </div>
          <p>Citrus, wild rocket condiment.</p>
        </div>

        <div class="menu-item2">
          <div class="menu-head2">
            <h4>GRILLED SALMON FILLET</h4>
            <span class="line"></span>
            <span class="price">$32</span>
          </div>
          <p>Lemon butter sauce, herbs.</p>
        </div>

        <div class="menu-item2">
          <div class="menu-head2">
            <h4>PURPLE CORN TOSTADA</h4>
            <span class="line"></span>
            <span class="price">$32</span>
          </div>
          <p>Lemon butter sauce, herbs.</p>
        </div>

        <div class="menu-item2">
          <div class="menu-head2">
            <h4>FISH & CHIPS</h4>
            <span class="line"></span>
            <span class="price">$32</span>
          </div>
          <p>Lemon butter sauce, herbs.</p>
        </div>

        <div class="menu-item2">
          <div class="menu-head2">
            <h4>GRILLED SALMON FILLET</h4>
            <span class="line"></span>
            <span class="price">$32</span>
          </div>
          <p>Lemon butter sauce, herbs.</p>
        </div>
      
      </div>
</div>
      <!-- RIGHT : DESSERT -->
      <div class="menu-column2">
        <div data-aos="fade-up" data-aos-duration="1000">
        <div class="column-heading">
          
          <span>FOOD OF HEALTH</span>
          <h3>DESSERT</h3>
        </div>

        <div class="menu-item2">
          <div class="menu-head2">
            <h4>CHOCOLATE LAVA CAKE</h4>
            <span class="line"></span>
            <span class="price">$15</span>
          </div>
          <p>Warm chocolate, vanilla ice cream.</p>
        </div>

        <div class="menu-item2">
          <div class="menu-head2">
            <h4>CHEESECAKE</h4>
            <span class="line"></span>
            <span class="price">$18</span>
          </div>
          <p>Cream cheese, berry sauce.</p>
        </div>

        <div class="menu-item2">
          <div class="menu-head2">
            <h4>WAFFLES</h4>
            <span class="line"></span>
            <span class="price">$18</span>
          </div>
          <p>Cream chocolate, Coco sauce.</p>
        </div>

      <div class="menu-item2">
          <div class="menu-head2">
            <h4>WHITECAKE</h4>
            <span class="line"></span>
            <span class="price">$18</span>
          </div>
          <p>Cream cheese, White Coco sauce.</p>
        </div>

        <div class="menu-item2">
          <div class="menu-head2">
            <h4>COCO MOKO LAVA</h4>
            <span class="line"></span>
            <span class="price">$18</span>
          </div>
          <p>Cream cheese, Coco sauce.</p>
        </div>


      </div>


      </div>

    </div>
  </div>
</section>

<!-- images2 -->

<section class="single-image-section2">
  <div data-aos="fade-up" data-aos-duration="1000">
  <img src="./cake2.jpg" alt="Food">
  </div>
</section>


<!-- formbooking -->

<section class="booking-section">
  <div data-aos="zoom-in-left" data-aos-duration="1000">
  <div class="booking-container">

    <span class="sub-title">YOUR SPECIAL MOMENT</span>
    <h2>BOOK A TABLE</h2>
    <p class="desc">
      Book a table online and dine at basilico restaurant to enjoy the special flavors,
      cozy space with your family and loved ones!
    </p>

    <div class="booking-content">

      <!-- LEFT IMAGE -->
      <div class="booking-img">
        <img src="./table.jpg" alt="Restaurant Interior">
      </div>

      <!-- FORM -->
      <form class="booking-form">
        <input type="text" placeholder="Name*" required>

        <div class="form-row">
          <input type="text" placeholder="Phone*" required>
          <input type="time" placeholder="Arrival time">
        </div>

        <div class="form-row">
          <input type="number" placeholder="Amount of people">
          <input type="date">
        </div>

        <button type="submit">BOOK YOUR TABLE</button>
      </form>

      <!-- RIGHT IMAGE -->
      <div class="booking-img">
        <img src="./hotel1.jpg" alt="Table Setup">
      </div>

    </div>
  </div>
</div>
</section>



<!-- footer -->
\
<footer class="footer">
  <div class="footer-container">

    <!-- LEFT -->
    <div class="footer-col">
      <h4>WE ARE HERE</h4>
      <div class="line"></div>

      <p><strong>LOCATION:</strong><br>
        NEPAL<br>
        Sauraha Chowk, Chitwan
      </p>

      <p><strong>BOOK A TABLE:</strong><br>
        Chojola123@gmail.com<br>
        9829273994
      </p>
    </div>

    <!-- CENTER -->
    <div class="footer-col center">
      <h2>BASILICO</h2>
      <span class="tagline">RESTAURANT · BAR · COFFEE </span>

      <p class="desc2">
        Our buzzy food-hall style concept is inspired by international
        dining styles, especially in Asia.
      </p>

      <div class="social-icons">
        <a href="#"><i class="ri-facebook-fill"></i></a>
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-google-fill"></i></a>
  
      </div>
    </div>

    <!-- RIGHT -->
    <div class="footer-col">
      <h4>OPENING TIME</h4>
      <div class="line"></div>

      <p>Mon – Fri: 9:00am – 22:00pm</p>
      <p>Sat: 10:00am – 23:00pm</p>
      <p>Sun: 5:00pm – 23:00pm</p>
      <p>Holidays: Closed</p>
      <p><strong>Happy Hours:</strong> 18:00pm – 20:00pm</p>
    </div>

  </div>
  </footer>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
</body>
</html>