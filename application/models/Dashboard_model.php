<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('detail_absensi');
        return $this->db->get()->result();
    }
}
