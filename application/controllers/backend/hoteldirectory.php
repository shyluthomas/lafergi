<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Hoteldirectory extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('hoteldirectory_model','hoteldirectory');
		 $this->load->helper(array('url','form'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('pagination');
		 $this->load->library('upload');
		 	 $this->load->library('image_lib');
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 $this->data['page'] = 'hoteldirectory';
		 
	 }
	 
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	  public function index($test_id=NULL)
	 {
		
			
			 	
		
		 
		 $this->data['arr_view']=$this->hoteldirectory->get_all();		 
		 
		 $this->load->view('admin/hoteldirectory/manage_hoteldirectory',$this->data);
	 }
	 
	 public function add($test_id=NULL)
	 {
		
		 
		 if($this->input->post('save'))
		 {
			
			 
			$array_form = $_POST;			
			
			
							if($_FILES['aboutusimg']['name']!='')
								{
									$string=uniqid();
								   //upload thumbnail
									$config['upload_path'] = './assets/backend/images/hoteldirectory';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['aboutusimg']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('aboutusimg'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/hoteldirectory/add_hoteldirectory', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/hoteldirectory/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './assets/backend/images/hoteldirectory/thump/'.$upload_data['file_name'];
							//$this->load->library('image_lib', $config);  // this line cause problem
							$this->image_lib->initialize($config); // with this problem resolved
							if ( ! $this->image_lib->resize()){
								}
						
						
							$this->image_lib->clear();
										
										
										$aboutusimg = $upload_data['file_name'];
										/*$width = $upload_data['image_width'];
										$height = $upload_data['image_height'];*/
										
									}
								}
								else
								{
									$aboutusimg='';
								}
			$array_insert= array('title' => addslashes($array_form['title']),																
									'image' => $aboutusimg,
									'createtime' => date('Y-m-d H:i:s',time())									
									);
			
			$insert=$this->hoteldirectory->insert_data($array_insert);
			
			
		 }
		 
		 //$this->data['arr_view']=$this->aboutus->get_all();		 
		 
		 $this->load->view('admin/hoteldirectory/add_hoteldirectory',$this->data);
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
		 	  $d=$this->hoteldirectory->get_row_detail($test_id);
			  @unlink('./assets/backend/images/hoteldirectory/thump/'.$d['image']);
			    @unlink('./assets/backend/images/hoteldirectory/'.$d['image']);
		 $this->hoteldirectory->delete($test_id);
		 redirect('backend/hoteldirectory');
	 }
	 ///////////////////delete////////////////////////////////////
	 
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	
	 
	 
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	  
	 
	  //////////////////edit////////////////////////////////////////
	 public function edit($aboutid)
	 {
		 $this->data['arr_view']=$this->hoteldirectory->get_row_detail($aboutid);
		
		 $data_r= $this->data['arr_view'];
		 if($this->input->post('save'))
		 {
			 //print_r("hai....");
			 
			 $arr_form=$_POST;
			 $arr_form_file=$_FILES;
			 //var_dump($arr_form_file);
			 
			 
			 ////////////////////////file uploads////////////////////////////
			 
			 				/////////////////////////////////////// 
							 
							 
								if($_FILES['aboutusimg']['name']!='')
								{
									$string=uniqid();
								   //upload thumbnail
									$config['upload_path'] = './assets/backend/images/hoteldirectory';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['aboutusimg']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('aboutusimg'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/hoteldirectory/add_hoteldirectory', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/hoteldirectory/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './assets/backend/images/hoteldirectory/thump/'.$upload_data['file_name'];
							//$this->load->library('image_lib', $config);  // this line cause problem
							$this->image_lib->initialize($config); // with this problem resolved
							if ( ! $this->image_lib->resize()){echo $this->image_lib->display_errors();}
						
						
							$this->image_lib->clear();
										
										
										$aboutusimg = $upload_data['file_name'];
										/*$width = $upload_data['image_width'];
										$height = $upload_data['image_height'];*/
										
									}
								}
								else
								{
									$aboutusimg='';
								}
								
							/////////////////////////////////////// 
						
			 ///////////////////////file uploads////////////////////////////
			 
			 
			 $arr_data=array(	'title'=>addslashes($arr_form['title']),								
								'image'=>$aboutusimg,
								'createtime' => date('Y-m-d H:i:s',time())							
							);
							
			
			$executed = $this->hoteldirectory->update_data($aboutid,$arr_data);
			if($executed)
			{
				$this->session->set_flashdata('success', 'hoteldirectory page details updated successfully');
				redirect('/backend/hoteldirectory/');
			}
			else
			{
				$this->session->set_flashdata('fail', 'hoteldirectory page details updated unsuccessfully');
				redirect('/backend/hoteldirectory/');
			}
			
			
			 
		 }
		  $this->load->view('admin/hoteldirectory/edit_hoteldirectory',$this->data);
		 
		 
	 }
	 //////////////////edit////////////////////////////////////////
	 
	 
	 
	 
	
	 
}
?>