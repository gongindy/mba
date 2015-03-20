<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting_year_model extends CI_Model {

	public function add_year($input)
	{
		$this->db->insert('budget_year',$input);
	}

	public function get_year()
	{
		$this->db->where_not_in('year_status',0);
		$query = $this->db->get('budget_year');
		return $query->result_array();
	}

	public function delete_year($input)
	{
		$this->db->where('year_id',$input['year_id']);
		$this->db->update('budget_year',$input);
	}

	public function update_year($input)
	{
		$this->db->where('year_id',$input['year_id']);
		$this->db->update('budget_year',$input);
	}
}
