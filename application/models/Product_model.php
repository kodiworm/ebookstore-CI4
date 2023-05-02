<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{
	
	function __construct()
	{
		$this->proTable = 'products';
		$this->custTable = 'customers';
		$this->ordTable = 'orders';
		$this->ordItemsTable = 'order_items';
	}

	/**
	 * fetch products data from the database
	 * @param id returns a single record of the specified ID, otherwise all records
	 */
	function get_all_products($id = '')
	{
		$this->db->select('*');
		$this->db->from($this->proTable);
		$this->db->where('status', '1');
		// $this->db->where('product_signature', 'ebookstore');

		if($id) {
			$this->db->where('id', $id);
			$query = $this->db->get();
			$result = $query->row_array();
		}
		else {
			$this->db->order_by('name', 'asc');
			$query = $this->db->get();
			$result = $query->result_array();
		}

		//return fetch data
		return !empty($result) ? $result : false;

	}

	//fetch product by id from products table
	function get_prod_by_id($id)
	{
		$this->db->select('*');
		$this->db->from($this->proTable);
		$this->db->where('status', '1');

		$this->db->where('id', $id);
		$query = $this->db->get();
		$result = $query->row_array();

		//return fetch data
		return !empty($result) ? $result : false;

	}

	//delete product by id from products table
	function deleteProd($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('products');

		return !empty($delete) ? $delete : false;
	}

}