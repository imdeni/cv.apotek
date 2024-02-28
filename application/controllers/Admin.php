<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Obat');
		$data["resultsuplier"] = $this->Obat->show_suplier();
		$data["results"] = $this->Obat->totalstok();
		$data["results2"] = $this->Obat->totalkategori();
		$data["qtgl"] = $this->Obat->tglnamaobat();
		$data["qtgl2"] = $this->Obat->tglkategoriobat();
		$data["monitoring"] = $this->Obat->transaksi();
		$data["monitoring2"] = $this->Obat->transaksitotal();
		$data["monitoring3"] = $this->Obat->transaksi2();
		$data["monitoring4"] = $this->Obat->transaksitotal2();
		$data["totalpenjualan"] = $this->Obat->totalpenjualan();
		$data["totalpenjualan2"] = $this->Obat->totalpenjualan2();
		$data["totalpembelian"] = $this->Obat->totalpembelian();
		$data["totalpembelian2"] = $this->Obat->totalpembelian2();
		$data["obatterjual"] = $this->Obat->obatterjual();
		$data["obatterbeli"] = $this->Obat->obatterbeli();
		$data["kadaluarsa"] = $this->Obat->kadaluarsa();
		$data["kadaluarsa2"] = $this->Obat->kadaluarsa2();
		$this->load->view('admin/admin_beranda',$data);
	}

	

	public function penjualan()
	{	
		$this->load->model('Obat');
		$data["penjualan"] = $this->Obat->showpenjualan2();
		$this->load->view('admin/nota_penjualan',$data);	
	}

	public function penjualan_pembelian()
	{	
		$this->load->model('Obat');
		$data["penjualanpembelian"] = $this->Obat->showpenjualanpembelian();
		$this->load->view('admin/nota_penjualan_pembelian',$data);	
	}

	public function pembelian()
	{	
		$this->load->model('Obat');
		$data["pembelian"] = $this->Obat->showpembelian2();
		$this->load->view('admin/nota_pembelian',$data);	
	}

	public function data_stok()
	{
		$this->load->model('Obat');
		$data["results"] = $this->Obat->monitoring();
		$data["results2"] = $this->Obat->totalstok();
		$this->load->view('admin/admin_data_stok',$data);
	}


	public function v_diagnosis()
	{
		$this->load->model('Obat');
		$data["results"] = $this->Obat->show_namaobat();
		$data["results2"] = $this->Obat->tampildiagnosa(); 
		$this->load->view('admin/tambah_diagnosis',$data);
	}

	public function v_tambah_suplier()
	{
		$this->load->model('Obat');
		$data["results"] = $this->Obat->show_suplier();
		$this->load->view('admin/tambah_suplier', $data);
	}

	public function v_tambah_nama_obat()
	{
		$this->load->model('Obat');
		$data["results"] = $this->Obat->show_namaobat();
		$this->load->view('admin/tambah_nama_obat', $data);
	}

	public function v_tambah_kategori_obat()
	{
		$this->load->model('Obat');
		$data["results"] = $this->Obat->show_kategoriobat();
		$this->load->view('admin/tambah_kategori_obat',$data);
	}

	public function v_harga_obat()
	{
		$this->load->model('Obat');
		$data["results"] = $this->Obat->show_namaobat();
		$data["results2"] = $this->Obat->show_kategoriobat();
		$data["results3"] = $this->Obat->show_harga();
		$this->load->view('admin/tambah_harga_obat',$data);
	}

	public function v_stok_obat()
	{
		$this->load->view('admin/tambah_stok_obat');
	}

}
