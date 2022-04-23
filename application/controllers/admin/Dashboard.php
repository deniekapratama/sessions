<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title'] = 'Dashboard | POSsessions';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menus', $data);
        $this->load->view('admin/dashboard/dashboard', $data);
        $this->load->view('templates/admin/footer');
    }
}
