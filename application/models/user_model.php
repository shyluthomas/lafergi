<?php
class User_model extends MY_Model
{
	public $_table 		= 'tbl_user';
	public $primary_key = 'user_id';
	
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
								// echo $this->db->last_query(); exit();
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
	
	function update_data_confirm($id, $arr_data=NULL)
	{
		$arr_where=array('user_unid'=>$id);
		$success	= $this ->db->where($arr_where)
								->update('tbl_user',$arr_data);
		//echo $this->db->last_query();						  
		if($success)	   
		 return TRUE;
		else
		 return FALSE;  
		
	}
	function update_user_status($id, $arr_data=NULL)
	{
		$arr_where=array('user_unid' => $id);
		$success	= $this ->db->where($arr_where)
								->update('tbl_user',$arr_data);
		//echo $this->db->last_query();						  
		if($success)	   
		 return TRUE;
		else
		 return FALSE;  
		
	}
	
	function count_all($arr_where=NULL)
	{
		if($arr_where==NULL)
		{
			$arr_result = $this->db->count_all_results($this->_table);
						 
		}
		else
		{
			
			$arr_result = $this->db-> where($arr_where)
								   -> count_all_results($this->_table);
		}
								 								 
	  	return $arr_result;
	}
	
	function search_like($search)
	{
		if($search != '' && $search != 'Search') {
			$this->db ->or_like('user_fname',$search);
			$this->db ->or_like('user_lname',$search);
			$this->db ->or_like('user_email',$search);
		}
		return $this;
	}
	
	function get_verify($arr_where)
	{
		
		
				 
		 $arr_result = $this->db -> where($arr_where)
		 						 -> order_by($this->primary_key, 'desc')
		 					 	 -> get($this->_table)
								 -> row();
								 
								 //echo $this->db->last_query();
		
								 								 
	  	return $arr_result;
	}
	
		
	public function signup($array_insert)
	{
	
			
			$success=$this->db->insert($this->_table,$array_insert);
			if($success)
			  return $this->db->insert_id();
			  else
			  return FALSE;
			
			
	}
	public function signin($arr_data)
	{
		    $result = $this->db->where($arr_data)
								->get($this->_table)
								->row();
								
								if($result)
								{
									return $result;
								}
								else
								{
									return false;
								}
								
				
			
	
	}
	
	public function check_user($arr_where)
	{
		
		    $result = $this->db->where($arr_where)
								->get($this->_table)
								->row();
								
								if($result)
								{
									return 1;
								}
								else
								{									
									return 0;
								}
								
							
	}
	
	
	

	
	public function validate_user($arr_where)
	{
			  $result = $this->db->where($arr_where)
								->get($this->_table)
								->row();
								//var_dump($result);exit();
								//echo $this->db->last_query();
								
								if($result)
								{
									return 1;
								}
								else
								{
									
									return 0;
								}
		
	}
	
	public function forgot_validate($arr_where)
	{
			  $result = $this->db->where($arr_where)
								->get($this->_table)
								->row();
								//var_dump($result);
								
								if($result)
								{
									return $result;
								}
								else
								{
									
									return 0;
								}
		
	}
	
	public function insert_quote($array_insert)
	{			
			
			$success=$this->db->insert('tbl_get_quote',$array_insert);
			if($success)
			  return TRUE;
			  else
			  return FALSE;
			
			
	}
	
	function get_city_from_map()
	{		
		$arr_city = $this->db -> select('distinct(l_city)')
								-> get('tbl_map')
						   		-> result_array();
								
								//echo $this->db->last_query();	

	  if(is_array($arr_city) && count($arr_city) > 0)
	  	return $arr_city;
	}
	
	function get_user_with_city($arr_where)
	{		
		$arr_city = $this->db -> where($arr_where)
								-> get('tbl_user')
						   		-> result_array();
								
								//echo $this->db->last_query();	

	  if(is_array($arr_city) && count($arr_city) > 0)
	  	return count($arr_city);
	}
	function get_userdetails_with_city($arr_where)
	{		
		$arr_city = $this->db -> where($arr_where)
								-> get('tbl_user')
						   		-> result_array();
								
								//echo $this->db->last_query();	

	  if(is_array($arr_city) && count($arr_city) > 0)
	  	return $arr_city;
	}
	function non_registerd_user()
	{		
		$arr_user = $this->db -> where(array('status' =>'A'))
								->get('tbl_news_subscribers')
						   		-> result_array();
								
								//echo $this->db->last_query();	

	  if(is_array($arr_user) && count($arr_user) > 0)
	  	return $arr_user;
	}
	function unsubscribe_user($arr_where)
	{		
		$arr_user = $this->db -> where($arr_where)
								->update('tbl_news_subscribers',array('status' =>'I'));
								
						   		

	  if(is_array($arr_user))
	  	return $arr_user;
	}
	

}

?>