<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Admin extends CI_Controller {


	 public $data;
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->helper(array('url','form'));
		 $this->load->library('form_validation');
		 $this->load->library('session');
		// $this->load->model('general_details_model','general');
		 $this->load->model('common_model','common');
		 
		 $this->data['page'] = '';
		 
		 //////////////////////////////////////General Config///////////////////
		 
		 $gid = 1;
		// $this->data['general_details'] = $this->general->get_row($gid);
		 
		 
		 /////////////////////////////////////General Config////////////////////
		 
	 }
	 
	 
	 
	 /////////////////////////////////////////////////////   Index Page //////////////////////////////////////////////////////////
	 
	public function index()
	{
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 	redirect("admin/login");
	
	
		redirect("backend/dashboard");
		
		
	}
	
	/////////////////////////////////////////////////////   Index Page End//////////////////////////////////////////////////////////
	
	/////////////////////////////////////////////////////   Login  //////////////////////////////////////////////////////////
	
	public function login()
	{
		
		
		if($this->input->post('login'))
		{
			$arr_validate = array(
               array(
                     'field'   => 'username',
                     'label'   => 'Username',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'password',
                     'label'   => 'Password',
                     'rules'   => 'required'
                  )
            );
			
			
			$this->form_validation->set_rules($arr_validate); 
			if ($this->form_validation->run() === TRUE)
			{
				$arr_form	 = $_POST; 
				$arr_where	= array('admin_email' => $this->security->xss_clean($arr_form['username']),'admin_password'=> md5($this->security->xss_clean($arr_form['password'])));
				$admin_det	= $this->common->admin_login($arr_where);
				if($admin_det)
				{
					$admin_name = $admin_det[0]['admin_name'];
					$admin_id	= $admin_det[0]['admin_id'];
					$sess_data  = array('SESS_ADMIN' => $admin_name,'SESS_ADMIN_ID'=>$admin_id);
					$this->session->set_userdata($sess_data);
					redirect('admin');
				}
				else
				{
					$this->data['error_msg'] ='Invalid Username or Password!!!';
				}
			}
			else
			{
				$this->data['error_msg']   = validation_errors();
			}
			

		}
		
		
		$this->load->view('admin/login',$this->data);
	}
	
	
	/////////////////////////////////////////////////////   Login End //////////////////////////////////////////////////////////
	
	
	/////////////////////////////////////////////////////   Logout //////////////////////////////////////////////////////////
	
	public function logout()
	{
		$this->session->unset_userdata('SESS_ADMIN');
		redirect('admin/login');
	}
	
	/////////////////////////////////////////////////////   Logout //////////////////////////////////////////////////////////
	
	
	public function change_password()
	{
		if(!$this->session->userdata('SESS_ADMIN')) 
		redirect("admin/login");
		
		if($this->input->post('save'))
		{
			$arr_validate = array(
               array(
                     'field'   => 'old_pass',
                     'label'   => 'Old password',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'new_pass',
                     'label'   => 'New Password',
                     'rules'   => 'required|min_length[5]'
                  ),
               array(
                     'field'   => 'confirm_pass',
                     'label'   => 'Confirm password',
                     'rules'   => 'required|matches[new_pass]'
                  )
            );
			
			$this->form_validation->set_rules($arr_validate); 
			if ($this->form_validation->run() === TRUE)
			{
				$arr_where	= array('admin_password' =>md5($this->input->post('old_pass')));
				$admin_det	= $this->common->admin_login($arr_where);
				if($admin_det)
				{
					$arr_data	= array('admin_password' => md5($this->input->post('new_pass')));
					$this->common->update_admin($admin_det[0]['admin_id'],$arr_data);
					redirect('admin');
				}
				else
				{
					$this->data['error_msg']	= 'Incorrect Old password';
				}
			}
			else
			{
				
				$this->data['error_msg']   = validation_errors();
			}
			
		}
		$this->load->view('admin/change_password',$this->data);
	}
}

?>