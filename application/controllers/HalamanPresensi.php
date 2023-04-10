<?php
defined('BASEPATH') or die('No direct script access allowed!');

class HalamanPresensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Detail_absensi_model', 'detail_absensi');
        $this->load->model('Detail_user_model', 'pegawai');
        $this->load->model('Jam_model', 'jam');
        $this->load->helper('Tanggal');
        $this->load->helper('Check_absen');
        $this->load->library('form_validation');
        // $this->load->library('leaflet');
    }
    public function index()
    {
        // $data['title'] = "Presensi Pegawai";
        // $this->template->load('templates/dashboard', 'halaman_presensi', $data);
        $this->library->load('session');
        $alert = array('teks' => 'Inilah contoh penggunaan alert');
        $this->session->set_flashdata($alert);
        echo $this->session->flashdata('teks');
        if (!is_admin()) {
            return $this->check_absen();
        } else {
            return $this->list_pegawai();
        }
        // if (is_level('admin')) {
        //     return $this->detail_absensi();
        // } else {
        //     return $this->list_pegawai();
        // }
    }

    public function list_pegawai()
    {
        $data['pegawai'] = $this->pegawai->get_all();
        $data['title'] = "Presensi Pegawai";
        return $this->template->load('templates/dashboard', 'absensi/list_pegawai', $data);
    }

    public function map_wfh()
    {
        $data = $this->detail_data_absen();
        $data['title'] = "Presensi Pegawai";
        return $this->template->load('templates/dashboard', 'map/map_wfh', $data);
    }

    public function map_wfh_cd()
    {
        $data = $this->detail_data_absen();
        $data['title'] = "Presensi Pegawai";
        return $this->template->load('templates/dashboard', 'map/map_wfh', $data);
    }

    public function map_wfo()
    {
        $data = $this->detail_data_absen();
        $data['title'] = "Presensi Pegawai";
        return $this->template->load('templates/dashboard', 'map/map_wfo', $data);
    }

    public function detail_absensi()
    {
        $data = $this->detail_data_absen();
        $data['title'] = "Presensi Pegawai";
        return $this->template->load('templates/dashboard', 'absensi/detail', $data);
    }

    public function check_absen_wfh()
    {
        $nip = $this->session->userdata('login_session')['nip'];
        $data['detail_absensi'] = $this->detail_absensi->absen_harian_user($this->session->nip)->num_rows();
        $data['title'] = "Presensi Pegawai";
        $data['absensi'] = $this->detail_absensi->cek_absensi($nip);
        return $this->template->load('templates/dashboard', 'absensi/halaman_presensi', $data);
    }

    public function check_absen_wfo()
    {
        $nip = $this->session->userdata('login_session')['nip'];
        $data['detail_absensi'] = $this->detail_absensi->absen_harian_user($this->session->nip)->num_rows();
        $data['title'] = "Presensi Pegawai";
        $data['absensi'] = $this->detail_absensi->cek_absensi($nip);
        return $this->template->load('templates/dashboard', 'absensi/halaman_presensi_wfo', $data);
    }

    public function check_absen()
    {
        $now = date('H:i:s');
        $data['detail_absensi'] = $this->detail_absensi->absen_harian_user($this->session->nip)->num_rows();
        $data['title'] = "Presensi Pegawai";
        return $this->template->load('templates/dashboard', 'absensi/bagian', $data);
    }

    public function absen_wfh()
    {
        if ($this->uri->segment(3)) {
            $keterangan = ucfirst($this->uri->segment(3));
        } elseif ($this->uri->segment(3)) {
            $absen_harian = $this->detail_absensi->absen_harian_user($this->session->nip)->num_rows();
            $keterangan = ($absen_harian < 2 && $absen_harian < 1) ? 'Masuk' : 'Istirahat Keluar';
        } elseif ($this->uri->segment(3)) {
            $absen_harian = $this->detail_absensi->absen_harian_user($this->session->nip)->num_rows();
            $keterangan = ($absen_harian < 3 && $absen_harian < 4) ? 'Istirahat Masuk' : 'Pulang';
        }
        $latlong = $this->input->post('latlong');

        $data = [
            'nama' => $this->session->userdata('login_session')['nama'],
            'tanggal' => date('Y-m-d'),
            'waktu' => date('H:i:s'),
            'status_kerja' => 'WFH',
            'keterangan' => $keterangan,
            'lat_long' => $latlong,
            'nip' => $this->session->userdata('login_session')['nip']
        ];
        $result = $this->detail_absensi->insert_data($data);
        if ($result) {
            $this->session->set_flashdata('response', [
                'status' => 'success',
                'message' => 'Absensi berhasil dicatat'
            ]);
        } else {
            $this->session->set_flashdata('response', [
                'status' => 'error',
                'message' => 'Absensi gagal dicatat'
            ]);
        }
        redirect('halamanpresensi/check_absen');
    }

    public function absen_wfo()
    {
        if ($this->uri->segment(3)) {
            $keterangan = ucfirst($this->uri->segment(3));
        } else {
            $absen_harian = $this->absensi->absen_harian_user($this->session->id_user)->num_rows();
            $keterangan = ($absen_harian < 2 && $absen_harian < 1) ? 'Masuk' : 'Pulang';
        }
        $latlong = $this->input->post('latlong');

        $data = [
            'nama' => $this->session->userdata('login_session')['nama'],
            'tanggal' => date('Y-m-d'),
            'waktu' => date('H:i:s'),
            'status_kerja' => 'WFO',
            'keterangan' => $keterangan,
            'lat_long' => $latlong,
            'nip' => $this->session->userdata('login_session')['nip']
        ];
        $result = $this->detail_absensi->insert_data($data);
        if ($result) {
            $this->session->set_flashdata('response', [
                'status' => 'success',
                'message' => 'Absensi berhasil dicatat'
            ]);
        } else {
            $this->session->set_flashdata('response', [
                'status' => 'error',
                'message' => 'Absensi gagal dicatat'
            ]);
        }
        redirect('halamanpresensi/check_absen');
    }

    public function detail_data_absen()
    {
        $nip = $this->uri->segment(3) ? $this->uri->segment(3) : $this->session->nip;
        $bulan = $this->input->get('bulan') ? $this->input->get('bulan') : date('m');
        $tahun = $this->input->get('tahun') ? $this->input->get('tahun') : date('Y');

        $data['pegawai'] = $this->pegawai->find($nip);
        $data['absen'] = $this->detail_absensi->get_absen($nip, $bulan, $tahun);
        $data['jam_kerja'] = (array) $this->jam->get_all();
        $data['all_bulan'] = bulan();
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['hari'] = hari_bulan($bulan, $tahun);

        return $data;
    }

    // public  function tambah()
    // {
    //     $this->load->view('map/index');
    // }

    // public function tambah_aksi()
    // {
    //     $latlong = $this->input->post('latlong');

    //     $data = array(
    //         'lat_long' => $latlong
    //     );
    //     $this->detail_absensi->input_data($data);
    //     redirect('halamanpresensi/check_absen');
    // }

    // public function lokasi()
    // {
    //     $config = array(
    // 		'center'         => '-0.959, 100.39716', // Center of the map
    // 		'zoom'           => 12, // Map zoom
    // 		);
    // 	$this->leaflet->initialize($config);

    // 	$marker = array(
    // 		'latlng' 		=>'-0.959, 100.39716', // Marker Location
    // 		'popupContent' 	=> 'Hi, iam a popup!!', // Popup Content
    // 		);
    // 		$this->leaflet->add_marker($marker);


    // 	$this->data['map'] =  $this->leaflet->create_map();


    // }

}
