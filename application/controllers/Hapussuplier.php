<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapussuplier extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	$id=$this->input->get('suplier');
	$this->load->model('Obat');
	$ceksuplier = $this->Obat->hapussuplier($id);
	
		echo "<script>alert('Suplier berhasil di hapus!');
        window.location.href='reload';
        </script>";
	
	}

	function reload(){
    redirect(base_url("index.php/Admin/v_tambah_suplier"));

  }

}