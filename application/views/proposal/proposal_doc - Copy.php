<?php $this->load->library('mpdf60/mpdf'); ?>

<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ใบแจ้งค้างชำระค่าบริการ</title>
<style>
body {
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	/*background-color: #FAFAFA;*/
	font-size:14;
}
* {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}
.page {
	width: 210mm;
	min-height: 297mm;
	padding: 20mm;
	margin: 10mm auto;
	border: 1px #D3D3D3 solid;
	border-radius: 5px;
	background: white;
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
 @media all {
.page-break {
	display: none;
}
}
 @media print {
html, body {
	width: 210mm;
	height: 297mm;
}
.page {
	margin: 0;
	border: initial;
	border-radius: initial;
	width: initial;
	min-height: initial;
	box-shadow: initial;
	background: initial;
	page-break-after: always;
}
.page-break {
	display: block;
	page-break-before: always;
}
}
.topic {
	margin-top: 30px;
}
.sub-topic {
	padding-left: 85px;
	margin-top: 10px;
	text-indent:-25px;
}
.subject {
	text-indent: 60px;
	line-height: 25px;
	margin-bottom: 4px;
	text-align : justify;
}
.btn-print {
	height: 50px;
	position: fixed;
	right: 20px;
	bottom: 20px;
	z-index: 99;
}
.td-center{
	style="text-align:center;"
}


table, th, td {
    border: 1px solid black;
}
/*
@page {
	margin-top:3.18cm;
	margin-left:3.18cm;
	margin-right:2.54cm;
	margin-top:2.54cm;
}
*/

</style>
</head>

<body>
  <div align="center" style="font-size:16; line-height:30px; margin-bottom:50px;">แบบฟอร์มการเสนอโครงการ ประจำปีงบประมาณ พ.ศ. 2558<br/>
    คณะวิทยาการจัดการ มหาวิทยาลัยขอนแก่น</div>
  <div class="topic"><strong>1.&nbsp;ชื่อโครงการ</strong> &emsp;<?php echo $proposal[0]['pro_name'];?></div>
  <div class="topic"><strong>2.&nbsp;ผู้รับผิดชอบ</strong>&emsp;นาย วิศรุต  แซ่ปึง</div>
  <div class="topic"><strong>3.&nbsp;ลักษณะโครงการ</strong> &emsp;โครงการปกติ</div>
  <div class="topic"><strong>4.&nbsp;สิ่งที่ต้องปรับปรุงจากครั้งที่ผ่านมา</strong> </div>
  <?php $i = 0;?>
  <?php if($improve == NULL) : ?>
  <div class="sub-topic">ไม่มี</div>
  <?php endif; ?>
  <?php foreach($improve as $improve) { ?>
  <div class="sub-topic">4.<?php echo $i+1;?>&nbsp;<?php echo $improve['improve_content'];?></div>
  <?php $i++;} ?>
  <div class="topic"><strong>5.&nbsp;ความสอดคล้องกับประเด็นยุทธศาสตร์ คณะฯ</strong> </div>
  <div class="sub-topic">ประเด็นยุทธสาสตร์ที่ 1 การบริหารจัดการที่ดี</div>
  <div class="topic" style="margin-bottom:10px;"><strong>6.&nbsp;หลักการและเหตุผล </strong></div>
  <?php if($rationale == NULL) : ?>
  <div class="sub-topic">ไม่มี</div>
  <?php endif; ?>
  <?php $j = 0;?>
  <?php foreach($rationale as $rationale) { ?>
  <div class="subject"><?php echo $rationale['rationale_content'];?></div>
  <?php $j++;} ?>

	
  <div class="topic"><strong>7.&nbsp;วัตถุประสงค์ &emsp;</strong></div>
  <?php if($objective == NULL) : ?>
  <div class="sub-topic">ไม่มี</div>
  <?php endif; ?>
  <?php $i = 0;?>
  <?php foreach($objective as $objective) { ?>
  <div class="sub-topic">7.<?php echo $i+1;?>&nbsp;<?php echo $objective['objective_content'];?></div>
  <?php $i++;} ?>
  


     <div class="topic"><strong>8.&nbsp;ประโยชน์ &emsp;</strong></div>
     <?php if($benefit == NULL) : ?>
  <div class="sub-topic">ไม่มี</div>
  <?php endif; ?>
  <?php $i = 0;?>
  <?php foreach($benefit as $benefit) { ?>
  <div class="sub-topic">8.<?php echo $i+1;?>&nbsp;<?php echo $benefit['benefit_content'];?></div>
  <?php $i++;} ?>

<?php
if($proposal[0]['pro_date'] != NULL) :
$li_date =& get_instance();
$li_date->load->library('date_convert');
$date = $li_date->date_convert->rangedate_convert($proposal[0]['pro_date']);
endif;
?>

  
<div class="topic"><strong>9.&nbsp;กลุ่มเป้าหมาย</strong> &emsp;<?php if($proposal[0]['pro_target'] == NULL) { echo 'ไม่มี'; } else { echo $proposal[0]['pro_target'];} ?></div>
  <div class="topic"><strong>10.&nbsp;สถานที่และระยะเวลา</strong> &emsp;
  <?php if($proposal[0]['pro_localtion'] == NULL && $date == NULL) : ?>
 ไม่มี
   <?php endif; ?>  
  <?php echo $proposal[0]['pro_location'];?> &emsp; <?php echo $date;?>

  </div>
  <div class="topic"><strong>11.&nbsp;แผนปฏิบัติการ/กำนดการ</strong> &emsp;</div>
  <div style="margin-top:10px;">
  
  <?php if($plan != NULL) : ?>
    <table style="width:100%;">
      <thead>
        <tr class="active">
          <th style="width:70%; height:35px; text-align:center; background-color:#E1E1E1;">รายละเอียดกิจกรรม</th>
          <th style="text-align:center; background-color:#E1E1E1;">ระยะเวลา</th>
        </tr>
      </thead>
      <tbody>
      	<?php $i = 0;?>
      	<?php foreach($plan as $plan) { ?>
        <?php 
			$li_date =& get_instance();
			$li_date->load->library('date_convert');
			$date = $li_date->date_convert->rangedate_convert($plan['plan_date']);
		?>
      	<tr>
        	<td style="line-height:25px; padding:12px;"><?php echo $i+1; ?>. <?php echo $plan['plan_content'];?></td>
            <td style="line-height:25px; padding:12px;" align="center"><?php echo $date;?></td>
        </tr>
        <?php $i++;} ?>
      </tbody>
    </table>
    <?php else: ?>
    <div class="sub-topic">ไม่มี</div>
    <?php endif; ?>
  </div>
  
<div class="topic"><strong>12.&nbsp;รายละเอียดงบประมาณ</strong> &emsp;</div>
  <div style="margin-top:10px;">
    <?php if($budget != NULL) : ?>
    <table style="width:100%;">
      <thead>
        <tr class="active">
          <th style="width:70%; height:35px; text-align:center; background-color:#E1E1E1;">รายละเอียดงบประมาณ</th>
          <th style="text-align:center; background-color:#E1E1E1;">จำนวนเงิน</th>
        </tr>
      </thead>
      <tbody>
      	<?php $i = 0; $sum = 0;?>
      	<?php foreach($budget as $budget) { ?>
      	<tr>
        	<td style="line-height:25px; padding:12px;"><?php echo $i+1; ?>. <?php echo $budget['budget_content'];?></td>
            <td align="center" style="line-height:25px; padding:12px;"><?php echo number_format($budget['budget_cost']);?></td>
        </tr>
        <?php $sum += $budget['budget_cost'];?>
        <?php $i++;} ?>
        <tr>
        	<th style="text-align:center; height:35px;">รวมทั้งหมด</td>
            <th style="text-align:center;"><?php echo number_format($sum);?></td>
        </tr>
      </tbody>
    </table>
    <?php else: ?>
    <div class="sub-topic">ไม่มี</div>
    <?php endif; ?>
  </div>
  
   <div class="topic"><strong>13.&nbsp;ตัวชี้วัดโครงการ</strong> &emsp;</div>
  <div style="margin-top:10px;">
  <?php if($indicator != NULL) : ?>
    <table style="width:100%;">
      <thead>
        <tr class="active">
          <th style="width:35%; height:35px; text-align:center; background-color:#E1E1E1;">ชื่อตัวชี้วัด</th>
          <th style="text-align:center; background-color:#E1E1E1;">หน่วยนับ</th>
          <th style="text-align:center; background-color:#E1E1E1;">ค่าเป้าหมาย</th>
          <th style="width:35%; text-align:center; background-color:#E1E1E1;">เกณฑ์</th>
        </tr>
      </thead>
      <tbody>
      <?php $i = 0 ; ?>
      <?php foreach($indicator as $indicator) { ?>
      <tr>
      	<td style="padding:15px; line-height:25px;" valign="top"><?php echo $i+1; ?>. <?php echo $indicator['indicator_name'];?></td>
        <td style="padding:15px; line-height:25px;" align="center" valign="top"><?php echo $indicator['indicator_unit'];?></td>
        <td style="padding:15px; line-height:25px;" align="center" valign="top"><?php echo $indicator['indicator_value'];?></td>
        <td style="padding:15px; line-height:25px;"><?php echo $indicator['indicator_level'];?></td>
      </tr>
      <?php $i++; } ?>
      </tbody>
    </table>
    <?php else: ?>
    <div class="sub-topic">ไม่มี</div>
    <?php endif; ?>
  </div>
  
<table width="100%" style="margin-top:100px; border:none;" >
<tr style="border:none;">
	<td width="25%" height="30px" style="border:none;"></td>
    <td align="center" style="border:none;">....................................</td>
</tr>
<tr style="border:none;">
	<td style="border:none;" height="30px"></td>
    <td align="center" style="border:none;">(นาย วิศรุต แซ่ปึง)</td>
</tr>
<tr style="border:none;">
	<td style="border:none;" height="30px"></td>
    <td align="center" style="border:none;">ผู้รับผิดชอบโครงการ</td>
</tr>
</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf = new mPDF('tha','A4','0','Angsana','30','20','30','20');
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
$mpdf->AddPage('', '', 1, '{PAGENO}', 'off'); 
$mpdf->defaultheaderfontsize = '12px';
$mpdf->defaultheaderfontstyle = N;
$mpdf->defaultheaderline = 0;
$mpdf->SetHeader('{PAGENO}');
$mpdf->WriteHTML($html);


$mpdf->Output();
?>