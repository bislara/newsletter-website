<?php
   
   class Posts extends CI_Controller
   {
   	
   	public function index($offset=0)
   	{

	   		$config['base_url'] = base_url() . 'posts/index';
			$config['total_rows'] = $this->db->count_all('posts');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

		$this->pagination->initialize($config);
   		$data['title'] = 'Latest Posts';

			$data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);

			$this->load->view('templates/header',$data);

			$this->load->view('posts/index', $data);

			$this->load->view('templates/footer');
   	}

   	public function view($slug = NULL){ 

   		$data['post']  = $this->post_model->get_posts($slug);
   		$data['posts'] = $this->post_model->get_posts();
   		$post_id = $data['post']['id'];
		$data['comments'] = $this->Comment_model->get_comments($post_id);

   		if (empty($data['post'])) {
   			show_404();
   		}
   		$data['title']=$data['post']['title'];

   		$this->load->view('templates/header',$data);

		$this->load->view('posts/view', $data);

		$this->load->view('templates/footer');

   	}

   	public function right(){


   		if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
   		$data['title']='Create post';

   		$data['categories']= $this->post_model->get_categories();

   			$this->form_validation->set_rules('title', 'Title', 'required');

			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				
				$this->load->view('templates/left');

				$this->load->view('posts/right', $data);

			} else {

				$config['upload_path'] = './assets/images';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';
				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){

					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.jpg';

				} else {

					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}
				$this->post_model->create_post($post_image);

				$this->session->set_flashdata('post_created', 'Your post has been created');
 				//$this->load->view('posts/success');
   				redirect('posts');
   	}
	}

	public function browse(){ 

		$data['title'] = 'Latest Posts';
   		$data['posts']  = $this->post_model->get_posts();

   		if (empty($data['posts'])) {
   			show_404();
   		}
   		//$data['title']=$data['post']['title'];

   		$this->load->view('templates/left');

		$this->load->view('posts/browse', $data);

		//$this->load->view('templates/footer');

   	}

    public function delete($id){
    		//echo $id;

    	if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
		$this->post_model->delete_post($id);

		$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

		    redirect('posts');

		}

		public function edit($slug){

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['post'] = $this->post_model->get_posts($slug);
		    $data['categories'] = $this->post_model->get_categories();

			if(empty($data['post'])){

				show_404();

			}
			$data['title'] = 'Edit Post';

			$this->load->view('templates/left');

			$this->load->view('posts/edit', $data);

			//$this->load->view('templates/footer');
		}

		public function update(){

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->post_model->update_post();

			$this->session->set_flashdata('post_updated', 'Your post has been updated');
			redirect('posts');
		}

		public function ask_a_question(){

			/*if(!file_exists(APPPATH.'views/posts/'.$page.'.php')){
				show_404();
			}*/

			$data['posts'] = $this->post_model->get_posts();
			//$data['title'] = ucfirst($page);

			$this->load->view('templates/header',$data);
			$this->load->view('posts/ask-a-question',$data);
			$this->load->view('templates/footer');
		}
		
	    public function search($slug = NULL){

	    	 $this->form_validation->set_rules('search', 'Search', 'required'); 

	    	 if($this->form_validation->run() === FALSE){

	    	 $this->index();
	    	 }
	    	 else{
		     $key = $this->input->post('search');

		   
		     $data['posts'] = $this->post_model->get_posts();
		     //$post['results'] = $this->post_model->search($key);
   		     //$post_id = $data['post']['id'];
   		     //$data['title']=$data['post']['title'];

		     $this->load->model('post_model','posts');
		     $articles=$this->posts->search($key);
		     $data['post']  = $this->post_model->get_posts($slug);
		     //$data['posts'] = $this->post_model->get_posts();

		    $this->load->view('templates/header',$data);
			$this->load->view('posts/search',compact('articles'),$data);
			$this->load->view('templates/footer');
					   	
		   	//print_r($key);
		     }
		    }
 		}