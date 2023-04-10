<?php defined('BASEPATH') or exit('No direct script access allowed');

class Report_wf_model extends CI_Model
{
    public function getDataAbsenWfh()
    {
        $this->db->select('*');
        $this->db->from('detail_absensi');
        $this->db->where('status_kerja', 'WFH');
        $query = $this->db->get();
        return  $query->result();
    }

    public function getDataAbsenWfo()
    {
        $this->db->select('*');
        $this->db->from('detail_absensi');
        $this->db->where('status_kerja', 'WFO');
        $query = $this->db->get();
        return  $query->result();
    }

    function getData()
    {
        $data_siswa = $this->db->get('detail_absensi');
        return $data_siswa->result();
    }
}
