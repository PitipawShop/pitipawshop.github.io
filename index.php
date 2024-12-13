<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=dev-width, initial-scale=1.0" />
    <title>Pitipaw</title>
    <link rel="shortcut icon" type="image" href="./img/logobetul.png" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- bootstrap links -->
     <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Faculty Glyphic", sans-serif;
}
.all-content {
  background: rgb(233, 197, 208);
}

/* navbar */
#navbar {
  background-color: #e86278;
  padding-left: 10px;
  padding-right: 10px;
  font-weight: bold;
}
#logo {
  font-size: 23px;
  color: white;
}
#logo img {
  margin-bottom: 15px;
}
.navbar-nav {
  margin-left: 10px;
}
.nav-link {
  color: white;
  font-weight: bold;
  text-shadow: 1px 1px 1px rgb(81, 0, 0);
  margin-left: 15px;
  transition: 0.5s ease;
}
.nav-link:hover {
  display: flex;
  width: 100%;
  height: auto;
  justify-content: center;
  align-items: center;
  background-color: rgb(220, 52, 80);
  color: white;
  border-radius: 5px;
}
/* dropdown category */
.dropdown-item {
  margin-left: 10px;
  font-weight: bold;
  text-shadow: 1px 1px 1px rgb(81, 0, 0);
  margin-right: 15px;
  transition: 0.5s ease;
}
.dropdown-menu {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #e82d4c;
  padding-left: 10px;
  padding-right: 10px;
  font-weight: bold;
}
.dropdown-menu a {
  color: rgb(146, 0, 51);
  font-weight: bold;
  text-shadow: 1px 1px 1px rgb(245, 171, 171);
  margin-left: 15px;
  transition: 0.5s ease;
}
.dropdown-menu a:hover {
  display: flex;
  width: 100%;
  height: auto;
  justify-content: center;
  align-items: center;
  background-color: rgb(220, 52, 80);
  color: rgb(255, 197, 225);
  text-shadow: 1px 1px 1px rgb(81, 0, 0);
  border-radius: 5px;
}

.dropdown-item dropdown-toggle {
  display: flex;
  justify-content: center;
}
/* dropdown category */

.icons {
  margin-left: 30px;
}
.icons img {
  margin-left: 10px;
  transition: 0.5s ease;
  cursor: pointer;
}
.icons img:hover {
  transform: translateY(-5px);
}
@media screen and (max-width: 330px) {
  #logo {
    font-size: 15px;
  }
}
/* navbar end */
/* home section */
.home {
  width: 100%;
  height: 88.5vh;
  display: flex;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(./img/backg.png);
  background-size: cover;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  position: relative;
  z-index: 0;
}
.home .img {
  flex: 1 1 400px;
}
.home .img img {
  width: 100%;
}
.home .content {
  flex: 1 1 400px;
  margin-left: 60px;
}
.content h3 {
  color: white;
  font-size: 60px;
  font-weight: bold;
  text-shadow: 1px 1px 1px black;
}
.content h2 {
  font-size: 60px;
  color: white;
  text-shadow: 1px 1px 1px black;
  font-weight: bold;
}
.changecontent::after {
  content: " ";
  color: #e86278;
  animation: changetext 10s infinite linear;
  font-weight: bold;
}
@keyframes changetext {
  0% {
    content: "Keychain";
  }
  20% {
    content: "Strap Bag";
  }
  50% {
    content: "Lanyard Phone";
  }
  60% {
    content: "Hiasan Dinding";
  }
  100% {
    content: "Custom Sesukamu!";
  }
}
.content p {
  color: white;
  font-weight: bold;
  text-shadow: 1px 1px 1px black;
}
.content .btn {
  width: 110px;
  height: 38px;
  background-color: #e86278;
  color: white;
}
@media screen and (max-width: 800px) {
  .content h3 {
    font-size: 50px;
  }
}
@media screen and (max-width: 860px) {
  .home {
    height: 120vh;
  }
}
@media screen and (max-width: 560px) {
  .home {
    height: 100vh;
  }
}
@media screen and (max-width: 330px) {
  .content h2 {
    font-size: 30px;
  }
  .content h3 {
    font-size: 30px;
  }
}
/* home section end */

