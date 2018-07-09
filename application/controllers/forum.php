<?php

	class Forum extends CI_Controller{

		public function add(){

			$data['posts'] = $this->post_model->get_posts();

			$data['title'] = 'Discussing Forum';
			$data['forum']=$this->forum_model->get_forum();

			$data['count']=0;
			
			$this->load->view('templates/header',$data);
			$this->load->view('forum/add',$data);
			$this->load->view('templates/footer');

		}
		public function view($slug = NULL){ 

			$data['posts'] = $this->post_model->get_posts();

	   		$data['post']  = $this->forum_model->get_forum($slug);
	   		$forum_id = $data['post']['id'];
	   		//print_r($forum_id);
	   		$data['count']=0;
			$data['comments'] = $this->discuss_model->get_discuss($forum_id);
			//print_r($data['count']);

	   		$data['title']=$data['post']['title'];

	   		$this->load->view('templates/header',$data);
			$this->load->view('forum/view', $data);
			$this->load->view('templates/footer');

   	    }

   	    public function create(){

			$data['posts'] = $this->post_model->get_posts();

			$data['title'] = 'Create Forum';


   			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('username', 'Name', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');


			if($this->form_validation->run() === FALSE){
			
			$this->load->view('templates/header',$data);
			$this->load->view('forum/create',$data);
			$this->load->view('templates/footer');
				
			}
			 else 
			{
				$this->forum_model->create_forum();
			
				$this->session->set_flashdata('forum_created', 'Your forum has been started');
 				
   				redirect('forum');
			}
			
		}
	}
