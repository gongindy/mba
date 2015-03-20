<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authen extends CI_Controller {

	public function index()
	{
		$this->load->view('authen');
	}

	public function login()
	{
		$input = array(
			'mem_user' => $this->input->post('username'),
			'mem_pass' => md5($this->input->post('password'))
		);
		$result['sess_login'] = $this->Authen_model->login($input);
		$this->session->set_userdata($result);

		$all_session = $this->session->all_userdata();

		if($all_session['sess_login'])
		{
			redirect('proposal');
		}else{
			redirect('authen/index/error');
		}
	}	

}
