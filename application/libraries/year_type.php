<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class year_type extends CI_Controller {

	public function convert($status)
	{
		return $status == 1 ? 'ปิดปีงบประมาณ' : ($status == 2 ? 'เปิดปีงบประมาณ' : '');
	}
}
