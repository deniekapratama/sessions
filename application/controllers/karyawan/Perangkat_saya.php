<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perangkat_saya extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('karyawan/Model_perangkatsaya');

        // load helper

        // load model
        // $this->load->model('mhome');

        //load library
        // $this->load->library('pagination');

    }

    public function index()
    {
        $data['title'] = 'Daftar Perangkat Saya ';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/karyawan/header', $data);
        $this->load->view('templates/karyawan/menus', $data);
        $data['dataperangkat'] = $this->Model_perangkatsaya->selectAll_perangkatsaya();
        // $data['dataperangkatdetail'] = $this->Model_perangkatsaya->selectAll_perangkatsayadetail();


        // $this->load->view('karyawan/perangkat',$datas);
        $this->load->view('karyawan/perangkat_saya/perangkat_saya', $data);
        $this->load->view('templates/karyawan/footer');
    }
    

    public function detail_perangkatsaya(){
        $nippos = $_POST['nippos'];
        $sn = $_POST['sn'];
        $idperangkat = $_POST['idperangkat'];
        $hsl = $this->Model_perangkatsaya->selectAll_perangkatsayadetail($nippos,$sn,$idperangkat);
        $data = json_encode($hsl);
        echo $data;

    }
}
