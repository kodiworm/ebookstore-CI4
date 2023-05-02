<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model {
    /**
	 * insert customer data into the database
	 * @param data array
	 */
	function insertCustomer() 
	{
        //prepare customer data
        $arr['name'] = strip_tags($this->input->post('name'));
        $arr['email'] = strip_tags($this->input->post('email'));
        $arr['phone'] = strip_tags($this->input->post('phone'));
        $arr['address'] = strip_tags($this->input->post('address'));

		//insert customer data
		$insert = $this->db->insert('customers', $arr);

		//return the status
		return $insert ? $this->db->insert_id() : false; 

	}

	/**
	 * insert order data in the database
	 * @param data array
	 */
	function insertOrder($data)
	{
		//insert order data 
		$insert = $this->db->insert('orders', $data);

		//return status
		return $insert ? $this->db->insert_id() : false;

	}

	/**
	 * insert order items in order_items table
	 * @param data array
	 */
	function insertOrderItems($data)
	{
		//insert order items
		$insert = $this->db->insert('order_items', $data);

		//return the status
		return $insert ? $insert : false;
	}

	/**
	 * fetch customer data from the database
	 * @param id returns a single record of specified ID
	 */
	function getCustomer($id) 
	{
		$this->db->select('o.*, c.name, c.email, c.phone, c.address');
		$this->db->from('orders as o');
		$this->db->join('customers as c', 'c.id = o.customer_id', 'left');
		$this->db->where('o.id', $id);
		$query = $this->db->get();
		$result = $query->row_array();

		//return fetched data
		return !empty($result) ? $result : false;

	}

    /**
     * fetch order data from the database 
     * @param id returns the record of each order by specific customer ID
     */
    function getOrder($id)
    {
		//get order items
		$this->db->select('i.*, p.image, p.name, p.price');
		$this->db->from('order_items as i');
		$this->db->join('products as p', 'p.id = i.product_id', 'left');
		$this->db->where('i.id', $id);
		$query2 = $this->db->get();
		$result = ($query2->num_rows() > 0) ? $query2->result_array() : array();

        return $result;
    }
}