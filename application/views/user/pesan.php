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
    
    <section  class="beranda">
      <div class="container" style="margin-top:0px;">

        

        <div class="row">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box2 mt-4">
                  
                  <div class="container-fluid">
                     <div class="row1">
        
            
                    <div class="authfy-heading">
                        <h3 class="auth-title"><strong>Silahkan Pilih Gejala, guna mendiagnosa obat</strong></h3>
                        
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                                
                                    <select id="d1" name="d1" style="border-color: #444444;text-align: center;" class="form-control" style="text-transform:capitalize;">
                                    <option value=" ">Silahkan klik untuk memilih gejala 1</option>
                                    <?php foreach($results as $row): ?>
                                    <option value="<?php echo $row->diagnosa1; ?>"><?php echo $row->diagnosa1; ?></option>
                                    <?php endforeach; ?>
                                    </select>

                                    <select  id="d2" name="d2" style="border-color: #444444;text-align: center;" class="form-control" style="text-transform:capitalize;">
                                    <option value=" ">Silahkan klik untuk memilih gejala 2</option>
                                    <?php foreach($results2 as $row): ?>
                                    <option value="<?php echo $row->diagnosa2; ?>"><?php echo $row->diagnosa2; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                
                                    <select  id="d3" name="d3" style="border-color: #444444;text-align: center;" class="form-control" style="text-transform:capitalize;">
                                    <option value=" ">Silahkan klik untuk memilih gejala 3</option>
                                    <?php foreach($results3 as $row): ?>
                                    <option value="<?php echo $row->diagnosa3; ?>"><?php echo $row->diagnosa3; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                
                                    <select  id="d4" name="d4" style="border-color: #444444;text-align: center;" class="form-control" style="text-transform:capitalize;">
                                    <option value=" ">Silahkan klik untuk memilih gejala 4</option>
                                    <?php foreach($results4 as $row): ?>
                                    <option value="<?php echo $row->diagnosa4; ?>"><?php echo $row->diagnosa5; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                
                                
                                    <select  id="d5" name="d5" style="border-color: #444444;text-align: center;" class="form-control" style="text-transform:capitalize;">
                                    <option value=" ">Silahkan klik untuk memilih gejala 5</option>
                                    <?php foreach($results5 as $row): ?>
                                    <option value="<?php echo $row->diagnosa5; ?>"><?php echo $row->diagnosa5; ?></option>
                                    <?php endforeach; ?>
                                    </select>
<form action="<?php echo base_url('index.php/Tambah/pesanan'); ?>" method="post">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span id="label_nama" class="input-group-text" style="color:black;max-width: 200px;height: 50px;padding-top: 12px;"><b>Rekomendasi Obat</b></span>
                    </div>
                    <input id="nama" name="nama" type="text" class="form-control" style="text-transform:capitalize;" readonly >
                    <button style="background-color: green;color: white;border-color: green;" class="btn btn-lg btn-success btn-block" id="tombol">Pesan</button>
                  </div>
</form>

                                
                                
                            
                        </div>
                    </div>
                

              

        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->
<!-- Javascript Files -->
                  
                </div>
              </div>
                </div>
              </div>
    </section>

    <section  class="beranda">
      <div class="container" id="login" style="margin-top:0px;">

        

        <div class="row">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box2 mt-4">
                  
                  <div class="container-fluid">
                     <div class="row1">
        
            
                    <div class="authfy-heading">
                        <h3 class="auth-title"><strong>Pesan Obat langsung</strong></h3>
                        
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">

                           <div class="input-group">
                    <div class="input-group-prepend">
                      <form action="<?php echo base_url('index.php/Tambah/pesanan'); ?>" method="post">
                      <span  class="input-group-text" style="color:black;max-width: 200px;height: 50px;padding-top: 12px;"><b>Pesan Obat</b></span>
                    </div>
                    
                    <input  name="nama" type="text" class="form-control" style="text-transform:capitalize;" required placeholder="Silahkan input obat yang ingin di pesan" ><button style="background-color: green;color: white;border-color: green;" class="btn btn-lg btn-success btn-block">Pesan</button>
                    </form>
                  </div>
                                
                                    <div class="form-group"><br>
                                    <form action="<?php echo base_url('index.php/beranda'); ?>"><button class="btn btn-lg btn-success btn-block col-md-4">Beranda</button></form>
                                </div>
                                
                                
                            
                        </div>
                    </div>
                

              

        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->
