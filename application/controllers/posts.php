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

   	public function featured($offset=0)
   	{

   		$config['base_url'] = base_url() . 'posts/featured';
			$config['total_rows'] = $this->db->count_all('posts');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

		$this->pagination->initialize($config);
   		$data['posts']=$this->post_model->featured_posts($config['per_page'], $offset);

   		$data['title'] = 'Featured Posts';
 
   		if (empty($data['posts'])) {
   			show_404();
   		}

   		$this->load->view('templates/header',$data);

		$this->load->view('posts/featured', $data);

		$this->load->view('templates/footer');

   	}

   	public function editor($offset=0)
   	{

   		$config['base_url'] = base_url() . 'posts/editor';
			$config['total_rows'] = $this->db->count_all('posts');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

		$this->pagination->initialize($config);
   		$data['posts']=$this->post_model->editors_pick($config['per_page'], $offset);

   		$data['title'] = 'Editor"s Pick ';
 
   		if (empty($data['posts'])) {
   			show_404();
   		}

   		$this->load->view('templates/header',$data);
		$this->load->view('posts/editors_pick', $data);
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

   		$data['views']=$this->post_model->increase_views($post_id);

   		$this->load->view('templates/header',$data);

		$this->load->view('posts/view', $data);

		$this->load->view('templates/footer');

   	}

   	public function right(){


   		if(!$this->session->userdata('logg_in')){
				redirect('admin/login');
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

		
    	if(!$this->session->userdata('logg_in')){
				redirect('admin/login');
			}
		$data['title'] = 'Latest Posts';
   		$data['posts']  = $this->post_model->get_posts();

   		if (empty($data['posts'])) {
   			show_404();
   		}
   		//$data['title']=$data['post']['title'];

   		$this->load->view('templates/left');

		$this->load->view('posts/browse', $data);

   	}

   	public function comments(){

    	if(!$this->session->userdata('logg_in')){
				redirect('admin/login');
			}

		$data['title'] = 'All Comments';
		$data['comments']  = $this->Comment_model->admin_comments();

		$this->load->view('admin/left');
		$this->load->view('admin/comments', $data);
   	}

   	public function delete_comment($id)
   	{
   		if(!$this->session->userdata('logg_in')){
				redirect('admin/login');
			}

		$this->Comment_model->delete_comments($id);

		$this->session->set_flashdata('comment_deleted', 'Your comment has been deleted');
		 redirect('posts');
   	}

    public function delete($id){
    		//echo $id;

    	if(!$this->session->userdata('logg_in')){
				redirect('admin/login');
			}
		$this->post_model->delete_post($id);

		$this->session->set_flashdata('post_deleted', 'Your post has been deleted');

		    redirect('posts');

		}

		public function edit($slug){

			if(!$this->session->userdata('logg_in')){
				redirect('admin/login');
			}
			$data['post'] = $this->post_model->get_posts($slug);
		    $data['categories'] = $this->post_model->get_categories();

			if(empty($data['post'])){

				show_404();

			}
			$data['title'] = 'Edit Post';

			$this->load->view('templates/left');

			$this->load->view('posts/edit', $data);
		}

		public function update(){

			if(!$this->session->userdata('logg_in')){
				redirect('admin/login');
			}

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
			$this->post_model->update_post($post_image);

			$this->session->set_flashdata('post_updated', 'Your post has been updated');
			redirect('posts');
		}


		public function ask_a_question(){
		
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['posts'] = $this->post_model->get_posts();
			
			$this->form_validation->set_rules('name', 'name', 'required');

			$this->form_validation->set_rules('question', 'question', 'required');

			$this->form_validation->set_rules('authority', 'authority', 'required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('templates/header',$data);
				$this->load->view('posts/ask-a-question',$data);
				$this->load->view('templates/footer');
			} else {

				$this->post_model->ask_question();
				$this->session->set_flashdata('qs_uploaded', 'Your question has been submitted');
         		redirect('posts/ask-a-question');
			}

		}

		public function questions(){

			$data['title'] = 'Frequently Asked Questions';

			$data['posts'] = $this->post_model->get_posts();

			$data['questions']=$this->post_model->get_questions(FALSE);


			$this->load->view('templates/header',$data);
			$this->load->view('ask_a_question/questions', $data);
			$this->load->view('templates/footer');

		}

		public function ind_question($id=NULL)
		{

			$data['qs']  = $this->post_model->get_questions($id);
   			$data['posts'] = $this->post_model->get_posts();
   			
   			$post_id = $data['qs']['id'];
			$data['answers'] = $this->Answer_model->get_ans($post_id);

   			if (empty($data['qs'])) {
   				show_404();
   			}

   			$data['title']='Question and Answers';

   			$this->load->view('templates/header',$data);

			$this->load->view('ask_a_question/question', $data);

			$this->load->view('templates/footer');

		}

		public function admin_ans(){

			if(!$this->session->userdata('logg_in')){
				redirect('admin/login');
			}

		$data['title'] = 'All Questions';
		$data['questions']  = $this->Answer_model->admin_qs();

		$this->load->view('admin/left');
		$this->load->view('admin/questions', $data);
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