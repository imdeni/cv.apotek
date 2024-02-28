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
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>








    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('') ?>assetadmin/images/favicon.ico" />
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
        <nav class="sidebar sidebar-offcanvas" id="sidebar" >
          <ul class="nav">
            
             <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('index.php/Karyawan'); ?>">
                <span class="menu-title" style="color: black;font-weight: bold;">Dashboard</span>
                <i class="mdi mdi-home menu-icon" style="color: black;font-size: 30px;"></i>
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
                <span class="menu-title" style="color: #87CEEB;font-weight: bold;">Pembelian</span>
                <i class="mdi mdi-cash menu-icon" style="color: #87CEEB;font-size: 30px;"></i>
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
                </span> Form pembelian obat
              </h3>
              
            </div>
<!-- ============================     ISI     ================================= -->            
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"style="padding-left: 20px;">
                      <form method="post" action="<?php echo base_url('index.php/Tambah/t_pembelian');?>">
                    
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 120px;height: 38px;"><b>Nama Obat</b></span>
                    </div>
                     <select id="data_nama" data-live-search="true" class="selectpicker form-control" required  name="nama"  style="text-transform:capitalize;">
                      <option value=" ">Silahkan klik untuk memilih nama obat</option>
                      <?php foreach($results as $row): ?>
                      <option value="<?php echo $row->nama_obat; ?>"><?php echo $row->nama_obat; ?></option>
                    <?php endforeach; ?>
                    </select> 

                 <!-- <select class="selectpicker form-control" id="data_nama" name="nama" data-live-search="true" required>
                  <option style="color:black;" value=" ">Silahkan PIlih Obat</option>
                    <?php foreach($results as $row): ?>
                     <option style="color:black;" data-tokens="<?php echo $row->nama_obat; ?>"><?php echo $row->nama_obat; ?> - <?php echo $row->kategori_obat; ?></option>
                    <?php endforeach; ?>
                  </select> -->

                  
                    
                  </div>
                  <br>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 120px;height: 38px;"><b>Nama Suplier</b></span>
                    </div>
                    <select required id="data_suplier" name="suplier" class="selectpicker form-control" data-live-search="true"  style="text-transform:capitalize;">
                      <option style="color:black;" value=" ">Silahkan klik untuk memilih suplier</option>
                      <?php foreach($suplier as $rowsuplier): ?>
                      <option style="color:black;" value="<?php echo $rowsuplier->nama_sup; ?>"><?php echo $rowsuplier->nama_sup; ?></option>
                    <?php endforeach; ?>
                    </select>
                  
                    
                  </div>
                  <br>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 120px;"><b>Jumlah</b></span>
                    </div>
                    <input name="jumlah" type="number" class="form-control" style="text-transform:capitalize;" placeholder="Input jumlah penjualan" required>
                  </div>
                  <br>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 120px;"><b>Kadaluarsa</b></span>
                    </div>
                    <input id="data_exp" name="tgl_exp" type="date" class="form-control" style="text-transform:capitalize;" placeholder="Tangggal kadaluarsa" required >
                  </div>
                  <br>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 120px;"><b>Kategori</b></span>
                    </div>
                    <input id="data_kategori"  name="kategori" type="text" class="form-control" style="text-transform:capitalize;" placeholder="Kategori" readonly>
                  </div>
                  <br>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 120px;"><b>Stok</b></span>
                    </div>
                    <input id="data_stok" name="stok" type="number" class="form-control" style="text-transform:capitalize;" placeholder="Stok saat ini" readonly>
                  </div>
                  <br>

                  

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="color:black;width: 120px;"><b>Harga</b></span>
                    </div>
                    <input id="data_harga" name="harga_beli" type="number" class="form-control" style="text-transform:capitalize;" readonly min="0" step="1" placeholder="Harga Beli" />
                    
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
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th style="max-width:10px;">No</th>
                            <th>Nama Obat</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total bayar</th>
                            <th>Suplier</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $no=0; ?>
                            <?php foreach($results3 as $row): ?>
                            <?php $no++; ?>
                          <tr>
                            <td style="text-align: center;"><?php echo $no; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->kategori; ?></td>
                            <td><?php echo $row->jumlah; ?></td>
                            <td><?php echo "Rp " . number_format($row->harga,2,',','.'); ?></td>
                            <td><?php $total=$row->harga*$row->jumlah; echo "Rp " . number_format($total,2,',','.'); ?></td>
                            <td><?php echo $row->suplier; ?></td>
                            <td><center><button style="background: white;border: 3px solid #87CEEB;">Print pembayaran</button></center></td>
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
<script src="<?php echo base_url('assetadmin/js/jquery-3.2.1.min.js') ?>"></script>
<script type="text/javascript">

  $(document).ready(function(){
      load();
    }); 

  function load(){
    $("#data_nama").change(function(){
    var data_nama = $("#data_nama").val();
    $.ajax({
      type:"POST",
      dataType:"JSON",
      url: "<?php base_url(''); ?>autofill",
      data : {nama : data_nama},
      success:function(data){
        console.log(data);
        document.getElementById("data_harga").value = data[0].harga_beli;
        
        document.getElementById("data_kategori").value = data[0].kategori_obat;
        document.getElementById("data_stok").value = data[0].stok;
        
        


      }
    });

  });
}
</script>