<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IjinPegawai extends CI_Controller
{
    protected $user;

    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Cuti_model');
        $this->load->library('form_validation');

        $userId = $this->session->userdata('login_session')['user'];
    }

    public function index()
    {
        if (!is_admin()) {
            return $this->cutiUsr();
        } else {
        }
    }

    public function cutiUsr()
    {
        $recordCuti = $this->Cuti_model->getDataCuti();
        $data = array('data_cuti' => $recordCuti);
        $data['title'] = "Izin Cuti Pegawai";
        $this->template->load('templates/dashboard', 'ijinpegawai/ijin_pegawai', $data);
    }

    public function cutiAdd()
    {
        $recordCuti = $this->Cuti_model->getDataCuti();
        $data = array('data_cuti' => $recordCuti);
        $data['title'] = "Izin Cuti Pegawai";
        $this->template->load('templates/dashboard', 'ijinpegawai/add', $data);
    }

    public function aksiCutiAdd()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_selesai = $this->input->post('tgl_selesai');
        $keterangan = $this->input->post('keterangan');

        $dataUpdate = array(
            'nip' => $nip,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'tgl_mulai' => $tgl_mulai,
            'tgl_selesai' => $tgl_selesai,
            'keterangan' => $keterangan
        );

        $this->Detail_user_model->editDataUser($dataUpdate, $nip);
        redirect('cutiUsr');
    }

    public function formEdit($id)
    {
        $recordUsr = $this->Detail_user_model->getDataUserDetail($id);
        $data = array('data_user' => $recordUsr);
        $data['title'] = "Edit Data Pegawai";
        $this->template->load('templates/dashboard', 'datapegawai/edit', $data);
    }

    public function aksiEdit()
    {

        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $bagian = $this->input->post('bagian');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');

        $dataUpdate = array(
            'nip' => $nip,
            'nama' => $nama,
            'jabatan' => $jabatan,
            'bagian' => $bagian,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
            'role' => $role,
            'email' => $email,
        );

        $this->Detail_user_model->editDataUser($dataUpdate, $nip);
        redirect('detail_user');
    }

    public function aksiDelete($id)
    {

        $id = $this->input->post('id_user');

        $this->Detail_user_model->deleteDataUser($id);
        redirect(base_url('Detail_user'));
    }
}
