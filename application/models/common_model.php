<?php

class Common_model extends MY_Model {
	
	function __construct()
    {
        parent::__construct();
    }
	
	function admin_login($arr_where)
	{
		$query	= $this->db->where($arr_where)
				 		 ->get('tbl_admin');
		return $query->result_array();
	}
	
	function update_admin($primary_key,$arr_data)
	{
		$this->db->where('admin_id',$primary_key);
		$this->db->update('tbl_admin', $arr_data);
	}
	
	function get_states($country_id)
	{
		$query = $this->db->where('country_id',$country_id)
						->order_by('state_name', 'asc')
						->get('tbl_state');
		return $query->result_array();
	}
	
	function get_specific_states($state_id)
	{
		$query = $this->db->where('state_id',$state_id)
						->order_by('state_name', 'asc')
						->get('tbl_state');
		return $query->result_array();
	}
	
	function get_country($country_id)
	{
		$query = $this->db->where('country_id',$country_id)
						
						->get('tbl_country');
		return $query->result_array();
	}
	
	function get_specific_country($country_id)
	{
		$query = $this->db->where('country_id',$country_id)
						
						->get('tbl_country');
		return $query->result_array();
	}
	
	function get_pro_floor()
	{
		$query = $this->db->order_by('floor_name', 'asc')
						->get('tbl_property_floor');
		return $query->result_array();
	}
	
	function user_login($arr_where)
	{
		$query	= $this->db->where($arr_where)
				 		 ->get('tbl_user');
		return $query->result_array();
	}
	
	function update_user($primary_key,$arr_data)
	{
		$this->db->where('user_id',$primary_key);
		$this->db->update('tbl_user', $arr_data);
	}
	
	//////////////////////// Visiter Form Enable ///////////////////////////////
	
	function vister_form_enable()
	{
		$query = $this->db->order_by('visiter_enable_id', 'asc')
						->get('tbl_visiterlist_enable');
		return $query->result_array();
	}
	
	function update_data_visiter_form($primary_key,$arr_data)
	{
		$this->db->where('visiter_enable_id',$primary_key);
		$this->db->update('tbl_visiterlist_enable', $arr_data);
	}
	
	//////////////////////// Visiter Form Enable ///////////////////////////////
	
	//////////////////////// Visiter Skip Form Enable ///////////////////////////////
	
	function visterskip_form_enable()
	{
		$query = $this->db->order_by('visiterskip_enable_id', 'asc')
						->get('tbl_visiterlistskip_enable');
		return $query->result_array();
	}
	
	function update_data_visiterskip_form($primary_key,$arr_data)
	{
		$this->db->where('visiterskip_enable_id',$primary_key);
		$this->db->update('tbl_visiterlistskip_enable', $arr_data);
	}
	
	//////////////////////// Visiter skip Form Enable ///////////////////////////////
	
	///////////////////////////////////////Search Like for online location//////////////////////////////////////////
	
	function search_online_location($pro_location=NULL)
	{
		if($pro_location!='')
			$this->db->like('online_location_name',$pro_location);
			
		$query = $this->db->get('tbl_online_location');
		
		$arr_res = $query->result_array();
		//echo $this->db->last_query();
		if($pro_location!='')
			return $arr_res;
		else
			return "";
		
		
		
	}
	///////////////////////////////////////Search Like for online location//////////////////////////////////////////
	
	/////////////////////////////////////// get online locations ////////////////////////////////////
	
	function get_online_location()
	{
		$query = $this->db
						->get('tbl_online_location');
		return $query->result_array();
	}
	
	
	function get_all($table,$where=NULL)
	{
		
		if($where)
		{
			$results = $this->db->where($where)
								->get($table);
			
		}
		else
		{
			$results = $this->db
						->get($table);						
		}
		return $results->result_array();
	}
	
	function count_all($table)
	{
		$results = $this->db
						->get($table)->num_rows();
						return $results;
	}
	
	function update_dream($arr_where,$table,$arr_data)
	{
		$this->db->where($arr_where);
		$data1=$this->db->update($table, $arr_data);
		if($data1)
		{
			return true;	
		}
		else
		{
			return false;	
		}
		
	}
	
	function insert_data($table,$arr_data)
	{
		$insert=$this->db->insert($table,$arr_data);
		if($insert)
		{
				return true;
		}
		else
		{
			return false;	
		}
		
		
	}
	
	function delete_data($table,$arr_where)
	{
		$delete=$this->db->where($arr_where)
						->delete($table);
						
						if($delete)
						{
							return true;	
						}
						else
						{
							return false;	
						}
		
	}
	////////////////////////////////////// get online locations ////////////////////////////////////

	
}