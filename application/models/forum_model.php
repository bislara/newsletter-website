<?php
   
   class Forum_model extends CI_Model
   {
   	
   	public function __construct()
   	{
   		$this->load->database();
   	}
    public function get_forum($slug = FALSE)
   {
   			
			if($slug == FALSE){

				$this->db->order_by('id', 'DESC');
				//$this->db->join('categories', 'categories.id = posts.category_id');

				$query = $this->db->get('forum');
				return $query->result_array(); 
   }

   //$this->db->join('categories', 'categories.id = posts.category_id');
      $query = $this->db->get_where('forum', array('slug' => $slug));
   		return $query->row_array();
   	}

   }
