<?php
   
   class Post_model extends CI_Model
   {
   	
   	public function __construct()
   	{
   		$this->load->database();
   	}
    public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE)
   {
   			if($limit){
				$this->db->limit($limit, $offset);
			}
   			
			if($slug == FALSE){

				$this->db->order_by('posts.id', 'DESC');
				$this->db->join('categories', 'categories.id = posts.category_id');

				$query = $this->db->get('posts');
				return $query->result_array(); 
   }

      $this->db->join('categories', 'categories.id = posts.category_id');
      $query = $this->db->get_where('posts', array('slug' => $slug));
   		return $query->row_array();
   	}

   	public function featured_posts($limit = FALSE, $offset = FALSE){

   		if($limit){
				$this->db->limit($limit, $offset);
			}

		$this->db->order_by('id', 'DESC');

		$query=$this->db->get_where('posts',array('featured'=>1));
		return $query->result_array();
	}

   	public function create_post($post_image){

			$slug = url_title($this->input->post('title'));

			$data = array(

				'title' => $this->input->post('title'),

				'slug' => $slug,

				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id'),
				'post_image'=> $post_image,
				'user_id' => $this->session->userdata('user_id'),
			);

			return $this->db->insert('posts', $data);

	}

	public function get_posts_by_category($category_id){
		
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('categories', 'categories.id = posts.category_id');
				$query = $this->db->get_where('posts', array('category_id' => $category_id));
			return $query->result_array();
		
		}


	public function delete_post($id){

			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;

		}

	public function update_post($post_image){

			$slug = url_title($this->input->post('title'));
			$data = array(

				'title' => $this->input->post('title'),

				'slug' => $slug,

				'body' => $this->input->post('body'),

				'category_id' => $this->input->post('category_id'),

				'post_image'=>$post_image

			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}

	public function increase_views($id){

		$this->db->where('id', $id);

		$this->db->set('views', 'views+1', FALSE);
		return $this->db->update('posts');
		
		}

		public function getposts_by_id($id){
		
		$query=$this->db->get_where('posts',array('id'=>$id));
		return $query->row_array();
		
		}	


		public function get_categories(){

			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();

		}

        public function search($key){

		        $query=$this->db->from('posts')->like('title', $key)->get();


		        //$query = $this->db->get_where('posts', array('slug' => $key));
   		        //return $query->row_array();
		        //$query = $this->db->get('posts');
		        return $query->result();
		    }

 }