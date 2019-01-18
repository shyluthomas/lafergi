<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Destination extends CI_Controller {


	 
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('destination_model','destination');
		 $this->load->helper(array('url','form'));
		 $this->load->library('session');
		 $this->load->library('form_validation');
		 $this->load->library('pagination');
		 $this->load->library('upload');
		 $this->load->library('image_lib');
		 if(!$this->session->userdata('SESS_ADMIN')) 
		 redirect("admin/login");
		 $this->data['page'] = 'Destination';
		 
	 }
	 
	 
	 //////////////////////////////////////////////////////Testimonial index/////////////////////////////////////////////////////////////////
	  public function index($test_id=NULL)
	 {
		
			
			 	//take id for update data							
				$arr_data_old=$this->destination->get_all();
				$id=$arr_data_old[0]['id'];
				
			 
			$array_form = $_POST;			
			$array_insert= array(
									'title' => addslashes($array_form['title']),
									'content' => addslashes($array_form['about']),
									'createtime' => date('Y-m-d H:i:s',time())
			);	
			
			
		
		 
		 $this->data['arr_view']=$this->destination->get_all();		 
		 
		 $this->load->view('admin/destination/manage_destination',$this->data);
	 }
	 
	 public function add($test_id=NULL)
	 {
		
		  
		 
		 if($this->input->post('save'))
		 {
			
			 	//take id for update data							
				//$arr_data_old=$this->aboutus->get_all();
				//$id=$arr_data_old[0]['id'];
				
			 
			$array_form = $_POST;			
			
			
							if($_FILES['aboutusimg']['name']!='')
								{
									$string=uniqid();
								   //upload thumbnail
									$config['upload_path'] = './images/activities';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['aboutusimg']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('aboutusimg'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/activities/edit_activities', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();
										
												
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './images/activities/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './images/activities/thump/'.$upload_data['file_name'];
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
			$array_insert= array(
									'title' => addslashes($array_form['title']),
									'subtitle' => addslashes($array_form['subtitle']),
									'nametitle' => addslashes($array_form['nametitle']),
									'content' => addslashes($array_form['about']),
									'image' => $aboutusimg,
									'createtime' => date('Y-m-d H:i:s',time())
									);	
			
			
			$insert=$this->activities->insert_data($array_insert);
			
			
		 }
		 
		 //$this->data['arr_view']=$this->aboutus->get_all();		 
		 
		 $this->load->view('admin/activities/add_activities',$this->data);
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
		 	 
		 $this->activities->delete($test_id);
		 redirect('backend/activities');
	 }
	 ///////////////////delete////////////////////////////////////
	 
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
		 $this->data['arr_view']=$this->activities->get_row_detail($aboutid);
		
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
									$config['upload_path'] = './images/activities';
									$config['allowed_types'] = 'gif|jpg|png';
									/*$config['max_size']    = '1024';*/
									$config['file_name']    = $string.$_FILES['aboutusimg']['name'];
									$this->upload->initialize($config);
									
									if ( ! $this->upload->do_upload('aboutusimg'))
									{
										$data['alert'] = $this->upload->display_errors();                        
										$this->load->view('admin/aboutus/edit_activities', $data);
									}    
									else
									{
										$upload_data = $this->upload->data();	
										
																
						// unable to create this this thumbnail
							$config['image_library'] = 'gd2';
							$config['source_image'] = './images/activities/'.$upload_data['file_name'];
							$config['create_thumb'] = FALSE;
							$config['maintain_ratio'] = false;
							$config['width']     = 270;
							$config['height']   = 358;
							$config['new_image'] =  './images/activities/thump/'.$upload_data['file_name'];
							//$this->load->library('image_lib', $config);  // this line cause problem
							$this->image_lib->initialize($config); // with this problem resolved
							if ( ! $this->image_lib->resize()){echo $this->image_lib->display_errors();}
						
						
							$this->image_lib->clear();
																			
										$aboutusimg = $upload_data['file_name'];
										@unlink(base_url().'/images/activities/'.$data_r['image']);
										
									}
								}
								else
								{
									$aboutusimg=$arr_form['imageid1'];
								}
								
							/////////////////////////////////////// 
						
			 ///////////////////////file uploads////////////////////////////
			 
			 
			 $arr_data=array(	'title'=>addslashes($arr_form['title']),	
								 'subtitle'=>addslashes($arr_form['subtitle']),
								 'nametitle'=>addslashes($arr_form['nametitle']),						
								'content'=>addslashes($arr_form['about']),
								'image'=>$aboutusimg,						
								'createtime'=>date('Y-m-d H:i:s',time())
							);
							
			
			$executed = $this->activities->update_data($aboutid,$arr_data);
			if($executed)
			{
				$this->session->set_flashdata('success', 'activities page details updated successfully');
				redirect('/backend/activities/');
			}
			else
			{
				$this->session->set_flashdata('fail', 'activities page details updated unsuccessfully');
				redirect('/backend/activities/');
			}
			
			
			 
		 }
		  $this->load->view('admin/activities/edit_activities',$this->data);
		 
		 
	 }
	 //////////////////edit////////////////////////////////////////
	 
	 
	 
	 
	
	 
}
?>