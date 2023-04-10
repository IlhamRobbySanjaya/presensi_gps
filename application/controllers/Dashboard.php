<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->model('Detail_user_model');
        $this->load->model('Dashboard_model');
    }

    public function index()
    {
        $data = array(
            'title' => 'dashboard',
            'marker' => $this->Dashboard_model->get_all_data()
        );

        // Line Chart
        $bln = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        $data['cbm'] = [];
        $data['cbk'] = [];

        $this->template->load('templates/dashboard', 'dashboard', $data);
    }
}
