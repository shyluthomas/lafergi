<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		  $this->load->library('twitterfetcher');
		
	// $this->load->model('packages_model','package');
	// $this->load->model('destination_model','destination');
	 // $this->load->model('packagecatagory_model','catagory');
		 
		//-----------------general detail----------------------	
		
		$this->data['page']='home';
		$this->data['pagetitle']='Home';
		$this->data['pagedesc']='DEscriprion';
		
		//-------general detail-------------------------	 
	 }
	 
	public function index()
	{
		
		
		// data home package
		//$this->data['package']=$this->package->limit(8,0)->get_all();
		
		// data home destination
		//$this->data['destination']=$this->destination->limit(8,0)->get_all();
			
			//get all catagory
			
		//$this->data['pack_catagory']=$this->catagory->limit(4,0)->get_all();
		
		
		$this->load->view('home/home_view',$this->data);
		
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