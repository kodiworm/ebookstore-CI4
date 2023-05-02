<?php

class Admin extends CI_Controller {

    //admin constructor function\
    function __construct()
    {
        parent::__construct();

        //check admin session
        // if ($this->session->userdata('admin')){
        //     redirect('admin/dashboard');
        // }
    }

    //this default method loads the admin dashboard view
    function index()
    {
        $data = array(
            'meta_title' => "E-Bookstore | Admin - Dashboard",
            'title' => "Government of Kenya (Admin) Panel"
        );
        $this->load->view('admin/index', $data);
    }

    //login admin to the admin panel
    function verify_admin()
    {
        $this->load->model('admin_model');
        $check = $this->admin_model->admin_login();
        if ($check){
            //create a session to check if admin is already logged in 
            $username = strip_tags($this->input->post('username'));
            $this->session->set_userdata('admin', $username);
            redirect('admin/dashboard');
        }
        redirect();
    }

    //load add new product view
    function add_product()
    {
        $data = array(
            'meta_title' => "E-Bookstore | Admin - Add New Product",
            'title' => "Add New Product"
        );
        $this->load->view('admin/add_product', $data);
    }

    //logout admin
    function sign_out()
    {
        $this->session->sess_destroy();
        redirect();
    }

}