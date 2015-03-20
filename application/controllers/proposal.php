<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Proposal extends CI_Controller {

	public function index()
	{
		$data['proposal'] = $this->Proposal_model->get();
		$data['page'] = 'proposal/proposal';
		$this->load->view('theme',$data);
	}

	public function view()
	{
		$id = $this->uri->segment(3);
		$data['year'] = $this->Proposal_model->get_year();
		$data['proposal'] = $this->Proposal_model->get_where($id);
		$data['page'] = 'proposal/proposal_view';
		$this->load->view('theme',$data);
	}

	public function confirm()
	{		
		$input = array(
			'pro_id' => $this->input->post('pro_id'),
			'pro_type' => 1,
			'time_1' => date('Y-m-d H:i:s'),
			'pro_year' => $this->input->post('year_id')
		);
		$this->Proposal_model->confirm($input);
		redirect('proposal/view/'.$this->input->post('pro_id'));		
	}

	public function del()
	{
		$input = array(
			'pro_status' => 0
		);
		$this->db->where('pro_id',$this->input->post('pro_id'));
		$this->db->update('proposal',$input);
		redirect('proposal/index/success_del');
	}

	public function doc()
	{
		$id = $this->uri->segment(3);
		$data['proposal'] = $this->Proposal_model->view($id);
		$data['improve'] = $this->Proposal_model->get_improve($id);
		$data['rationale'] = $this->Proposal_model->get_rationale($id);
		$data['objective'] = $this->Proposal_model->get_objective($id);
		$data['plan'] = $this->Proposal_model->get_plan($id);
		$data['budget'] = $this->Proposal_model->get_budget($id);
		$data['indicator'] = $this->Proposal_model->get_indicator($id);
		$data['benefit'] = $this->Proposal_model->get_benefit($id);
		$this->load->view('proposal/proposal_doc',$data);
	}
	public function add()
	{
		$data['page'] = 'proposal/proposal_add';
		$this->load->view('theme',$data);
	}

	public function do_add()
	{
		$input = array(
			'pro_name' => $this->input->post('pro_name'),
			'pro_owner' => $this->input->post('pro_owner'),
			'pro_category' => $this->input->post('pro_category'),
			'pro_target' => $this->input->post('pro_target'),
			'pro_social' => $this->input->post('pro_social'),
			'pro_location' => $this->input->post('pro_location'),
			'pro_date' => $this->input->post('date_location'),
			'time_0' => date('Y-m-d H:i:s')
		);
		$id = $this->Proposal_model->add($input);

		///////////////////////
		///// txt_improve /////
		///////////////////////
		$post_improve =  $this->input->post('txt_improve');
		if($post_improve != NULL && $this->input->post('pro_category') != 3) :
		for($i=0;$i<count($post_improve);$i++)
		{
			if($post_improve[$i] != NULL){
				$txt_improve[$i] = array(
					'improve_content' => $post_improve[$i],
					'pro_id' => $id
				);
			}
		}
		if(isset($txt_improve)){
			$this->Proposal_model->add_improve($txt_improve);
		}
		endif;
		
		///////////////////////
		///// txt_improve /////
		///////////////////////

		/////////////////////////
		///// txt_rationale /////
		/////////////////////////
		$post_rationale =  $this->input->post('txt_rationale');
		if($post_rationale != NULL) :
		for($i=0;$i<count($post_rationale);$i++)
		{
			if($post_rationale[$i] != NULL){
				$txt_rationale[$i] = array(
					'rationale_content' => $post_rationale[$i],
					'pro_id' => $id
				);
			}
		}
		if(isset($txt_rationale)){
			$this->Proposal_model->add_rationale($txt_rationale);
		}
		endif;
		/////////////////////////
		///// txt_rationale /////
		/////////////////////////

		/////////////////////////
		///// txt_objective /////
		/////////////////////////
		$post_objective =  $this->input->post('txt_objective');
		if($post_objective != NULL) :
		for($i=0;$i<count($post_objective);$i++)
		{
			if($post_objective[$i] != NULL){
				$txt_objective[$i] = array(
					'objective_content' => $post_objective[$i],
					'pro_id' => $id
				);
			}
		}
		isset($txt_objective) ? $this->Proposal_model->add_objective($txt_objective) : '';
		endif;
		/////////////////////////
		///// txt_objective /////
		/////////////////////////


		///////////////////////
		///// txt_benefit /////
		///////////////////////
		$post_benefit =  $this->input->post('txt_benefit');
		if($post_benefit != NULL) :
		for($i=0;$i<count($post_benefit);$i++)
		{
			if($post_benefit[$i] != NULL){
				$txt_benefit[$i] = array(
					'benefit_content' => $post_benefit[$i],
					'pro_id' => $id
				);
			}
		}
		isset($txt_benefit) ? $this->Proposal_model->add_benefit($txt_benefit) : '';
		endif;
		///////////////////////
		///// txt_benefit /////
		///////////////////////

		////////////////////
		///// txt_plan /////
		////////////////////
		$post_plan =  $this->input->post('txt_plan');
		$post_date_plan = $this->input->Post('date_plan');
		if($post_plan != NULL && $post_date_plan != NULL) :

		$this->load->library('date_convert');

		for($i=0;$i<count($post_plan);$i++)
		{			
			if($post_plan[$i] != NULL || $post_date_plan[$i] != NULL){

				$date = $this->date_convert->split_date($post_date_plan[$i]);
				for($j=0;$j<2;$j++)
				{
					$originalDate = $post_date_plan[$j];
					$date[] = date("Y-m-d", strtotime($originalDate));
				} 
				$txt_plan[$i] = array(
					'plan_content' => $post_plan[$i],
					'plan_start' => $date[0],
					'plan_end' => $date[1],
					'pro_id' => $id
				);
			}
		}
		isset($txt_plan) ? $this->Proposal_model->add_plan($txt_plan) : '';
		endif;
		////////////////////
		///// txt_plan /////
		////////////////////


		//////////////////////
		///// txt_budget /////
		//////////////////////
		$post_budget =  $this->input->post('txt_budget');
		$post_budget_cost = $this->input->Post('budget');
		if($post_budget != NULL && $post_budget_cost != NULl) :
		for($i=0;$i<count($post_budget);$i++)
		{
			if($post_budget[$i] != NULL || $post_budget_cost[$i] != NULL){
				$txt_budget[$i] = array(
					'budget_content' => $post_budget[$i],
					'budget_cost' => $post_budget_cost[$i],
					'pro_id' => $id
				);
			}
		}
		isset($txt_budget) ? $this->Proposal_model->add_budget($txt_budget) : '';
		endif;
		//////////////////////
		///// txt_budget /////
		//////////////////////

		/////////////////////////
		///// txt_indicator /////
		/////////////////////////
		$indicator_name = $this->input->post('indicator_name');
		$indicator_unit = $this->input->post('indicator_unit');
		$indicator_value = $this->input->post('indicator_value');
		$indicator_level = $this->input->post('indicator_level');
		if($indicator_name != NULL) :
		for($i=0;$i<count($indicator_name);$i++)
		{
			if($indicator_name[$i] != NULL || $indicator_unit[$i] != NULL || $indicator_value[$i] != NULL || $indicator_level[$i] != NULL){
				$txt_indicator[$i] = array(
					'indicator_name' => $indicator_name[$i],
					'indicator_unit' => $indicator_unit[$i],
					'indicator_value' => $indicator_value[$i],
					'indicator_level' => nl2br($indicator_level[$i]),
					'pro_id' => $id
				);	
			}	
		}
		isset($txt_indicator) ? $this->Proposal_model->add_indicator($txt_indicator) : '';
		endif;
		/////////////////////////
		///// txt_indicator /////
		/////////////////////////
		redirect('proposal');
	}	

	public function update()
	{
		$id = $this->uri->segment(3);
		$data['proposal'] = $this->Proposal_model->view($id);
		$data['improve'] = $this->Proposal_model->get_improve($id);
		$data['rationale'] = $this->Proposal_model->get_rationale($id);
		$data['objective'] = $this->Proposal_model->get_objective($id);
		$data['plan'] = $this->Proposal_model->get_plan($id);
		$data['budget'] = $this->Proposal_model->get_budget($id);
		$data['indicator'] = $this->Proposal_model->get_indicator($id);
		$data['benefit'] = $this->Proposal_model->get_benefit($id);
		$data['page'] = 'proposal/proposal_update';
		$this->load->view('theme',$data);
	}

	public function do_update()
	{		
		$id = $this->input->post('pro_id');
		$input = array(
			'pro_id' => $id,
			'pro_name' => $this->input->post('pro_name'),
			'pro_owner' => $this->input->post('pro_owner'),
			'pro_category' => $this->input->post('pro_category'),
			'pro_target' => $this->input->post('pro_target'),
			'pro_social' => $this->input->post('pro_social'),
			'pro_location' => $this->input->post('pro_location'),
			'pro_date' => $this->input->post('date_location'),
			'time_0' => date('Y-m-d H:i:s')
		);
		$this->Proposal_model->update_proposal($input);

		$this->Proposal_model->delete_txt($id ,'txt_improve');
		$this->Proposal_model->delete_txt($id ,'txt_rationale');
		$this->Proposal_model->delete_txt($id ,'txt_objective');
		$this->Proposal_model->delete_txt($id ,'txt_benefit');
		$this->Proposal_model->delete_txt($id ,'txt_plan');
		$this->Proposal_model->delete_txt($id ,'txt_budget');
		$this->Proposal_model->delete_txt($id ,'txt_indicator');

		///////////////////////
		///// txt_improve /////
		///////////////////////
		$post_improve =  $this->input->post('txt_improve');
		if($post_improve != NULL && $this->input->post('pro_category') != 3) :
		for($i=0;$i<count($post_improve);$i++)
		{
			if($post_improve[$i] != NULL){
				$txt_improve[$i] = array(
					'improve_content' => $post_improve[$i],
					'pro_id' => $id
				);
			}
		}
		if(isset($txt_improve)){
			$this->Proposal_model->add_improve($txt_improve);
		}
		endif;
		
		///////////////////////
		///// txt_improve /////
		///////////////////////

		/////////////////////////
		///// txt_rationale /////
		/////////////////////////
		$post_rationale =  $this->input->post('txt_rationale');
		if($post_rationale != NULL) :
		for($i=0;$i<count($post_rationale);$i++)
		{
			if($post_rationale[$i] != NULL){
				$txt_rationale[$i] = array(
					'rationale_content' => $post_rationale[$i],
					'pro_id' => $id
				);
			}
		}
		if(isset($txt_rationale)){
			$this->Proposal_model->add_rationale($txt_rationale);
		}
		endif;
		/////////////////////////
		///// txt_rationale /////
		/////////////////////////

		/////////////////////////
		///// txt_objective /////
		/////////////////////////
		$post_objective =  $this->input->post('txt_objective');
		if($post_objective != NULL) :
		for($i=0;$i<count($post_objective);$i++)
		{
			if($post_objective[$i] != NULL){
				$txt_objective[$i] = array(
					'objective_content' => $post_objective[$i],
					'pro_id' => $id
				);
			}
		}
		isset($txt_objective) ? $this->Proposal_model->add_objective($txt_objective) : '';
		endif;
		/////////////////////////
		///// txt_objective /////
		/////////////////////////


		///////////////////////
		///// txt_benefit /////
		///////////////////////
		$post_benefit =  $this->input->post('txt_benefit');
		if($post_benefit != NULL) :
		for($i=0;$i<count($post_benefit);$i++)
		{
			if($post_benefit[$i] != NULL){
				$txt_benefit[$i] = array(
					'benefit_content' => $post_benefit[$i],
					'pro_id' => $id
				);
			}
		}
		isset($txt_benefit) ? $this->Proposal_model->add_benefit($txt_benefit) : '';
		endif;
		///////////////////////
		///// txt_benefit /////
		///////////////////////

		////////////////////
		///// txt_plan /////
		////////////////////
		$post_plan =  $this->input->post('txt_plan');
		$post_date_plan = $this->input->Post('date_plan');
		if($post_plan != NULL && $post_date_plan != NULL) :

		$this->load->library('date_convert');

		for($i=0;$i<count($post_plan);$i++)
		{			
			if($post_plan[$i] != NULL || $post_date_plan[$i] != NULL){

				$date = $this->date_convert->split_date($post_date_plan[$i]);
				for($j=0;$j<2;$j++)
				{
					$originalDate = $post_date_plan[$j];
					$date[] = date("Y-m-d", strtotime($originalDate));
				} 
				$txt_plan[$i] = array(
					'plan_content' => $post_plan[$i],
					'plan_start' => $date[0],
					'plan_end' => $date[1],
					'pro_id' => $id
				);
			}
		}
		isset($txt_plan) ? $this->Proposal_model->add_plan($txt_plan) : '';
		endif;
		////////////////////
		///// txt_plan /////
		////////////////////


		//////////////////////
		///// txt_budget /////
		//////////////////////
		$post_budget =  $this->input->post('txt_budget');
		$post_budget_cost = $this->input->Post('budget');
		if($post_budget != NULL && $post_budget_cost != NULl) :
		for($i=0;$i<count($post_budget);$i++)
		{
			if($post_budget[$i] != NULL || $post_budget_cost[$i] != NULL){
				$txt_budget[$i] = array(
					'budget_content' => $post_budget[$i],
					'budget_cost' => $post_budget_cost[$i],
					'pro_id' => $id
				);
			}
		}
		isset($txt_budget) ? $this->Proposal_model->add_budget($txt_budget) : '';
		endif;
		//////////////////////
		///// txt_budget /////
		//////////////////////

		/////////////////////////
		///// txt_indicator /////
		/////////////////////////
		$indicator_name = $this->input->post('indicator_name');
		$indicator_unit = $this->input->post('indicator_unit');
		$indicator_value = $this->input->post('indicator_value');
		$indicator_level = $this->input->post('indicator_level');
		if($indicator_name != NULL) :
		for($i=0;$i<count($indicator_name);$i++)
		{
			if($indicator_name[$i] != NULL || $indicator_unit[$i] != NULL || $indicator_value[$i] != NULL || $indicator_level[$i] != NULL){
				$txt_indicator[$i] = array(
					'indicator_name' => $indicator_name[$i],
					'indicator_unit' => $indicator_unit[$i],
					'indicator_value' => $indicator_value[$i],
					'indicator_level' => nl2br($indicator_level[$i]),
					'pro_id' => $id
				);	
			}	
		}
		isset($txt_indicator) ? $this->Proposal_model->add_indicator($txt_indicator) : '';
		endif;

		redirect('proposal/update/'.$id);
	}

	public function test()
	{
		$id = $this->uri->segment(3);
		$data['plan'] = $this->Proposal_model->get_plan($id);
		$this->load->library('gantt_chart');
		$gantt_chart = $this->gantt_chart->gen($data);
		echo $gantt_chart;
	}

}