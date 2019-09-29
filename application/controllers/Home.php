<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/* Here am loading the main menu(shop) in which 
	the users can shop for the items of their choice */
	public function index($offset=0)
	{
		//Here am paginating the index page in which only 6 items can be seen at a time
		$this->load->library('pagination');
		$config['base_url'] = base_url(). 'home/';
		$config['total_rows'] = $this->home_model->count_all();
		$config['per_page'] = 6;

		$this->pagination->initialize($config);
		// $items = $this->home_model->get_items();

		$data['items'] = $this->home_model->get_items($config['per_page'], $offset);
	
		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}

	//Here am loading the admin page so that I can insert an item into the database
	public function admin()
	{
		$this->load->view('header');
		$this->load->view('admin');
		$this->load->view('footer');
	}

	//Here am saving while inserting the item into the items table in the database
	public function save_item()
	{
		$config['upload_path'] = './assets/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1000';
		$config['max_width'] = '1000';
		$config['max_height'] = '1000';

		$this->load->library('upload', $config);
		$item_image = $_FILES['userfile']['name'];

		if(!$this->upload->do_upload('userfile')){
			$errors = array('error'=> $this->upload->display_errors());
			//var_dump('here is about song file');
			//var_dump($errors);
		}else{
			//var_dump('no error');
			$data = array('upload_data' => $this->upload->data());
			
	
		//redirect('admin');

		$this->load->library('form_validation');

		//$this->form_validation->set_rules('item_image', 'Item_image', 'required');
		$this->form_validation->set_rules('item_name', 'Item_name', 'required');	
		$this->form_validation->set_rules('item_price', 'Item_price', 'required');

		if ($this->form_validation->run())
		{
				$data = $this->input->post();
				$data['item_image'] = $item_image;
				//$data['song_cover'] = $cover_url;

				unset($data['submit']);
				if($this->home_model->add_item($data))
				{

					$this->session->set_flashdata('msg', 'item added successfully');

				}else{
				
					$this->session->set_flashdata('msg', 'item not added successfully');

				}

				return redirect('admin');
		}
		else{
		
			echo validation_errors();
		}
	}

	}

	//Here am searching items by their names
	public function execute_search()
	{
	
		 $search_term = $this->input->post('search');
	
		 $items = $this->home_model->get_results($search_term);
 
		 $this->load->view('header');
		 $this->load->view('search_results', ['items' => $items]);
		 $this->load->view('footer');

	 }
 
	//  Here the admin is viewing the placed orders from the users
	 public function check_orders()
	 {
		 $data['place_order'] = $this->home_model->check_orders();


		 $this->load->view('header');
		 $this->load->view('check_orders', $data);
		 $this->load->view('footer');

	 }


	 
}
