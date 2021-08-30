
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addguest extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();	
	
  $this->load->helper('url', 'form');
  $this->load->helper('date');
  $this->load->library('form_validation');
  $this->load->model('Guests_model');
  
	}
   public function store() {
        
        $this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('person', 'Person To Visit', 'required');
        $this->form_validation->set_rules('purpose', 'Purpose of Visit', 'required');
        $this->form_validation->set_rules('phone','Mobile Number', 'required');
		
        if ($this->form_validation->run() == FALSE) {
          $this->load->view('add_guest');
		  
        } else {
			  //insert the guest form data into database
		   date_default_timezone_set('Africa/Nairobi'); # add your city to set local time zone
		   $dateFormat ="%Y-%m-%d";
		   $timeFormat = "%h:%i %s";
		   $entry_date = mdate($dateFormat);
           $entry_time = mdate($timeFormat);
            $data = array(
                'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
                'mobile' => $this->input->post('phone'),
                'person' => $this->input->post('person'),
				'purpose' => $this->input->post('purpose'),
        'organization' => $this->input->post('organization'),
				'entry_date' =>$entry_date,
				'entry_time' => $entry_time,
            );
             $this->Guests_model->insert($data);
			 
			redirect(base_url('guestlist'));
        }
    }		
 }		
 

?>