<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting_strategic extends CI_Controller {

	public function index()
	{
		$data['strategic'] = $this->Setting_strategic_model->get();
		$data['page'] = 'setting/setting_strategic';
		$this->load->view('theme',$data);
	}

	public function add()
	{
		$input = array(
			'strategic_name'  => $this->input->post('strategic_name')
		);
		$this->Setting_strategic_model->add($input);
		redirect('setting_strategic/index/success');
	}

	public function delete()
	{
		$input = array(
			'strategic_id' => $this->input->post('strategic_id'),
			'strategic_status' => 0
		);
		$this->Setting_strategic_model->delete($input);
		redirect('setting_strategic/index/success_del');
	}

	public function update()
	{
		$input = array(
			'strategic_id' => $this->input->post('strategic_id'),
			'strategic_name' => $this->input->post('strategic_name')
		);
		$this->Setting_strategic_model->update($input);
		redirect('setting_strategic/index/success_update');
	}


}
