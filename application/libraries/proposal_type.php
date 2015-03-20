<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class proposal_type extends CI_Controller {

	public function convert($type) 
	{
		if($type==0){

			return 'แบบร่าง';

		}else if($type==1){

			return 'กำลังดำเนินการ';

		}else if($type==2){

			return 'อนุมัติง';

		}
	}

}
