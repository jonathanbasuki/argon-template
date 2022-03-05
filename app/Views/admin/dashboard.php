<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Dashboard Admin</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Type here...">
        </div>
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a href="<?= base_url('/logout'); ?>" class="nav-link text-white font-weight-bold px-0">
            <i class="fa fa-sign-out me-sm-1"></i>
            <span class="d-sm-inline d-none">Sign Out</span>
          </a>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>
            <?php 

            date_default_timezone_set('Asia/Jakarta');
            $time = date('H');

            if ($time >= 3 && $time <= 11) {
              echo "Selamat pagi, username!" ;
            } else if ($time > 11 && $time <= 15) {
              echo "Selamat siang, username!" ;
            } else if ($time > 15 && $time <= 18) {
              echo "Selamat sore, username!" ;
            } else {
              echo "Selamat malam, username!" ;
            }

            ?>
          </h6>
        </div>
        <div class="card-body pt-0 pb-4">
          
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>