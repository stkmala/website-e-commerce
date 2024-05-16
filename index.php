<?php
session_start();
if (isset($_GET['action'])) {
  session_unset();
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet" />

    <title>Emilite,Emina Versi Lite</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css" />

    <link rel="stylesheet" href="assets/css/owl-carousel.css" />

    <link rel="stylesheet" href="assets/css/lightbox.css" />

    <link rel="stylesheet" href="assets/css/loader.css" />

    <link href="assets/images/logo-eminachh.png" rel="icon" />
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
  </head>

  <body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.php" class="logo">
                <img src="assets/images/logo emina.png" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="home.php" class="active">Home</a>
                </li>
                <li class="submenu">
                  <a href="javascript:;">Shop</a>
                  <ul>
                    <li><a href="makeup.php">Make Up</a></li>
                    <li><a href="skincare.php">Skincare</a></li>
                  </ul>
                </li>
                <li class="scroll-to-section"><a href="contact.php">Contact Us</a></li>
                <li class="submenu">
                  <a href="javascript:;">Explore</a>
                  <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                  </ul>
                </li>
                <?php if (isset($_SESSION['username'])): ?>
                  <li class="scroll-to-section">
                    <a href="index.php?action=logout">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <span>
                        Logout
                      </span>
                    </a>
                  </li>
                <?php else: ?>
                  <li class="scroll-to-section">
                    <a href="login.php">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <span>
                        Login
                      </span>
                    </a>
                  </li>
                <?php endif ?>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <section class="main-banner">
      <div class="slider-wrapper">
        <div class="slider">
          <img id="slide-1" src="assets/images/eminaa.png" />
          <img id="slide-2" src="assets/images/eminaa 2.jpg" />
          <img id="slide-3" src="assets/images/eminaa 3.jpg" />
        </div>
        <div class="slider-nav">
          <a href="#slide-1"></a>
          <a href="#slide-2"></a>
          <a href="#slide-3"></a>
        </div>
      </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** BestPicks Area Start ***** -->
    <section class="products">
      <h2>Hottiest <span>Picks!</span></h2>
      <h5>Check it out our hottiest picks</h5>
      <hr />
      <div class="all-products">
        <div class="product">
          <img src="assets/images/bbcream.png" />
          <div class="product-info">
            <h4 class="product-title">Daily Matte BB Cream</h4>
          </div>
        </div>
        <div class="product">
          <img src="assets/images/bs-face-wash.png" />
          <div class="product-info">
            <h4 class="product-title">Bright Stuff Face Wash</h4>
          </div>
        </div>
        <div class="product">
          <img src="assets/images/compact-powder1.png" />
          <div class="product-info">
            <h4 class="product-title">Daily Matte Compact Powder</h4>
          </div>
        </div>
        <div class="product">
          <img src="assets/images/bsloose.png" />
          <div class="product-info">
            <h4 class="product-title">Bright Stuff Loose Powder</h4>
          </div>
        </div>
        <div class="product">
          <img src="assets/images/sunbat45.png" />
          <div class="product-info">
            <h4 class="product-title">Sun Battle Spf 45 PA+++</h4>
          </div>
        </div>
        <div class="product">
          <img src="assets/images/toner.png" />
          <div class="product-info">
            <h4 class="product-title">Bright Stuff Toner</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** BestPicks Area End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="first-item">
              <div class="logo">
                <img src="assets/images/logo emina.png" alt="logo emina" />
              </div>
              <ul>
                <li><a href="#">Mal Metropolitan, Jl KH. Noer Ali, RT.008/RW.002, Pekayon Jaya, Bekasi Selatan, Bekasi City, West Java 17148</a></li>
                <li><a href="#">marketing@eminacosmetic.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="foot1">
              <h4>Emina's Category</h4>
              <ul>
                <li><a href="makeup.php">Make Up</a></li>
                <li><a href="skincare.php">Skincare</a></li>
                <li><a href="voucher.php">Voucher</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="foot2">
              <h4>Useful Link</h4>
              <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faq.php">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="under-footer">
              <p>Copyright © 2023 made with love, mala.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Loading Screen -->
  <div class="loading-screen animate_animated animate_fadeInUp">
    <div class="loader"></div>
    <h1>Born to be loved</h1>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/filter.js"></script>
    <script src="assets/js/loader.js"></script>


    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
      $(function () {
        var selectedClass = "";
        $("p").click(function () {
          selectedClass = $(this).attr("data-rel");
          $("#portfolio").fadeTo(50, 0.1);
          $("#portfolio div")
            .not("." + selectedClass)
            .fadeOut();
          setTimeout(function () {
            $("." + selectedClass).fadeIn();
            $("#portfolio").fadeTo(50, 1);
          }, 500);
        });
      });
    </script>
  </body>
</html>

