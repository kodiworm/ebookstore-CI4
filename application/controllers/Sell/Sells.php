<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sells extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        //load sell model
        $this->load->model('sell_model');

        //check if user['session'] exists, if so, redirect to the dashboard
        if ($this->session->userdata('seller')){
            redirect('sell/dashboard');
        }
    }

    //load login view
    public function index()
    {
        $data = array(
            'meta_title' => "E-Bookstore | Seller Login",
            'title' =>  "Signin"
        );
        $this->load->view('sells/index', $data);
    }

    //this method loads register view
    public function register()
    {
        $data = array(
            'meta_title' => "Seller Registration",
            'title' =>  'Register To Become A Seller'
        );
        $this->load->view('sells/register', $data);
    }

    //insert user in the db
    function saveSeller() 
    {
        $save = $this->sell_model->addSeller();

        if ($save) {
            $this->session->set_flashdata('success', "Sales Person Registration Successfully.");
            redirect('sell/dashboard');
        }
        else{
            echo "registration failed";
        }
    }
 
    //verify seller and validate login
    function verifyLogin() 
    {
        $check = $this->sell_model->validateLogin();
        if($check) {
            //create a session to check if user is already logged in
            $username = $this->input->post('username');
            $this->session->set_userdata('seller', $username);
            redirect('sell/dashboard');
        }
        else{
            echo "login failed";
        }
    }


}