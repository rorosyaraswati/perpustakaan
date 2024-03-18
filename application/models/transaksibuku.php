<?php
class transaksibuku extends CI_Model{

    function get_transaksibuku(){
        $transaksiArr = $this->db->get('transaksibuku');
        if ($transaksiArr->num_rows() > 0){
            $detail=$transaksiArr->result_array();
            return $detail;
        }
    }

    function transaksibuku_save($data){
        $query = $this->db->insert('transaksibuku', $data);
        return $query;
    }

    function del_transaksibuku($kode_buku) {
        $this->db->where('kode_buku', $kode_buku);
        $this->db->delete('transaksibuku');
    
        // Hapus status terpinjam dari model databuku
        $this->db->where('kode_buku', $kode_buku);
        $this->db->update('databuku', array('status' => NULL));
    }
    

    function detail_transaksibuku($kode_buku){
        $query= $this->db->get_where('transaksibuku',array('kode_buku' => $kode_buku));
        if ($query->num_rows() > 0) {
            $detail  = $query->result_array();          
            return $detail[0];
            }
        return false;
    }

    function update_transaksibuku($kode_buku, $data){
        $this->db->where('kode_buku', $kode_buku);
        $this->db->update('transaksibuku', $data);
    }

    function add_transaksibuku($kode_buku){
        $query= $this->db->get_where('transaksibuku',array('kode_buku' => $kode_buku));
        if ($query->num_rows() > 0) {
            $detail  = $query->result_array();          
            return $detail[0];
            }
        return false;
    }
    
}