/* top cards */
#box {
  margin-top: 50px;
}
#box .card {
  box-shadow: 0px 0px 5px black;
  margin-top: 10px;
  transition: 0.5s ease;
  cursor: pointer;
}
#box .card:hover {
  transform: translateY(-10px);
}
/* top cards end */
/* banner */
.banner {
  width: 100%;
  height: 88.5vh;
  display: flex;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(./img/backg.png);
  background-size: cover;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  position: relative;
  z-index: 0;
  margin-top: 50px;
}
.banner .img {
  flex: 1 1 400px;
}
.banner .img img {
  width: 100%;
  height: 100%;
  display: flex;
  object-fit: cover;
  justify-content: center;
  align-items: center;
  width: 90%;
}
.banner .content {
  flex: 1 1 400px;
  margin-left: 60px;
}
.banner .content h3 {
  color: white;
  font-size: 60px;
  font-weight: bold;
  text-shadow: 1px 1px 1px black;
}
.banner .content h2 {
  font-size: 60px;
  color: white;
  text-shadow: 1px 1px 1px black;
  font-weight: bold;
}
.banner .content p {
  color: #e86278;
}
#btnorder button {
  width: 150px;
  height: 32px;
  letter-spacing: 5px;
  background-color: #e86278;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
@media screen and (max-width: 800px) {
  .banner .content h3 {
    font-size: 50px;
  }
}
@media screen and (max-width: 1366px) {
  .banner {
    height: 120vh;
  }
}
@media screen and (max-width: 560px) {
  .banner {
    height: 100vh;
  }
}
@media screen and (max-width: 330px) {
  .banner {
    display: none;
    width: 100%;
    justify-content: center;
    align-items: center;
  }
}
@media screen and (max-width: 768px) {
  .banner {
    display: none;
  }
}
/* banner end */
/* product cards */
#product-cards h1 {
  text-align: center;
  font-weight: bold;
  margin-top: 50px;
  color: #e86278;
  text-shadow: 1px 1px 1px black;
  border-bottom: 2px solid #e86278;
}
#product-cards .card {
  background-color: #e86278;
  box-shadow: 0 0 3px black;
  border-radius: 5px;
  cursor: pointer;
}
.overlay {
  display: block;
  opacity: 0;
  position: absolute;
  top: 10%;
  margin-left: 0;
  width: 70px;
}
#product-cards .card:hover .overlay {
  opacity: 1;
  margin-left: 5%;
  transition: 0.5s ease;
}
.overlay i img {
  background-color: #652839;
  height: 30px;
  width: 30px;
  font-size: 20px;
  padding: 7px;
  margin: -20%;
  margin-bottom: 5%;
  cursor: pointer;
}
.overlay .btn-secondary {
  background: transparent !important;
  border: none;
  box-shadow: none;
}
#product-cards h3 {
  color: white;
  text-shadow: 1px 1px 1px black;
}
.star .checked {
  color: yellow;
}
#product-cards p {
  color: #ffe4f1;
  font-weight: bold;
}
#product-cards h6 {
  font-size: 20px;
  color: #ffe4f1;
  font-weight: bold;
}
#product-cards h6 span button {
  color: #750013;
  width: 100px;
  height: 26px;
  font-size: 15px;
  background: transparent;
  letter-spacing: 3px;
  border: 2px solid #e86278;
  border-radius: 5px;
  float: right;
  font-weight: bold;
  transition: 0.5s ease;
  cursor: pointer;
}
#product-cards h6 span button:hover {
  background-color: antiquewhite;
  color: rgb(255, 44, 79);
}

/* product cards end */

/* gallary */
#gallary {
  margin-top: 50px;
}
#gallary h1 {
  text-align: center;
  font-weight: bold;
  margin-top: 50px;
  color: #e86278;
  text-shadow: 1px 1px 1px black;
  border-bottom: 2px solid #e86278;
}
#gallary .card {
  box-shadow: 3px 3px 3px black;
  cursor: pointer;
}
#gallary .overlay {
  opacity: 0;
  width: 100%;
  color: white;
  text-shadow: 1px 1px 1px black;
}
#gallary .card:hover .overlay {
  opacity: 5;
  margin-top: 20%;
  transition: 0.5s ease;
}
/* gallary */

