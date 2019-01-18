<?php
class Keyword_model extends MY_Model
{
	public $_table 		= 'keywords';
	public $primary_key = 'id';
	
	function __construct() 
	{
		parent::__construct();
		
	}
	
	function get_all($arr_where=NULL)
	{
		if($arr_where==NULL)
		{
			 $arr_result = $this->db-> get($this->_table)
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
	
	function get_keyword($search)
	{
		
		$arr_where= array(
							'keyword_long' => $search
		);
		 $arr_res = $this->db-> like('keyword_long',$search)
		 					 -> get($this->_table)
						 	 -> result_array();	
			
		  if(count($arr_res) > 0){
			return $arr_res[0];
		  }
		  else
		  {
				return FALSE;  
		  }
	}
	
	
	
	

	
	
	

}