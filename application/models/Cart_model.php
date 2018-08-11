<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart_model extends CI_Model{

	public function select_product_info_by_product_id($product_id)
	{
		$result=$this->db->select('*')
		     ->from('tbl_products')
		     ->where('id', $product_id)
		     ->get()
		     ->row();
		     return $result;

	}

	public function confirm_order()
	{
		$data['customer_name']=$this->input->post('customer_name', true);
		$data['customer_email']=$this->input->post('customer_email', true);
		$data['customer_contact_no']=$this->input->post('customer_contact_no',true);

		$this->db->insert('tbl_order', $data);

	}





	
}