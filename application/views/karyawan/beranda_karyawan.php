<!DOCTYPE html>
<html lang="en">
<?php 
if (!$this->session->userdata('authenticated2')) {
        redirect('auth/relogin');
} ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assetadmin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('') ?>assetadmin/vendors/css/vendor.bundle.base.css">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assetadmin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('') ?>assetadmin/images/favicon.ico" />
  </head>
  <style type="text/css">
    .posisi{
      font-size: 25px;

    }
    .numbers {
  font-family: 'Arial', sans-serif;
  font-size: 40px;
  line-height: 1em;
  margin: 20px auto;
  overflow: hidden;
}
.numbers__window {
  display: inline-block;
  overflow: hidden;
  width: 0.52em;
  height: 1em;
}
.numbers__window__digit {
  font: inherit;
  word-break: break-all;
  display: block;
  width: 0;
  padding: 0 0.52em 0 0;
  margin: 0 auto;
  overflow: inherit;
  animation: counting 0.4s steps(10) forwards infinite;
}
.numbers__window__digit::before {
  content: attr(data-fake);
  display: inline-block;
  width: 100%;
  height: auto;
}
@keyframes counting {
  100% {
    transform: translate3d(0, -10em, 0);
  }
}
.numbers__window__digit--1 {
  animation-iteration-count: 2;
}
.numbers__window__digit--2 {
  animation-iteration-count: 4;
}
.numbers__window__digit--3 {
  animation-iteration-count: 6;
}
.numbers__window__digit--4 {
  animation-iteration-count: 8;
}
.numbers__window__digit--5 {
  animation-iteration-count: 10;
}

@media (max-width: 767px) {
          .iconify{
            width: 90px;
          }
          }

