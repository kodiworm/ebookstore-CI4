<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sell_model extends CI_Model {
    
    //insert new sellers into the database
    function addSeller()
    {
        $arr['fullname'] = strip_tags($this->input->post('name'));
        $arr['username'] = strip_tags($this->input->post('username'));
        $arr['email'] = strip_tags($this->input->post('email'));
        $arr['phone'] = strip_tags($this->input->post('phone'));
        $arr['dob'] = strip_tags($this->input->post('dob'));
        $arr['gender'] = strip_tags($this->input->post('genderRadio'));
        $arr['password'] = md5(strip_tags($this->input->post('password')));
        $confirmPassword = md5(strip_tags($this->input->post('confirmPassword')));

        if($arr['password'] == $confirmPassword)
        {
            $save = $this->db->insert('sellers', $arr);
        }
        return $save ? true : false;
    }

    //validate seller login
    function validateLogin()
    {
        $arr['username'] = strip_tags($this->input->post('username'));
        $arr['password'] = strip_tags(md5($this->input->post('password')));

        return $this->db->get_where('sellers', $arr)->row();
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

    //fetch seller's product from the database
    function getProducts()
    {
        $arr['product_signature'] = $this->session->userdata('seller');
        $this->db->order_by('id DESC');
        return $this->db->get_where('products', $arr)->result();
    }

    //delete seller/publisher from the database
    function deleteSellers($id)
    {
        $this->db->where('id', $id);
        $delete = $this->db->delete('sellers');

        return !empty($delete) ? $delete : false;
    }
}