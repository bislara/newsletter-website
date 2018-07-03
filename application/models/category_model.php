<?php
	class Category_model extends CI_Model{
		
		public function __construct(){
			$this->load->database();
		}

		public function get_categories(){
		
			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();
		
		}
		
		public function get_category($id){
		
			$query = $this->db->get_where('categories', array('id' => $id));
			return $query->row();
		
		}
		
	}