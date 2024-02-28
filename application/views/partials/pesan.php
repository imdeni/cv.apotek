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
 <!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet"> -->

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
<body>
    
    <section id="beranda" class="beranda">
      <div class="container" id="login" style="margin-top:0px;">

        <div class="section-title">
          <!-- <span>Sistem Inventory klinik xxx</span> -->
          <img src="<?php echo base_url('assets/img/Klinik.png') ?>" style="width: 70px;margin-top: 0px;margin-left: -20px;border-radius: 5px;">
          <h2 >Sistem Inventory  apotek pradana farma</h2>
          
        </div>

        <div class="row">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box2 mt-4">
                  
                <form method="post" action="<?php echo base_url('index.php/auth/login'); ?>">

                  <div class="container-fluid">
                     <div class="row1">
        
            <!-- login start -->
            <div class="authfy-login">
                <!-- panel-login start -->
                <div class="authfy-panel panel-login text-center active">
                    <div class="authfy-heading">
                        <h3 class="auth-title"><strong>Silahkan Login</strong></h3>
                        
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                                <div class="form-group wrap-input">
                                    <input style="border-color: #444444;margin-bottom: 1px;" type="text" name="username" class="form-control"  required="required" placeholder="Username">
                                    <span class="focus-input"></span>
                                </div><br>
                                <div class="form-group wrap-input">
                                    <div class="pwdMask">
                                        <input style="border-color: #444444;" type="password" name="password" class="form-control"  required="required" placeholder="Password">
                                        <span class="focus-input"></span>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group"><br>
                                    <button class="btn btn-lg btn-success btn-block col-md-4" type="submit" class="tombol_login" value="LOGIN">Login</button></form>
                                    <form action="<?php echo base_url('index.php/beranda'); ?>"><button class="btn btn-lg btn-success btn-block col-md-4">Beranda</button></form>
                                    
                                    

                                </div>
                               
                                
                                
                            
                        </div>
                    </div>
                </div> <!-- ./panel-login -->




                
            </div> <!-- ./authfy-login -->
        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->
<!-- Javascript Files -->

<!-- initialize jQuery Library -->
<script src="<?php echo base_url(); ?>jsjs/jquery-2.2.4.min.js"></script>

<!-- for Bootstrap js -->
<script src="<?php echo base_url(); ?>jsjs/bootstrap.min.js"></script>

<!-- Custom js-->
<script src="<?php echo base_url(); ?>jsjs/custom.js"></script>
                  
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
 </body>
</html>
