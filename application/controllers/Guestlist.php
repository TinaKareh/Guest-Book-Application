<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestlist extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
		
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->library("pagination");
        $this->load->model('Guests_model');
    }
    public function index() {
	$config = array();
        $config["base_url"] = base_url() . "guestlist";
        $config["total_rows"] = $this->Guests_model->get_count();
        $config["per_page"] = 15;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

      $data["links"] = $this->pagination->create_links();
    
     $data['guests'] = $this->Guests_model->get_all($config["per_page"], $page);

      $this->load->view('guest_list', $data);	
    }
	
}
?>