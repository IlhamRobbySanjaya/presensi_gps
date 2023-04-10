<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Histori extends CI_Controller
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
        $data['title'] = "Histori";
        $data['user'] = $this->user;
        $data['data'] = $this->admin->get('detail_absensi');
        $this->template->load('templates/dashboard', 'histori', $data);
    }
}
