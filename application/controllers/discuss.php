<?php

	class Discuss extends CI_Controller{

		public function create($post_id){

			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['posts'] = $this->post_model->get_posts();
			$slug = $this->input->post('slug');

			$data['post'] = $this->forum_model->get_forum($slug);
			$forum_id = $data['post']['id'];
			
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('templates/header',$data);
				$this->load->view('forum/view', $data);
				$this->load->view('templates/footer');
			} else {

				$this->discuss_model->create_discuss($forum_id);
         		redirect('forum/'.$slug);
			}
		}
	}