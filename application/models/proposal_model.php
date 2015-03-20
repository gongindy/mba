<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proposal_model extends CI_Model {

	public function add($input)
	{
		$this->db->insert('proposal',$input);
		return $this->db->insert_id();
	}

	public function update_proposal($input)
	{
		$this->db->where('pro_id',$input['pro_id']);
		$this->db->update('proposal',$input);
	}

	public function confirm($input)
	{
		$this->db->where('pro_id',$input['pro_id']);
		$this->db->update('proposal',$input);
	}

	public function get()
	{
		$this->db->where('pro_status',1);
		$this->db->order_by('pro_id','desc');
		$query = $this->db->get('proposal');
		return $query->result_array();
	}

	public function get_where($id)
	{
		$this->db->where('pro_status',1);
		$this->db->where('pro_id',$id);
		$query = $this->db->get('proposal');
		return $query->result_array();
	}

	public function get_improve($id)
	{
		$this->db->where('pro_id',$id);
		$query = $this->db->get('txt_improve');
		return $query->result_array();
	}

	public function get_rationale($id)
	{
		$this->db->where('pro_id',$id);
		$query = $this->db->get('txt_rationale');
		return $query->result_array();
	}

	public function get_objective($id)
	{
		$this->db->where('pro_id',$id);
		$query = $this->db->get('txt_objective');
		return $query->result_array();
	}

	public function get_plan($id)
	{
		$this->db->where('pro_id',$id);
		$query = $this->db->get('txt_plan');
		return $query->result_array();
	}

	public function get_budget($id)
	{
		$this->db->where('pro_id',$id);
		$query = $this->db->get('txt_budget');
		return $query->result_array();
	}

	public function get_indicator($id)
	{
		$this->db->where('pro_id',$id);
		$query = $this->db->get('txt_indicator');
		return $query->result_array();
	}

	public function get_benefit($id)
	{
		$this->db->where('pro_id',$id);
		$query = $this->db->get('txt_benefit');
		return $query->result_array();
	}

	public function view($id)
	{
		$this->db->where('proposal.pro_id',$id);
		$this->db->where('pro_status',1);
		$query = $this->db->get('proposal');
		return $query->result_array();
	}

	///////////////////
	///// add txt /////
	///////////////////
	public function add_improve($input)
	{
		$this->db->insert_batch('txt_improve',$input);
	}

	public function add_rationale($input)
	{
		$this->db->insert_batch('txt_rationale',$input);
	}

	public function add_objective($input)
	{
		$this->db->insert_batch('txt_objective',$input);
	}

	public function add_benefit($input)
	{
		$this->db->insert_batch('txt_benefit',$input);
	}

	public function add_plan($input)
	{
		$this->db->insert_batch('txt_plan',$input);
	}

	public function add_budget($input)
	{
		$this->db->insert_batch('txt_budget',$input);
	}

	public function add_indicator($input)
	{
		$this->db->insert_batch('txt_indicator',$input);
	}


	///////////////////
	///// add txt /////
	///////////////////

	public function get_year()
	{
		$this->db->where('year_status',2);
		$query = $this->db->get('budget_year');
		return $query->result_array();
	}

	///////////////////
	///// delete txt /////
	///////////////////
	public function delete_txt($id ,$table)
	{
		$this->db->where('pro_id',$id);
		$this->db->delete($table);
	}

	///////////////////
	///// delete txt /////
	///////////////////
	
}
