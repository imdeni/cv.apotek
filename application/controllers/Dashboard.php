<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct()
	{
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library("pagination");
      
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
		// $data["links"] = $this->pagination->create_links();
		

		$this->load->view("lihat_obat", $data);




		// $this->load->model('User_interface');
  //   	$data['query'] = $this->User_interface->showobatuser();
		// $this->load->view('lihat_obat',$data);
	}
}