/* about */
#about {
  margin-top: 50px;
}
#about h1 {
  text-align: center;
  font-weight: bold;
  margin-top: 50px;
  color: #e86278;
  text-shadow: 1px 1px 1px black;
  border-bottom: 2px solid #e86278;
}
#about .card {
  background-color: #e86278;
  box-shadow: 0px 0px 5px black;
}
#about p {
  color: #e86278;
  word-spacing: 5px;
  letter-spacing: 1.5px;
  text-shadow: 1px 1px 1px rgb(255, 211, 233);
  font-weight: bold;
}
#bt button {
  width: 150px;
  height: 32px;
  letter-spacing: 3px;
  background-color: #e86278;
  color: white;
  border: none;
  cursor: pointer;
}
@media screen and (max-width: 1000px) {
  #about p {
    font-size: 10px;
  }
}
@media screen and (max-width: 760px) {
  #about p {
    font-size: 20px;
  }
}
/* about */

/* contact */
#contact {
  margin-top: 100px;
}
#contact h1 {
  text-align: center;
  font-weight: bold;
  margin-top: 50px;
  color: #e86278;
  text-shadow: 1px 1px 1px rgb(255, 211, 233);
  border-bottom: 2px solid #e86278;
}
#contact input {
  background-color: #e86278;
}
#contact input::placeholder {
  color: white;
}
#contact textarea {
  background-color: #e86278;
}
#contact textarea::placeholder {
  color: white;
}
#messagebtn {
  text-align: center;
}
#messagebtn button {
  width: 200px;
  height: 30px;
  letter-spacing: 3px;
  font-weight: bold;
  background: transparent;
  border: 2px solid #e86278;
  color: #e86278;
  transition: 0.5s;
  cursor: pointer;
}
#messagebtn button:hover {
  color: white;
  border: 2px solid white;
  background-color: #e86278;
}
/* contact */

/* footer */

/* after */
/* footer */

.footer {
  display: flex;
  margin-top: 40px;
  justify-content: space-around;
  background-color: #161616;
  width: 100%;
  height: auto;
}

.footer .teks {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  gap: 100px;
  margin: 30px;
}

.footer .bag1 h1 {
  font-size: 25px;
  color: white;
  text-shadow: 1px 1px 4px black;
}

.judul img {
  width: 150px;
}

.footer .bag1 ul {
  list-style: none;
}

.footer .bag1 ul li {
  margin-top: 10px;
}

.footer .bag1 ul li a {
  text-decoration: none;
  color: white;
  font-weight: 500;
  font-size: 14px;
}

.footer .bag2 {
  width: 300px;
}

.footer .bag2 h1 {
  font-size: 35px;
  color: white;
  text-shadow: 1px 1px 4px black;
}

.footer .bag2 p {
  font-size: 14px;
  color: white;
  margin-top: 10px;
}

.footer .bag3 {
  width: 300px;
}

.footer .bag3 .logo5 {
  margin-top: 10px;
}

.footer .bag3 .logo5 img {
  width: 30px;
}

.bag3 {
  text-align: center; /* Mengatur teks dan konten di dalam .bag3 menjadi rata tengah */
}

.logo5 {
  margin: 20px 0; /* Menambahkan jarak vertikal di atas dan bawah div .logo5 */
}

.logo5 .ig a {
  display: inline-block; /* Membuat tautan menjadi inline-block agar bisa diatur */
}

.logo5 .ig img {
  max-width: 100%; /* Membuat gambar responsif */
  height: auto; /* Memastikan tinggi gambar otomatis menyesuaikan proporsi */
  margin: 0 auto; /* Menjaga gambar tetap di tengah jika ada ruang ekstra */
}

.footer .bag3 h1 {
  font-size: 35px;
  color: white;
  text-shadow: 1px 1px 4px black;
}

.footer .bag3 p {
  font-size: 14px;
  color: white;
  margin-top: 10px;
}

.wave svg {
  margin-top: -14rem;
}

