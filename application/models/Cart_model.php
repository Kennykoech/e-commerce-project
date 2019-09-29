<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

    //Here am loading the database for use
	public function __construct()
	{
		$this->load->database();
    }
    
    //Here the user the items shopped selected by the user is inserrtedhe cart table
    public function add_to_cart($data){

        $query = $this->db->insert('cart', $data);

        return $query;
        
    }


    //Here the user is able to view the items he has inserted into the cart
    public function view_cart(){
    
        $this->db->join('cart', 'cart.item_id = items.item_id');
        $this->db->order_by('cart.item_id', 'DESC');
        $query = $this->db->get('items');

       return $query->result();
            
    }

    //Here the user is able to update the qty of the items he has added to the cart
    public function update_qty($data, $item_id)
	{

		return $this->db->where('item_id',$item_id)
		                ->update('cart', $data);
    
    }

    //Here the user is able to remove the item he has added to the cart
    public function delete_item($item_id)
	{

		return $this->db->delete('cart',['item_id' => $item_id]);
		
    }


    //Here the user is finalizing his order
    public function checkout()
    {
        $this->db->order_by('cart.item_id', 'DESC');
        $query = $this->db->get('cart');

       return $query->result();

    }

    //Here the user is placing the order of the items bought into the place order table
    public function place_order(){

        $data = array(

            'item_name' => $this->input->post('item_name'),
            'item_price' => $this->input->post('item_price'),
            'qty' => $this->input->post('qty'),
            'sub_total' => $this->input->post('sub_total'),
            'total' => $this->input->post('total'),
            'email' => $this->input->post('email'),
            'mpesa_code' => $this->input->post('mpesa_code')

        );

        $query = $this->db->insert('place_order', $data);

        return $query;
        
    }
    
}