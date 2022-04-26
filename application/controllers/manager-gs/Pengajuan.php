<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('manager-gs/Model_pengajuan');
        $this->load->helper(array('url','download'));
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
        $data['dt_pengajuan'] = $this->Model_pengajuan->selectAll_pengajuan();
        $this->load->view('templates/manager-gs/header', $data);
        $this->load->view('templates/manager-gs/menus', $data);
        $this->load->view('manager-gs/pengajuan/pengajuan', $data);
        $this->load->view('templates/manager-gs/footer');
    }

    public function form_pengajuan()
    {
        $data['title'] = 'Form Pengajuan Perangkat Baru';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/manager-gs/header', $data);
        $this->load->view('templates/manager-gs/menus', $data);
        $this->load->view('manager-gs/pengajuan/form_pengajuan', $data);
        $this->load->view('templates/manager-gs/footer');
    }

    public function approve()
    {
        $parameter = $_POST['parameter'];
        $hsl = $this->Model_pengajuan->approve($parameter);
        // print_r($mparam);
        echo $hsl;
    }

    public function download(){
        force_download('gambar/FormSerahTerima.pdf',NULL);
    }

}
