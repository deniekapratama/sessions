<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posisi_karyawan extends CI_Controller
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
        $data['title'] = 'Posisi Karyawan';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/staff-gs/header', $data);
        $this->load->view('templates/staff-gs/menus', $data);
        $this->load->view('staff-gs/posisi-karyawan/posisi_karyawan', $data);
        $this->load->view('templates/staff-gs/footer');
    }
}
