<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Obat extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function getbynama($nama_obat){
        // $query = $this->db->query("SELECT * FROM tbl_harga where nama_obat='".$nama_obat."'");
        $this->db->select('*');
        $this->db->from('tbl_harga');
        $this->db->where('nama_obat', $nama_obat);
        $query = $this->db->get();
        return $query->result();
    }

    public function getrowpenjualan($nama_obat){
        // $query = $this->db->query("SELECT * FROM tbl_harga where nama_obat='".$nama_obat."'");
        $this->db->select('saldo,pemasukan');
        $this->db->from('tbl_harga');
        $this->db->where('nama_obat', $nama_obat);
        $query = $this->db->get();
        return $query->row();
    }

    public function getrowpembelian($nama_obat){
        // $query = $this->db->query("SELECT * FROM tbl_harga where nama_obat='".$nama_obat."'");
        $this->db->select('saldo,pengeluaran');
        $this->db->from('tbl_harga');
        $this->db->where('nama_obat', $nama_obat);
        $query = $this->db->get();
        return $query->row();
    }

    public function tbl_suplier($suplier){
        $this->db->select('nama_sup');
        $this->db->from('suplier');
        $this->db->where('nama_sup', $suplier);
        $query = $this->db->get();
        return $query->row();
    }


    public function show_namaobat(){
        $query = $this->db->get("nama_obat");
        return $query->result();
    }

    public function show_suplier(){
        $query = $this->db->get("suplier");
        return $query->result();
    }

    public function monitoring(){
        $query = $this->db->get("tbl_harga");
        return $query->result();
    }
    public function getsuplier(){
        $query = $this->db->get("suplier");
        return $query->result();
    }

    public function totalstok(){
        $this->db->select('sum(stok) as stoknya');
        $this->db->from('tbl_harga');
        $query = $this->db->get();
        return $query->result();
    }

    public function tglnamaobat(){
        $this->db->select('count(*) as tglnya');
        $this->db->from('nama_obat');
        $this->db->where('tgl', date('y-m-d'));
        $query = $this->db->get();
        return $query->result();
    }

    public function transaksi(){
        $this->db->select('sum(saldo) as penjualan');
        $this->db->from('tbl_transaksi');
        $this->db->where('tgl2', date('y-m-d') );
        $this->db->where('status','Penjualan');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalpembelian(){
        $this->db->select('sum(pembelian) as pembelian');
        $this->db->from('tbl_transaksi');
        $this->db->where('tgl2', date('y-m-d') );
        $this->db->where('status','pembelian');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalpembelian2(){
        $this->db->select('sum(pembelian) as pembelian');
        $this->db->from('tbl_transaksi');
        $this->db->where('status','pembelian');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalpenjualan(){
        $this->db->select('sum(penjualan) as penjualan');
        $this->db->from('tbl_transaksi');
        $this->db->where('tgl2', date('y-m-d') );
        $this->db->where('status','Penjualan');
        $query = $this->db->get();
        return $query->result();
    }

    public function totalpenjualan2(){
        $this->db->select('sum(penjualan) as penjualan');
        $this->db->from('tbl_transaksi');
        $this->db->where('status','Penjualan');
        $query = $this->db->get();
        return $query->result();
    }

    public function kadaluarsa(){
        $this->db->select('count(*) as kadaluarsa');
        $this->db->from('tbl_harga');
        $this->db->where('tgl_exp <=',date("y-m-d"));
        $this->db->where('stok >','0');
        $query = $this->db->get();
        return $query->result();
    }

    public function kadaluarsa2(){
        $this->db->select('sum(stok) as kadaluarsa');
        $this->db->from('tbl_harga');
        $this->db->where('tgl_exp <=',date("y-m-d"));
        $this->db->where('stok >=','0');
        $query = $this->db->get();
        return $query->result();
    }



    public function obatterjual(){
        $this->db->select('sum(jumlah) as obat_terjual');
        $this->db->from('tbl_transaksi');
        $this->db->where('tgl2', date('y-m-d') );
        $this->db->where('status','Penjualan');
        $query = $this->db->get();
        return $query->result();
    }

    public function obatterbeli(){
        $this->db->select('sum(jumlah) as obat_terbeli');
        $this->db->from('tbl_transaksi');
        $this->db->where('tgl2', date('y-m-d') );
        $this->db->where('status','Pembelian');
        $query = $this->db->get();
        return $query->result();
    }

    public function transaksi2(){
        $this->db->select('sum(pembelian) as pembelian');
        $this->db->from('tbl_transaksi');
        $this->db->where('status','pembelian');
        $query = $this->db->get();
        return $query->result();
    }

    public function transaksitotal(){
        $this->db->select('sum(saldo) as penjualan');
        $this->db->from('tbl_transaksi');
        $this->db->where('status','Penjualan');
        $query = $this->db->get();
        return $query->result();
    }
    public function transaksitotal2(){
        $this->db->select('sum(saldo) as pembelian');
        $this->db->from('tbl_transaksi');
        $this->db->where('status','Pembelian');
        $query = $this->db->get();
        return $query->result();
    }

    public function showpenjualan(){
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status','penjualan');
        $this->db->limit('20');
        $this->db->order_by('tgl','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function pesanan(){
        $this->db->select('*');
        $this->db->from('tbl_pesanan');
        $this->db->limit('20');
        $this->db->order_by('tgl','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showpenjualan2(){
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status','penjualan');
        
        $this->db->order_by('tgl','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showpenjualanpembelian(){
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        
        $this->db->order_by('tgl','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showpembelian2(){
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('status','pembelian');
        
        $this->db->order_by('tgl','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showpembelian(){
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->limit('20');
        $this->db->where('status','pembelian');
        $this->db->order_by('tgl','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function tglkategoriobat(){
        $this->db->select('count(*) as tglnya');
        $this->db->from('kategoriobat');
        $this->db->where('tgl', date('y-m-d'));
        $query = $this->db->get();
        return $query->result();
    }

    public function totalkategori(){
        $this->db->select('count(*) as kategorinya');
        $this->db->from('kategoriobat');
        $query = $this->db->get();
        return $query->result();
    }

    public function show_kategoriobat(){
        $query = $this->db->get("kategoriobat");
        return $query->result();
    }

    public function show_harga(){
        $query = $this->db->get("tbl_harga");
        return $query->result();
    }

    public function db_obat($kode){
        $this->db->where('kode_nama', $kode); 
        $result = $this->db->get('nama_obat')->row(); 
        return $result;
    }

    public function tbl_kategori($kode){
        $this->db->where('kode_kategori', $kode); 
        $result = $this->db->get('kategoriobat')->row(); 
        return $result;
    }
    public function tbl_kategori2($kategori){
        $this->db->where('nama_kategori', $kategori); 
        $result = $this->db->get('kategoriobat')->row(); 
        return $result;
    }

    public function tbl_harga($nama,$kategori){
        $this->db->where('nama_obat', $nama); 
        $this->db->where('kategori_obat', $kategori); 
        $result = $this->db->get('tbl_harga')->row(); 
        return $result;
    }

    // public function tbl_harga2($kategori){
    //     $this->db->where('kategori_obat', $kategori); 
    //     $result = $this->db->get('tbl_harga')->row(); 
    //     return $result;
    // }

    public function inputData_nama()
    {
        $data = [
            "nama_obat" => $this->input->post('nama_obat', true),
            "kode_nama" => $this->input->post('nama_obat', true) 
        ];
        $this->db->insert('nama_obat', $data);
    }

    public function inputData_suplier()
    {
        $data = [
            "nama_sup" => $this->input->post('suplier', true),
            "alamat_sup" => $this->input->post('alamat', true),
            "cp_sup" => $this->input->post('cp', true)  
        ];
        $this->db->insert('suplier', $data);
    }

    public function inputData_harga()
    {
        $data = [
            "nama_obat" => $this->input->post('nama', true),
            "kategori_obat" => $this->input->post('kategori', true),
            "keterangan" => $this->input->post('keterangan', true),
            "harga_beli" => $this->input->post('harga_beli', true),
            "harga_jual" => $this->input->post('harga_jual', true) 
        ];
        $this->db->insert('tbl_harga', $data);
    }

    public function inputData_kategori()
    {
        $data = [
            "kode_kategori" => $this->input->post('kategori', true), 
            "nama_kategori" => $this->input->post('kategori', true)
        ];
        $this->db->insert('kategoriobat', $data);
    }

    public function inputData_penjualan($saldo,$pemasukan,$total)
    {
        $data = [
            "nama" => $this->input->post('nama', true), 
            "jumlah" => $this->input->post('jumlah', true),
            "stok" => $this->input->post('stok', true),
            "stokaktual" => $this->input->post('stok', true)-$this->input->post('jumlah', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga_jual', true),
            "status" => "Penjualan",
            "saldo" => $saldo,
            "tgl" => date('y-m-d h:i:s'),
            "penjualan" => $total,
            "tgl_exp" => $this->input->post('tgl_exp', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];
        $this->db->insert('tbl_transaksi', $data);
        $nama=$this->input->post('nama', true);
        $dataupdate = [
            "stok" => $this->input->post('stok', true)-$this->input->post('jumlah', true),
            "saldo" => $saldo,
            "pemasukan" => $pemasukan
        ];
        $this->db->set($dataupdate);
        $this->db->where('nama_obat', $nama);
        $this->db->update('tbl_harga');
    }

    public function inputdiagnosa($nama,$d1,$d2,$d3,$d4,$d5)
    {
        $data = [
            "nama" => $nama, 
            "diagnosa1" => $d1,
            "diagnosa2" => $d2,
            "diagnosa3" => $d3,
            "diagnosa4" => $d4,
            "diagnosa5" => $d5
        ];

        $this->db->insert('diagnosa', $data);
    }

    public function inputData_pembelian($saldo,$pengeluaran,$total)
    {
        $data = [
            "nama" => $this->input->post('nama', true), 
            "jumlah" => $this->input->post('jumlah', true),
            "stok" => $this->input->post('stok', true),
            "stokaktual" => $this->input->post('stok', true)+$this->input->post('jumlah', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga_beli', true),
            "status" => "Pembelian",
            "saldo" => $saldo,
            "suplier" => $this->input->post('suplier', true),
            "tgl" => date('y-m-d h:i:s'),
            "pembelian" => $total
        ];
        $this->db->insert('tbl_transaksi', $data);
        $nama=$this->input->post('nama', true);
        $dataupdate = [
            "stok" => $this->input->post('stok', true)+$this->input->post('jumlah', true),
            "saldo" => $saldo,
            "pengeluaran" => $pengeluaran,
            "tgl_exp" => $this->input->post('tgl_exp', true)
        ];
        $this->db->set($dataupdate);
        $this->db->where('nama_obat', $nama);
        $this->db->update('tbl_harga');
    }

    public function update_editharga()
    {
        $dataupdate = [
            "keterangan" => $this->input->post('keterangan', true),
            "harga_beli" => $this->input->post('harga_beli', true),
            "harga_jual" => $this->input->post('harga_jual', true)
            
        ];
        $this->db->set($dataupdate);
        $this->db->where('nama_obat', $this->input->post('nama'));
        $this->db->update('tbl_harga');
    }



    public function excelpenjualan() {
        $this->db->select(array( 'nama', 'jumlah', 'tgl_exp','stok', 'kategori', 'harga', 'status', 'saldo', 'tgl', 'stokaktual', 'suplier', 'penjualan','keterangan'));
        $this->db->from('tbl_transaksi');
        $this->db->where('status','Penjualan');
        $this->db->where('tgl >= ', $this->input->post('tanggal1' ));
        $this->db->where('tgl <= ', $this->input->post('tanggal2' ));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function excelpembelian() {
        $this->db->select(array( 'nama', 'jumlah', 'tgl_exp','stok', 'kategori', 'harga', 'status', 'saldo', 'tgl', 'stokaktual', 'suplier', 'pembelian','keterangan'));
        $this->db->from('tbl_transaksi');
        $this->db->where('status','Pembelian');
        $this->db->where('tgl >= ', $this->input->post('tanggal1' ));
        $this->db->where('tgl <= ', $this->input->post('tanggal2' ));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function excelpenjualanpembelian() {
        $this->db->select(array( 'nama', 'jumlah', 'tgl_exp','stok', 'kategori', 'harga', 'status', 'saldo', 'tgl', 'stokaktual', 'suplier', 'pembelian','penjualan','keterangan'));
        $this->db->from('tbl_transaksi');
        $this->db->where('tgl >= ', $this->input->post('tanggal1' ));
        $this->db->where('tgl <= ', $this->input->post('tanggal2' ));
        $this->db->order_by('tgl','desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function diagnosa($nama){
        $this->db->select('*');
        $this->db->from('diagnosa');
        $this->db->where('nama', $nama); 
        $query = $this->db->get();
        return $query->result();
    }

    public function tampildiagnosa(){
        $this->db->select('*');
        $this->db->from('diagnosa');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function showdiagnosa(){
        $this->db->distinct('diagnosa1');
        $this->db->select('diagnosa1');
        $this->db->from('diagnosa');
        
        $query = $this->db->get();
        return $query->result();
    }
    public function showdiagnosa2(){
        $this->db->distinct('diagnosa2');
        $this->db->select('diagnosa2');
        $this->db->from('diagnosa');
        
        $query = $this->db->get();
        return $query->result();
    }
    public function showdiagnosa3(){
        $this->db->distinct('diagnosa3');
        $this->db->select('diagnosa3');
        $this->db->from('diagnosa');
        
        $query = $this->db->get();
        return $query->result();
    }
    public function showdiagnosa4(){
        $this->db->distinct('diagnosa4');
        $this->db->select('diagnosa4');
        $this->db->from('diagnosa');
        
        $query = $this->db->get();
        return $query->result();
    }
    public function showdiagnosa5(){
        $this->db->distinct('diagnosa5');
        $this->db->select('diagnosa5');
        $this->db->from('diagnosa');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function hapussuplier($id){
        $this->db->where('nama_sup', $id);
        $this->db->delete('suplier');
    }

    public function kategoridelete($id){
        $this->db->where('nama_kategori', $id);
        $this->db->delete('kategoriobat');
    }
    public function terpenuhi($id){
        $this->db->where('nama', $id);
        $this->db->delete('tbl_pesanan');
    }

    public function kategoridelete2($id){
        $this->db->where('kategori_obat', $id);
        $this->db->delete('tbl_harga');
    }

    public function delete($id){
        
        
        $this->db->where('nama_obat', $id);
        $this->db->delete('nama_obat');
    }

    public function hargadelete($id){
        $this->db->where('nama_obat', $id);
        $this->db->delete('tbl_harga');
    }

    public function delete2($id){
        
        
        $this->db->where('nama_obat', $id);
        $this->db->delete('tbl_harga');
    }

    public function cekstok($id){
        
        $this->db->select('*');
        $this->db->from('tbl_harga');
        $this->db->where('nama_obat', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function cekstok2($id){
        
        $this->db->select('*');
        $this->db->from('tbl_harga');
        $this->db->where('kategori_obat', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
    public function cekstok3($id){
        
        $this->db->select('*');
        $this->db->from('tbl_harga');
        $this->db->where('nama_obat', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function edit($id){
        
        $this->db->select('*');
        $this->db->from('tbl_harga');
        $this->db->where('nama_obat', $id);
        $query = $this->db->get();
        return $query->result();
    }

     public function getdiagnosa($d1){
        $this->db->select('*');
        $this->db->from('diagnosa');
        $this->db->where('diagnosa1', $d1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getdiagnosa2($d2){
        $this->db->select('*');
        $this->db->from('diagnosa');
        $this->db->where('diagnosa1', $this->input->post('d1'));
        $this->db->where('diagnosa2', $d2);
        $query = $this->db->get();
        return $query->result();
    }

    public function getdiagnosa3($d3){
        $this->db->select('*');
        $this->db->from('diagnosa');
        $this->db->where('diagnosa1', $this->input->post('d1'));
        $this->db->where('diagnosa2', $this->input->post('d2'));
        $this->db->where('diagnosa3', $d3);
        
        $query = $this->db->get();
        return $query->result();
    }

    public function getdiagnosa4($d4){
        $this->db->select('*');
        $this->db->from('diagnosa');
        $this->db->where('diagnosa1', $this->input->post('d1'));
        $this->db->where('diagnosa2', $this->input->post('d2'));
        $this->db->where('diagnosa3', $this->input->post('d3'));
        $this->db->where('diagnosa4', $d4);
        
        $query = $this->db->get();
        return $query->result();
    }

    public function getdiagnosa5($d5){
        $this->db->select('*');
        $this->db->from('diagnosa');
        $this->db->where('diagnosa1', $this->input->post('d1'));
        $this->db->where('diagnosa2', $this->input->post('d2'));
        $this->db->where('diagnosa3', $this->input->post('d3'));
        $this->db->where('diagnosa4', $this->input->post('d4'));
        $this->db->where('diagnosa5', $d5);
        
        $query = $this->db->get();
        return $query->result();
    }

    public function inputpesanan()
    {
        $data = [
            "nama" => $this->input->post('nama', true), 
            
        ];
        $this->db->insert('tbl_pesanan', $data);
    }

}
