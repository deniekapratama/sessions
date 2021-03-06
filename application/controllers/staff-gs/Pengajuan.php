<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengajuan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('staff-gs/Model_pengajuan');
        
        //load Helper for Form
        $this->load->helper('url', 'form'); 
        $this->load->library('form_validation');

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

        $this->load->view('templates/staff-gs/header', $data);
        $this->load->view('templates/staff-gs/menus', $data);
        $data['dt_pengajuan'] = $this->Model_pengajuan->selectAll_pengajuan();
        $data['dt_perangkat'] = $this->Model_pengajuan->getall_perangkat();

        // $data['dt_pengajuandetail'] = $this->Model_pengajuan->selectAll_pengajuandetail();

        // $this->load->view('staff-gs/pengajuan',$datas);
        $this->load->view('staff-gs/pengajuan/pengajuan', $data);
        $this->load->view('templates/staff-gs/footer');
    }

    public function form_pengajuan()
    {
        $data['title'] = 'Form Pengajuan Perangkat Baru';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/staff-gs/header', $data);
        $this->load->view('templates/staff-gs/menus', $data);
        $this->load->view('staff-gs/pengajuan/form_pengajuan', $data);
        $this->load->view('templates/staff-gs/footer');
    }

    public function cari_pgw()
    {
        $nipposatasan = $_POST['nippos_atasan'];
        // $cek = $this->Model_pengajuan->cari_pgw($nipposatasan);
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
        $nopend_pengguna = $_POST['nopend_pengguna'];
        $namaktr_pengguna = $_POST['namaktr_pengguna'];
        $jabatan_pengguna = $_POST['jabatan_pengguna'];
        $nm_jabatan_pengguna = $_POST['nm_jabatan_pengguna'];
        $bagian_pengguna = $_POST['bagian_pengguna'];
        $nm_bagian_pengguna = $_POST['nm_bagian_pengguna'];
        $nippos_atasan = $_POST['nippos_atasan'];
        $nama_atasan = $_POST['nama_atasan'];
        $nopend_atasan = $_POST['nopend_atasan'];
        $namaktr_atasan = $_POST['namaktr_atasan'];
        $jabatan_atasan = $_POST['jabatan_atasan'];
        $nm_jabatan_atasan = $_POST['nm_jabatan_atasan'];
        $bagian_atasan = $_POST['bagian_atasan'];
        $nm_bagian_atasan = $_POST['nm_bagian_atasan'];
        $jenis_perangkat = $_POST['jenis_perangkat'];
        $deskripsi = $_POST['deskripsi'];

        $cek = $this->Model_pengajuan->insert_pengajuan($nippos_pengguna, $nama_pengguna, $nopend_pengguna, $namaktr_pengguna, $jabatan_pengguna, $nm_jabatan_pengguna, $bagian_pengguna, $nm_bagian_pengguna, $nippos_atasan, $nama_atasan, $nopend_atasan, $namaktr_atasan, $jabatan_atasan, $nm_jabatan_atasan, $bagian_atasan, $nm_bagian_atasan, $jenis_perangkat, $deskripsi, $tanggal);
        echo $cek;
    }

    public function detail_pengajuan(){
        // $nippos = $_POST['nippos'];
        $idpengajuan = $_POST['id_pengajuan'];
        $hsl = $this->Model_pengajuan->selectAll_pengajuandetail($idpengajuan);
        $data = json_encode($hsl);
        echo $data;
    }

    public function pilih_perangkat(){
        $id_pengajuan = $_POST['id_pengajuan'];
        $idperangkat = $_POST['perangkat'];
        $serial_number = $_POST['serial_number'];

        $hsl = $this->Model_pengajuan->pilih_perangkat($id_pengajuan,$idperangkat,$serial_number);
        echo $hsl;
        // echo $id_pengajuan.$idperangkat;

    }

    function upload(){
        $ImageName = $_FILES['fileupload']['name'];
        $idpengajuan = $_POST['idpengajuan'];

        $hsl = $this->Model_pengajuan->update_upload($ImageName,$idpengajuan);
        // echo $ImageName.$idpengajuan;
        echo $hsl;
 
     }


}
