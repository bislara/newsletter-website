<?php

	class Answers extends CI_Controller{

		public function create($post_id){

			if(!$this->session->userdata('logg_in')){
				redirect('admin/login');
			}

			$data['posts'] = $this->post_model->get_posts();
			$data['questions']=$this->post_model->get_questions();
			$id = $this->input->post('id');

			$data['qs'] = $this->post_model->get_questions($id);
			//$ans_id=$data['qs']['id'];
			$this->form_validation->set_rules('name', 'Name', 'required');

			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('templates/header',$data);
				$this->load->view('ask_a_question/question', $data);
				$this->load->view('templates/footer');
			} else {

				$this->Answer_model->create_ans($post_id);
         		redirect('posts/question/'.$id);
			}
		}
	}