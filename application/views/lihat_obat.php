<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('') ?>assets/css/style.css" rel="stylesheet">

</head>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<style type="text/css">
  .portfolio-img img {
    height: 300px;
    width: 300px;

  }
  .form-group button{
     background: white;
     color: green;
     border-color: green;
  }
  .form-group button: hover{
     background-color: green;
     color: white;
     border-color: green;
  }
  
</style>
<body >
    
<section id="dashboard" class="dashboard">
      <div class="container" id="obat" style="margin-top: -30px;margin-bottom: 90px;">
        

        <div class="row">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box2 mt-4">
                  <div class="container-fluid">
                     <div class="row1">
        
            <!-- login start -->
            <div class="authfy-login">
                <!-- panel-login start -->
                <div class="authfy-panel panel-login text-center active">
                    <div class="authfy-heading">
                        <h3 class="auth-title">Daftar Obat</h3>
                        <input class="form-control" type="text" id="myInput" placeholder="Cari Nama Obat / Jenis Obat">

                    <div class="form-group" >
                      <form action="<?php echo base_url('') ?>index.php/Beranda/Index">
                        <button class="btn btn-lg btn-success btn-block col-md-2 form-control">Beranda</button>
                      </form>
                  
                  <?php if ($offset>0): ?>
                  <p class="form-control">Page : <strong style="color:#33ff33;"><?php echo $this->pagination->create_links(); ?></strong></p>
                    
                  <?php endif ?>
                  <br>

                    </div>

<div style="overflow-x:auto;">
                    <table id="myTable">
                  <thead style="background:#33ff33;">
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Jenis</th>
                      <th>Stok</th>
                      <th>Harga</th>    
                    </tr>
                  </thead>
                  <?php if(count($results) != NULL){ ?>
                    <?php $no = $offset; ?>
                    <?php foreach($results as $row): ?>
                      <?php $no++;?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row->nama_obat; ?></td>
                      <td><?php echo $row->kategori_obat; ?></td>
                      <td><?php echo $row->stok; ?></td>
                      <td>RP. <?php echo number_format($row->harga_jual); ?>,00-</td>
                      <!--<td><?php echo $row->ket; ?></td>-->
                    </tr>
                  <?php endforeach; }
                  else{?>
                    <tr>
                      <td colspan="5"><center><?php echo "Belum ada data obat"; ?> </center></td>
                    </tr>
                  <?php } ?>
                  </table><br>
</div>
                    </div>

                    
                               

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                                
                                
                            
                        </div>
                    </div>
                </div> <!-- ./panel-login -->




                
            </div> <!-- ./authfy-login -->
        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->
                </div>
              </div>
                </div>
              </div>
    </section>


  <footer id="footer">
    <div class="container">
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      
      </div>
      <div class="credits">
        
      </div>
    </div>
  </footer> 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="<?php echo base_url('') ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('') ?>assets/js/main.js"></script>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
    $('#myTable').DataTable();
} );
</script> 
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
