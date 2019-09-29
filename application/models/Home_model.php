<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	//Here am loading the database for use
	public function __construct()
	{
		$this->load->database();
	}

	//Here am getting all the items from the items table
	public function get_items($limit, $offset)
	{

		$this->db->limit($limit);
		$this->db->offset($offset);

		
		$this->db->order_by('items.item_id', 'DESC');
		$query = $this->db->get('items');

        return $query->result();

	}

	//Here am counting all the items in the items table by their rows 
	public function count_all()
	{
		return $this->db->get('items')->num_rows();
	}

	//Here am adding the item with its attributes e.g image, name and the price ; to the items table
	public function add_item($data){

		return $this->db->insert('items', $data);
		
	}

	 //Here the item is being searched
	 public function get_results($search_term='default')
	 {
		 // Use the Active Record class for safer queries.
		 $this->db->select("*");
		 $this->db->from("items");
		 $this->db->like("item_name",$search_term);
 
		 // Execute the query.
		 $query = $this->db->get();
 
		 // Return the results.
		 return $query->result();

	 }

	 //Here the  Admin is returning the orders made by the users from the place_order table
	 public function check_orders()
	 {

		 $this->db->order_by('id', 'DESC');
		 $query = $this->db->get('place_order');

		 return $query->result();

	 }
	 

}

 	
