<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Detail_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('Detail_user_model');
    }

    public function index()
    {
        $recordUsr = $this->Detail_user_model->getDataUser();
        $data = array('data_user' => $recordUsr);
        $data['title'] = "Data Pegawai";
        // $data["detail_user"] = $this->detail_user_model->getAll();
        $this->template->load('templates/dashboard', 'data_pegawai', $data);
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
        $this->Detail_user_model->deleteDataUser($id);
        redirect(base_url('Detail_user'));
    }

    public function pdf()
    {
        $pdf = new FPDF('l', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string
        $pdf->Cell(280, 7, 'PSDKU POLIJE SIDOARJO', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(280, 7, 'LAPORAN DETAIL PEGAWAI', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 6, 'NIP', 1, 0);
        $pdf->Cell(85, 6, 'NAMA PEGAWAI', 1, 0);
        $pdf->Cell(30, 6, 'JABATAN', 1, 0);
        $pdf->Cell(53, 6, 'E-MAIL', 1, 0);
        $pdf->Cell(53, 6, 'ALAMAT', 1, 0);
        $pdf->Cell(35, 6, 'NOMOR TELEPON', 1, 1);

        $pdf->SetFont('Arial', '', 10);
        $data_user = $this->db->get("`user` WHERE role = 'pegawai'")->result();
        foreach ($data_user as $row) {
            $pdf->Cell(20, 6, $row->nip, 1, 0);
            $pdf->Cell(85, 6, $row->nama, 1, 0);
            $pdf->Cell(30, 6, $row->jabatan, 1, 0);
            $pdf->Cell(53, 6, $row->email, 1, 0);
            $pdf->Cell(53, 6, $row->alamat, 1, 0);
            $pdf->Cell(35, 6, $row->no_telp, 1, 1);
        }
        $pdf->Output();
    }

    // public function editview()
    // {
    //     $data['title'] = "Data Pegawai";
    //     $data['d_user'] = $this->detail_user;
    //     $this->template->load('templates/dashboard', 'datapegawai/edit', $data);
    // }

    // public function edit($id = null)
    // {
    //     $data['title'] = "Data Pegawai";
    //     if (!isset($id)) redirect('data_pegawai');

    //     $d_user = $this->detail_user_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($d_user->rules());

    //     if ($validation->run()) {
    //         $d_user->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data->d_user = $d_user->getById($id);
    //     // $data['d_user'] = $this->detail_user;
    //     if (!$data->d_user) show_404();

    //     $this->template->load('templates/dashboard', 'datapegawai/edit', $data);
    // }

    // public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();

    //     if ($this->detail_user_model->delete($id)) {
    //         redirect(site_url('data_pegawai'));
    //     }
    // }
}
