<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Testimonials extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('testimonial_model','testimonials');
		 $this->load->helper(array('url','form'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('pagination');
		 $this->load->library('upload');
		  $this->load->library('image_lib');
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 $this->data['page'] = 'testimonial';
		 
	 }
	 
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	 
	 public function index($test_id=NULL)
	 {
		
		 $this->data['arr_view']=$this->testimonials->get_all();
		 								
		 
		 
		 $this->load->view('admin/testimonials/manage_testimonial',$this->data);
	 }
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	 
	 
	 /////////////////////status/////////////////////////////////
	 public function status($test_id,$status)
	 {
		 if($status=='P')
		 {
			 $arr_data = array('test_active'=>'I');
			 
		 }
		 if($status=='I')
		 {
			 $arr_data = array('test_active'=>'A');
		 }
		 if($status=='A')
		 {
			 $arr_data = array('test_active'=>'I');
		 }
		 
		 $this->testimonial->update_data($test_id,$arr_data);
		 redirect('backend/testimonials');
	 }
	 ////////////////////Status//////////////////////////////////
	 
	 
	 ////////////////////delete///////////////////////////////////
	 public function delete($test_id)
	 {
		 	 
		 $this->testimonials->delete($test_id);
		 redirect('backend/testimonials');
	 }
	 ///////////////////delete////////////////////////////////////
	 
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	  //////////////////add new////////////////////////////////////////
	 public function add()
	 {
		 
		  
		 
		 if($this->input->post('save'))
		 {
			 
			 $arr_form=$_POST;
			 $arr_form_file=$_FILES;
			
			 
			 ////////////////////////file uploads////////////////////////////
			 
			 				/////////////////////////////////////// 
							 $testimg ='';
							 
								if($_FILES['image']['name']!='')
								{
									$string=uniqid();
								   //upload thumbnail
									$config['upload_path'] = './assets/backend/images/testimonials';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['image']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('image'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/testimonials/add_packages', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/testimonials/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './assets/backend/images/testimonials/thump/'.$upload_data['file_name'];
							//$this->load->library('image_lib', $config);  // this line cause problem
							$this->image_lib->initialize($config); // with this problem resolved
							if ( ! $this->image_lib->resize()){echo $this->image_lib->display_errors();}
						
						
							$this->image_lib->clear();
										
										
										$image = $upload_data['file_name'];
										/*$width = $upload_data['image_width'];
										$height = $upload_data['image_height'];*/
										
									}
								}
								else
								{
									$image='';
								}
								
							/////////////////////////////////////// 
							
					 $arr_data=array(
			 					'title'=>$arr_form['title'],
			 					'image'=>$image,
								'content'=>$arr_form['content'],
								'createtime'=>date('Y-m-d H:i:s',time())								
							);
							
			
			
			$exe = $this->testimonials->insert_data($arr_data);
			
			if($exe)
			{
				$this->session->set_flashdata('success', 'Testimonial details inserted successfully');
				redirect('/backend/testimonials/');
			}
			else
			{
				$this->session->set_flashdata('fail', 'Testimonial details not inserted successfully');
				redirect('/backend/testimonials/');
			}
			
			
			 
		 }
		 
		 $this->load->view('admin/testimonials/add_testimonial',$this->data); 
		 
	 }
	 //////////////////add new////////////////////////////////////////
	 
	  //////////////////edit////////////////////////////////////////
	 public function edit($testid)
	 {
		
		  if($this->input->post('save'))
		 {
			 
			 $arr_form=$_POST;
			 $arr_form_file=$_FILES;
			
			 
			 ////////////////////////file uploads////////////////////////////
			 
			 				/////////////////////////////////////// 
							 $testimg ='';
							 
								if($_FILES['image']['name']!='')
								{
									$string=uniqid();
								   //upload thumbnail
									$config['upload_path'] = './assets/backend/images/testimonials';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['image']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('image'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/testimonials/add_packages', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/testimonials/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './assets/backend/images/testimonials/thump/'.$upload_data['file_name'];
							//$this->load->library('image_lib', $config);  // this line cause problem
							$this->image_lib->initialize($config); // with this problem resolved
							if ( ! $this->image_lib->resize()){echo $this->image_lib->display_errors();}
						
						
							$this->image_lib->clear();
										
										
										$image = $upload_data['file_name'];
										/*$width = $upload_data['image_width'];
										$height = $upload_data['image_height'];*/
										
									}
								}
								else
								{
									$image=$arr_form['imageid1'];
								}
								
							/////////////////////////////////////// 
							
					  $arr_data=array(
			 					'title'=>$arr_form['title'],
			 					'image'=>$image,
								'content'=>$arr_form['content'],
								'createtime'=>date('Y-m-d H:i:s',time())								
							);
							
							
			
			$executed = $this->testimonials->update_data($testid,$arr_data);
			if($executed)
			{
				$this->session->set_flashdata('success', 'Testimonial details updated successfully');
				redirect('/backend/testimonials/');
			}
			else
			{
				$this->session->set_flashdata('fail', 'Testimonial details updated unsuccessfully');
				redirect('/backend/testimonials/');
			}
			
		 }
		 
		 	 $this->data['arr_view']=$this->testimonials->get_row_detail($testid);		 	
			 $this->load->view('admin/testimonials/edit_testimonial',$this->data);
		 
	 }
	 //////////////////edit////////////////////////////////////////
	 
	 
	 
	 
	
	 
}
?>