
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();	
  
  $this->load->helper('url');
  $this->load->helper('form');
  $this->load->library('form_validation');
  $this->load->library('session');
  $this->load->model('Register_model');
  
	}
	
	public function index(){
 $this->form_validation->set_rules('email', 'Email', 'required');
 $this->form_validation->set_rules('pass', 'Password', 'required|min_length[5]');
 $this->form_validation->set_rules('userName', 'Name', 'required');

	  if ($this->form_validation->run() == TRUE) {
		  
		//insert the signup form data into database
    $data = array(
      'fname' => $this->input->post('userName'),
      'email' => $this->input->post('email'),
      'phone' => $this->input->post('phone'),
      'pass' => $this->input->post('pass')
  );

  $this->Register_model->insert($data);

  redirect(base_url('user'));
		
	  }else{
      $this->load->view('user_signup');
		
	  }	
         
		}
 }		

?>