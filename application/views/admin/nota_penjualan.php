<!DOCTYPE html>
<html lang="en">
<?php 
if (!$this->session->userdata('authenticated')) {
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
    .csstable
{
    color:purple;
    border: #004400 4px solid;
    border-collapse: collapse;
    font-size:16px;
}

.csstable th
{
    text-align: center;
    color:yellow;
    background-color:#008800;
    border: #004400 2px solid;
    padding: 20px;
}

.csstable td
{
    text-align: center;
    padding: 20px;
    border: #004400 1px solid ;
    border-right-width: 2px;
    border-left-width: 2px;
}

.csstable tr:nth-child(odd)
{
    background-color: #DDFFDD;
}

.csstable tr:nth-child(even)
{
    background-color: #BBFFBB;
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
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <!-- <img src="<?php echo base_url('') ?>assetadmin/images/faces/face1.jpg" alt="image"> -->
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $this->session->userdata('username'); ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                
                <a class="dropdown-item" href="<?php echo base_url('index.php/auth/logout'); ?>">
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
              <a class="nav-link" href="<?php echo base_url('index.php/Admin'); ?>">
                <span class="menu-title" style="color: black;font-weight: bold;">Dashboard</span>
                <i class="mdi mdi-home menu-icon" style="color: black;"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title" style="color: black;font-weight: bold;">Tambah Data</span>
                <i class="menu-arrow"  style="color: black;"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon" style="color: black;"></i>

              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> 
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_tambah_nama_obat'); ?>" style="color: black;">Nama Obat</a> 
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_tambah_kategori_obat'); ?>" style="color: black;">Kategori Obat</a>
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_harga_obat'); ?>" style="color: black;">Harga Obat</a>
                    <!-- <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_stok_obat'); ?>" style="color: black;">Stok Obat</a> -->
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_tambah_suplier'); ?>" style="color: black;">Suplier</a>
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_diagnosis'); ?>" style="color: black;">Diagnosa</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/Admin/data_stok'); ?>">
                <span class="menu-title" style="color: black;font-weight: bold;">Nota Penjualan</span>
                <i class="mdi mdi-format-list-bulleted menu-icon" style="color: black;"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title" style="color: #87CEEB;font-weight: bold;">Nota</span>
                <i class="menu-arrow"  style="color: #87CEEB;"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon" style="color: #87CEEB;"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Admin/penjualan_pembelian'); ?>" style="color: black;">Penjualan & Pembelian  <a class="nav-link" href="<?php echo base_url('index.php/Admin/penjualan'); ?>" style="color: #87CEEB;">Penjualan <a class="nav-link" href="<?php echo base_url('index.php/Admin/pembelian'); ?>" style="color: black;">Pembelian</a></li>
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li> -->
            
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
            </li>
           --></ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Laporan Penjualan Obat
              </h3>
              
            </div>

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Download Data penjualan</h4>
                    <form action="<?php echo  base_url('index.php/Excel/createExcel') ?>" method="post">
                    <input type="date" name="tanggal1">  - Sampai -  <input type="date" name="tanggal2"> - <button>Download</button>
                    </form>
                  </div>
                </div>
            </div>
            
            
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Penjualan</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr> 

                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Kategori Obat</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Jumlah Terjual</th>
                            <th>Sisa Stok</th>
                            <th>Harga</th>
                            <th>Total Penjualan</th>
                            <th>Tanggal Terjual</th>
                            <th>Keterangan</th>

                          </tr>
                          </thead>
                           <tbody>
                          <?php $no=0; ?>
                            <?php foreach($penjualan as $row): ?>
                          <?php $no++; ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->kategori; ?></td>
                            <td><?php echo $row->tgl_exp; ?></td>
                            <td><?php echo $row->jumlah; ?></td>
                            <td><?php echo $row->stok; ?></td>
                            <td><?php echo $row->harga; ?></td>
                            <td><?php echo $row->jumlah*$row->harga; ?></td>
                            <td><?php echo $row->tgl; ?></td>
                            <td><?php echo $row->keterangan; ?></td>
                            
                          </tr>
                          <?php endforeach; ?>
                        </tbody> 
                      </table>
                    </div>
                  </div>
                </div>
              </div>
           
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              FOOTER COPYRIGHT
            </div>
          </footer>
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