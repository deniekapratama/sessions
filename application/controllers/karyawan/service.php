<?php
defined('BASEPATH') or exit('No direct script access allowed');

class service extends CI_Controller
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
        $data['title'] = 'Data Service Perangkat';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nonstruktural/menus', $data);
        $this->load->view('nonstruktural/service', $data);
        $this->load->view('templates/footer');
    }

    public function form_service()
    {
        $data['title'] = 'Form Pengajuan Service';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nonstruktural/menus', $data);
        $this->load->view('nonstruktural/form_service', $data);
        $this->load->view('templates/footer');
    }
}
