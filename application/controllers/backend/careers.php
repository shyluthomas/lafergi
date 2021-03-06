<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Careers extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('careers_model','careers');
		 $this->load->helper(array('url','form'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('pagination');
		 $this->load->library('upload');
		 $this->load->library('image_lib');
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 $this->data['page'] = 'careers';
		 
	 }
	 
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	  public function index($test_id=NULL)
	 {
		
			
			 	//take id for update data							
				$arr_data_old=$this->careers->get_all();
				$id=$arr_data_old[0]['id'];
				
			 
			$array_form = $_POST;			
			$array_insert= array(
									'title' => addslashes($array_form['title']),
									'content' => addslashes($array_form['about']),
									'createtime' => date('Y-m-d H:i:s',time())
			);	
			
			
		
		 
		 $this->data['arr_view']=$this->careers->get_all();		 
		 
		 $this->load->view('admin/careers/manage_careers',$this->data);
	 }
	 
	 public function add($test_id=NULL)
	 {
		//var_dump(base_url().'assets/');
		  
		 
		 if($this->input->post('save'))
		 {
			$array_form = $_POST;			
			
			
							if($_FILES['image']['name']!='')
								{
									$string=uniqid();
								   //upload thumbnail
									$config['upload_path'] = './assets/backend/images/careers';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['image']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('image'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/careers/add_careers', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/careers/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './assets/backend/images/careers/thump/'.$upload_data['file_name'];
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
								
								$cont = str_replace("'","",$array_form['content']);
			$array_insert= array(	'title' => addslashes($array_form['title']),
									'description' => addslashes($array_form['description']),
									'qualification' => addslashes($array_form['qualification']),									
									'content' => addslashes($cont),
									'image' => $image,
									'createtime' => date('Y-F-d')
									);	
			
			
			$insert=$this->careers->insert_data($array_insert);
			
			
		 }
		 
		 //$this->data['arr_view']=$this->careersus->get_all();		 
		 
		 $this->load->view('admin/careers/add_careers',$this->data);
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
		 
		 $this->careers->update_data($test_id,$arr_data);
		 redirect('backend/careers');
	 }
	 ////////////////////Status//////////////////////////////////
	 
	 
	 ////////////////////delete///////////////////////////////////
	 public function delete($test_id)
	 {
		 	 
		 $this->careers->delete($test_id);
		 redirect('backend/careers');
	 }
	 ///////////////////delete////////////////////////////////////
	 
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	 public function view($aboutid)
	 {
		 $this->data['arr_view']=$this->careers->get_row_withuser($aboutid);
		 
		 //var_dump($this->data['arr_view']); //exit();
		 //var_dump($_POST);
		 //var_dump($_FILES);
		 //print_r($this->session->userdata);
		 $this->data['ss']=$this->session->userdata('SESS_ADMIN_ID');
		  
		 $this->load->view('admin/careers/view_careers',$this->data);
		 
		 
	 }
	 
	 
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	  
	 
	  //////////////////edit////////////////////////////////////////
	 public function edit($aboutid)
	 {
		 $this->data['arr_view']=$this->careers->get_row_detail($aboutid);
		
		 $data_r= $this->data['arr_view'];
		 if($this->input->post('save'))
		 {
			 //print_r("hai....");
			 
			 $array_form=$_POST;
			 $arr_form_file=$_FILES;
			 //var_dump($arr_form_file);
			 
			 
			 ////////////////////////file uploads////////////////////////////
			 
			 				/////////////////////////////////////// 
							 
							if($_FILES['image']['name']!='')
								{
									$string=uniqid();
								   //upload thumbnail
									$config['upload_path'] = './assets/backend/images/careers';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['image']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('image'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/careers/add_careers', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/careers/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './assets/backend/images/careers/thump/'.$upload_data['file_name'];
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
									$image=$array_form['imageid1'];
								}
								$cont = str_replace("'","",$array_form['content']);
			$array_insert= array(	'title' => addslashes($array_form['title']),
									'description' => addslashes($array_form['description']),
									'qualification' => addslashes($array_form['qualification']),									
									'content' => addslashes($cont),
									'image' => $image,
									'createtime' => date('Y-F-d')
									);	
			
							
			
			$executed = $this->careers->update_data($aboutid,$array_insert);
			if($executed)
			{
				$this->session->set_flashdata('success', 'careers page details updated successfully');
				redirect('/backend/careers/');
			}
			else
			{
				$this->session->set_flashdata('fail', 'careers page details updated unsuccessfully');
				redirect('/backend/careers/');
			}
			
			
			 
		 }
		  $this->load->view('admin/careers/edit_careers',$this->data);
		 
		 
	 }
	 //////////////////edit////////////////////////////////////////
	 
	 
	 
	 
	
	 
}
?>