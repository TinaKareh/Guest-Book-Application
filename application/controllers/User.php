<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
 
 public function __construct() {
 parent::__construct();
 $this->load->helper(array('form', 'url'));
 $this->load->library(array('form_validation','session'));
 }
 
 public function login() {
 
 $this->form_validation->set_rules('email', 'Email', 'required');
 $this->form_validation->set_rules('pass', 'Password', 'required');
 
 if ($this->form_validation->run() == FALSE) {
 
 $this->load->view('user_login');
 
 } else {
 
 $email = $this->input->post('email');
 $password = $this->input->post('pass');
 
 $user = $this->db->get_where('users',array('email' => $email))->row();
 $row  =$this->db->get_where('users',array('pass' => $password))->row();

 
 if(!$user) {
 $this->session->set_flashdata('login_error', 'Please check your email and try again.', 300);
 redirect(uri_string());
 }
 
 
 if(!$row) {
 $this->session->set_flashdata('login_error', 'Please check your password and try again.', 300);
 redirect(uri_string());
 }
 
 $data = array(
 'user_id' =>$user->user_id,
 'fname' => $user->fname,
 'email' => $user->email,
 'phone' => $user->phone,
 'pass' => $user->pass,
 );
 
 
 $this->session->set_userdata($data);
 
 redirect(base_url('hello')); // redirect to home
 exit;
 
 } 
 }
 
 public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('user'));
    }
}