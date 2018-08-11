<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->Model('cart_model');
        $this->load->library('cart');
        $this->load->library('email');
    }

    public function add_to_cart()
    {
        $product_id=$this->input->post('id', true);
        $qty=$this->input->post('qty', true);

        $product_info=$this->cart_model->select_product_info_by_product_id($product_id);
        echo $product_info->file_name;

        $data = array(
        'id'      => $product_info->id,
        'qty'     => $qty,
        'price'   => $product_info->price,
        'name'    => $product_info->name,
        'options' => array('Image' => $product_info->file_name)
);
         $this->cart->insert($data);
         redirect('cart-view');

    }


    public function cart_view()
    {
         $data['contact'] = $this->contact_model->index();
      
        
        $this->load->view('header', $data);
        $this->load->view('cart_view');
        $this->load->view('footer');
    }

    public function delete_to_cart($rowid)
    {
        $data = array(
        'rowid' => $rowid,
        'qty'   => 0
       );

         $this->cart->update($data);
         redirect('cart-view');
    }

     public function checkout()
    {
         $data['contact'] = $this->contact_model->index();
      
        
        $this->load->view('header', $data);
        $this->load->view('checkout');
        $this->load->view('footer');
    }

    public function confirm_order()
    {
        //$this->cart_model->confirm_order();
        $customer_name=$this->input->post('customer_name');
        $customer_email=$this->input->post('customer_email');
        $customer_contact_no=$this->input->post('customer_contact_no');
        $coments_box=$this->input->post('coments_box');

             //"ID:"." ".$order_info['id']."&nbsp-";
             $name="Customer Name :"." ".$customer_name."<br>";
             $email="Customer Email :"." ".$customer_email."<br>";
             $contact="Contact No :"." ".$customer_contact_no."<br>";
             $coments="Order Note :"." ".$coments_box."<br>";
        
        $message_html= $name.$email.$contact.$coments;
        $this->email->from('$customer_email', 'New Customer');
        $this->email->to('mehedi@wanitbd.com');
        $this->email->subject('New Order');
        $this->email->message($message_html);
        
        $this->email->send();
        
        echo $this->email->print_debugger();

        $this->cart->destroy();
        redirect('page/index');

    }
   

}

