<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
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

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menus', $data);
        $data['dt_pengajuan'] = $this->Model_pengajuan->selectAll_pengajuan();
        // $this->load->view('admin/pengajuan',$datas);
        $this->load->view('admin/pengajuan/pengajuan', $data);
        $this->load->view('templates/admin/footer');
    }

    public function form_pengajuan()
    {
        $data['title'] = 'Form Pengajuan Perangkat Baru';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menus', $data);
        $this->load->view('admin/pengajuan/form_pengajuan', $data);
        $this->load->view('templates/admin/footer');
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

        $nippos_pengguna = trim($_POST['nippos_pengguna']);
        $nama_pengguna = trim($_POST['nama_pengguna']);
        $nopend_pengguna = trim($_POST['nopend_pengguna']);
        $namaktr_pengguna = trim($_POST['namaktr_pengguna']);
        $jabatan_pengguna = trim($_POST['jabatan_pengguna']);
        $nm_jabatan_pengguna = trim($_POST['nm_jabatan_pengguna']);
        $bagian_pengguna = trim($_POST['bagian_pengguna']);
        $nm_bagian_pengguna = trim($_POST['nm_bagian_pengguna']);
        // $nippos_atasan = $_POST['nippos_atasan'];
        // $nama_atasan = $_POST['nama_atasan'];
        // $nopend_atasan = $_POST['nopend_atasan'];
        // $namaktr_atasan = $_POST['namaktr_atasan'];
        // $jabatan_atasan = $_POST['jabatan_atasan'];
        // $nm_jabatan_atasan = $_POST['nm_jabatan_atasan'];
        // $bagian_atasan = $_POST['bagian_atasan'];
        // $nm_bagian_atasan = $_POST['nm_bagian_atasan'];
        $jenis_perangkat = trim($_POST['jenis_perangkat']);
        $deskripsi = trim($_POST['deskripsi']);
        $no_surat_nde = trim($_POST['no_surat_nde']);
        $tgl_surat_nde = trim($_POST['tgl_surat_nde']);

        $cek = $this->Model_pengajuan->insert_pengajuan($nippos_pengguna, $nama_pengguna, $nopend_pengguna, $namaktr_pengguna, $jabatan_pengguna, $nm_jabatan_pengguna, $bagian_pengguna, $nm_bagian_pengguna, $jenis_perangkat, $deskripsi, $no_surat_nde, $tgl_surat_nde);
        echo $cek;
        // echo $nippos_pengguna."-".$nama_pengguna."-".$nopend_pengguna."-".$namaktr_pengguna."-".$jabatan_pengguna."-".$nm_jabatan_pengguna."-".$bagian_pengguna."-".$nm_bagian_pengguna."-".$jenis_perangkat."-".$deskripsi."-".$no_surat_nde."-".$tgl_surat_nde;
    }
}
