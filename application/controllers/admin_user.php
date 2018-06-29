<?php

	class Admin_user extends CI_Controller{

		public function register(){
			$data['title'] = 'Register As Admin';
			$data['posts'] = $this->post_model->get_posts();
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/left');
				$this->load->view('admin/register', $data);

			} else {
				$enc_password = md5($this->input->post('password'));
				$this->admin_model->register($enc_password);
				$this->session->set_flashdata('admin_registered', 'You are now registered and can log in as a admin');
				redirect('admin/login');
			}
		}

		public function login(){

			$data['title'] = 'Sign In as Admin';
			$data['posts'] = $this->post_model->get_posts();
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() === FALSE){

				$this->load->view('admin/left');
				$this->load->view('admin/login', $data);

			} else {
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
				$user_id = $this->admin_model->login($username, $password);
				if($user_id){
					$user_data = array(

						'user_id' => $user_id,
						'username' => $username,
						'logg_in' => true
					);

					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('admin_loggedin', 'You are now logged in');
					redirect('posts/admin/browse');

				} else {
					$this->session->set_flashdata('login_failed', 'Login is invalid');
					redirect('admin/login');
				}		
			}
		}

		public function logout(){

			$this->session->unset_userdata('logg_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');
			$this->session->set_flashdata('admin_loggedout', 'You are now logged out');
			redirect('admin/login');

		}
		public function check_username_exists($username){

			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');

			if($this->admin_model->check_username_exists($username)){

				return true;

			} else {

				return false;
			}
		}
		public function check_email_exists($email){

			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->admin_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
	}