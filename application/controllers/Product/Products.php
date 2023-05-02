<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('product_model');
	}

	function header(){ $this->load->view('templates/header');}
 

    public function index()
    {
        $data = array(
            'meta_title' => 'E-Bookstore | Books on Sale',
            'title' => 'E-Bookstore - Books On Sale'
        );
		//fetch products sold by ebookstore
        $data['data']=$this->product_model->get_all_products();

		//display products
        $this->load->view('products/index', $data);
    }

    public function addToCart($id)
	{
		//fetch specific product by id
		$product = $this->product_model->get_prod_by_id($id);
		
		//add product to the cart
		$data = array(
			'id' => $product['id'],
			'qty' => 1,
			'price' => $product['price'],
			'name' => $product['name'],
			'image' => $product['image'],
			'signature' => $product['product_signature']
		);
		$this->cart->insert($data);

		//redirect to cart page
		redirect('cart/'); 
	}

	function customerLogin()
	{
		$this->load->view('products/customer_login');
	}

}