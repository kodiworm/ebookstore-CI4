<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('sell_model');

        //check if seller session set
        if(!$this->session->userdata('seller')){
            redirect('sells');
        } 

    }

    public function index()
    {
        $data = array(
            'meta_title' => "E-Bookstore | Publisher - Dashboard",
            'title' => "Publishers Panel"
        );
        $this->load->view('sells/dashboard', $data);
    }

    
    //add seller's product to the database
    function addProduct()
    {
        $save = $this->sell_model->saveProd();
        if($save) {
            $this->session->set_flashdata("success", "Product saved successfully");
            redirect('sell/dashboard/myproduct');
        }
        return "Product save failed";
    }

    //delete seller's product from the database
    function delete_prod($id)
    {
        $this->load->model('product_model');
        $delete = $this->product_model->deleteProd($id);
        if($delete) {
            $this->session->set_flashdata('warning', "Book has been deleted without errors. ");
            redirect('sell/dashboard/myProduct');
        }
    }

    //load myproduct view
    function myProduct()
    {
        $data = array(
            'meta_title' => 'E-Bookstore | Publisher - Products',
            'title' => 'Publisher Products'
        );
        $data['products'] = $this->sell_model->getProducts();
        $this->load->view('sells/my_product', $data);
    }

    //this function displays seller's product to product view
    function displayMyProduct()
    {
        $data['data'] = $this->sell_model->getProducts();
        $this->load->view('components/sellers_prod_view', $data);
    }

    //logout function
    function logout()
    {
        $this->session->sess_destroy();
        redirect();
    }

}