<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapus3 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	$id=$this->input->get('nama');
	$this->load->model('Obat');
	$cekstok = $this->Obat->cekstok3($id);
	
		if ($cekstok->stok > 0) {
			// echo "stok masih ada";
		echo "<script>alert('Stok masih ada, tidak bisa di hapus. Habiskan stok dulu!!');
        window.location.href='reload';
        </script>";
		}else{
			// echo "oke di hapus";
 			$response=$this->Obat->hargadelete($id);
 			
			echo "<script>alert('harga obat berhasil di hapus!!');
        	window.location.href='reload';
        	</script>";
			
		}
	
	}

	function reload(){
    redirect(base_url("index.php/Admin/v_harga_obat"));

  }

}