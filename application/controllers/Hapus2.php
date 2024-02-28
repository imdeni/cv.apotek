<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapus2 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	$id=$this->input->get('kategori');
	$this->load->model('Obat');
	$cekstok = $this->Obat->cekstok2($id);
	if (empty($cekstok)) {
		$response=$this->Obat->kategoridelete($id);
			// echo "tbl_harga empty";
			echo "<script>alert('Kategori obat berhasil di hapus!!');
        	window.location.href='reload';
        	</script>";

		
	}else{
		if ($cekstok->stok > 0) {
			// echo "stok masih ada";
		echo "<script>alert('Stok masih ada, tidak bisa di hapus. Habiskan stok dulu!!');
        window.location.href='reload';
        </script>";
		}else{
			// echo "oke di hapus";
 			$response2=$this->Obat->kategoridelete2($id);
 			$response=$this->Obat->kategoridelete($id);
 			
			echo "<script>alert('Kategori obat berhasil di hapus!!');
        	window.location.href='reload';
        	</script>";
			
		}
	}
	}

	function reload(){
    redirect(base_url("index.php/Admin/v_tambah_kategori_obat"));

  }

}