<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Institution_model extends CI_Model
{
	//login institution to complete order/purchase
	function login()
	{
		$arr['email'] = strip_tags($this->input->post('email'));
		$arr['password'] = strip_tags($this->input->post('password'));
	}
}
