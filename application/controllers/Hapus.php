<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapus extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	$id=$this->input->get('nama_obat');
	$this->load->model('Obat');
	$cekstok = $this->Obat->cekstok($id);
	if (empty($cekstok)) {
		$response=$this->Obat->delete($id);
			// echo "tbl_harga empty";
			echo "<script>alert('Nama obat berhasil di hapus!!');
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
 			$response2=$this->Obat->delete2($id);
 			$response=$this->Obat->delete($id);
 			
			echo "<script>alert('Nama obat berhasil di hapus!!');
        	window.location.href='reload';
        	</script>";
			
		}
	}
	}

	function reload(){
    redirect(base_url("index.php/Admin/v_tambah_nama_obat"));

  }

}