<!DOCTYPE html>
<html lang="en">
<?php $session = session(); ?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../asset/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../asset/img/favicon.png"> -->
  <title>
    จัดการหน้าเว็บ
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('public/asset/css/nucleo-icons.css'); ?>" rel="stylesheet" />
  <link href="<?php echo base_url('public/asset/css/nucleo-svg.css'); ?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url('public/asset/css/nucleo-svg.css'); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url('public/asset/css/argon-dashboard.css?v=2.0.4') ?>" rel="stylesheet" />

  <!-- Data tables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/r-2.4.0/sc-2.0.7/sl-1.5.0/datatables.min.css" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="h-25 bg-secondary position-absolute bg-info w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?php echo base_url('admin/'); ?>">
        <img src="<?php echo base_url('public/asset/img/logo.png'); ?>" class="navbar-brand-img h-100">
        <span class="ms-1 font-weight-bold">ระบบจัดการหน้าเว็บ</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Hi, <?php echo $session->get('username') ?></h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= uri_string() == 'admin' ? 'active' : '' ?>" href="<?php echo base_url('admin/'); ?>">
            <i class="fa-solid fa-house-chimney text-primary"></i>
            <span class="nav-link-text ms-1">คอนเทนท์</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= uri_string() == 'employee' ? 'active' : '' ?>" href="<?php echo base_url('admin/employee/'); ?>">
            <i class="fa-solid fa-people-group text-primary"></i>
            <span class="nav-link-text ms-1">พนักงาน</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= uri_string() == 'portfolio' ? 'active' : '' ?>" href="<?php echo base_url('admin/portfolio/'); ?>">
            <i class="fa-solid fa-briefcase text-primary"></i>
            <span class="nav-link-text ms-1">ผลงาน</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= uri_string() == 'news' ? 'active' : '' ?>" href="<?php echo base_url('admin/news/'); ?>">
            <i class="fa-sharp fa-solid fa-newspaper text-primary"></i>
            <span class="nav-link-text ms-1">ข่าวสาร</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">ระบบ</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url('auth/logout'); ?>">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="nav-link-text ms-1">ออกจากระบบ</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">

        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">
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

      <div>
        <?php $this->renderSection('content'); ?>
      </div>

      <!-- <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer> -->
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('public/asset/js/core/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('public/asset/js/core/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('public/asset/js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <script src="<?php echo base_url('public/asset/js/plugins/smooth-scrollbar.min.js') ?>"></script>
  <script src="<?php echo base_url('public/asset/js/plugins/chartjs.min.js') ?>"></script>

  <!-- CK Editor -->
  <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

  <!-- Sweet Alert 2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->

  <!-- data table -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.1/r-2.4.0/sc-2.0.7/sl-1.5.0/datatables.min.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('public/asset/js/argon-dashboard.min.js?v=' . date('Y-m-d')) ?>"></script>
  <?php $this->renderSection('scripts'); ?>
</body>

</html>