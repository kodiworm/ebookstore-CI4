<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    //verify admin login credentials
    function admin_login()
    {
        $arr['username'] = strip_tags($this->input->post('username'));
        $arr['password'] = strip_tags(md5($this->input->post('password')));

        return $this->db->get_where('admins', $arr)->row();
    }

    //add products into the database
    function saveProd() 
    {
        //sanitize product data
        $arr['name'] = strip_tags($this->input->post('prod_name'));
        $arr['description'] = strip_tags($this->input->post('prod_description'));
        $arr['price'] = strip_tags($this->input->post('prod_price'));
        $arr['product_signature'] = $this->session->userdata('seller');

        //check if user is trying to upload file
        if(isset($_FILES['prod_image']['name'])) {
            $this->load->library('upload');
            $config['upload_path'] = APPPATH.'../assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = date('YmdHms').'_'.rand(1,99);
            
            // $this->load->library('upload', $config);
            $this->upload->initialize($config);

            //upload image file to uploads folder
            $upload = $this->upload->do_upload('prod_image');

            //if uploaded, capture file data 
            if($upload) {
                $uploaded = $this->upload->data();
                $arr['image'] = $uploaded['file_name'];
            }
        }

        return $this->db->insert('products', $arr);
    }

    //get order data from the database
    function getOrders()
    {
		//get order items
		$this->db->select('o.id, o.created_at, o.grand_total, c.name, c.phone, c.email');
		$this->db->from('orders as o');
		$this->db->join('customers as c', 'c.id = o.customer_id', 'cross');
        $this->db->order_by('id DESC');
		$query2 = $this->db->get();
		$result = ($query2->num_rows() > 0) ? $query2->result_array() : array();

        return $result;
    }

    //get order items of the specified id
    function getOrderItems($id)
    {
		//get order items
		// $this->db->select('i.*, p.image, p.name, i.quantity, i.sub_total');
		// $this->db->from('order_items as i');
		// $this->db->join('products as p', 'p.id = i.product_id', 'left');
		// $this->db->where('i.id', $id);
        // $this->db->order_by('id DESC');
		// $query2 = $this->db->get();
		// $result = ($query2->num_rows() > 0) ? $query2->result_array() : array();


		//get order items
		$this->db->select('i.*, p.image, p.name, p.price');
		$this->db->from('order_items as i');
		$this->db->join('products as p', 'p.id = i.product_id', 'left');
		$this->db->where('i.order_id', $id);
		$query2 = $this->db->get();
		$result = ($query2->num_rows() > 0) ? $query2->result_array() : array();

        return $result;
    }

    //get all customers
    function getCustomers()
    {
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->order_by('id DESC');
        $query = $this->db->get();

        $result = ($query->num_rows() > 0) ? $query->result() : array();
        return $result;
    }

    //get all sellers
    function getSellers()
    {
        $this->db->select('*');
        $this->db->from('sellers');
        $this->db->order_by('id DESC');
        $query = $this->db->get();

        $result = ($query->num_rows() > 0) ? $query->result() : array();
        return $result;

    }

}