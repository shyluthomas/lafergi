<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public $data;
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->helper(array('url','form'));
		 $this->load->library('form_validation');
		 $this->load->library('session');
		 //twitter
		 	 $this->load->model('what_we_offer_model','what_we_offer');
         	 $this->load->model('who_we_are_model','who_we_are');
         	 $this->load->model('vision_mission_model','vision_mission');
         
		 
		//-----------------general detail----------------------	
		
		$this->data['page']='Abot';
		$this->data['pagetitle']='About';
		$this->data['pagedesc']='DEscriprion';
		
		//-------general detail-------------------------	 
	 }
	 
	public function index()
	{
		
        $this->data['what_we_offer']=$this->what_we_offer->limit(1,0)->get_all()[0];
         $this->data['who_we_are']=$this->who_we_are->limit(1,0)->get_all()[0];
         $this->data['vision_mission']=$this->vision_mission->limit(1,0)->get_all()[0];
		
		$this->load->view('about/about_view',$this->data);
		
		// $this->load->view('include/footer',$this->data);
	}
	
	public function email_subscription()
	{
		$sub_user_email = $_GET['email'];
		
		$status = array();
		
		if($sub_user_email!="")
		{
			$status = array(
							"STATUS"=>$sub_user_but,
							"msg" => "Your Request Has been Proceeded Shorlty ..."
						);
		}
		
		print_r($status); 
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


?>