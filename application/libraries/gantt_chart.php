<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gantt_chart extends CI_Controller {

	public function gen()
	{
		echo "<meta charset='utf-8'>";
		$id = $this->uri->segment(3);
		$data = $this->Proposal_model->get_plan($id);

		
		for($i=0;$i<count($data);$i++)
		{
			// $year_start[] = date('Y',strtotime($data[$i]['plan_start']));
			// $year_end[] = date('Y',strtotime($data[$i]['plan_end']));

			$detail[] = array(
				'day' => date('d',strtotime($data[$i]['plan_start'])),
				'month' => date('m',strtotime($data[$i]['plan_start'])),
				'year' => date('Y',strtotime($data[$i]['plan_start'])),
			);

			$detail[] = array(
				'day' => date('d',strtotime($data[$i]['plan_end'])),
				'month' => date('m',strtotime($data[$i]['plan_end'])),
				'year' => date('Y',strtotime($data[$i]['plan_end'])),
			);

			$date[] = $data[$i]['plan_start'];
			$date[] = $data[$i]['plan_end'];
		}
		// print_r($detail);
		
		/* find year scope */
		for($i=0;$i<count($detail);$i++)
		{
			$year_all[] = $detail[$i]['year'];
		}
		$year = array_unique($year_all);

		// print_r($year);
		$count_year = count($year);

		/* find max,min year */
		$start_year = min($year);
		$end_year = max($year);

		
		/* find first month */
		// print_r($date);
		$start_date =  min($date);
		// echo '<br>';
		$end_date =  max($date);
		// echo '<br>';

		$start_month = (int)date('m',strtotime($start_date));
		// echo '<br>';
		$end_month = (int)date('m',strtotime($end_date));

		// echo $start_month;
		// echo $end_month;

		// echo $start_date;
		// echo '<br>';
		// echo $end_date;
		// echo '<br>';

		/* diff month */
		$date1 = new DateTime($start_date);
		$date2 = new DateTime($end_date);
		$diff =  $date1->diff($date2);

	    $months = $diff->y * 12 + $diff->m + $diff->d / 30;
	    $diff_month = (int)round($months);


		$html[] = "
		<table style='width:900px;'>
	      <thead>
	        <tr>
	          <th style='width:300px; height:80px; text-align:center; background-color:#E1E1E1;' rowspan='2'>รายละเอียดกิจกรรม</th>
	          ";


	   	$sum_col = 0;

	   	if($count_year == 1)
	   	{
	   		for($j=0;$j<$count_year;$j++){
		   		$j_count[$j] = $end_month - $start_month;
		   		$sum_col = $j_count[$j];

		   		$sum_col == 0 ? $sum_col = 1 : False ;
		   	}
	   	}else{
	   		for($j=0;$j<$count_year;$j++){

		   		if($j==0)
		   		{
					for($i=$start_month;$i<=12;$i++) {	
						$n[$j][] = $j;
						$j_count[$j] = count($n[$j]);
					}
		   		}else if($j==($count_year-1)){
					for($i=1;$i<=$end_month;$i++) {	
						$n[$j][] = $j;
						$j_count[$j] = count($n[$j]);
					}
		   		}else {
					for($i=1;$i<=12;$i++) {	
						$n[$j][] = $j;
						$j_count[$j] = count($n[$j]);
					}
		   		}
		   		$sum_col+=$j_count[$j];
			}
	   	}
	   	


		$i = 0;
	    foreach($year as $year) {
	    $html[] = "
	          <th style='text-align:center; height:40px; background-color:#E1E1E1;'  colspan='$j_count[$i]'>ปี ".($year+543)."</th>
	          ";
	    $i++;
	    }

	    $html[] = "
	        </tr>
	        <tr>";

		for($i=$start_month;$i<=($diff_month+2);$i++) {
		$html[] = "
		        <th style='text-align:center; background-color:#E1E1E1; height:40px;' >".$this->ntom($i)."</th>
		        ";
		}
	

	    $html[] = "
	        </tr>
	      </thead>
	      <tbody>";
	      
	    $day_all = $sum_col*30;

	    $this->load->library('date_convert');
	      
	    $i = 0;
	    foreach($data as $plan) { 
			$chart = $this->DateDiff($plan['plan_start'] ,$plan['plan_end']);
			$chart_width[] = ($chart/$day_all)*100;

			$chart_space = $this->DateDiff($start_date ,$plan['plan_start']);
			$spce_width[] = ($chart_space/$day_all)*100;

			$date = $plan['plan_start'].' - '.$plan['plan_end'];

		$html[] = "
	      	<tr style='margin:0; padding:0;'>
	        	<td style='line-height:25px; padding:12px; margin:0;'>".($i+1).". ".$plan['plan_content']."<br/>( ".$this->date_convert->rangedate_convert($date)." )</td>
	            <td style='line-height:25px; background-color:#fff;' colspan='$sum_col; padding:0; maring:0;'>

		           	<img src='".base_url()."img/space.png' style='width:$spce_width[$i]%; height:2px;'/>
		            <img src='".base_url()."img/chart.jpg' style='width:$chart_width[$i]%; height:3px;'/>
		  

	            </td>
	        </tr>
	    	";
	    $i++;
	    }


	    $html[] ="
	      </tbody>
	    </table>
		";

		// $result = NULL;
		// for($i=0;$i<count($html);$i++)
		// {
		// 	$result .= $html[$i];
		// }

		$result = implode('',$html);
		return $result;

	}

	public function ntom($n)
	{
		$mod = $n%12;
		switch($mod){
			case 1 : return 'มค';
			case 2 : return 'กพ';
			case 3 : return 'มีค';
			case 4 : return 'เมย';
			case 5 : return 'พค';
			case 6 : return 'มิย';
			case 7 : return 'กค';
			case 8 : return 'สค';
			case 9 : return 'กย';
			case 10 : return 'ตค';
			case 11 : return 'พย';
			case 0 : return 'ธค';
		}
	}

	public function DateDiff($strDate1,$strDate2)
	{
		return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	}
}
