<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authen_model extends CI_Model {

	public function login($input)
	{
		$this->db->select('mem_user,mem_id,mem_type');
		$this->db->where('mem_status',1);
		$this->db->where('mem_user',$input['mem_user']);
		$this->db->where('mem_pass',$input['mem_pass']);
		$this->db->where('mem_status',1);
		$query = $this->db->get('member');

		if($query->num_rows() == 1)
		{
			return $query->result_array();
		}else{
			return false;
		}
	}
	
}
