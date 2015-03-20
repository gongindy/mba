<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting_year extends CI_Controller {

	public function index()
	{
		$data['year'] = $this->Setting_year_model->get_year();
		$data['page'] = 'setting/setting_year';
		$this->load->view('theme',$data);
	}

	public function do_add()
	{
		$this->load->library('date_convert');
		$date = $this->date_convert->split_date($this->input->post('year_range'));

		for($i=0;$i<2;$i++)
		{
			$originalDate = $date[$i];
			$date[$i] = date("Y-m-d", strtotime($originalDate));
		}
		
		$input = array(
			'year_name' => $this->input->post('year_name'),
			'year_start' => $date[0],
			'year_end' => $date[1]
		);
		$this->Setting_year_model->add_year($input);
		redirect('setting_year/index/success');
	}

	public function do_delete()
	{
		$input = array(
			'year_id' => $this->input->post('year_id'),
			'year_status' => 0
		);
		$this->Setting_year_model->delete_year($input);
		redirect('setting_year/index/success_del');
	}

	public function do_update()
	{
		$this->load->library('date_convert');
		$date = $this->date_convert->split_date($this->input->post('year_range'));

		for($i=0;$i<2;$i++)
		{
			$originalDate = $date[$i];
			$date[$i] = date("Y-m-d", strtotime($originalDate));
		}

		$input = array(
			'year_id' => $this->input->post('year_id'),
			'year_name' => $this->input->post('year_name'),
			'year_start' => $date[0],
			'year_end' => $date[1],
			'year_status'=> $this->input->post('year_status')
		);
		$this->Setting_year_model->update_year($input);
		redirect('setting_year/index/success_update');
	}

}