@media (max-width: 1400px) {
  @media (min-width: 768px) {
          .iconify{
            display: none;
          }
          }
          }
  </style>
  <body>

    <div class="container-scroller">

      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"><!-- 
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url('') ?>assetadmin/images/logo.svg" alt="logo" /></a> -->
          <a class="navbar-brand brand-logo-mini" href="index.html"> <img src="<?php echo base_url('') ?>assetadmin/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <!-- <img src="<?php echo base_url('') ?>assetadmin/images/faces/face1.jpg" alt="image"> -->
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $this->session->userdata('username2'); ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                
                <a class="dropdown-item" href="<?php echo base_url('index.php/auth/logoutkaryawan'); ?>">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
             <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/Karyawan'); ?>">
                <span class="menu-title" style="color: #87CEEB;font-weight: bold;">Dashboard</span>
                <i class="mdi mdi-home menu-icon" style="color: #87CEEB;font-size: 30px;"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/Karyawan/v_pesan'); ?>">
                <span class="menu-title" style="color: black;font-weight: bold;">Pesanan</span>
                <i class="mdi mdi-message-plus menu-icon" style="color: black;font-size: 30px;"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/Karyawan/v_pembelian'); ?>">
                <span class="menu-title" style="color: black;font-weight: bold;">Pembelian</span>
                <i class="mdi mdi-cash menu-icon" style="color: black;font-size: 30px;"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/Karyawan/v_penjualan'); ?>">
                <span class="menu-title" style="color: black;font-weight: bold;">Penjualan</span>
                <i class="mdi mdi-coin menu-icon" style="color: black;font-size: 30px;"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home" style="color:#198ae3;"></i>
                </span> Dashboard Karyawan
              </h3>
              
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body"style="padding-left: 20px;">
                    <img src="<?php echo base_url('') ?>assetadmin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Total Obat<span class="iconify" data-icon="bi:bar-chart-line" data-width="100" style="right:10px;top: 45px;position: absolute;opacity: 60%;"></span>
                    </h2>

                    <?php foreach ($results as $row) {   } ?>
                    <div class="numbers">

                      <?php if($row->stoknya != NULL){ ?>

                      <?php if (substr($row->stoknya,0,1)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($row->stoknya,0,1); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($row->stoknya,1,2)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--2" data-fake="8642519073"><?php echo substr($row->stoknya,1,2); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($row->stoknya,2,3)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--2" data-fake="8642519073"><?php echo substr($row->stoknya,2,3); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($row->stoknya,3,4)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--4" data-fake="8642519073"><?php echo substr($row->stoknya,3,4); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($row->stoknya,4,5)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--5" data-fake="8642519073"><?php echo substr($row->stoknya,4,5); ?></span>
                      </span>
                      <?php } ?>

                      </span><span style="font-size:10px;"> PCS</span>

                      <?php }else{ ?>
                          <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073">0</span>
                      </span>
                      <?php } ?>

                    </div>
                    
                    <?php foreach ($obatterbeli as $ob_terbeli) { } ?>
                    <?php  ?>
                    <h6 class="card-text">Hari ini terbeli <?php
                    if ($ob_terbeli->obat_terbeli <= 0) {
                      echo "0";
                    }else{
                      echo $ob_terbeli->obat_terbeli;
                   } ?> obat</h6>
                    
                    <?php foreach ($obatterjual as $ob_terjual) { } ?>
                    <h6 class="card-text">Hari ini terjual <?php 
                    if ($ob_terjual->obat_terjual <=0 ) {
                      echo "0";
                    }else{
                    echo $ob_terjual->obat_terjual; } ?> obat</h6>

                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body"style="padding-left: 20px;">
                    <img src="<?php echo base_url('') ?>assetadmin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Total Kategori<span class="iconify" data-icon="bx:pie-chart-alt-2" data-width="100" style="right:10px;top: 40px;position: absolute;opacity: 60%;"></span>
                    </h2>
                    <?php foreach ($results2 as $row) {   } ?>
                    <div class="numbers">

                      <?php if (substr($row->kategorinya,0,1)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($row->kategorinya,0,1); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($row->kategorinya,1,2)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($row->kategorinya,1,2); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($row->kategorinya,2,3)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($row->kategorinya,2,3); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($row->kategorinya,3,4)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($row->kategorinya,3,4); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($row->kategorinya,4,5)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($row->kategorinya,4,5); ?></span>
                      </span>
                      <?php } ?>

                      </span><span style="font-size:10px;"> KATEGORI</span>
                      
                    </div>
                    <?php foreach ($qtgl2 as $row4) { } ?>
                    <h6 class="card-text">Hari ini terdapat <?php echo $row4->tglnya; ?> kategori obat baru</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body"style="padding-left: 20px;">
                    <img src="<?php echo base_url('') ?>assetadmin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Total Penjualan<span class="iconify" data-icon="bi:graph-up-arrow" data-width="90" style="right:10px;top: 50px;position: absolute;opacity: 60%;"></span>
                    </h2>
                    <?php foreach ($totalpenjualan2 as $cuan2) { } ?>
                    <div class="numbers"><span class="posisi">
                    <?php if ($cuan2->penjualan <=0) {
                      echo "0";
                    }else{
                    echo "Rp " . number_format($cuan2->penjualan,2,',','.'); } ?></h2></span>
                  </div>
                    <?php foreach ($totalpenjualan as $cuan) { } ?><br>
                    <h6 class="card-text" >Pendapatan hari ini sebesar <br><?php 
                    if ($cuan->penjualan <= 0 or $cuan->penjualan == NULL) {
                     echo "Rp 0,00";
                    }else{
                     echo "Rp " . number_format($cuan->penjualan,2,',','.'); } ?></h6>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body"style="padding-left: 20px;">
                    <img src="<?php echo base_url('') ?>assetadmin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Kadaluarsa<span class="iconify" data-icon="bi:bar-chart-line" data-width="100" style="right:10px;top: 40px;position: absolute;opacity: 60%;"></span>
                    </h2>
                    <?php foreach ($kadaluarsa as $tgl2) { } ?>
                    <div class="numbers">
                    
                      <?php if (substr($tgl2->kadaluarsa,0,1)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($tgl2->kadaluarsa,0,1); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($tgl2->kadaluarsa,1,2)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($tgl2->kadaluarsa,1,2); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($tgl2->kadaluarsa,2,3)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($tgl2->kadaluarsa,2,3); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($tgl2->kadaluarsa,3,4)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($tgl2->kadaluarsa,3,4); ?></span>
                      </span>
                      <?php } ?>

                      <?php if (substr($tgl2->kadaluarsa,4,5)!=NULL) { ?>
                        <span class="numbers__window">
                          <span class="numbers__window__digit numbers__window__digit--1" data-fake="8642519073"><?php echo substr($tgl2->kadaluarsa,4,5); ?></span>
                      </span>
                      <?php } ?>

                      </span><span style="font-size:10px;"> PCS Obat</span>
                      
                    </div>
                    <?php foreach ($kadaluarsa as $tgl) { } ?>
                    <h6 class="card-text">Hari ini terdapat <?php   echo $tgl->kadaluarsa; ?> jenis obat yang kadaluarsa</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body"style="padding-left: 20px;">
                    <img src="<?php echo base_url('') ?>assetadmin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Pendapatan<span class="iconify" data-icon="bx:pie-chart-alt-2" data-width="100" style="right:10px;top: 40px;position: absolute;opacity: 60%;"></span>
                    </h2>
                    
                    <?php foreach ($totalpembelian2 as $cuan3) { } ?>

                    <div class="numbers"><span class="posisi">
                    <?php if ($cuan2->penjualan <= 0 or abs($cuan3->pembelian) <= 0) {

                      echo "Rp 0,00";
                    }else{

                    echo "Rp " . number_format($cuan2->penjualan-abs($cuan3->pembelian),2,',','.'); } ?></h2></span>
                  </div>
                    
                     
                    <h6 class="card-text"></h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body"style="padding-left: 20px;">
                    <img src="<?php echo base_url('') ?>assetadmin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Total Pembelian<span class="iconify" data-icon="bi:graph-down-arrow" data-width="80" style="right:10px;top: 50px;position: absolute;opacity: 60%;"></span></span>
                    </h2>
                    <?php foreach ($totalpembelian2 as $cuan3) { } ?>
                    <div class="numbers"><span class="posisi">
                    <?php if ( $cuan3->pembelian <= 0 ) {
                      echo "Rp 0,00";
                    }else{
                      echo "Rp " . number_format($cuan3->pembelian,2,',','.'); } ?></h2></span>
                  </div>
                    <?php foreach ($totalpembelian as $cuan4) { } ?><br>
                    <h6 class="card-text">Pengeluaran hari ini sebesar <br><?php
                    if ( $cuan4->pembelian <= 0 or $cuan4->pembelian == NULL  ) {
                      echo "Rp 0,00";
                    }else{
                     echo "Rp " . number_format($cuan4->pembelian,2,',','.'); } ?></h6>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <!-- <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"style="padding-left: 20px;">
                    <h4 class="card-title">Project Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Due Date </th>
                            <th> Progress </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> Herman Beck </td>
                            <td> May 15, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> Messsy Adam </td>
                            <td> Jul 01, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> John Richards </td>
                            <td> Apr 12, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 4 </td>
                            <td> Peter Meggik </td>
                            <td> May 15, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Edward </td>
                            <td> May 03, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Ronald </td>
                            <td> Jun 05, 2015 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> -->
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('') ?>assetadmin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('') ?>assetadmin/vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url('') ?>assetadmin/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('') ?>assetadmin/js/off-canvas.js"></script>
    <script src="<?php echo base_url('') ?>assetadmin/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url('') ?>assetadmin/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('') ?>assetadmin/js/dashboard.js"></script>
    <script src="<?php echo base_url('') ?>assetadmin/js/todolist.js"></script>

    <!-- End custom js for this page -->
  </body>
</html>