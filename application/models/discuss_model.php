<?php

	class Discuss_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}
		public function create_discuss($forum_id){

			$data = array(

				'forum_id' => $forum_id,
				'name' => $this->input->post('name'),
				'body' => $this->input->post('body')
			);
			return $this->db->insert('discuss', $data);
		}

		public function get_discuss($forum_id){
			
			$query = $this->db->get_where('discuss', array('forum_id' => $forum_id));
			return $query->result_array();
		}
	}