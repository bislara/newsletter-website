<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function home($arg){
		$this->load->model('home_model');
		$data['results'] = $this->home_model->home($arg);
		$this->load->view('Home',$data);

	}
}
