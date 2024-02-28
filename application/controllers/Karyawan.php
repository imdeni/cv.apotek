<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

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
		$this->load->view('karyawan/beranda_karyawan',$data);
	}

	public function v_penjualan()
	{
		$this->load->model('Obat');
		$data["results"] = $this->Obat->monitoring();
		$data["results3"] = $this->Obat->showpenjualan();
		$this->load->view('karyawan/penjualan',$data);
	}

	public function v_pembelian()
	{
		$this->load->model('Obat');
		$data["results"] = $this->Obat->monitoring();
		$data["suplier"] = $this->Obat->getsuplier();
		$data["results3"] = $this->Obat->showpembelian();
		$this->load->view('karyawan/pembelian',$data);
	}

	public function v_pesan()
	{
		$this->load->model('Obat');
		$data["pesanan"] = $this->Obat->pesanan();
		$this->load->view('karyawan/pesanan_karyawan',$data);
	}

	public function autofill(){
		$this->load->model('Obat');
		$nama_obat=$this->input->post('nama');
		$getdatanama=$this->Obat->getbynama($nama_obat);
		echo json_encode($getdatanama);

	}

}