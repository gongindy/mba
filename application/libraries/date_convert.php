<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class date_convert extends CI_Controller {

	public function convert($strDate)
	{
		if($strDate == null)
		{
			return null;
		}
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));

		$strMinute= ':'.date("i",strtotime($strDate)).' น.';
		//$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];

		if($strHour == null){
			$strHour = null;
			$strMinute = null;
		}
		return "$strDay $strMonthThai $strYear &emsp; $strHour$strMinute";
	}

	public function ymd($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		
		return "$strDay $strMonthThai $strYear";
	}		

	public function rangedate_convert($strDate)
	{
		$exp = explode("-",$strDate);

		for($i=0;$i<2;$i++)
		{
			$strDate = $exp[0+($i*3)].'-'.$exp[1+($i*3)].'-'.$exp[2+($i*3)];

			$strYear[$i] = date("Y",strtotime($strDate))+543;
			$strMonth[$i] = date("n",strtotime($strDate));
			$strDay[$i] = date("j",strtotime($strDate));

			$strMonthCut[$i] = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
			$strMonthThai[$i] = $strMonthCut[$i][$strMonth[$i]];

			$result[$i] = "$strDay[$i] $strMonthThai[$i] $strYear[$i]";		
		}

		if($strYear[0] == $strYear[1] && $strMonth[0] == $strMonth[1])
		{
			if($strDay[0] == $strDay[1])
			{
				return "$strDay[1] $strMonthThai[1] $strYear[1]";
			}else{
				return "$strDay[0] - $strDay[1] $strMonthThai[1] $strYear[1]";		
			}
			
		}else{
			return "$result[0] - $result[1]";
		}
	
	}
	
	public function split_date($strDate)
	{
		$exp = explode("-",$strDate);

		for($i=0;$i<2;$i++)
		{
			$strDate = $exp[0+($i*3)].'-'.$exp[1+($i*3)].'-'.$exp[2+($i*3)];

			$strYear[$i] = date("Y",strtotime($strDate));
			$strMonth[$i] = date("n",strtotime($strDate));
			$strDay[$i] = date("j",strtotime($strDate));

			$result[$i] = "$strYear[$i]-$strMonth[$i]-$strDay[$i]";		
		}
		return $result;
	}

}
