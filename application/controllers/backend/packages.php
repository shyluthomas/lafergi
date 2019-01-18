<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Packages extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('packages_model','packages');
		 $this->load->model('packagemore_model','packagesMore');
		  $this->load->model('packagecatagory_model','catagory');
		 
		 $this->load->helper(array('url','form'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('pagination');
		 $this->load->library('upload');
		 $this->load->library('image_lib');
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 $this->data['page'] = 'packages';
		 
	 }
	 
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	  public function index($test_id=NULL)
	 {
		
			
			 	//take id for update data							
				$arr_data_old=$this->packages->get_all();
				$id=$arr_data_old[0]['id'];
				
			 
			$array_form = $_POST;			
			$array_insert= array(
									'title' => addslashes($array_form['title']),
									'content' => addslashes($array_form['about']),
									'createtime' => date('Y-m-d H:i:s',time())
			);	
			
			
		
		 
		 $this->data['arr_view']=$this->packages->get_all();		 
		 
		 $this->load->view('admin/packages/manage_packages',$this->data);
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
									$config['upload_path'] = './assets/backend/images/packages';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['image']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('image'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/packages/add_packages', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/packages/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 1170;
							$config['height']   = 321;
							$config['new_image'] =  './assets/backend/images/packages/thump/'.$upload_data['file_name'];
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
								$titl =str_replace("'","",$titl); 
			$array_insert= array(	'title' => addslashes($array_form['title']),
									'catagory' => addslashes($array_form['catagory']),
									'catagory_type' => addslashes($array_form['catagory_type']),
									'order' => addslashes($array_form['order']),
									'prize' => addslashes($array_form['prize']),
									'hotel' => addslashes($array_form['hotel']),
									'airticket' => addslashes($array_form['airticket']),
									'breakfast' => addslashes($array_form['breakfast']),
									'content' => addslashes($cont),
									'packageDetails' => addslashes($array_form['packageDetails']),
									'additional_info' => addslashes($array_form['additional_info']),
									'inclusion_exclusion' => addslashes($array_form['inclusion_exclusion']),
									'highlights' => addslashes($array_form['highlights']),
									'image' => $image,
									'createtime' => date('Y-F-d')
									);	
			
			
			$insert=$this->packages->insert_data($array_insert);
			
			
		 }
		 
		 $this->data['package_cat']=$this->catagory->get_all();		 
		 
		 $this->load->view('admin/packages/add_packages',$this->data);
	 }
	 
	 
	 
	  public function addPackageDetail($package_id, $id=NULL)
	 {
		//var_dump(base_url().'assets/');
		  
		 
		 if($this->input->post('save'))
		 {
			$array_form = $_POST;			
			
			
							if($_FILES['image']['name']!='')
								{
									$string=uniqid();
								   //upload thumbnail
									$config['upload_path'] = './assets/backend/images/packages';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['image']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('image'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/packages/add_packages', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/packages/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './assets/backend/images/packages/thump/'.$upload_data['file_name'];
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
								
			$array_insert= array(	'title' => addslashes($array_form['title']),
									'content' => str_replace("'", "", $array_form['content']),
									'package_id' => $package_id,
									'image'	=> $image							
									);	
			
			if($id){
				$insert=$this->packagesMore->update_data($id, $array_insert);
				redirect('backend/packages/addPackageDetail/'.$package_id);
			}
			else
			{
				$insert=$this->packagesMore->insert_data($array_insert);
			}
			
			
			
			
		 }
		 $arr_wher = array('package_id' => $package_id);
		 $this->data['package_all']=$this->packagesMore->get_all($arr_wher);	
		 
		 if($id){
				 $this->data['packageDetail']=$this->packagesMore->get_row_detail($id);
			}	 
		 
		 $this->load->view('admin/packages/add_packagesMore',$this->data);
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
		 	 
		 $this->packages->delete($test_id);
		 redirect('backend/packages');
	 }
	 ///////////////////delete////////////////////////////////////
	 
	  public function deleteDetail($test_id,$pack_id)
	 {
		 	 
		 $this->packagesMore->delete($test_id);
		 redirect('backend/packages/addPackageDetail/'.$pack_id);
	 }
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	 public function view($aboutid)
	 {
		 $this->data['arr_view']=$this->aboutus->get_row_withuser($aboutid);
		 
		 //var_dump($this->data['arr_view']); //exit();
		 //var_dump($_POST);
		 //var_dump($_FILES);
		 //print_r($this->session->userdata);
		 $this->data['ss']=$this->session->userdata('SESS_ADMIN_ID');
		  
		 $this->load->view('admin/aboutus/view_aboutus',$this->data);
		 
		 
	 }
	 
	 
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	  
	 
	  //////////////////edit////////////////////////////////////////
	 public function edit($aboutid)
	 {
		 $this->data['arr_view']=$this->packages->get_row_detail($aboutid);
		  $this->data['catagory']=$this->catagory->get_all();
		//var_dump( $this->data['catagory']);exit();
		
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
									$config['upload_path'] = './assets/backend/images/packages';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['image']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('image'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/packages/add_packages', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/packages/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 1170;
							$config['height']   = 321;
							$config['new_image'] =  './assets/backend/images/packages/thump/'.$upload_data['file_name'];
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
								
			$array_insert= array(	'title' => addslashes($array_form['title']),
									'catagory' => addslashes($array_form['catagory']),
									'catagory_type' => addslashes($array_form['catagory_type']),
									'order' => addslashes($array_form['order']),
									'prize' => addslashes($array_form['prize']),
									'hotel' => addslashes($array_form['hotel']),
									'airticket' => addslashes($array_form['airticket']),
									'breakfast' => addslashes($array_form['breakfast']),
									'content' => str_replace("'", "", $array_form['content']),
									'packageDetails' => addslashes($array_form['packageDetails']),
									'additional_info' => addslashes($array_form['additional_info']),
									'inclusion_exclusion' => addslashes($array_form['inclusion_exclusion']),
									'highlights' => addslashes($array_form['highlights']),
									'image' => $image,
									'createtime' => date('Y-F-d')
									);	
			
							
			
			$executed = $this->packages->update_data($aboutid,$array_insert);
			if($executed)
			{
				$this->session->set_flashdata('success', 'packages page details updated successfully');
				redirect('/backend/packages/');
			}
			else
			{
				$this->session->set_flashdata('fail', 'packages page details updated unsuccessfully');
				redirect('/backend/packages/');
			}
			
			
			 
		 }//var_dump( $this->data['catagory']);exit();
		  $this->load->view('admin/packages/edit_packages',$this->data);
		 
		 
	 }
	 //////////////////edit////////////////////////////////////////
	 
	 
	 
	 
	
	 
}
?>