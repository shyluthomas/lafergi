<?php
class Blog_model extends MY_Model
{
	public $_table 		= 'tbl_blog';
	public $primary_key = 'blog_id';
	
	function __construct() 
	{
		parent::__construct();
		
	}
	
	function get_all($arr_where=NULL)
	{
		if($arr_where==NULL)
		{
			 $arr_blog = $this->db -> order_by($this->primary_key, 'desc')
						 			-> get($this->_table)
						 			-> result_array();
									
				$i=0;					
				foreach($arr_blog as $arr_blog_dt)
				{
					$array_result[$i]['blog']=$arr_blog_dt;					
					$blog_array_where=array(
						'blog_id' => $arr_blog_dt['blog_id']
					);
					
					$array_blog_comment=$this->db->where($blog_array_where)
												 ->get('tbl_blog_comment')
												 ->num_rows();
												 
								
												 
					$array_result[$i]['blog_comment']=$array_blog_comment;
					$i++;
					
				}
				
				
						 
		}
		else
		{
		 
		 $array_result = $this->db -> where($arr_where)
		 						 -> order_by($this->primary_key, 'desc')
		 					 	 -> get($this->_table)
								 -> result_array();
								 //echo $this->db->last_query();
		}
								 								 
	  	return $array_result;
	}
	
	function view_by_date($arr_where)
	{
		
		$arr_blog = $this->db -> where($arr_where)
		 						 -> order_by($this->primary_key, 'desc')
		 					 	 -> get($this->_table)
								 -> result_array();
								 
								 
												
				$i=0;					
				foreach($arr_blog as $arr_blog_dt)
				{
					$array_result[$i]['blog']=$arr_blog_dt;					
					$blog_array_where=array(
						'blog_id' => $arr_blog_dt['blog_id']
					);
					
					$array_blog_comment=$this->db->where($blog_array_where)
												 ->get('tbl_blog_comment')
												 ->num_rows();
												 
								
												 
					$array_result[$i]['blog_comment']=$array_blog_comment;
					$i++;
					
				}
				return $array_result;							 
								 
			
	}
	
	
	
