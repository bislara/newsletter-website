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

      public function create_forum(){

         $slug = url_title($this->input->post('title'));

         $data = array(

            'title' => $this->input->post('title'),
            'slug' => $slug,
            'username'=>$this->input->post('username'),
            'body' => $this->input->post('body')
         );

         return $this->db->insert('forum', $data);

      }

      public function increase_reply($id){

         $this->db->where('id', $id);

         $this->db->set('reply', 'reply+1', FALSE);
         return $this->db->update('forum');
      }

   }