@media (max-width: 480px) {
  .footer1 {
    display: none;
  }
  #footer2 {
    width: 100%;
    background-color: #e86278;
    box-shadow: 0px 0px 5px black;
    margin-top: 50px;
    padding-bottom: 50px;
  }
  #footer2 h1 {
    color: white;
    padding-top: 30px;
  }
  #footer2 p {
    color: white;
  }
  .icons i {
    background-color: white;
    color: #e86278;
    border-radius: 50px;
    padding: 6px;
    font-size: 30px;
    transition: 0.5s;
    cursor: pointer;
  }
  .icons i:hover {
    background-color: #e86278;
    color: white;
  }
  /* before */
  .container3 .kanan {
    text-align: center;
    width: 400px;
    margin: auto;
  }

  .wave svg {
    margin-top: 0;
  }

  .text {
    text-align: justify;
  }

  .dalam2 hr {
    display: none;
  }

  .kontainer1 {
    flex-direction: column-reverse;
    width: 100%;
  }

  .kontainer1 .bag1 {
    margin-top: 0;
    text-align: center;
    width: 100%;
  }

  .kontainer1 .bag2 img {
    width: 357px;
    height: auto;
  }
}
/* after */

/* .copyright {
  color: white;
  margin-top: 20px;
}
.credite {
  color: white;
} */
/* footer */