<!-- Javascript Files -->
                  
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

 <script src="<?php echo base_url('assetadmin/js/jquery-3.2.1.min.js') ?>"></script>
<script type="text/javascript">
  document.getElementById("nama").style.display = "none";
  document.getElementById("tombol").style.display = "none";
  document.getElementById("label_nama").style.display = "none";  
  document.getElementById("d2").style.display = "none";  
  document.getElementById("d3").style.display = "none";  
  document.getElementById("d4").style.display = "none";  
  document.getElementById("d5").style.display = "none";  
  $(document).ready(function(){
      load();
      load2();
      load3();
      load4();
      load5();
    });
    

  function load(){
    $("#d1").change(function(){
    var data_nama = $("#d1").val();
    $.ajax({
      type:"POST",
      dataType:"JSON",
      url: "<?php base_url(''); ?>diagnosa",
      data : {d1 : data_nama},
      success:function(data){
        console.log(data);
        document.getElementById("nama").style.display = "block";  
        document.getElementById("label_nama").style.display = "block";
        document.getElementById("d2").style.display = "block";
        document.getElementById("nama").value = data[0].nama;
        document.getElementById("tombol").style.display = "block";
        
      }
    });

  });
}

    function load2(){
      $("#d2").change(function(){
    var data_nama = $("#d1").val();
    var data_nama2 = $("#d2").val();

    $.ajax({
      type:"POST",
      dataType:"JSON",
      url: "<?php base_url(''); ?>diagnosa2",
      data : {d2 : data_nama2 ,d1 :data_nama},
      success:function(data){
        console.log(data);
        document.getElementById("nama").value = data[0].nama;
        document.getElementById("d3").style.display = "block";
      }
    });

  });
    }

    function load3(){
      $("#d3").change(function(){
    var data_nama = $("#d1").val();
    var data_nama2 = $("#d2").val();
    var data_nama3 = $("#d3").val();

    $.ajax({
      type:"POST",
      dataType:"JSON",
      url: "<?php base_url(''); ?>diagnosa3",
      data : {d3 : data_nama3 ,d2 : data_nama2 ,d1 :data_nama},
      success:function(data){
        console.log(data);
        document.getElementById("nama").value = data[0].nama;
        document.getElementById("d4").style.display = "block";
      }
    });

  });
    }

    function load4(){
      $("#d4").change(function(){
    var data_nama = $("#d1").val();
    var data_nama2 = $("#d2").val();
    var data_nama3 = $("#d3").val();
    var data_nama4 = $("#d4").val();

    $.ajax({
      type:"POST",
      dataType:"JSON",
      url: "<?php base_url(''); ?>diagnosa4",
      data : {d4 : data_nama4 ,d3 : data_nama3 ,d2 : data_nama2 ,d1 :data_nama},
      success:function(data){
        console.log(data);
        document.getElementById("nama").value = data[0].nama;
        document.getElementById("d5").style.display = "block";
      }
    });

  });
    }

    function load5(){
      $("#d5").change(function(){
    var data_nama = $("#d1").val();
    var data_nama2 = $("#d2").val();
    var data_nama3 = $("#d3").val();
    var data_nama4 = $("#d4").val();
    var data_nama5 = $("#d5").val();

    $.ajax({
      type:"POST",
      dataType:"JSON",
      url: "<?php base_url(''); ?>diagnosa5",
      data : {d5 : data_nama5 ,d4 : data_nama4 ,d3 : data_nama3 ,d2 : data_nama2 ,d1 :data_nama},
      success:function(data){
        console.log(data);
        document.getElementById("nama").value = data[0].nama;
        
      }
    });

  });
    }
</script>
