<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {


	function __construct()
	{
		parent::__construct();
	}
	function t_nama_obat(){
		$kode = $this->input->post('nama_obat');
		$nama_obat = $this->input->post('nama_obat');

		$this->load->model('Obat');
		$cek_data = $this->Obat->db_obat($kode);
		if(empty($cek_data)){
			$this->Obat->inputData_nama();
			echo "<script>alert('Obat berhasil di simpan!');
        	window.location.href='nama_obat';
        	</script>";
		}
		else{
			echo "<script>alert('Kode ".$kode." Sudah ada!');
        	window.location.href='nama_obat';
        	</script>";
		}		
	}

	function t_kategori_obat(){
		$kode = $this->input->post('kategori');
		$kategori_obat = $this->input->post('kategori');

		$this->load->model('Obat');
		$cek_data = $this->Obat->tbl_kategori($kode);
		if(empty($cek_data)){

			$cek_data = $this->Obat->tbl_kategori2($kategori_obat);
			if(empty($cek_data)){
				$this->Obat->inputData_kategori();
				echo "<script>alert('Kategori berhasil di simpan!');
	        	window.location.href='kategori_obat';
	        	</script>";
			}
			else{
				echo "<script>alert('Kategori ".$kategori." Sudah ada!');
	        	window.location.href='kategori_obat';
	        	</script>";
			}

		}
		else{
			echo "<script>alert('Kode ".$kode." Sudah ada!');
        	window.location.href='kategori_obat';
        	</script>";
		}		
	}

	function t_harga_obat(){
		$nama = $this->input->post('nama');
		$kategori = $this->input->post('kategori');
		$keterangan = $this->input->post('keterangan');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');

		$this->load->model('Obat');
		$cek_data = $this->Obat->tbl_harga($nama,$kategori);
		// $cek_data2 = $this->Obat->tbl_harga2($kategori);
		if ($harga_beli < $harga_jual) {
			if ($nama!=" " or $kategori!=" ") {
				if(empty($cek_data)){
						$this->Obat->inputData_harga();
						echo "<script>alert('Harga ".$nama." dengan kategori ".$kategori." berhasil di simpan!');
			        	window.location.href='harga_obat';
			        	</script>";
				}
				else{
					echo "<script>alert('Nama obat ".$nama." dengan kategori ".$kategori." Sudah ada!');
		        	window.location.href='harga_obat';
		        	</script>";
				}		
			}	
			else{
					echo "<script>alert('Silahkan pilih nama atau kategori obat dengan benar!');
		        	window.location.href='harga_obat';
		        	</script>";
				}	
		}else{
			echo "<script>alert('Harga beli harus lebih kecil dari harga jual!');
		        	window.location.href='harga_obat';
		        	</script>";
		}
	}


	function t_suplier(){
		$suplier = $this->input->post('suplier');
		$alamat = $this->input->post('alamat');
		$cp = $this->input->post('cp');
		

		$this->load->model('Obat');
		$cek_data = $this->Obat->tbl_suplier($suplier);
		
				if(empty($cek_data)){
						$this->Obat->inputData_suplier();
						echo "<script>alert('Data ".$suplier." berhasil di simpan!');
			        	window.location.href='suplier';
			        	</script>";
				}
				else{
					echo "<script>alert('Data ".$suplier." Sudah ada!');
		        	window.location.href='suplier';
		        	</script>";
				}		
			}	
	

	function t_penjualan(){
		$nama_obat = $this->input->post('nama');
		$jumlah = $this->input->post('jumlah');
		$stok = $this->input->post('stok');
		$kategori = $this->input->post('kategori');
		$keterangan = $this->input->post('keterangan');
		$harga_jual = $this->input->post('harga_jual');
		$kadaluarsa = $this->input->post('tgl_exp');
		$keterangan = $this->input->post('keterangan');


		$this->load->model('Obat');
		if ($nama_obat != " " or $nama_obat != NULL or $stok != NULL or $kategori != NULL  or $keterangan != NULL or $harga_jual != NULL) {

			
			if ($stok < $jumlah or $stok <= 0) {
			echo "<script>alert('Jumlah penjualan melebihi stok yang ada!');
        	window.location.href='penjualan';
        	</script>";
			}else{
				$cek_saldo = $this->Obat->getrowpenjualan($nama_obat)->saldo;
				$cek_pemasukan = $this->Obat->getrowpenjualan($nama_obat)->pemasukan;
				$total=$jumlah*$harga_jual;
				$saldo=$cek_saldo+$total;
				$pemasukan=$cek_pemasukan+$total;

				$this->Obat->inputData_penjualan($saldo,$pemasukan,$total);
				echo "<script>alert('Penjualan berhasil disimpan!');
        		window.location.href='penjualan';
        		</script>";
			}

		}else{
		echo "<script>alert('Silahkan pilih nama obat dengan benar!');
        	window.location.href='penjualan';
        	</script>";
		}
	}

	function t_pembelian(){
		$nama_obat = $this->input->post('nama');
		$jumlah = $this->input->post('jumlah');
		$stok = $this->input->post('stok');
		$kategori = $this->input->post('kategori');
		$suplier = $this->input->post('suplier');
		$harga_beli = $this->input->post('harga_beli');
		$tgl_exp = $this->input->post('tgl_exp');


		$this->load->model('Obat');
		if ($tgl_exp <= date('y-m-d')) {
			// code...
		if($nama_obat == " "){
			echo "<script>alert('Pilih Obat!');
        	window.location.href='pembelian';
        	</script>";
		}
		else if($suplier == " "){
			echo "<script>alert('Pilih Suplier!');
        	window.location.href='pembelian';
        	</script>";
		}
		
		else if ($suplier != " " or$nama_obat != " " or $nama_obat != NULL or $stok != NULL or $kategori != NULL  or $keterangan != NULL or $harga_jual != NULL) {

			
			if ($stok+$jumlah <= 0) {
			echo "<script>alert('stok kosong!');
        	window.location.href='pembelian';
        	</script>";
			}else{
				$cek_saldo = $this->Obat->getrowpembelian($nama_obat)->saldo;
				$cek_pengeluaran = $this->Obat->getrowpembelian($nama_obat)->pengeluaran;
				$total=$jumlah*$harga_beli;
				$saldo=$cek_saldo-$total;
				$pengeluaran=$cek_pengeluaran-$total;

				$this->Obat->inputData_pembelian($saldo,$pengeluaran,$total);
				echo "<script>alert('Pembelian berhasil disimpan!');
        		window.location.href='pembelian';
        		</script>";
			}

		}else{
		echo "<script>alert('Silahkan pilih nama obat dengan benar!');
        	window.location.href='pembelian';
        	</script>";
		}
	}else{
			echo "<script>alert('Pilih tanggal kadaluarsa dengan benar!');
        	window.location.href='pembelian';
        	</script>";
		
		}

	}

		function t_diagnosis(){
		$nama = $this->input->post('nama');
		$d1 = $this->input->post('diagnosa1');
		$d2 = $this->input->post('diagnosa2');
		$d3 = $this->input->post('diagnosa3');
		$d4 = $this->input->post('diagnosa4');
		$d5 = $this->input->post('diagnosa5');

		$this->load->model('Obat');
		$cek = $this->Obat->diagnosa($nama);  
		if ($nama != "" or $nama != NULL) {
			if (empty($cek)) {
				$this->Obat->inputdiagnosa($nama,$d1,$d2,$d3,$d4,$d5);
				echo "<script>alert('Diagnosa berhasil disimpan!');
        		window.location.href='diagnosis';
        		</script>";
			}else{
				echo "<script>alert('Diagnosa obat sudah ada!');
        	window.location.href='diagnosis';
        	</script>";
			}	
	}else{
			echo "<script>alert('Pilih nama obat dengan benar!');
        	window.location.href='diagnosis';
        	</script>";
		
		}

	}




	function pesanan(){
		
		$this->load->model('Obat');
		$this->Obat->inputpesanan();
			echo "<script>alert('Berhasil memesan!');
		        	window.location.href='pesan';
		        	</script>";
		
	}
	


	function diagnosis(){
    redirect(base_url("index.php/Admin/v_diagnosis"));
	}

	function pesan(){
    redirect(base_url("index.php/Beranda/pesan"));
	}

	function nama_obat(){
    redirect(base_url("index.php/Admin/v_tambah_nama_obat"));
	}

	function penjualan(){
    redirect(base_url("index.php/Karyawan/v_penjualan"));
	}

	function pembelian(){
    redirect(base_url("index.php/Karyawan/v_pembelian"));
	}

	function harga_obat(){
    redirect(base_url("index.php/Admin/v_harga_obat"));
	}

	function kategori_obat(){
    redirect(base_url("index.php/Admin/v_tambah_kategori_obat"));
	}

	function suplier(){
    redirect(base_url("index.php/Admin/v_tambah_suplier"));
	}
			
}			
