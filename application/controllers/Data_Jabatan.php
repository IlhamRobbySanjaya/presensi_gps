<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Jabatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jabatan_model');
    }

    public function index()
    {
        $recordJbt = $this->Jabatan_model->getDataJabatan();
        $data = array('data_jabatan' => $recordJbt);
        $data['title'] = "Data Jabatan";
        // $data["detail_user"] = $this->detail_user_model->getAll();
        $this->template->load('templates/dashboard', 'data_jabatan', $data);
    }

    public function formEdit($id) {
        $recordUsr = $this->Detail_user_model->getDataUserDetail($id);
        $data = array('data_user' => $recordUsr);
        $data['title'] = "Edit Data Pegawai";
        $this->template->load('templates/dashboard','datapegawai/edit', $data);
    }

    public function aksiEdit(){
        $id = $this->input->post('id');
        $jabatan = $this->input->post('jabatan');

        $dataUpdate = array (
            'id' => $id,
            'jabatan' => $jabatan,
        );

        $this->Jabatan_model->editDataJabatan($dataUpdate, $id);
        redirect (base_url());
    }

    public function aksiDelete(){
        $this->Jabatan_model->deleteDataJabatan($nip);
        redirect(base_url('data_jabatan'));
    }
}