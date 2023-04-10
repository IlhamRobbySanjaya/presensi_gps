<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanPresensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Detail_absensi_model');
    }

    public function index()
    {
        $recordAbs = $this->Detail_absensi_model->getDataAbsensi();
        $data = array('data_absensi' => $recordAbs);
        $data['title'] = "Data Absensi";
        // $data["detail_user"] = $this->detail_user_model->getAll();
        $this->template->load('templates/dashboard', 'laporan', $data);
    }
}