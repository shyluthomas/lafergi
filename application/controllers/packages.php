<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Packages extends CI_Controller {

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
	  $this->load->model('packagemore_model','packagesMore');
	  $this->load->model('hoteldirectory_model','hotels'); 
		 
		//-----------------general detail----------------------	
		
		$this->data['page']='packages';
		$this->data['pagetitle']='packages.';
		$this->data['pagedesc']='packages';
		
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
		$this->data['destination']=$this->destination->limit(4,0)->get_all();
			
		// data home packges
		$this->data['packages']=$this->packages->get_all();
		
		$this->data['hotels']=$this->hotels->limit(4,0)->get_all();
		
		$this->load->view('packages/packages_view',$this->data);
		
		 $this->load->view('include/footer',$this->data);
	}
	
	public function package_search($catagaory_type)
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
		$this->data['destination']=$this->destination->limit(4,0)->get_all();
			
		// data home packges
		$this->data['packages']=$this->packages->get_all_search($catagaory_type);
		
		$this->data['hotels']=$this->hotels->limit(4,0)->get_all();
		
		$this->load->view('packages/packages_view',$this->data);
		
		 $this->load->view('include/footer',$this->data);
		
	}
	
	public function packagesMore($id,$sent=NULL)
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
		$arr_where = array('package_id' => $id);
		$this->data['packagesMoreData']=$this->packagesMore->get_row_where($arr_where);
		$this->data['packagesData']=$this->packages->get_row_detail($id);
			
		//$this->data['aboutData'] = $this->about->get_all();
		if($sent!=NULL){
			$this->data['packagesMoreData'] = 'sent';
		}
		
		$this->load->view('packages/packagesMore_view',$this->data);
		
		 $this->load->view('include/footer',$this->data);
	}	
		
	public function search($keyword = NULL)
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
		$this->data['destination']=$this->destination->limit(4,0)->get_all();
			
		// data home packges
		$arr_where = array('catagory' => $keyword);
		$this->data['packages']=$this->packages->get_all($arr_where);
		$this->data['keyword'] = $keyword;
		$this->data['hotels']=$this->hotels->limit(4,0)->get_all();
		
		$this->load->view('packages/packages_view_search',$this->data);
		
		
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
	
	public function book_online($package_id)
	{
		
		if($this->input->post('submit')){
			$arr_form = $_POST;
			$to = 'vacanzajmondiale@gmail.com';
			//$to = 'shylu.glad@gmail.com';
		//	$to = 'shylu.glad@gmail.com';

			$subject = 'Book online From vacanzamondiale';
			
			$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
			$headers .= "CC: shylu.glad@gmail.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";	
			
			
			$message = '<html><body>';
			$message .= '<h1>Book request Request </h1>';
			$message .= '</body></html>';
			
			$message = '<html><body>';
			$message .= '<img src="http://vacanzamondiale.com/assets/frontend/img/logo.png" alt="Contact Request" />';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr><td><strong>Title:</strong> </td><td>" . strip_tags($arr_form['title']) . "</td></tr>";
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($arr_form['name']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($arr_form['email']) . "</td></tr>";
			$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($arr_form['phone']) . "</td></tr>";
			$message .= "<tr><td><strong>Address:</strong> </td><td>" . strip_tags($arr_form['address']) . "</td></tr>";
			$message .= "<tr><td><strong>country:</strong> </td><td>" . strip_tags($arr_form['ecountry']) . "</td></tr>";
			$message .= "<tr><td><strong>Arrival date:</strong> </td><td>" . strip_tags($arr_form['arrival_Date']) . "</td></tr>";
			$message .= "<tr><td><strong>Departure Date:</strong> </td><td>" . strip_tags($arr_form['departure_Date']) . "</td></tr>";
			$message .= "<tr><td><strong>Number Of Adults:</strong> </td><td>" . strip_tags($arr_form['no_adults']) . "</td></tr>";
			$message .= "<tr><td><strong>Number of children:</strong> </td><td>" . strip_tags($arr_form['no_child']) . "</td></tr>";
			$message .= "<tr><td><strong>Number of children:</strong> </td><td>" . strip_tags($arr_form['no_child']) . "</td></tr>";
			$message .= "<tr><td><strong>Number of children:</strong> </td><td>" . strip_tags($arr_form['no_child']) . "</td></tr>";
			$message .= "<tr><td><strong>Travel plan:</strong> </td><td>" . strip_tags($arr_form['travel_plan']) . "</td></tr>";
			$message .= "<tr><td><strong>Package Id:</strong> </td><td>" . $package_id . "</td></tr>";
					
			$message .= "</table>";
			$message .= "</body></html>";
			
			$sent = @mail($to ,$subject ,$message ,$headers);
			$this->data['sent'] = $sent;
			
			redirect('packages/packagesMore/'.$package_id);
			
		} //post ends herer
		
		
	} //fn ends herer
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


?>