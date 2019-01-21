<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		  
		 
		//-----------------general detail----------------------	
		
		$this->data['page']='Contact';
		$this->data['pagetitle']='Contact';
		$this->data['pagedesc']='Contact';
		
		//-------general detail-------------------------	 
	 }
	 
	public function index()
	{
		//$this->output->cache(30);
		
		
		if($this->input->post('submit')){
			$arr_form = $_POST;
			//$to = 'vacanzajmondiale@gmail.com';
			$to = 'RMQ.SALES@LAFARGEHOLCIM.COM';

			$subject = 'contact From LAFARGEHOLCIM';
			
			$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
			$headers .= "CC: 99shylu@gmail.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";	
			
			
			$message = '<html><body>';
			$message .= '<h1>Contact Request </h1>';
			$message .= '</body></html>';
			$srcimg = base_url().'/assets/frontend/img/logo.png';
			$message = '<html><body>';
			$message .= "<img src='".base_url()."'/assets/frontend/img/logo.png' alt='Contact Request' />";
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($arr_form['name']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($arr_form['email']) . "</td></tr>";
			$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($arr_form['phone']) . "</td></tr>";
			$message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($arr_form['message']) . "</td></tr>";
					
			$message .= "</table>";
			$message .= "</body></html>";
			
			$sent = @mail($to ,$subject ,$message ,$headers);
			$this->data['sent'] = $sent;
			
		}
		
		
		
		
				
		
		$this->load->view('contact/contact_view',$this->data);
		
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