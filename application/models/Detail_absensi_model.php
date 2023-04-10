<?php defined('BASEPATH') or exit('No direct script access allowed');

class Detail_absensi_model extends CI_Model
{
    // public function getDataAbsensi() {
    //     $this->db->select('*');
    //     $this->db->from('detail_absensi');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    public function get_absen($nip, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->where('nip', $nip);
        $this->db->where("DATE_FORMAT(tanggal, '%m') = ", $bulan);
        $this->db->where("DATE_FORMAT(tanggal, '%Y') = ", $tahun);
        $this->db->group_by("tanggal");
        $result = $this->db->get('detail_absensi');
        return $result->result_array();
    }

    public function input_data($data)
    {
        $this->db->insert('detail_absensi', $data);
    }

    public function absen_harian_user($nip)
    {
        $today = date('Y-m-d');
        $this->db->where('tanggal', $today);
        $this->db->where('nip', $nip);
        $data = $this->db->get('detail_absensi');
        return $data;
    }

    public function insert_data($data)
    {
        $result = $this->db->insert('detail_absensi', $data);
        return $result;
    }

    public function get_jam_by_time($time)
    {
        $this->db->where('start', $time, '<=');
        $this->db->or_where('finish', $time, '>=');
        $data = $this->db->get('jam');
        return $data->row();
    }

    public function get_lokasi($marker)
    {
        $this->load->library('leaflet');
    }

    public function cek_absensi($nip)
    {
        return $this->db->query("SELECT * FROM `detail_absensi` WHERE nip = '$nip' ORDER BY id_absen DESC LIMIT 1")->row_array();
        // return $this->db->get_where('detail_absensi', ['nip' => $nip])->row_array();
    }
}
