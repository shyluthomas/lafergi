<?php
class News_subscriber_model extends MY_Model
{
	public $_table 		= 'tbl_news_subscribers';
	public $primary_key = 'sub_id';
	
	function __construct() 
	{
		parent::__construct();
		
	}
	
	function get_all($arr_where=NULL)
	{
		if($arr_where==NULL)
		{
			 $arr_result = $this->db -> order_by($this->primary_key, 'desc')
						 			-> get($this->_table)
						 			-> result_array();
						 
		}
		else
		{
		 
		 $arr_result = $this->db -> where($arr_where)
		 						 -> order_by($this->primary_key, 'desc')
		 					 	 -> get($this->_table)
								 -> result_array();
								 //echo $this->db->last_query();
		}
								 								 
	  	return $arr_result;
	}
	
	
	function get_all_recent_member($arr_where=NULL)
	{
		if($arr_where==NULL)
		{
			 $arr_result = $this->db -> order_by('user_updateddate', 'desc')
						 			-> get($this->_table)
						 			-> result_array();
						 
		}
		else
		{
		 
		 $arr_result = $this->db -> where($arr_where)
		 						 -> order_by('user_updateddate', 'desc')
		 					 	 -> get($this->_table)
								 -> result_array();
								 //echo $this->db->last_query();
		}
								 								 
	  	return $arr_result;
	}
	
	function get_row($id)
	{
		
		$arr_result = $this->db -> where($this->primary_key, $id)
						   		-> get($this->_table)
						   		-> result_array();

	  if(is_array($arr_result) && count($arr_result) > 0)
	  	return $arr_result[0];
	}
	
	function insert_data($arr_data=NULL)
	{

		$success	= $this->insert($arr_data, true);
		//echo $this->db->last_query();
		if($success)	   
		 return $this->db->insert_id();
		else
		 return FALSE;  
		
	}
	
	function update_data($id, $arr_data=NULL)
	{

		$success	= $this ->update($id, $arr_data);
		//echo $this->db->last_query();						  
		if($success)	   
		 return TRUE;
		else
		 return FALSE;  
		
	}
	

	
	public function check_user($arr_where)
	{
		
		    $result = $this->db->where($arr_where)
								->get($this->_table)
								->row();
								
								
								
								if($result)
								{
									//echo $this->last_query();
									
									return 1;
								}
								else
								{
									$this->insert($arr_where, true);
									return 0;
								}
								
							
	}
	
	function insert_data_sec($arr_data=NULL)
	{

		$success	= $this->insert($arr_data, true);
		/*if($success)	   
		 return $this->db->insert_id();
		else
		 return FALSE; */ 
		 
		 if($success)	   
		 	return TRUE;
		 else
		 	return FALSE;
		
	}
	

	
	
	
	




}

?>