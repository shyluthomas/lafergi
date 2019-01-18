<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Ajax extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('newsletter_model','newsletter');
		 $this->load->helper(array('url','form'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('pagination');
		 $this->load->library('upload');
		  $this->load->model('enquiry_model','enquiry');
	
		 
	 }
	 
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	  public function index($test_id=NULL)
	 {
		
	 }
	 
	
	 
	 
	 	 public function ajax_add()
	 {
		
		  
		 
			 
			$array_form = $_POST;		
			
			
			$array_insert= array(
									'sub_email' => addslashes($array_form['email']),									
									'created_date' => date('Y-m-d H:i:s',time())
									);	
			
			
			$insert=$this->newsletter->insert_data($array_insert);
			
			 if($insert)
			 {
				 echo 1;
			 }
			 else
			 {
			echo 0;	 
			 }
		 
	
	 }
	 
	  public function ajax_send()
	 {
			 
			$array_form = $_POST;		
			
			
			$array_insert= array(
									'enq_name' => addslashes($array_form['name']),	
									'enq_email' => addslashes($array_form['email']),
									'enq_message' => addslashes($array_form['message'])
									);	
			
			
			$insert=$this->enquiry->insert_data($array_insert);
			
			 if($insert)
			 {
				 echo 1;
			 }
			 else
			 {
			echo 0;	 
			 }
		 
	
	 }
	 
	
	 
}
?>