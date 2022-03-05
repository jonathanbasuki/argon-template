<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $data['title']; ?></title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>/assets/images/favicon.png" rel="icon">
  <link href="<?= base_url(); ?>/assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>/assets/css/home.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?= base_url('/'); ?>" class="logo fs-5 d-flex align-items-center">
        <b>Logo</b>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted" href="<?= base_url(); ?>/<?= (logged_in()) ? 'dashboard' : 'login'; ?>"><?= (logged_in()) ? 'Dashboard' : 'Login'; ?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Lorem ipsum, dolor.</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor, sit amet.</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="<?= base_url(); ?>/<?= (logged_in()) ? 'dashboard' : 'login'; ?>" class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center">
                <span><?= (logged_in()) ? 'Dashboard' : 'Login'; ?></span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/shapes/values-1.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; <?= date('Y'); ?>, <strong><a href="https://github.com/jonathanbasuki">Jonathan Basuki</a></strong>.
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>/assets/js/home.js"></script>

</body>

</html>