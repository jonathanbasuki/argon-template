<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title><?= $data['title']; ?></title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/lineicons.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/auth.css" />
</head>
<body>
  <!-- ======== main-wrapper start =========== -->
  <main class="main-wrapper m-0 p-0">

    <!-- ========== signin-section start ========== -->
    <?= $this->renderSection('auth'); ?>
    <!-- ========== signin-section end ========== -->
  </main>
  <!-- ======== main-wrapper end =========== -->

  <!-- ========= All Javascript files linkup ======== -->
  <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/auth.js"></script>
</body>
</html>
