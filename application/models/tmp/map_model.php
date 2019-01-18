<?php
class Map_model extends MY_Model
{
	public $_table 		= 'tbl_map';
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
	
	function get_all_with_img($arr_where=NULL)
	{
		$arr_result=array();
		if($arr_where==NULL)
		{
			$arr_whe=array('latitude !='=>'0');
			 $arr_res = $this->db->where($arr_whe)
			 					-> get($this->_table)
						 			-> result_array();
					$i=0;				
					foreach($arr_res as $prop)
					{
						$arr_result[$i]['details']=$prop;
						$arr_where=array('listing_id' =>$prop['listing_id']);
										
						 $arr_img = $this->db -> where($arr_where)		 						 
		 					 	 				 -> get('tbl_rets_image')
												 -> row();
						if($arr_img){
						$arr_result[$i]['img']=$arr_img->image_name;
						}else{
						$arr_result[$i]['img']='';	
						}
						$i++;
					}				
						 
		}
		else
		{
		 
		 
			 $arr_res = $this->db->where($arr_where)
			 					-> get($this->_table)
						 		-> result_array();
					$i=0;				
					foreach($arr_res as $prop)
					{
						$arr_result[$i]['details']=$prop;
						$arr_where=array('listing_id' =>$prop['listing_id']);
										
						 $arr_img = $this->db -> where($arr_where)		 						 
		 					 	 				 -> get('tbl_rets_image')
												 -> row();
						if($arr_img){
						$arr_result[$i]['img']=$arr_img->image_name;
						}else{
						$arr_result[$i]['img']='';	
						}
						$i++;
					}	
		}
		if($arr_result)
		{						 								 
	  		return $arr_result;
		}
		else
		return 0;
	}
	
	function get_all_with_img_search($arr_where=NULL)
	{
		$arr_result=array();
		if($arr_where==NULL)
		{
			
			 $arr_res = $this->db -> get($this->_table)
						 	     -> result_array();
					$i=0;				
					foreach($arr_res as $prop)
					{
						$arr_result[$i]['details']=$prop;
						$arr_where=array('listing_id' =>$prop['listing_id']);
										
						 $arr_img = $this->db -> where($arr_where)		 						 
		 					 	 				 -> get('tbl_rets_image')
												 -> row();
						if($arr_img){
						$arr_result[$i]['img']=$arr_img->image_name;
						}else{
						$arr_result[$i]['img']='';	
						}
						$i++;
					}				
						 
		}
		if($arr_result)
		{						 								 
	  		return $arr_result;
		}
		else
		return 0;
		
	}
	
	function get_city_with_count()
	{
		
		$arr_res = $this->db ->distinct('l_city')
							 -> select('l_city')
							  -> get($this->_table,20,0)							 
						   	 -> result_array();		
		$i=0;
		foreach($arr_res as $city)
		{
				$array_result[$i]['city']=$city['l_city'];
				$arr_where=array('l_city' =>$city['l_city']);
								
				$city_prop_count = $this->db ->where($arr_where)
								 			 -> get($this->_table)
						   					 -> num_rows();
				
				$array_result[$i]['count']=$city_prop_count;
				$i++;
		}
		//var_dump($array_result);
	  if(is_array($array_result) && count($array_result) > 0)
	  	return $array_result;
	}
	function get_neighbour_with_count()
	{
		
		$arr_res = $this->db ->distinct('l_city')
							 -> select('l_city')
							  -> get($this->_table,20,0)							 
						   	 -> result_array();		
		$i=0;
		foreach($arr_res as $city)
		{
				$array_result[$i]['city']=$city['l_city'];
				$arr_where=array('l_city' =>$city['l_city']);
								
				$city_prop_count = $this->db ->where($arr_where)
								 			 -> get($this->_table)
						   					 -> num_rows();
				
				$array_result[$i]['count']=$city_prop_count;
				$i++;
		}
		//var_dump($array_result);
	  if(is_array($array_result) && count($array_result) > 0)
	  	return $array_result;
	}
	function get_similar_prop($arr_where_map)
	{
		
		
		 $arr_result = $this->db -> where($arr_where_map)
		 						 -> order_by($this->primary_key, 'desc')
		 					 	 -> get($this->_table)
								 -> result_array();
								 //echo $this->db->last_query();
		if(count($arr_result)>0)
		{								 								 
	  		return $arr_result;
		}
		else
		{
			return FALSE;
		}
	}
	function get_prop_img($listing_id)
	{
		$arr_where=array(
					'listing_id'=> $listing_id
		);
		
		 $arr_result = $this->db -> where($arr_where)		 						 
		 					 	 -> get('tbl_rets_image')
								 -> row();
								 //echo $this->db->last_query();
		if($arr_result)
		{								 								 
	  		return $arr_result;
		}
		else
		{
			return FALSE;
		}
	}
	
	
	function get_row_proname($id)
	{
		
		$arr_result = $this->db -> select('pro_name')
								-> where($this->primary_key, $id)
						   		-> get($this->_table)
						   		-> result_array();

	  if(is_array($arr_result) && count($arr_result) > 0)
	  	return $arr_result[0];
	}
	
