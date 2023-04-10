<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanCuti extends CI_Controller
{
    protected $user;

    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');

        $userId = $this->session->userdata('login_session')['user'];
        $this->user = $this->admin->get('user', ['id_user' => $userId]);
    }

    public function index()
    {
        $data['title'] = "Laporan";
        $data['user'] = $this->user;
        $this->template->load('templates/dashboard', 'laporan_cuti', $data);
    }
}