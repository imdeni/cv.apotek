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
    <section id="beranda" class="beranda"  style="">
      <div class="container" id="beranda">

        <div class="section-title">
          <!-- <span>Sistem Inventory klinik xxx</span> -->
          <img src="<?php echo base_url('assets/img/Klinik.png') ?>" style="width: 70px;margin-top: 0px;margin-left: -20px;border-radius: 5px;">
          <h2 >Sistem Inventory apotek pradana farma</h2>
          
        </div>

        <div class="row" >


            <div class="row">
              <div id="pesann" class="col-md-4" >
                <div class="info-box mt-4" >
                  <!-- <form method="post" action="<?php echo base_url(''); ?>index.php/Beranda/pesan"> -->
                    <button id="submit" type="submit" style="background: transparent; border-color: transparent;" ><i class="bx bx-envelope"></i></i></button>
            <!-- </form> -->
                  <h3>PESAN</h3>
                </div>
              </div>

              <div id="lihatt" class="col-md-4">
                <div class="info-box mt-4">
                  <form method="post" action="<?php echo base_url('') ?>index.php/Beranda/Lihat">
                    <button id="submit" type="submit" style="background: transparent; border-color: transparent;" onclick="showObat()"><i class="bx bi-card-checklist"></i></button>
                    </form>
                  <h3>LIHAT OBAT</h3>
                </div>
              </div>

              <div id="loginn" class="col-md-4" >
                <div class="info-box mt-4">
                  <form method="post" action="<?php echo base_url('') ?>index.php/Beranda/Login">
                    <button id="submit" type="submit" style="background: transparent; border-color: transparent;" onclick="showDiv()">
                      <i class="bx bi-box-arrow-right"></i></button>
                  </form>
                  <h3>LOGIN</h3>
                </div>
              </div>
            </div>

          

          

        </div>

      </div>
    </section>






  </main><!-- End #main -->

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
<!--   <script src="<?php echo base_url('') ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('') ?>assets/js/main.js"></script>
 --></body>
</html>
