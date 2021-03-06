<?php
defined('BASEPATH') or exit('No direct script access allowed');

class upgrade extends CI_Controller
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
        $data['title'] = 'Data Upgrade Perangkat';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menus', $data);
        $this->load->view('admin/upgrade/upgrade', $data);
        $this->load->view('templates/admin/footer');
    }

    public function form_upgrade()
    {
        $data['title'] = 'Form Pengajuan Upgrade Perangkat';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menus', $data);
        $this->load->view('admin/upgrade/form_upgrade', $data);
        $this->load->view('templates/admin/footer');
    }
}
