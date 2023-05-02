<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'meta_title' => 'E-bookstore Kenya | Online Book selling',
            'title' => 'E-Boostore Kenya'
        );

        $this->load->view('home_view', $data);
    }

    public function register()
    {
        $data = array(
            'meta_title' => 'Registration Page',
            'title' => 'Register'
        );
        $this->load->view('register_view', $data);
    }

    function login() 
    {
        $this->load->view('customer_login');
    }
}