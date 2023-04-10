<?php
class Report_wf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Report_wf_model');
        $this->load->library('pdf');
    }
    public function index()
    {
        $recordUsr = $this->Report_wf_model->getDataAbsenWfh();
        $data = array('data_absen' => $recordUsr);
        $data['title'] = "Data Pegawai";
        // $data["detail_user"] = $this->detail_user_model->getAll();
        $this->template->load('templates/dashboard', 'absensi/report_bagian', $data);
    }

    public function laporan_wfh()
    {
        $recordUsr = $this->Report_wf_model->getDataAbsenWfh();
        $data = array('data_absen' => $recordUsr);
        $data['title'] = "Data Pegawai";
        // $data["detail_user"] = $this->detail_user_model->getAll();
        $this->template->load('templates/dashboard', 'absensi/laporan_wfh', $data);
    }

    public function laporan_wfo()
    {
        $recordUsr = $this->Report_wf_model->getDataAbsenWfo();
        $data = array('data_absen' => $recordUsr);
        $data['title'] = "Data Pegawai";
        // $data["detail_user"] = $this->detail_user_model->getAll();
        $this->template->load('templates/dashboard', 'absensi/laporan_wfo', $data);
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
        $pdf->Cell(280, 7, 'LAPORAN ABSENSI HARIAN PEGAWAI WFO/WFH', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 6, 'NIP', 1, 0);
        $pdf->Cell(85, 6, 'NAMA PEGAWAI', 1, 0);
        $pdf->Cell(30, 6, 'STATUS KERJA', 1, 0);
        $pdf->Cell(25, 6, 'TANGGAL', 1, 0);
        $pdf->Cell(25, 6, 'WAKTU', 1, 0);
        $pdf->Cell(30, 6, 'KETERANGAN', 1, 0);
        $pdf->Cell(53, 6, 'LOKASI', 1, 1);

        $pdf->SetFont('Arial', '', 10);
        $detail_absensi = $this->db->get('detail_absensi')->result();
        foreach ($detail_absensi as $row) {
            $pdf->Cell(20, 6, $row->nip, 1, 0);
            $pdf->Cell(85, 6, $row->nama, 1, 0);
            $pdf->Cell(30, 6, $row->status_kerja, 1, 0);
            $pdf->Cell(25, 6, $row->tanggal, 1, 0);
            $pdf->Cell(25, 6, $row->waktu, 1, 0);
            $pdf->Cell(30, 6, $row->keterangan, 1, 0);
            $pdf->Cell(53, 6, $row->lat_long, 1, 1);
        }
        $pdf->Output();
    }
}