html {
  scroll-behavior: smooth;
}
.arrow {
  position: fixed;
  background-color: #e86278;
  border-radius: 50px;
  height: 50px;
  bottom: 40px;
  right: 50px;
  text-decoration: none;
  text-align: center;
  line-height: 50px;
}
@media (min-width: 767px) {
  .footerke2 {
    display: none;
  }
}

     </style>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap links -->
    <!-- fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Faculty+Glyphic&display=swap"
      rel="stylesheet"
    />
    <!-- fonts link -->
    <!-- icons links -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- icons links -->

    <!-- animation links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- animation links -->

    <!-- google analytics -->
    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-1KTYHF7211"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-1KTYHF7211");
    </script>
    <!-- google analytics -->
  </head>
  <body>
    <div class="all-content">
      <!-- navbar -->
      <nav class="navbar navbar-expand-md" id="navbar">
        <!-- Brand -->
        <a class="navbar-brand" href="#" id="logo"
          ><img
            src="./img/Logo Staight Piti.png"
            alt=""
            width="100px"
            height="auto"
          />
        </a>

        <!-- Toggler/collapsibe Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavbar"
        >
          <span><img src="./img/menu.png" alt="" width="30px" /></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <!-- dropdown -->
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                id="navbardrop"
                data-toggle="dropdown"
                >Category
              </a>
              <!-- dalem dropdown category-->
              <div class="dropdown-menu">
                <a
                  href="#"
                  class="dropdown-item dropdown-toggle"
                  id="subnavbardrop"
                  data-toggle="dropdown"
                  >Keychain</a
                >
                <div class="dropdown-menu sub-menu">
                  <a
                    href="#SpecialEDT"
                    class="dropdown-item"
                    id="navbardrop"
                    data-toggle="dropdown"
                    >Special Edition</a
                  >
                  <a
                    href="#"
                    class="dropdown-item"
                    id="navbardrop"
                    data-toggle="dropdown"
                    >Pretzel</a
                  >
                </div>
                <!-- end dalem dropdown category-->
                <a href="#" class="dropdown-item">Strap Bag</a>
                <a href="#" class="dropdown-item">Lanyard</a>
              </div>
            </li>
            <!-- dropdown -->
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#favorit">Favorite</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
        <div>
          <span>Keranjang: <span id="cart-count">0</span> item</span>
          <button id="checkout-button">Checkout</button>
        </div>
        <!-- <div class="icons">
          <img src="./img/user.png" alt="" width="20px" />
          <img src="./img/cnd.png" alt="" width="20px" />
          <img src="./img/ct.png" alt="" width="24px" />
        </div> -->
      </nav>
      <!-- end navbar -->

      <!-- home section -->
      <div id="home" class="home">
        <div class="content" data-aos="zoom-out-right">
          <h3>Pitipaw <br />Handmade Crafting</h3>
          <h2>Category <span class="changecontent"></span></h2>
          <p>
            Cutom warna sesuka hatimu (❁´◡`❁)
            <br />Detail produk ada di bawah.
          </p>
          <!-- <a href="#" class="btn">Order Now</a> -->
        </div>
        <div class="img" data-aos="zoom-out-left">
          <img src="./img/8x6 no bg.png" alt="" width="100%" height="auto" />
        </div>
      </div>
      <!-- home section end -->

      <!-- top cards -->
      <div
        class="container"
        id="box"
        data-aos="fade-up"
        data-aos-duration="1500"
      >
        <div id="favorit" class="row">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/cnd.png" alt="" />
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/ct.png" alt="" />
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/bee.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- top cards end -->

      <!-- banner -->
      <div class="banner" data-aos="fade-up" data-aos-duration="1500">
        <div class="content">
          <h3>Lanyard</h3>
          <h2>UP TO 50% OFF</h2>
          <p>
            Lanyard phone adalah tali gantungan ponsel yang dapat digunakan
            untuk menggantungkan ponsel agar tetap aman dan mudah diambil. for
            all type of phone
          </p>
          <!-- <div id="btnorder"><button>Order Now</button></div> -->
        </div>
        <div class="img">
          <img
            src="./img/lanyard no bg.png"
            alt=""
            width="100%"
            height="auto"
          />
        </div>
      </div>
      <!-- banner end -->

      <!-- product cards -->
      <section id="product-cards" data-aos="fade-up" data-aos-duration="1500">
        <div id="SpecialEDT" class="container">
          <h1>Special Edition</h1>
          <div class="row" style="margin-top: 50px">
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/ct.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>Variant Cutie</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/nct.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>Variant NCT</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/bee.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>Variant Bee</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/pw.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                  </div>
                  <p>Variant Pinky White</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <!-- BARU SEGINI -->

          <div
            class="row"
            style="margin-top: 50px"
            data-aos="fade-up"
            data-aos-duration="1500"
          >
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/sea.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>Variant Sea</p>
                  <h6>
                    IDR 15K <span><button>Add Cart</button></span>
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/beach.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>Variant Beach</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/cnd.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <p>Variant Candies</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/mrps.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                  </div>
                  <p>Variant Mariposa</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="product-cards" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
          <h1>Other</h1>
          <div class="row" style="margin-top: 50px">
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/deep.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                  </div>
                  <p>Variant Deep</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/bp.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                  </div>
                  <p>Variant Black Pink</p>
                  <h6>
                    300.20 <span><button>Add Cart</button></span>
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/calmy.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                  </div>
                  <p>Variant Calmy</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Quick View"
                  >
                    <i><img src="./img/views.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Wishlist"
                  >
                    <i><img src="./img/heart.png" alt="" width="30px" /></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-secondary"
                    title="Add to Cart"
                  >
                    <i><img src="./img/add.png" alt="" width="30px" /></i>
                  </button>
                </div>
                <img src="./img/ct.png" alt="" />
                <div class="card-body">
                  <h3>Keychain</h3>
                  <div class="star">
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                    <i class="bx bxs-star checked"></i>
                  </div>
                  <p>Variant</p>
                  <h6>
                    IDR 15K<span
                      ><button class="add-cart">Add Cart</button></span
                    >
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- product cards end-->

      <!-- gallary -->
      <section id="gallary" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
          <h1>OUR GALLARY</h1>
          <div class="row" style="margin-top: 30px">
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <h3 class="text-center">Keychain</h3>
                </div>
                <img src="./img/tas holo.png" alt="" />
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <h3 class="text-center">Strap</h3>
                </div>
                <img src="./img/tas holo.png" alt="" />
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <h3 class="text-center">Strap</h3>
                </div>
                <img src="./img/tas holo.png" alt="" />
              </div>
            </div>
          </div>

          <div
            class="row"
            style="margin-top: 30px"
            data-aos="fade-up"
            data-aos-duration="1500"
          >
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <h3 class="text-center">Strap</h3>
                </div>
                <img src="./img/tas holo.png" alt="" />
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <h3 class="text-center">Strap</h3>
                </div>
                <img src="./img/tas holo.png" alt="" />
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card">
                <div class="overlay">
                  <h3 class="text-center">Strap</h3>
                </div>
                <img src="./img/tas holo.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- gallary -->

      <!-- about -->
      <div
        class="container"
        id="about"
        data-aos="fade-up"
        data-aos-duration="1500"
      >
        <h1>ABOUT US</h1>
        <div class="row">
          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./img/1reir.png" alt="" width="100%" height="auto" />
            </div>
          </div>
          <div class="col-md-6 py-3 py-md-0">
            <p>
              Selamat datang di toko hiasan handcraft kami! Temukan berbagai
              koleksi unik dari strap bag, keychain, dan lanyard yang dibuat
              dengan tangan serta penuh cinta dan kreativitas. Setiap produk
              kami dirancang untuk menambah keindahan dan fungsionalitas pada
              barang-barang sehari-hari Anda. Kunjungi dan temukan hiasan
              favorit Anda sekarang!
            </p>

            <!-- <div id="bt"><button>Read More...</button></div> -->
          </div>
        </div>
      </div>
      <!-- about -->

      <!-- contact  -->
      <div
        class="container"
        id="contact"
        data-aos="fade-up"
        data-aos-duration="1500"
      >
        <h1>CONTACT US</h1>
        <div class="row">
          <div class="col-md-4 py-1 py-md-0">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id="usr"
                placeholder="Name"
              />
            </div>
          </div>
          <div class="col-md-4 py-1 py-md-0">
            <div class="form-group">
              <input
                type="email"
                class="form-control"
                id="eml"
                placeholder="Email"
              />
            </div>
          </div>
          <div class="col-md-4 py-1 py-md-0">
            <div class="form-group">
              <input
                type="number"
                class="form-control"
                id="phn"
                placeholder="Phone"
              />
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea
            class="form-control"
            rows="5"
            id="comment"
            placeholder="Message"
          ></textarea>
        </div>
        <div id="messagebtn"><button>Send Message</button></div>
      </div>
      <!-- contact end -->

      <!-- footer -->
       <div class="footerke2">
      <footer id="footer2" data-aos="fade-up" data-aos-duration="1500">
        <h1 class="text-center">Pitipaw</h1>
        <p class="text-center">Variantelit. Vitae, accusantium.</p>
        <div class="icons text-center">
          <!-- <i class="bx bxl-twitter"></i>
          <i class="bx bxl-facebook"></i>
          <i class="bx bxl-google"></i>
          <i class="bx bxl-skype"></i> -->
          <a
            href="https://www.instagram.com/pitipaw_craft/?utm_source=ig_web_button_share_sheet"
            target="_blank"
          >
            <i class="bx bxl-instagram"></i>
          </a>
        </div>
        </div>
      </footer>

      <!-- footer -->
       <div class="footer1">
      <footer id="footer" data-aos="fade-up" data-aos-duration="1500">
        <div class="footer">
          <div class="teks">
            <div class="bag2">
              <h1>Penting!</h1>
              <p>
                Hanya melayani pembelian secara online, informasi lebih lanjut
                kontak kami!
              </p>
            </div>

            <div class="bag3">
              <h1>Kontak</h1>
              <div class="logo5">
                <div class="ig">
                  <a
                    href="https://www.instagram.com/pitipaw_craft/?utm_source=ig_web_button_share_sheet"
                    target="_blank"
                  >
                    <img
                      src="img/Instagram_Logo_and_symbol__meaning__history__PNG__brand-removebg-preview.png"
                      alt=""
                    />
                  </a>
                  <a
                    href="https://wa.me/6283137760847"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    <img
                      src="img/Ikon_Whatsapp_Logo_Whatsapp__Clipart_Whatsapp__Logo__Ikon_Whatsapp_PNG_dan_Vektor_dengan_Background_Transparan_untuk_Unduh_Gratis-removebg-preview.png"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>

            <div class="bag3">
              <h1>Lokasi Kami</h1>
              <p>Puri Cipageran 1, Kota Cimahi, Jawa Barat 40511</p>
            </div>
          </div>
        </div>
      </footer>
      </div>
      <!-- footer -->

      <a href="#" class="arrow"
        ><i><img src="./img/up-arrow.png" alt="" width="50px" /></i
      ></a>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="main.js"></script>
  </body>
</html>
