<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    function  __construct()
    {
        parent::__construct();

        //load product model
        $this->load->model('product_model');
    }

    public function index()
    {
        $data = array(
            'meta_title' => "E-Bookstore | Books Shopping Cart",
            'title' => "E-Bookstore - Shopping Cart"
        );

        //retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();

        //load the cart view
        $this->load->view('cart/index', $data);
    }

    //update item quantity
    public function updateItemQty()
    {
        $update = 0;

        //get cart item info
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');

        // update item in the cart
        if(!empty($rowid) && !empty($qty)) {
            $data = array(
                'rowid' => $rowid,
                'qty' => $qty
            );
            $update = $this->cart->update($data);
        }

        //return Response
        echo $update ? 'ok' : 'err';
    }

    public function removeItem($rowid)
    {
        //remove item from cart
        $remove = $this->cart->remove($rowid);

        //redirect to the cart page
        redirect('cart/');  
    }
}