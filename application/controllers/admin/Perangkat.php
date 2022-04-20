<?php
defined('BASEPATH') or exit('No direct script access allowed');

class perangkat extends CI_Controller
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

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menus', $data);
        // $this->load->view('admin/perangkat',$datas);
        $this->load->view('admin/perangkat/perangkat', $data);
        $this->load->view('templates/admin/footer');
    }

    public function form_perangkat()
    {
        $data['title'] = 'Form perangkat';
        // $data['menu_katalog'] = $this->mhome->category();
        // $data['product_data'] = count($this->mhome->product());
        // $data['sales_data'] = count($this->mhome->all_sales());x
        // $data['customer_data'] = count($this->mhome->all_customer());

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/menus', $data);
        $this->load->view('admin/perangkat/form_perangkat', $data);
        $this->load->view('templates/admin/footer');
    }
}
