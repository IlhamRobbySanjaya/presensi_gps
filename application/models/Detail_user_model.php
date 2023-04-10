<?php defined('BASEPATH') or exit('No direct script access allowed');

class Detail_user_model extends CI_Model
{
    public function getDataUser()
    {
        $this->db->select('*');
        $this->db->from("`user` WHERE role = 'pegawai' AND is_active = 1");
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all()
    {
        $this->db->join('jabatan', 'user.jabatan = jabatan.id', 'LEFT');
        $this->db->where('role', 'pegawai');
        $result = $this->db->get('user');
        return $result->result();
    }

    public function find($id)
    {
        $this->db->join('jabatan', 'user.jabatan = jabatan.id', 'LEFT');
        $this->db->where('nip', $id);
        $result = $this->db->get('user');
        return $result->row();
    }

    public function editDataUser($data, $id)
    {
        $this->db->where('nip', $id);
        $this->db->update('user', $data);
    }

    public function getDataUserDetail($id)
    {
        $this->db->where('nip', $id);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function deleteDataUser($id)
    {
        $this->db->where('nip', $id);
        $this->db->delete('user');
    }
}
