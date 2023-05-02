<?php

class Dashboard extends CI_Controller {

    //dashboard constructor
    function __construct()
    {
        parent::__construct();

        //load admin model
        $this->load->model('admin_model');
    }

    //load books_view
    function books()
    {
        $data = array(
            'meta_title' => "E-Bookstore | Admin - Dashboard",
            'title' => "Books on Sale"
        );
        //load product model
        $this->load->model('product_model');

        //load product data 
        $data['products'] = $this->product_model->get_all_products();
        $this->load->view('admin/books_view', $data);

    }

    //add new books into the database
    function addProduct()
    {
        $save = $this->admin_model->saveProd();
        if($save) {
            $this->session->set_flashdata("success", "Book saved successfully");
            redirect('admin/books');
        }
        return "Product save failed";
    }

    //display order data in orders_view
    function all_orders()
    {
        $data = array(
            'meta_title' => "E-Bookstore | Admin - Orders",
            'title' => "Orders / Purchases"
        );
        $data['orders'] = $this->admin_model->getOrders();

        //load view
        $this->load->view('admin/orders_view.php', $data);
    }

    //display order items
    function order_items($id)
    {
        $data = array(
            'meta_title' => "E-Bookstore | Admin - Order Items",
            'title' => "Purchase Items"
        );
        $data['items'] = $this->admin_model->getOrderItems($id);

        //load view
        $this->load->view('admin/purchase_items.php', $data);
    }

    //display customers in cust_view
    function display_cust()
    {
        $data = array(
            'meta_title' => "E-Bookstore | Admin - Institutions",
            'title' => "Institutions Data"
        );
        $data['customers'] = $this->admin_model->getCustomers();

        //load view
        $this->load->view('admin/cust_view.php', $data);

    }
    
    //display sellers in sellers_view
    function display_sellers()
    {
        $data = array(
            'meta_title' => "E-Bookstore | Admin - Publishers",
            'title' => "Publishers Data"
        );
        $data['sellers'] = $this->admin_model->getSellers();

        //load view
        $this->load->view('admin/sellers_view', $data);

    }

    //Delete product
    function delete_prod($id)
    {
        $this->load->model('product_model');
        $delete = $this->product_model->deleteProd($id);
        if($delete) {
            $this->session->set_flashdata('warning', "Book has been deleted without errors. ");
            redirect('admin/books');
        }
    }

    //Delete Publishers
    function delete_sellers($id)
    {
        $this->load->model('sell_model');
        $delete = $this->sell_model->deleteSellers($id);
        if($delete) {
            $this->session->set_flashdata('success', "Publisher/Seller has been deleted without errors.");
            redirect('admin/sellers_view');
        }
    }
}