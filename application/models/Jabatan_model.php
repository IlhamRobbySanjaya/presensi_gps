<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{
    public function getDataJabatan() {
        $this->db->select('*');
        $this->db->from('jabatan');
        $query = $this->db->get();
        return $query->result();
    }

    public function editDataJabatan($data, $id){
        $this->db->where('id', $id);
        $this->db->update('jabatan', $data);
    }

    public function getDataJabatanDetail($id){
        $this->db->where('id', $id);
        $query = $this->db->get('jabatan');
        return $query->row();
    }

    public function deleteDataJabatan($id){
        $this->db->where('id', $id);
        $this->db->delete('jabatan');
    }
}