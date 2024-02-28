<script type="text/javascript">
  var login = document.getElementById('login');
  var beranda = document.getElementById('beranda');
  var obat = document.getElementById('obat');

function hideDiv(){
  login.style.display ='none';
  beranda.style.display='block';
  obat.style.display ='none';
  window.scrollTo(0, 0);
}
function showDiv(){
  login.style.display ='block';
  beranda.style.display='none';
  obat.style.display ='none';
  window.scrollTo(0, 0);
}
function showObat(){
  login.style.display ='none';
  beranda.style.display='none';
  obat.style.display ='block';
  window.scrollTo(0, 0);
}
</script>
<script>
function filterTable(event) {
    var filter = event.target.value.toUpperCase();
    var rows = document.querySelector("#myTable tbody").rows;
    
    for (var i = 0; i < rows.length; i++) {
        var firstCol = rows[i].cells[0].textContent.toUpperCase();
        var secondCol = rows[i].cells[1].textContent.toUpperCase();
        if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }      
    }
}

document.querySelector('#myInput').addEventListener('keyup', filterTable, false);
</script>

<section id="contact" class="contact">
      <div class="container" id="login" style="margin-top:-40px;">

        <div class="section-title">
          <!-- <span>Sistem Inventory klinik xxx</span> -->
          <img src="<?php echo base_url('assets/img/Klinik.png') ?>" style="width: 70px;margin-top: 0px;margin-left: -20px;">
          <h2 >Sistem Inventory apotek pradana farma</h2>
          
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
                        <h3 class="auth-title">Silahkan Login</h3>
                        
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
                                
                                <div class="form-group" id="tmbllgn"><br>
                                    <center><button class="btn btn-lg btn-success btn-block col-md-4" type="submit" class="tombol_login" value="LOGIN">Login</button></form><button class="btn btn-lg btn-success btn-block col-md-4" type="submit" class="tombol_beranda" value="beranda" onclick="hideDiv()">Beranda</button>
                                    </center>
                                    

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

    <section id="contact" class="contact">
      <div class="container" id="obat" style="margin-top: -100px;">
        

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

<div style="overflow-x:auto;">
                    <table id="myTable">
                  <thead style="background:#33ff33;">
                    <tr>
                      <th>Nama</th>
                      <th>Jenis</th>
                      <th>Stok</th>
                      <th>Harga</th>    
                    </tr>
                  </thead>
                    <?php foreach($query as $row): ?>
                    <tr>
                      <td><?php echo $row->nama_obat; ?></td>
                      <td><?php echo $row->jenis_obat; ?></td>
                      <td><?php echo $row->stok; ?></td>
                      <td>RP. <?php echo number_format($row->harga); ?>,00-</td>
                      <!--<td><?php echo $row->ket; ?></td>-->
                    </tr>
                  <?php endforeach; ?>
                  </table><br>
                  <input class="form-control" type="text" id="myInput" placeholder="Cari Nama Obat / Jenis Obat">
</div>
                    </div>

                    <div class="form-group" id="tmbllgn"><br>
                                    <center><button class="btn btn-lg btn-success btn-block col-md-2" type="submit" class="tombol_beranda" value="beranda" onclick="hideDiv()">Beranda</button>
                                    </center>
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




    <script type="text/javascript">
  var login = document.getElementById('login');
  var beranda = document.getElementById('beranda');
function hideDiv(){
  login.style.display ='none';
  beranda.style.display='block';
  window.scrollTo(0, 0);
}

function showDiv(){
  login.style.display ='block';
  beranda.style.display='none';
  window.scrollTo(0, 0);
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
var xValues = ["obat a","obat a","obat a","obat a","obat a","obat a","obat a","obat a","obat a","obat a"];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
</script>
<section id="contact" class="contact">
      <div class="container" id="beranda">
        
      <div class="row">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box2 mt-4">
                  

            <form method="" action="<?php echo base_url(''); ?>">
              
                    <h2>Selamat datang <?php echo $_SESSION['username']; ?></h2><br><br>
                    <center><canvas id="myChart" style="width:100%;max-width:600px"></canvas></center>  
                    <center><p>Stok Obat Saat Ini</p></center>
                    

            </form>                  
                </div>
              </div>              
            </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
