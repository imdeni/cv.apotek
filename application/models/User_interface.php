<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_interface extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
 
    public function hitung(){
//         $this->db->select('count(*)');
//         $this->db->from('dataobat');        
// // $this->db->join('tblProduct', 'tblSaler.SalerID = tblProduct.SalerID'); 
// // $this->db->group_by('tblSaler.SalerID');       
//         $row = $this->db->get()->result_array();
        $this->db->from('tbl_harga');
    return $this->db->count_all_results();
    }
    public function showobatuser($limit, $offset){
        $this->db->limit($limit, $offset);
        $query = $this->db->get("tbl_harga");
        return $query->result();
    }
    

}
