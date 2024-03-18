<?php
class peminjam extends CI_Model{

    function get_peminjam(){
        $peminjamviewArr = $this->db->get('peminjam');
        if ($peminjamviewArr->num_rows() > 0){
            $detail=$peminjamviewArr->result_array();
            return $detail;
        }
    }

    function peminjam_save($data){
        $query = $this->db->insert('peminjam', $data);
        return $query;
    }

    function del_peminjam($nim){
        $this->db->where('nim', $nim);
        $this->db->delete('peminjam');
    }

    function detail_peminjam($nim){
        $query= $this->db->get_where('peminjam',array('nim' => $nim));
        if ($query->num_rows() > 0) {
            $detail  = $query->result_array();          
            return $detail[0];
            }
        return false;
    }

    function update_peminjam($nim, $data){
        $this->db->where('nim', $nim);
        $this->db->update('peminjam', $data);
    }

    function add_peminjam($nim){
        $query= $this->db->get_where('peminjam',array('nim' => $nim));
        if ($query->num_rows() > 0) {
            $detail  = $query->result_array();          
            return $detail[0];
            }
        return false;
    }
}