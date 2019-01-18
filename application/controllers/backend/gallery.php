<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Gallery extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('gallery_model','gallery');
		 $this->load->helper(array('url','form'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('pagination');
		 $this->load->library('upload');
		 	 $this->load->library('image_lib');
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 $this->data['page'] = 'gallery';
		 
	 }
	 
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	  public function index($test_id=NULL)
	 {
		
			
			 	//take id for update data							
				$arr_data_old=$this->gallery->get_all();
				$id=$arr_data_old[0]['id'];
				
			 
			$array_form = $_POST;			
			$array_insert= array(
									'title' => addslashes($array_form['title']),
									'content' => addslashes($array_form['about']),
									'createtime' => date('Y-m-d H:i:s',time())
			);	
			
			
		
		 
		 $this->data['arr_view']=$this->gallery->get_all();		 
		 
		 $this->load->view('admin/gallery/manage_gallery',$this->data);
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
									$config['upload_path'] = './assets/backend/images/gallery';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['aboutusimg']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('aboutusimg'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/gallery/add_gallery', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/gallery/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './assets/backend/images/gallery/thump/'.$upload_data['file_name'];
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
			
			$insert=$this->gallery->insert_data($array_insert);
			
			
		 }
		 
		 //$this->data['arr_view']=$this->aboutus->get_all();		 
		 
		 $this->load->view('admin/gallery/add_gallery',$this->data);
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
		 	  $d=$this->gallery->get_row_detail($test_id);
			  @unlink('./assets/backend/images/gallery/thump/'.$d['image']);
			    @unlink('./assets/backend/images/gallery/'.$d['image']);
		 $this->gallery->delete($test_id);
		 redirect('backend/gallery');
	 }
	 ///////////////////delete////////////////////////////////////
	 
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	
	 
	 
	 //////////////////////////////////////view///////////////////////////////
	 
	 
	  
	 
	  //////////////////edit////////////////////////////////////////
	 public function edit($aboutid)
	 {
		 $this->data['arr_view']=$this->gallery->get_row_detail($aboutid);
		
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
									$config['upload_path'] = './assets/backend/images/gallery';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['aboutusimg']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('aboutusimg'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/gallery/add_gallery', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './assets/backend/images/gallery/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './assets/backend/images/gallery/thump/'.$upload_data['file_name'];
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
							
			
			$executed = $this->gallery->update_data($aboutid,$arr_data);
			if($executed)
			{
				$this->session->set_flashdata('success', 'gallery page details updated successfully');
				redirect('/backend/gallery/');
			}
			else
			{
				$this->session->set_flashdata('fail', 'gallery page details updated unsuccessfully');
				redirect('/backend/gallery/');
			}
			
			
			 
		 }
		  $this->load->view('admin/gallery/edit_gallery',$this->data);
		 
		 
	 }
	 //////////////////edit////////////////////////////////////////
	 
	 
	 
	 
	
	 
}
?>