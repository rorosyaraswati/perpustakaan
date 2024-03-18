<?php
class databuku extends CI_Model{

    function get_databuku(){
        $bukuArr = $this->db->get('databuku');
        if ($bukuArr->num_rows() > 0){
            $detail=$bukuArr->result_array();
            return $detail;
        }
    }

    function databuku_save($data){
        // Cek apakah status buku telah diberikan dalam data yang diberikan
        if (!isset($data['status'])) {
            $data['status'] = 'terpinjam'; // Default status saat menyimpan data baru
        }
        $query = $this->db->insert('databuku', $data);
        return $query;
    }
    
    

    function del_databuku($kode_buku){
        $this->db->where('kode_buku', $kode_buku);
        $this->db->delete('databuku');
    }

    function detail_databuku($kode_buku){
        $query= $this->db->get_where('databuku',array('kode_buku' => $kode_buku));
        if ($query->num_rows() > 0) {
            $detail  = $query->result_array();          
            return $detail[0];
            }
        return false;
    }

    function update_databuku($kode_buku, $data){
        $this->db->where('kode_buku', $kode_buku);
        $this->db->update('databuku', $data);
    }

    function add_databuku($kode_buku){
        $query= $this->db->get_where('databuku',array('kode_buku' => $kode_buku));
        if ($query->num_rows() > 0) {
            $detail  = $query->result_array();          
            return $detail[0];
            }
        return false;
    }

    function getKodeBuku() {
        $this->db->select('kode_buku, status');
        $query = $this->db->get('databuku');
        return $query->result_array();
    }

    function getNim() {
        $this->db->select('nim');
        $query = $this->db->get('databuku');
        return $query->result_array();
    }
    

    public function update_status_terpinjam($kode_buku) {
        $this->db->where('kode_buku', $kode_buku);
        $this->db->update('databuku', array('status' => 'terpinjam'));
    }
    
    
}