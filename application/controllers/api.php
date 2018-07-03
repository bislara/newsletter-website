	<?php
   
   class Api extends CI_Controller
   {

   public function getPostByname($slug = NULL){ 

   		$data['post']  = $this->post_model->get_posts($slug);
   		//$data['posts'] = $this->post_model->get_posts();
   		$post_id = $data['post']['id'];
		$data['comments'] = $this->Comment_model->get_comments($post_id);

   		if (empty($data['post'])) {
   			show_404();
   		}
   		$data['title']=$data['post']['title'];

         $this->echoJsonResponse($data);
   	}
      public function echoJsonResponse($data)
      {
         $this->output->set_content_type(' application/json ');
         $response['jsonResponse']=json_encode($data);
      
         $this->load->view('api/getPostByname', $response);
      }

      public function getPost_id($id)
      {
         $data['post']  = $this->post_model->getposts_by_id($id);
         //$data['posts'] = $this->post_model->get_posts();
         $post_id = $data['post']['id'];
         $data['comments'] = $this->Comment_model->get_comments($post_id);

         if (empty($data['post'])) {
            show_404();
         }

         $data['title']=$data['post']['title'];

         $response['jsonResponse']=json_encode($data);
         $this->load->view('api/getComments', $response);

      }

      public function featured_post()
      {
         $data['posts']=$this->post_model->featured_posts();

         $data['title'] = 'Featured Posts';
 
         if (empty($data['posts'])) {
            show_404();
         }
          $response['jsonResponse']=json_encode($data);
         
         $this->load->view('api/getComments', $response);
      }

      public function Comment_submit(){
            
            $data = array(

            'post_id' => $this->input->post('post_id'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'body' => $this->input->post('body')
         );
         
            $return = $this->Comment_model->create_comment_api($data);
            
            $response['jsonResponse']=json_encode($return);
             $this->load->view('api/getComments', $response);
      }

      public function getComments($slug = NULL){ 

         $return['post']  = $this->post_model->get_posts($slug);

         $post_id = $return['post']['id'];
      $data['comments'] = $this->Comment_model->get_comments($post_id);

         if (empty($return['post'])) {
            show_404();
         }
         

         //$this->echoJsonResponse($return);
         $response['jsonResponse']=json_encode($data);
         
         $this->load->view('api/getComments', $response);

      }

      public function signin(){

         $data['title'] = 'Sign In';
         
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $user_id = $this->User_model->login_api($username, $password);
               
            $user_data = array(

                  'user_id' => $user_id,
                  'username' => $username,
                  'logged_in' => true
               );

               //$this->session->set_userdata($user_data);
            
            $response['jsonResponse']=json_encode($user_data);
            $this->load->view('api/getComments', $response);
         }


   }