<?php

	class Forum extends CI_Controller{

		public function add(){

			$data['posts'] = $this->post_model->get_posts();

			$data['title'] = 'Discussing Forum';
			$data['forum']=$this->forum_model->get_forum();

			$this->load->view('templates/header',$data);
			$this->load->view('forum/add',$data);
			$this->load->view('templates/footer');

		}
		public function view($slug = NULL){ 

   		$data['post']  = $this->forum_model->get_forum($slug);
   		$data['posts'] = $this->post_model->get_posts();
   		$post_id = $data['post']['id'];
		//$data['comments'] = $this->Comment_model->get_comments($post_id);

   		$data['title']=$data['post']['title'];

   		$this->load->view('templates/header',$data);
		$this->load->view('forum/view', $data);
		$this->load->view('templates/footer');

   	}
	}
