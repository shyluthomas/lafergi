<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Dashboard extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		
		 $this->load->library('session');
		 $this->load->helper(array('url','form'));
		 $this->load->library('form_validation');
		 $this->load->library('session');
		 $this->load->library('pagination');
		 $this->load->library('upload');
		
		 
		 //$this->load->model('user_model','user');		
		
		
		 
		 
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 $this->data['page'] = 'dashboard';
		 
	 }
	 
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	 
	 public function index()
	 {
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 
		  ////////////Basic Details////////////////
		 
		 $this->data['pagetitle'] = "Dashboard";
		 
		 ///////////Basic Details - End//////////
		 
		// $arr_where_members	= array('user_active'=>1);
		// $this->data['recent_member']	= $this->user->limit(4,0)->get_all_recent_member($arr_where_members);
		 //echo $this->db->last_query();
		 //echo "ha"; exit();
		 
		 
		
	
	
		$this->load->view('admin/dashboard',$this->data);
	 }
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	 
	 
	 
	 
	 
	 
	 
	
	 
}
?>