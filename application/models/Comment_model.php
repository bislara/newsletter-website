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

		public function approved_comments($post_id){
			

			$query = $this->db->query("SELECT * FROM comments WHERE post_id='$post_id' AND status='1'; ");
			return $query->result_array();
		}

		public function admin_comments(){

			$this->db->order_by('id', 'DESC');
			
			$query = $this->db->get('comments');
			return $query->result_array(); 
		}

		public function approved_comment(){

			$this->db->order_by('id', 'DESC');
			
			$query=$this->db->get_where('comments',array('status'=>1));
			return $query->result_array(); 
		}

		public function approve_comment($id){

			$this->db->where('id', $id);

			$this->db->set('status', 'status+1', FALSE);
			return $this->db->update('comments');
		}

		public function pending_comment(){

			$this->db->order_by('id', 'DESC');
			
			$query=$this->db->get_where('comments',array('status'=>0));
			return $query->result_array(); 
		}

		public function delete_comments($id){

			$this->db->where('id', $id);
			$this->db->delete('comments');
			return true;

		}

		public function increase_comment($id){

			$this->db->where('id', $id);

			$this->db->set('comments', 'comments+1', FALSE);
			return $this->db->update('posts');
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