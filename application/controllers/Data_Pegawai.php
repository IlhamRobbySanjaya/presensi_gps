<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Pegawai extends CI_Controller
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
        $data['title'] = "Data Pegawai";
        $data['user'] = $this->user;
        $this->template->load('templates/dashboard', 'data_pegawai', $data);
    }

    public function addview()
    {
        $data['title'] = "Data Pegawai";
        $data['user'] = $this->user;
        $this->template->load('templates/dashboard', 'datapegawai/add', $data);
    }

    public function editview()
    {
        $data['title'] = "Data Pegawai";
        $data['user'] = $this->user;
        $this->template->load('templates/dashboard', 'datapegawai/edit', $data);
    }
}

//     public function add()
//     {
//         $this->_validasi('add');
//         if ($this->form_validation->run() == false) {
//             $data['title'] = "Tambah Data Pegawai";
//             $this->template->load('templates/dashboard', 'Data_Pegawai/add', $data);
//         } else {
//             $input = $this->input->post(null, true);
//             $input_data = [
//                 'nip'      => $input['nip'],
//                 'nama'      => $input['nama'],
//                 'jabatan'      => $input['jabatan'],
//                 'no_telp'       => $input['no_telp'],
//                 'email'         => $input['email'],
//                 'alamat'       => $input['alamat'],
//                 'created_at'    => time(),
//                 'foto'          => 'user.png'
//             ];

//             if ($this->admin->insert('user', $input_data)) {
//                 set_pesan('data berhasil disimpan.');
//                 redirect('datapegawai');
//             } else {
//                 set_pesan('data gagal disimpan', false);
//                 redirect('datapegawai/add');
//             }
//         }
//     }
// }
