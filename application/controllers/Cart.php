<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    //Here am loading the cart_model once so that I can use it this class 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');

    }
    
    //Here the user is adding items to the cart table/shopping
    public function add()
    {
        $item_id = $this->uri->segment(3);

        $this->db->select('*');
        $this->db->from('items');
        $this->db->where('item_id', $item_id);
        $query = $this->db->get();
        $row = $query->row();

        $data = array(

            'item_id' =>  $item_id,
            'item_image' =>  $row->item_image,
            'item_name' =>  $row->item_name,
            'item_price' =>  $row->item_price 

            );

        $this->cart_model->add_to_cart($data);

        redirect('home');
     
    }

    //Here the user is viewing his cart on the items bought
    public function view_cart2()
    {

        $this->db->select('*');
        $this->db->from('cart');
        
        $query = $this->db->get();
        $data['items'] = $query->result();

        
		$this->load->view('header');
        $this->load->view('cart2', $data);
		$this->load->view('footer');

    }

    //Here the user is updating on the qty of the items in the cart
    public function enter_qty($item_id){

		$this->form_validation->set_rules('qty', 'Enter qty', 'required');

		if ($this->form_validation->run())
		{
            $data = $this->input->post();
            unset($data['submit']);
            if($this->cart_model->update_qty($data, $item_id))
            {
                $this->session->set_flashdata('msg', 'qty updated  successfully');

            }else{
                
                $this->session->set_flashdata('msg', 'qty not updated successfully');
            }

            return redirect('cart/view_cart');

		}else{
		
			echo validation_errors();
        }
        
     }

     //Here theqty of the item in the cart is being updated by its id in the database
     public function update_cart($item_id)
     {
        $item = $this->cart_model->get_single_cart_item($item_id);

        $this->load->view('cart/view_cart',['item' => $item], 'refresh');

     }

    //Here the user is removing the item from the cart
    public function delete($item_id)
    {
  
       $this->cart_model->delete_item($item_id);
   
       redirect('cart/view_cart');	
       
    }


    //Here the admin is viewing the orders made by the users
    public function checkout()
    {
        $data['cart'] = $this->cart_model->checkout();
        
        $this->load->view('header');
		$this->load->view('checkout', $data);
        $this->load->view('footer');
        
    }

    //Here the user is placing the order by finalizing
    public function place_order()
    {
        if($this->cart_model->place_order()){

            $this->session->set_flashdata('msg', 'Your order has been submitted ...Thank you for shopping with us!');

        }else{

            $this->session->set_flashdata('msg', 'Your order has been not been submitted ... Please try again!');

        }

        redirect('cart/checkout');

    }
    
}
