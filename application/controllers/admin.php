<!--?php

	class Admin extends CI_Controller{

		public function left($page = 'home'){

			if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){

				show_404();

			}



			$data['title'] = 'Create Post';



			$this->load->view('admin/left/');

			$this->load->view('admin/right',$data);

			$this->load->view('templates/footer');

		}

	--}