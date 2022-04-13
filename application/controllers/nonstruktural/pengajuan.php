<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Model_pengajuan');
        // load helper

        // load model
        // $this->load->model('mhome');

        //load library
        // $this->load->library('pagination');

    }

    public function index()
    {
        $data['title'] = 'Data Pengajuan Perangkat Baru';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nonstruktural/menus', $data);
        $this->load->view('nonstruktural/pengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function form_pengajuan()
    {
        $data['title'] = 'Form Pengajuan Perangkat Baru';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nonstruktural/menus', $data);
        $this->load->view('nonstruktural/form_pengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function cari_pgw()
    {
        $nipposatasan = $_POST['nippos_atasan'];
        $cek = $this->Model_pengajuan->cari_pgw($nipposatasan);
        echo $cek;
    }

    public function insert_pengajuan()
    {
        // echo $this->getDateTime();
        //load date helper
        $this->load->helper('date');

        $format = "%Y-%m-%d %h:%i %s";
        $tanggal = @mdate($format);

        $nippos_pengguna = $_POST['nippos_pengguna'];
        $nama_pengguna = $_POST['nama_pengguna'];
        $jabatan_pengguna = $_POST['jabatan_pengguna'];
        $bagian_pengguna = $_POST['bagian_pengguna'];
        $nippos_atasan = $_POST['nippos_atasan'];
        $nama_atasan = $_POST['nama_atasan'];
        $jabatan_atasan = $_POST['jabatan_atasan'];
        $bagian_atasan = $_POST['bagian_atasan'];
        $jenis_perangkat = $_POST['jenis_perangkat'];
        $deskripsi = $_POST['deskripsi'];

        $cek = $this->Model_pengajuan->insert_pengajuan($nippos_pengguna, $nama_pengguna, $jabatan_pengguna, $bagian_pengguna, $nippos_atasan, $nama_atasan, $jabatan_atasan, $bagian_atasan, $jenis_perangkat, $deskripsi, $tanggal);
        echo $cek;
    }

    public function selectAll_pengajuan()
    {
        // $data['title']='ini contoh untuk menampilkan data';
        print_r($this->Model_pengajuan->selectAll_pengajuan());
        // $this->load->view('pengajuan',$data);

    }
}
