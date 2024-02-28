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

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

  </head>
  <style type="text/css">
    .input-group-prepend :hover{
      background: white;
    } 
    .input-group-text{
      height: 50px;
      background: #C1F1FF;
    } 
    .form-control{
      border-color: #C1F1FF;
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    th{
      text-align: center;
      border: 10px solid #C1F1FF;
      padding: 8px;
    }
    td,thead,tbody {
      border: 10px solid #C1F1FF;
      text-align: left;
      padding: 8px;
      
    }

    tr:nth-child(even) {
      border: 10px solid #C1F1FF;
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
                <span class="menu-title" style="color: #87CEEB;font-weight: bold;">Tambah Data</span>
                <i class="menu-arrow"  style="color: #87CEEB;"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon" style="color: #87CEEB;"></i>

              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> 
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_tambah_nama_obat'); ?>" style="color: black;">Nama Obat</a> 
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_tambah_kategori_obat'); ?>" style="color: black;">Kategori Obat</a>
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_harga_obat'); ?>" style="color: #87CEEB;">Harga Obat</a>
                    <!-- <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_stok_obat'); ?>" style="color: black;">Stok Obat</a> -->
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_tambah_suplier'); ?>" style="color: black;">Suplier</a>
                    <a class="nav-link" href="<?php echo base_url('index.php/Admin/v_diagnosis'); ?>" style="color: black;">Diagnosa</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/Admin/data_stok'); ?>">
                <span class="menu-title" style="color: black;font-weight: bold;">Monitoring Stok Obat</span>
                <i class="mdi mdi-format-list-bulleted menu-icon" style="color: black"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title" style="color: black;font-weight: bold;">Nota</span>
                <i class="menu-arrow"  style="color: black;"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon" style="color: black;"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Admin/penjualan_pembelian'); ?>" style="color: black;">Penjualan & Pembelian  <a class="nav-link" href="<?php echo base_url('index.php/Admin/penjualan'); ?>" style="color: black;">Penjualan <a class="nav-link" href="<?php echo base_url('index.php/Admin/pembelian'); ?>" style="color: black;">Pembelian</a></li>
                </ul>
              </div>
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
                </span> Tambah Harga Obat
              </h3>
              
            </div>
<!-- ============================     ISI     ================================= -->            
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"style="padding-left: 20px;">
                      <form method="post" action="<?php echo base_url('index.php/Tambah/t_harga_obat');?>">
                    
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 130px;height: 38px;"><b>Nama Obat</b></span>
                    </div>
                    <select name="nama" class="selectpicker form-control" data-live-search="true" style="text-transform:capitalize;">
                      <option value=" ">Silahkan klik untuk memilih nama obat</option>
                      <?php foreach($results as $row): ?>
                      <option value="<?php echo $row->nama_obat; ?>"><?php echo $row->nama_obat; ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                  <br>

                   <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 130px;height: 38px;"><b>Kategori Obat</b></span>
                    </div>
                    <select name="kategori" class="selectpicker form-control" data-live-search="true" style="text-transform:capitalize;">
                      <option value=" ">Silahkan klik untuk memilih kategori obat</option>
                      <?php foreach($results2 as $row): ?>
                      <option value="<?php echo $row->nama_kategori; ?>"><?php echo $row->nama_kategori; ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                  <br>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 130px;"><b>Keterangan</b></span>
                    </div>
                    <input name="keterangan" type="text" class="form-control" style="text-transform:capitalize;" >
                  </div>
                  <br>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 130px;"><b>Harga Beli</b></span>
                    </div>
                    <input name="harga_beli" type="number" class="form-control" style="text-transform:capitalize;" /required min="0" step="1" placeholder="Input Harga Beli" />
                    </div><br>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 130px;"><b>Harga Jual</b></span>
                    </div>
                    <input name="harga_jual" type="number" class="form-control" style="text-transform:capitalize;" /required min="0" step="1" placeholder="Input Harga Jual" />
                    <div class="input-group-prepend">
                      <button class="input-group-text" style="color:black;"><b>Simpan</b></button>
                    </div>
                  </form>
                  </div>

                      </form>
                </div>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Obat</h4>
                    <input class="form-control" type="text" id="myInput" placeholder="Cari / filter">
                    <div class="table-responsive">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th style="max-width:10px;">No</th>
                            <th>Nama Obat</th>
                            <th>Kategori Obat</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $no=0; ?>
                            <?php foreach($results3 as $row): ?>
                            <?php $no++; ?>
                          <tr>
                            <td style="text-align: center;"><?php echo $no; ?></td>
                            <td><?php echo $row->nama_obat; ?></td>
                            <td><?php echo $row->kategori_obat; ?></td>
                            <td><?php echo $row->harga_beli; ?></td>
                            <td><?php echo $row->harga_jual; ?></td>
                            <td><?php echo $row->keterangan; ?></td>
                            <td><center><a class="btn btn-info" style="background: white;border: 2px solid #87CEEB;color: black;" onclick="return checkDelete()" href="<?php echo base_url('index.php/Hapus3/?nama='.$row->nama_obat); ?>" >Hapus</a><a class="btn btn-info" style="background: white;border: 2px solid #87CEEB;color: black;" onclick="return checkDelete()" href="<?php echo base_url('index.php/Edit/formedit/?nama='.$row->nama_obat); ?>" >Edit</a></center></td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
              </div>

                </div>
              </div>
            </div>
<!-- ============================ PENUTUP ISI ================================= -->            
            
            
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

<script>
function filterTable(event) {
    var filter = event.target.value.toUpperCase();
    var rows = document.querySelector("#myTable tbody").rows;
    
    for (var i = 0; i < rows.length; i++) {
        var firstCol = rows[i].cells[1].textContent.toUpperCase();
        var secondCol = rows[i].cells[2].textContent.toUpperCase();
        if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }      
    }
}

document.querySelector('#myInput').addEventListener('keyup', filterTable, false);
</script>