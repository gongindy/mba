<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category_type extends CI_Controller {

	public function convert($type) 
	{
		if($type == 1)
		{
			return 'โครงการเดิม';
		}else if($type == 2){
			return 'โครงการต่อเนื่อง';
		}else if($type == 3){
			return 'โครงการใหม่';
		}
	}

}
