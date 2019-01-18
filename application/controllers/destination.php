<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Destination extends CI_Controller {

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
		
	
	 $this->load->model('destination_model','destination');
	 $this->load->model('packages_model','packages'); 
	  $this->load->model('hoteldirectory_model','hotels'); 
		 
		//-----------------general detail----------------------	
		
		$this->data['page']='Abot';
		$this->data['pagetitle']='About';
		$this->data['pagedesc']='DEscriprion';
		
		//-------general detail-------------------------	 
	 }
	 
	public function index()
	{
		//$this->output->cache(30);
		
		$tweets = $this->twitterfetcher->getTweets(array(
		'consumerKey'		=> '4dL4fuUUQL2ByyZf7ABcnUwHy',
		'consumerSecret'	=> 'nCZdusCkHl4OHm3sJfmMBR93XPiqSZRxsVTVkWADH82QEaXbzH',
		'accessToken'		=> '2458523185-ozw4SCXT0mFtrneBjMf3ObhAhDBvzzFgwG2xRd1',
		'accessTokenSecret'	=> 'd640mUskhRQwIKxMbBJVzsN8uefaJ2uZPV3oVKuwPp5RB',
		'usecache' 			=> true,
		'count' 			=> 0,
		'numdays' 			=> 30
	));
	$twitterFeed = array();
	$tweetsFooter = array();
	$tweetsData = array();
	$i= 0;
	foreach($tweets as $twet):
	$twitterFeed[$i] = $twet->text;
	$tweetsData[$i] = $twet;
	$i++;
	endforeach;
	$this->data['twitterFeed'] = $twitterFeed;
	$this->data['tweetsData'] = $tweetsData;
		
		// data home package
		//$this->data['package']=$this->package->limit(8,0)->get_all();
		
		// data home destination
		$this->data['destination']=$this->destination->get_all();
			
		// data home packges
		$this->data['packages']=$this->packages->limit(4,0)->get_all();
		
		$this->data['hotels']=$this->hotels->limit(4,0)->get_all();
		
		$this->load->view('destination/destination_view',$this->data);
		
		 $this->load->view('include/footer',$this->data);
	}
	
	public function destinationMore($id)
	{
		
		$tweets = $this->twitterfetcher->getTweets(array(
			'consumerKey'		=> '4dL4fuUUQL2ByyZf7ABcnUwHy',
			'consumerSecret'	=> 'nCZdusCkHl4OHm3sJfmMBR93XPiqSZRxsVTVkWADH82QEaXbzH',
			'accessToken'		=> '2458523185-ozw4SCXT0mFtrneBjMf3ObhAhDBvzzFgwG2xRd1',
			'accessTokenSecret'	=> 'd640mUskhRQwIKxMbBJVzsN8uefaJ2uZPV3oVKuwPp5RB',
			'usecache' 			=> true,
			'count' 			=> 0,
			'numdays' 			=> 30
		));
		$twitterFeed = array();
		$tweetsFooter = array();
		$tweetsData = array();
		$i= 0;
		foreach($tweets as $twet):
		$twitterFeed[$i] = $twet->text;
		$tweetsData[$i] = $twet;
		$i++;
		endforeach;
		$this->data['twitterFeed'] = $twitterFeed;
		$this->data['tweetsData'] = $tweetsData;
			
		// data home package
		//$this->data['package']=$this->package->limit(8,0)->get_all();
		
		// data home destination
		$this->data['destination']=$this->destination->limit(4,0)->get_all();
		$this->data['destinationMore']=$this->destination->get_row_detail($id);
			
		//$this->data['aboutData'] = $this->about->get_all();
		
		
		$this->load->view('destination/destination_more_view',$this->data);
		
		 $this->load->view('include/footer',$this->data);
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