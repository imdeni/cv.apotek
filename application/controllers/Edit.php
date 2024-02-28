<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function formedit()
	{
	$id=$this->input->get('nama');
	$this->load->model('Obat');
	$data['results'] = $this->Obat->edit($id);
	$this->load->view('admin/tambah_harga_obat_edit',$data);
	}

	function index(){
		$nama = $this->input->post('nama');
		$kategori = $this->input->post('kategori');
		$keterangan = $this->input->post('keterangan');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');

		$this->load->model('Obat');

		if ($harga_beli < $harga_jual) {
			$this->Obat->update_editharga();	
			echo "<script>alert('Berhasil di edit !');
		        	window.location.href='reload';
		        	</script>";
		}else{
			echo "<script>alert('Harga beli harus lebih kecil dari harga jual!');
		        	window.location.href='reload';
		        	</script>";
		}
	}


	function reload(){
    redirect(base_url("index.php/Admin/v_harga_obat"));
	}
}