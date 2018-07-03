<?php

	class Comment_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}
		public function create_comment($post_id){

			$data = array(

			 	'post_id' => $post_id,
			 	'name' => $this->input->post('name'),
			 	'email' => $this->input->post('email'),
			 	'body' => $this->input->post('body')
			 );
			$this->db->insert('comments', $data);
		}

		public function get_comments($post_id){
			$query = $this->db->get_where('comments', array('post_id' => $post_id));
			return $query->result_array();
		}

		public function admin_comments(){

			$this->db->order_by('id', 'DESC');
			
			$query = $this->db->get('comments');
			return $query->result_array(); 
		}

		public function delete_comments($id){

			$this->db->where('id', $id);
			$this->db->delete('comments');
			return true;

		}

		public function create_comment_api($data)
		{
			$return = $this->db->insert('comments', $data);
			if($return){

					return true;
			}
			else 
			{
				return false;
			}
		}

	}