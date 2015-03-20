<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting_strategic_model extends CI_Model {

	public function add($input)
	{
		$this->db->insert('setting_strategic',$input);
	}

	public function get()
	{
		$this->db->where('strategic_status',1);
		$query = $this->db->get('setting_strategic');
		return $query->result_array();
	}

	public function delete($input)
	{
		$this->db->where('strategic_id',$input['strategic_id']);
		$this->db->update('setting_strategic',$input);
	}

	public function update($input)
	{
		$this->db->where('strategic_id',$input['strategic_id']);
		$this->db->update('setting_strategic',$input);
	}
}
