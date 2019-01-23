<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Health_saftey extends CI_Controller {

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
		 $this->load->model('health_saftey_model','health_saftey');
		 
		//-----------------general detail----------------------	
		
		$this->data['page']='health saftey';
		$this->data['pagetitle']='health saftey';
		$this->data['pagedesc']='health saftey';
		
		//-------general detail-------------------------	 
	 }
	 
	public function index()
	{
		$arr_where_Health = array('catagory' => 'Health');
		$this->data['Health']=$this->health_saftey->get_row_where($arr_where_Health);
        
        $arr_where_Safty = array('catagory' => 'Safty');
		$this->data['Safty']=$this->health_saftey->get_row_where($arr_where_Safty);
        
         $arr_where_Road = array('catagory' => 'Road');
		$this->data['Road']=$this->health_saftey->get_row_where($arr_where_Road);
        
         $arr_where_Environment = array('catagory' => 'Environment');
		$this->data['Environment']=$this->health_saftey->get_row_where($arr_where_Environment);
        
         $arr_where_Welfare = array('catagory' => 'Welfare');
		$this->data['Welfare']=$this->health_saftey->get_row_where($arr_where_Welfare);
        
         $arr_where_Policy = array('catagory' => 'Policy');
		$this->data['Policy']=$this->health_saftey->get_row_where($arr_where_Policy);
        
       //var_dump($this->data);
		
		
		$this->load->view('health_saftey/health_saftey_view',$this->data);
		
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