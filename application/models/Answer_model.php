<?php

	class Answer_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}
		public function create_ans($post_id){

			$data = array(

			 	'post_id' => $post_id,
			 	'name' => $this->input->post('name'),
			 	'body' => $this->input->post('body')
			 );
			$this->db->insert('answers', $data);
		}

		public function get_ans($post_id){
			$query = $this->db->get_where('answers', array('post_id' => $post_id));
			return $query->result_array();
		}

		// public function admin_comments(){

		// 	$this->db->order_by('id', 'DESC');
			
		// 	$query = $this->db->get('comments');
		// 	return $query->result_array(); 
		// }

	

	}