	function get_specific_data($id)
	{
		$array_spec_where=array(
							'blog_id' => $id		
							);
		
		 $arr_blog = $this->db -> where($array_spec_where)
		 					   -> order_by($this->primary_key, 'desc')
						 	   -> get($this->_table)
						 	   -> result_array();
									
				$i=0;					
				foreach($arr_blog as $arr_blog_dt)
				{
					$array_result[$i]['blog']=$arr_blog_dt;					
					$array_where=array(
						'blog_id' => $arr_blog_dt['blog_id']
					);
					
					
					$array_blog_comment=$this->db->join('tbl_user','tbl_blog_comment.user_id = tbl_user.user_id')
												  ->where($array_where)
												  ->get('tbl_blog_comment')
												  ->result_array();
												 
												 
					$array_result[$i]['blog_comment']=$array_blog_comment;
					
					$i++;
					
				}
				
				return $array_result;
			
		
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
		if($success)	   
		 return $this->db->insert_id();
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
	
	function search_like($search)
	{
		if($search != '' && $search != 'Search') {
			$this->db ->or_like('test_name',$search);
			$this->db ->or_like('test_author',$search);
			$this->db ->or_like('test_designation',$search);
			$this->db ->or_like('test_company',$search);
		}
		return $this;
	}
	
	function get_row_withuser($id)
	{
		
		$arr_result = $this->db -> join('tbl_user', 'tbl_testimonials.user_id = tbl_user.user_id')
 								-> where($this->primary_key, $id)
						   		-> get($this->_table)
						   		-> result_array();
								
								//echo $this->db->last_query();	

	  if(is_array($arr_result) && count($arr_result) > 0)
	  	return $arr_result[0];
	}
	
	
	function get_all_detail($id)
	{
		
			 $arr_blog = $this->db  -> where($this->primary_key, $id)
			 						-> order_by($this->primary_key, 'desc')
						 			-> get($this->_table)
						 			-> result_array();
									
				$i=0;					
				foreach($arr_blog as $arr_blog_dt)
				{
					$array_result[$i]['blog']=$arr_blog_dt;					
					$blog_array_where=array(
						'blog_id' => $arr_blog_dt['blog_id']
					);
					
					$array_blog_total_comment=$this->db->where($blog_array_where)
												 ->get('tbl_blog_comment')
												 ->num_rows();
					$array_result[$i]['blog_total_comment']=$array_blog_total_comment;
					
					
					$array_blog_comment=$this->db->select('*')
												->join('tbl_user','tbl_blog_comment.user_id=tbl_user.user_id')
												 ->where($blog_array_where)
												 ->get('tbl_blog_comment')
												 -> result_array();
												 
								
												 
					$array_result[$i]['blog_comment']=$array_blog_comment;
					$i++;
					
				}
						 
		
								 								 
	  	return $array_result;
	}
	
	
	function get_all_archive($arr_where)
	{
		if($arr_where==NULL)
		{
			 $arr_blog = $this->db -> select('blog_id, blog_title')
			 						-> order_by($this->primary_key, 'desc')
									-> limit(10)
						 			-> get($this->_table)
						 			-> result_array();
									
				$i=0;					
				foreach($arr_blog as $arr_blog_dt)
				{
					$array_result[$i]['blog']=$arr_blog_dt;					
					$blog_array_where=array(
						'blog_id' => $arr_blog_dt['blog_id']
					);
					
					$array_blog_comment=$this->db->where($blog_array_where)
												 ->get('tbl_blog_comment')
												 ->num_rows();
												 
								
												 
					$array_result[$i]['blog_comment']=$array_blog_comment;
					$i++;
					
				}
						 
		}
		else
		{
		 
		 $arr_blog = $this->db -> where($arr_where)
		 						 -> order_by($this->primary_key, 'desc')
								 -> limit(10)
		 					 	 -> get($this->_table)
								 -> result_array();
								 echo $this->db->last_query();exit();
								 
								 					
				$i=0;					
				foreach($arr_blog as $arr_blog_dt)
				{
					$array_result[$i]['blog']=$arr_blog_dt;					
					$blog_array_where=array(
						'blog_id' => $arr_blog_dt['blog_id']
					);
					
					$array_blog_comment=$this->db->where($blog_array_where)
												 ->get('tbl_blog_comment')
												 ->num_rows();
												 
								
												 
					$array_result[$i]['blog_comment']=$array_blog_comment;
					$i++;
					
				}
		}
								 								 
	  	return $array_result;
	}
	
	function get_specific_blog($blog_id)
	{
		$arr_where=array(
			'blog_id' => $blog_id
		);
		$arr_result = $this->db -> where($arr_where)
						   		-> get($this->_table)
						   		-> result_array();
								
								//echo $this->db->last_query();	

	  if(is_array($arr_result) && count($arr_result) > 0)
	  	return $arr_result[0];
	}
	function update_data_blog_comment($comment_id,$arr_stat)
	{
		
		
		$up=$this->db->where('comment_id',$comment_id)->update('tbl_blog_comment',$arr_stat);
		return $up;
			
	}
	function delete($blog_id)
	{
		$this->db->where('blog_id',$blog_id)->delete('tbl_blog');
		
	}
	
	function delete_comment($comment_id)
	{
		$this->db->where('comment_id',$comment_id)->delete('tbl_blog_comment');
		
	}
	
	function insert_comment($arr_data)
	{
		$inset=$this->db->insert('tbl_blog_comment', $arr_data);
		return $inset;
	}
	function get_all_posts()
	{
		$result=$this->db->limit(10)
						 -> get($this->_table)	
						 -> result_array();
						 
				return $result;
		
	}
	
	function get_all_archive_by_date()
	{
		
			 $arr_blog = $this->db -> distinct()
			 						-> select('archive')
			 						-> order_by($this->primary_key, 'desc')
									-> limit(10)
						 			-> get($this->_table)
						 			-> result_array();
			//echo $this->db->last_query();exit();
									
			return $arr_blog;			
				
					
	}
	
	
	function get_all_archive_bydate($arr_where = NULL)
	{
		
		
		$arr_blog = $this->db -> or_like($arr_where)
		 						 -> order_by($this->primary_key, 'desc')
								 -> limit(10)
		 					 	 -> get($this->_table)
								 -> result_array();
								 //echo $this->db->last_query();exit();
								 
					$i=0;			 
				foreach($arr_blog as $arr_blog_dt)
				{
					$array_result[$i]['blog']=$arr_blog_dt;					
					$blog_array_where=array(
						'blog_id' => $arr_blog_dt['blog_id']
					);
					
					$array_blog_comment=$this->db->where($blog_array_where)
												 ->get('tbl_blog_comment')
												 ->num_rows();
												 
								
												 
					$array_result[$i]['blog_comment']=$array_blog_comment;
					$i++;
					
				}
				return $array_result;
	}
	function get_all_comments($id){
	/*$arr_comments = $this->db->where('blog_id',$id)
							->get('tbl_blog_comment')
							
							->result();*/
		$arr_comments = $this->db->join('tbl_user','tbl_blog_comment.user_id = tbl_user.user_id')
								->where('blog_id',$id)
								->get('tbl_blog_comment')
								->result();			
	//var_dump($arr_comments); exit();
	return $arr_comments;
	}
}

?>