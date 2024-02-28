<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terpenuhi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	$id=$this->input->get('nama');
	$this->load->model('Obat');
	$response=$this->Obat->terpenuhi($id);
 	echo "<script>alert('Pesanan telah terpenuhi!!');
        	window.location.href='reload';
        	</script>";
			
		}
	
	

	function reload(){
    redirect(base_url("index.php/Karyawan/v_pesan"));

  }

}