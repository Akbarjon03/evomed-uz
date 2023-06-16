<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Evomed</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/hero-carousel/logo.png" rel="icon">
  <link href="./assets/img/hero-carousel/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <h1>Evomed<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Bosh sahifa</a></li>
          <li><a href="services.php">Xizmatlar</a></li>
          <li><a href="about.php">Shifokorlar</a></li>
          <li><a href="projects.php">Diagnostika</a></li>
          <li><a href="blog.php">Yangiliklar</a></li>
          <li><a href="contact.php" class="active">Manzil</a></li>
          <li><a href="../contact.php">Rus tili</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-carousel/evomed-logo.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Manzil</h2>
        <ol>
          <li><a href="index.php">Bosh sahifa</a></li>
          <li>Manzil</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-geo-alt-fill"></i>
              <h3>Bizning manzil</h3><a href="https://yandex.com/maps/-/CCUczPrDGD">
              <p>Yunusobod, Ahmad Donish ko‘chasi 47a</p></a>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telegram"></i>
              <h3>Telegram</h3><a href="https://t.me/evomed_uz_clinika">
              <p>Evomed</p></a>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone-fill"></i>
              <h3>Bizga qo'ng'iroq qiling</h3><a href="tel:+998 55 500 3200">
              <p>+998 55 500 3200</p></a>
            </div>
          </div><!-- End Info Item -->
        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6 ">
            <div style="position:relative;overflow:hidden;"><a href="https://yandex.com/maps/org/56999694542/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Evomed Klinika</a><a href="https://yandex.com/maps/10335/tashkent/category/children_polyclinic/184105986/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Bolalar klinikasi  Toshkentda</a><iframe src="https://yandex.com/map-widget/v1/?from=mapframe&ll=69.288819%2C41.365429&mode=search&oid=56999694542&ol=biz&source=mapframe&utm_source=mapframe&z=16.18" width="660" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
          </div><!-- End yandex Maps -->
          <div class="col-lg-6"><br>
            <!-- php form -->
            <form method="POST" action="./contct.php" role="form" >
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" id="name" class="form-control" placeholder="Ismingizni yozing" name="name" required>  
                </div>
                <div class="col-lg-6 form-group">
                  <input type="text" id="phone" class="form-control" placeholder="Telefon raqamingiz" name="phone" required><br>
                </div>
              </div>
              <div class="form-group">
                <textarea id="message" class="form-control" rows="5" placeholder="Xabaringizni yozing" name="message" required></textarea>
              </div><br>
              <div class="text-center">
                <button type="submit">Xabarni yuborish</button>
              </div>
            </form>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>EVOMED</h3>
              <p><a href="https://yandex.com/maps/-/CCUczPrDGD">
                Yunusobod, <br />
                Ahmad Donish 47a<br /></a><br />
                <strong>Telefon raqam:</strong><a href="tel:+998 55 500 3200"> +998 55 500 3200</a><br />
              </p>
              <div class="social-links d-flex mt-3">
                <a
                  href="https://www.tiktok.com/@evomed_uz"
                  class="d-flex align-items-center justify-content-center"
                  ><i class="bi bi-tiktok"></i
                ></a>
                <a
                  href="https://www.facebook.com/evomeduz/"
                  class="d-flex align-items-center justify-content-center"
                  ><i class="bi bi-facebook"></i
                ></a>
                <a
                  href="https://www.instagram.com/evomed_uz/"
                  class="d-flex align-items-center justify-content-center"
                  ><i class="bi bi-instagram"></i
                ></a>
                <a
                  href="https://www.youtube.com/@evomed_uz8797"
                  class="d-flex align-items-center justify-content-center"
                  ><i class="bi bi-youtube"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>FOYDALI LINKLAR</h4>
            <ul>
              <li><a href="./index.php">BOSH SAHIFA</a></li>
              <li><a href="./about.php">SHIFOKORLAR</a></li>
              <li><a href="./services.php">XIZMATLAR</a></li>
              <li><a href="./projects.php">DIAGNOSTIKA</a></li>
              <li><a href="./blog.php">YANGILIKLAR</a></li>
              <li><a href="./contact.php">MANZIL</a></li>
            </ul>
          </div>
          <!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>XIZMATLAR</h4>
            <ul>
                <li><a href="./services.php">Bronxit</a></li>
                <li><a href="./services.php">Laringit</a></li>
                <li><a href="./services.php">Traxeit</a></li>
                <li><a href="./services.php">Zotiljam</a></li>
                <li><a href="./services.php">Bronxiolit</a></li>
                <li><a href="./services.php">Frontit</a></li>
                <li><a href="./services.php">Og'izdan noxush hid kelishi</a></li>
                <li><a href="./services.php">Surunkali tonzillitni davolash</a></li>
                <li><a href="./services.php">Laringit</a></li>
                <li><a href="./services.php">Allergik tumov</a></li>
            </ul>
          </div>
          <!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
              <ul>
                <li><a href="./services.php">Gastroduodenit</a></li>
                <li><a href="./services.php">Gastroenterokolit</a></li>
                <li><a href="./services.php">Surunkali qabziyat</a></li>
                <li><a href="./services.php">Disbakterioz</a></li>
                <li><a href="./services.php">Xoletsistit</a></li>
                <li><a href="./services.php">Quloq qichishi, bitib qolishi</a></li>
                <li><a href="./services.php">Yo'tal</a></li>
                <li><a href="./services.php">Kattalar va bolalar konsultatsiysi</a></li>
                <li><a href="./services.php">Tassi oyoqlik</a></li>
                <li><a href="./services.php">Son qanoq displazi</a></li>
              </ul>
            </div>
          <!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
              <ul>
                <li><a href="./services.php">Gepatit</a></li>
                <li><a href="./services.php">Piyelonefrit</a></li>
                <li><a href="./services.php">Toksikoderma</a></li>
                <li><a href="./services.php">HOBL</a></li>
                <li><a href="./services.php">Revmatizm</a></li>
                <li><a href="./services.php">Sinusit</a></li>
                <li><a href="./services.php">Son chanoq bo'g'imidagi chala va to'liq chiqishlar</a></li>
                <li><a href="./services.php">Raxit</a></li>
                <li><a href="./services.php">X yoki O obrazniy qiyshayishlar</a></li>
                <li><a href="./services.php">Umurtqa pog'onasi qiyshayisi</a></li>
                <li><a href="./services.php">Ichak gelmintozlari - giardiaz, ichak askariozi, enterobioz va boshqalar</a></li>
              </ul>
            </div>
          <!-- End footer links column-->
        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy;Mualliflik huquqi <strong><span>EVOMED</span></strong
          >. Barcha huquqlar himoyalangan
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <a
  href="tel: +998 55 500 3200"
  class="scroll-top d-flex align-items-center justify-content-center"
  ><i class="bi bi-telephone-outbound-fill"></i>
</a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>