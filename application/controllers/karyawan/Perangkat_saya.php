<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perangkat_saya extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // load helper

        // load model
        // $this->load->model('mhome');

        //load library
        // $this->load->library('pagination');

    }

    public function index()
    {
        $data['title'] = 'Data perangkat';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/karyawan/header', $data);
        $this->load->view('templates/karyawan/menus', $data);
        // $this->load->view('karyawan/perangkat',$datas);
        $this->load->view('karyawan/perangkat_saya/perangkat_saya', $data);
        $this->load->view('templates/karyawan/footer');
    }
}
