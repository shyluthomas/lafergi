<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Online_enquiries extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('enquiry_model','enquiry');
		 $this->load->helper('url');
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('pagination');
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 $this->data['page']		 = 'callback';
		 
	 }
	 
	 public function index($property_id=NULL)
	 {
		 $search	= $this->input->post('search');
		 
		 $arr_where=array(
								'online_type'=>1
							);
		 $config['base_url'] = site_url()."/backend/online_enquiries/index";	 
		 $config['first_link'] = 'First';
		 $config['prev_link'] = 'Prev';
		 $config['next_link'] = 'Next';
		 $config['last_link'] = 'Last';
		 $config['per_page'] = 15;
		 $config['uri_segment']	= 4;
		 $config['total_rows'] = $this->enquiry->search_like($search)->count_all($arr_where);
		 $this->pagination->initialize($config); 
		 $page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
		 $this->data['enquiry']=$this->enquiry->search_like($search)
		 								->limit($config['per_page'],$page)
		 								->get_all_online($arr_where);
		 
		 
		 /////////////////////////////Basic Details/////////////////////////
		 
		 $this->data['pagetitle'] = "Enquiries";
		 
		 ////////////////////////////Basic Details - End////////////////////
		 

		 
		 $this->load->view('admin/enquiry/manage_enquiry_online',$this->data);
	 }
	 
	 public function view($req_id)
	 {
		 $this->data['enquiry']	= $this->enquiry->get_row_online($req_id);
		 
		 /////////////////////////////Basic Details/////////////////////////
		 
		 $this->data['pagetitle'] = "Enquiries";
		 
		 ////////////////////////////Basic Details - End////////////////////
		 
		 
		 $this->load->view('admin/enquiry/view_enquiry_online',$this->data);
	 }
	 
	 public function delete($req_id)
	 {
		 $this->callback->delete($req_id);
		 redirect('backend/online_enquiries');
	 }
	 
}
?>