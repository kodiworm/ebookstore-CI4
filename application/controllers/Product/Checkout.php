<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Checkout extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        //load checkout model
        $this->load->model('checkout_model');

        //initialize checkout controller
        $this->controller = 'checkout';
    }

    public function index()
    {
        $data = array(
            'meta_title' => 'E-Bookstore | Product-Checkout',
            'title' => 'Fill Form To Place Your Order'
        );

        //redirect if cart is empty
        if($this->cart->total_items() <= 0) {
            redirect('products');
        }

        // $custData = $data = array();

        //if order request is submitted
        $submit = $this->input->post('placeOrder');

        if(isset($submit)) {

            //insert customer data
            $insert = $this->checkout_model->insertCustomer();

            //check customer data insert status
            if ($insert) {
                //insert order
                $order = $this->placeOrder($insert);

                //if the order submission is successfull
                if($order) {
                    $this->session->set_flashdata('success_msg', "Order Placed Successfully.");
                    redirect($this->controller.'/orderSuccess/'.$order);
                }else{
                    $this->session->set_flashdata('error_msg', "Order submission failed, Please try again");
                }
            }else{
                $this->session->set_flashdata('error_msg',  "Some problems occured, please try again");
            }
        }

        //retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();

        //pass products data to the view
        $this->load->view($this->controller.'/index', $data);

    }

    //placeOrder function
    public function  placeOrder($custId)
    {
        //insert order data
        $orderData = array(
            'customer_id' => $custId,
            'grand_total' => $this->cart->total()
        );
        $insertOrder = $this->checkout_model->insertOrder($orderData);

        if($insertOrder) {
            //retrieve cart data from the session
            $cartItems = $this->cart->contents();

            //cart items
            $ordItemData = array();

            foreach($cartItems as $item) {
                $ordItemData['order_id'] = $insertOrder;
                $ordItemData['product_id'] = $item['id'];
                $ordItemData['quantity'] = $item['qty'];
                $ordItemData['sub_total'] = $item['subtotal'];
            }

            if(!empty($ordItemData)) {
                //Insert order items into the database in order_items table
                $insertOrderItems = $this->checkout_model->insertOrderItems($ordItemData);

                if($insertOrderItems) {
                    //remove items from the cart
                    $this->cart->destroy();

                    //return order id
                    return $insertOrder;
                }
            }
        }

        return false;
    }

    /**
     * this method loads order_success view 
     * displaying customer order details
     */
    function orderSuccess($ordId) 
    {
        $data = array(
            'meta_title' => "E-Bookstore | Order-Checkout",
            'title' => "ORDER STATUS"
        );

        //fetch data from the database
        if($data['cust'] = $this->checkout_model->getCustomer($ordId)) {

            $data['order'] = $this->checkout_model->getOrder($ordId);

            //load order details view
            $this->load->view($this->controller.'/order_success', $data);
        }
        else{
            redirect($this->controller);
        }

    }

}