<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengajuan_perangkat_baru extends CI_Controller
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
        $data['title'] = 'Pengajuan Perangakat Baru | POSsessions';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menus', $data);
        $this->load->view('admin/pengajuan_perangkat_baru', $data);
        $this->load->view('templates/footer');
    }

    public function form_pengajuan_perangkat_baru()
    {
        $data['title'] = 'Form Pengajuan Perangakat Baru';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menus', $data);
        $this->load->view('admin/form_pengajuan_perangkat_baru', $data);
        $this->load->view('templates/footer');
    }
}
