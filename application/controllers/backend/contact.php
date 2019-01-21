<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Contact extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('contact_model','contact');
		 $this->load->helper(array('url','form'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('pagination');
		 $this->load->library('upload');
		  $this->load->library('image_lib');
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 $this->data['page'] = 'contact';
		 
	 }
	 	 
	  //////////////////edit////////////////////////////////////////
	 public function index()
	 {
		 $aboutData=$this->contact->get_all();
		 $this->data['arr_view'] = $aboutData[0];		
		 $id = $aboutData[0]['id'];		
		 $data_r= $this->data['arr_view'];
		 
		 if($this->input->post('save'))
		 {
			 
			 $arr_form=$_POST;
			 $arr_form_file=$_FILES;
			 
			 ////////////////////////file uploads////////////////////////////
			 
			 				/////////////////////////////////////// 
							 	
							 /*	$assetpath = base_url().'assets/backend/images/';
								if($_FILES['aboutusimg']['name']!='')
								{
											$string=uniqid();
										   
											$config['upload_path'] = './images/aboutus';
											$config['allowed_types'] = 'gif|jpg|png';
											
											$config['file_name']    = $string.$_FILES['aboutusimg']['name'];
											$this->upload->initialize($config);
											
											if ( ! $this->upload->do_upload('aboutusimg'))
											{
												$data['alert'] = $this->upload->display_errors();                        
												$this->load->view('admin/aboutus/edit_aboutus', $data);
											}    
											else
											{
												$upload_data = $this->upload->data();	
												
									$config['image_library'] = 'gd2';
									$config['source_image'] = './images/aboutus/'.$upload_data['file_name'];
									$config['create_thumb'] = FALSE;
									$config['maintain_ratio'] = false;
									$config['width']     = 100;
									$config['height']   = 100;
									$config['new_image'] =  './images/aboutus/thump/'.$upload_data['file_name'];
									
									$this->image_lib->initialize($config); 
									if ( ! $this->image_lib->resize()){echo $this->image_lib->display_errors();}
								
								
									$this->image_lib->clear();
												
																					
												$aboutusimg = $upload_data['file_name'];
												@unlink(base_url().'/images/aboutus/'.$data_r['image']);
												
											}
								}
								else
								{
									$aboutusimg=$arr_form['imageid1'];
								}*/
								
							/////////////////////////////////////// 
						
			 ///////////////////////file uploads////////////////////////////
			 
			 
			 $arr_data=array(   'contact'=>addslashes($arr_form['contact']),
                                'office_address'=>addslashes($arr_form['office_address']),
                                'email'=>addslashes($arr_form['email']),
								'content'=>addslashes($arr_form['content']),											
								'about_createtime'=>date('Y-m-d H:i:s',time())
							);						
			
			$executed = $this->contact->update_data($id,$arr_data);
			if($executed)
			{
				$this->session->set_flashdata('success', 'About-us page details updated successfully');
				redirect('/backend/contact/');
			}
			else
			{
				$this->session->set_flashdata('fail', 'About-us page details updated unsuccessfully');
				redirect('/backend/contact/');
			}
			
			
			 
		 }
		  $this->load->view('admin/contact/manage_contact',$this->data);
		 
		 
	 }
	
	 
}
?>