	function get_row_withuser($id)
	{
		
		$arr_result = $this->db -> join('tbl_user', 'tbl_property.user_id = tbl_user.user_id')
 								-> where($this->primary_key, $id)
						   		-> get($this->_table)
						   		-> result_array();

	  if(is_array($arr_result) && count($arr_result) > 0)
	  	return $arr_result[0];
	}
	
	function insert_data($arr_data=NULL)
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
	
	function update_data($id, $arr_data=NULL)
	{

		$success	= $this ->update($id, $arr_data, true);
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
	function get_position($listing_id=NULL)
	{
		
			
			
			/*$arr_result = $this->db-> query("SELECT (SELECT COUNT( * )FROM `tbl_map` WHERE `listing_id` <= '".$listing_id."') AS `position` FROM tbl_map WHERE `listing_id` = '".$listing_id."'")
								   -> row();*/
								   
			$arr_result=$this->db->query("select listing_id from tbl_map")					   
									->result_array();
								$i=0;	
						foreach($arr_result as $view){
						$details[$i]=$view['listing_id'];
							$i++;
						}
					if($details)			 								 
	  				return $details;
					else
					return 0;
	}
	
	function get_all_without_img($listing_id=NULL)
	{
		$arr_whe=array('latitude != '=> '0');
			 $arr_res = $this->db->where($arr_whe)
			 					-> get($this->_table)
						 		-> result_array();
									
								
						 
		return $arr_res;
	}
	
	function count_all_rows($where=NULL)
	{
		
		if($where)
		{
			$arr_res = $this->db->query($where)
						 		-> num_rows();
		}
		else
		{
				$arr_res = $this->db->get($this->_table)
						 		-> num_rows();
		}
				
		return $arr_res;						
		
	}
	function count_all_rows1($where=NULL,$or_where=NULL)
	{
		
		if($where and $or_where)
		{
			$arr_res = $this->db->where($where)
								->or_where($or_where)
			 					-> get($this->_table)
						 		-> num_rows();
		}
		else
		{		
			if($where)
			{
				
				 $arr_res = $this->db->where($where)
									-> get($this->_table)
									-> num_rows();
				
			}
			elseif($or_where)
			{
				$arr_res = $this->db ->or_where($or_where)
									 -> get($this->_table)
									-> num_rows();
			}
			else
			{
				 $arr_res = $this->db -> get($this->_table)
									-> num_rows();
									
			}
		}
				
		return $arr_res;						
		
	}
	function search_home1($arr_where=NULL,$or_where=NULL)
	{
		
		if($arr_where and $or_where)
		{
			
			$arr_res = $this->db->where($arr_where)
								->or_where($or_where)
								->order_by("l_city", "asc")
			 					-> get($this->_table)
						 		-> result_array();
		}
		else
		{		
			if($arr_where)
			{
				
				 $arr_res = $this->db->where($arr_where)
				 				    ->order_by("l_city", "asc")
									-> get($this->_table)
									-> result_array();
				
			}
			elseif($or_where)
			{
				$arr_res = $this->db ->or_where($or_where)									 
									 ->order_by("l_city", "asc")
									 -> get($this->_table)
									-> result_array();
			}
			else
			{
				 $arr_res = $this->db ->order_by("l_city", "asc")
				 					 -> get($this->_table)				 					
									-> result_array();
									
			}
		}
					$arr_result=array();
					$i=0;				
					foreach($arr_res as $prop)
					{
						$arr_result[$i]['details']=$prop;
						$arr_where=array('listing_id' =>$prop['listing_id']);
										
						 $arr_img = $this->db -> where($arr_where)		 						 
		 					 	 				 -> get('tbl_rets_image')
												 -> row();
						if($arr_img){
						$arr_result[$i]['img']=$arr_img->image_name;
						}else{
						$arr_result[$i]['img']='';	
						}
						$i++;
					}				
						 
		
		if($arr_result)
		{
			return $arr_result;
		}
		else
		return 0;
								 								 
	  	
	}
	function search_home($arr_where=NULL)
	{
		$arr_result=array();
		$arr_res=array();
			 $arr_res = $this->db->query($arr_where)			 					
						 		-> result_array();
					$i=0;				
					foreach($arr_res as $prop)
					{
						$arr_result[$i]['details']=$prop;
						$arr_where=array('listing_id' =>$prop['listing_id']);
										
						 $arr_img = $this->db -> where($arr_where)		 						 
		 					 	 				 -> get('tbl_rets_image')
												 -> row();
						if($arr_img){
						$arr_result[$i]['img']=$arr_img->image_name;
						}else{
						$arr_result[$i]['img']='';	
						}
						$i++;
					}				
						 
		
		
								 								 
	  	return $arr_result;
	}
	
	
	function get_all_with_img_like($arr_where=NULL)
	{
		$arr_result=array();
		if($arr_where==NULL)
		{
			$arr_whe=array('latitude !='=>'0');
			 $arr_res = $this->db->like($arr_whe)
			 					-> get($this->_table)
						 			-> result_array();
					$i=0;				
					foreach($arr_res as $prop)
					{
						$arr_result[$i]['details']=$prop;
						$arr_where=array('listing_id' =>$prop['listing_id']);
										
						 $arr_img = $this->db -> where($arr_where)		 						 
		 					 	 				 -> get('tbl_rets_image')
												 -> row();
						if($arr_img){
						$arr_result[$i]['img']=$arr_img->image_name;
						}else{
						$arr_result[$i]['img']='';	
						}
						$i++;
					}				
						 
		}
		else
		{
		 
		 
			 $arr_res = $this->db->like($arr_where)
			 					-> get($this->_table)
						 		-> result_array();
					$i=0;				
					foreach($arr_res as $prop)
					{
						$arr_result[$i]['details']=$prop;
						$arr_where=array('listing_id' =>$prop['listing_id']);
										
						 $arr_img = $this->db -> where($arr_where)		 						 
		 					 	 				 -> get('tbl_rets_image')
												 -> row();
						if($arr_img){
						$arr_result[$i]['img']=$arr_img->image_name;
						}else{
						$arr_result[$i]['img']='';	
						}
						$i++;
					}	
		}
		if($arr_result)
		{						 								 
	  		return $arr_result;
		}
		else
		return 0;
	}
	
	function get_property_catgory($arr_cat)
	{		
			 $arr_cat = $this->db->where($arr_cat)
			 					-> get($this->_table)
						 		-> row();
				if($arr_cat)
				{
					return $arr_cat->catagory;
				}
				else
				return 0;
	}
	function get_foreclosure_prop($arr_fore=NULL)
	{		
			
				$arr_res = $this->db->where($arr_fore)
			 					-> get($this->_table)
						 		-> result_array();
					$i=0;				
					foreach($arr_res as $prop)
					{
						$arr_result[$i]['details']=$prop;
						$arr_where=array('listing_id' =>$prop['listing_id']);
										
						 $arr_img = $this->db -> where($arr_where)		 						 
		 					 	 				 -> get('tbl_rets_image')
												 -> row();
						if($arr_img){
						$arr_result[$i]['img']=$arr_img->image_name;
						}else{
						$arr_result[$i]['img']='';	
						}
						$i++;
					}
				if($arr_result)
				{
					return $arr_result;
				}
				else
				return 0;
				
	}
	function count_all_foreclosure($where=NULL)
	{
		
		if($where)
		{
			$arr_res = $this->db->where($where)
								->get($this->_table)
						 		-> num_rows();
		}
		else
		{
				$arr_res = $this->db ->get($this->_table)
						 			 -> num_rows();
		}
				
		return $arr_res;						
		
	}
	
	

}