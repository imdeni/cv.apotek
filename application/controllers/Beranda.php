<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	function __construct()
	{
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library("pagination");
      
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function pesan()
	{
		$this->load->model('Obat');
		
		$data["results"] = $this->Obat->showdiagnosa();
		$data["results2"] = $this->Obat->showdiagnosa2();
		$data["results3"] = $this->Obat->showdiagnosa3();
		$data["results4"] = $this->Obat->showdiagnosa4();
		$data["results5"] = $this->Obat->showdiagnosa5();
		$this->load->view('user/pesan',$data);
	}

	public function Lihat($offset=NULL)
	{	
		$config['base_url'] = base_url() . 'index.php/Dashboard/Lihat';
		$this->load->model('User_interface');
		$config['total_rows'] = $this->User_interface->hitung();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['offset'] = $offset;
		$this->load->model('User_interface');
		$data["results"] = $this->User_interface->showobatuser($config["per_page"], $offset);
		$this->pagination->initialize($config);
		$this->load->view("lihat_obat", $data);
	}
	public function login()
	{
		$this->load->view('tampilan_login');
	}

	public function diagnosa(){
		$this->load->model('Obat');
		$d1=$this->input->post('d1');
		$getdatanama=$this->Obat->getdiagnosa($d1);
		echo json_encode($getdatanama);

	}
	public function diagnosa2(){
		$this->load->model('Obat');
		// $d1=$this->input->post('d1');
		$d2=$this->input->post('d2');
		$getdatanama2=$this->Obat->getdiagnosa2($d2);
		echo json_encode($getdatanama2);

	}

	public function diagnosa3(){
		$this->load->model('Obat');
		// $d1=$this->input->post('d1');
		$d3=$this->input->post('d3');
		$getdatanama3=$this->Obat->getdiagnosa3($d3);
		echo json_encode($getdatanama3);

	}


	public function diagnosa4(){
		$this->load->model('Obat');
		// $d1=$this->input->post('d1');
		$d4=$this->input->post('d4');
		$getdatanama4=$this->Obat->getdiagnosa4($d4);
		echo json_encode($getdatanama4);

	}

	public function diagnosa5(){
		$this->load->model('Obat');
		// $d1=$this->input->post('d1');
		$d5=$this->input->post('d5');
		$getdatanama5=$this->Obat->getdiagnosa5($d5);
		echo json_encode($getdatanama5);

	}
}
