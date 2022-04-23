<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Model_login');
    }

    public function index()
    {
        $this->load->view('auth/auth');
    }

    // public function dashboard()
    // {
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/menus');
    //     $this->load->view('admin/dashboard');
    //     $this->load->view('templates/footer');
    // }

    public function login()
    {
        $nippos = $_POST['username'];
        $password = $_POST['password'];
        // $tr = $this->login();
        // $tr = $this->load->model('login');
        $cek = $this->Model_login->login($nippos,$password);
        echo $cek;
        // if($cek == "hasbulganteng")
        // {
        //     echo "1";
        // }else{
        //     echo "0";
        // } 
    }
}
