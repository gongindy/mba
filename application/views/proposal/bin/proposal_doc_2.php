<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<meta charset="utf-8">
<style>
body {
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	background-color: #FAFAFA;
	font: 12pt "Tahoma";
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
	padding-left: 60px;
	margin-top: 10px;
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
.sign{
	margin-right:150px; 
	margin-top:20px;
	text-align:right;
}
</style>
<head>
<body>
<button type="button" id="printpagebutton" onClick="printpage()" class="btn btn-primary btn-print">
<h3 style="margin:0; padding:0;"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</h3>
</button>
<div class="page">
  <div align="center" style="font-size:18px; line-height:30px; margin-bottom:50px;">แบบฟอร์มการเสนอโครงการ ประจำปีงบประมาณ พ.ศ. 2558<br/>
    คณะวิทยาการจัดการ มหาวิทยาลัยขอนแก่น</div>
  <div class="topic"><font size="+1">1.&nbsp;ชื่อโครงการ </font>&emsp;<?php echo $proposal[0]['pro_name'];?></div>
  <div class="topic"><font size="+1">2.&nbsp;ผู้รับผิดชอบ </font>&emsp;นาย วิศรุต  แซ่ปึง</div>
  <div class="topic"><font size="+1">3.&nbsp;ลักษระโครงการ </font>&emsp;โครงการปกติ</div>
  <div class="topic"><font size="+1">4.&nbsp;สิ่งที่ต้องปรับปรุงจากครั้งที่ผ่านมา </font></div>
  <?php $i = 0;?>
  <?php foreach($improve as $improve) { ?>
  <div class="sub-topic">4.<?php echo $i+1;?>&nbsp;<?php echo $improve['improve_content'];?></div>
  <?php $i++;} ?>
  <div class="topic"><font size="+1">5.&nbsp;ความสอดคล้องกับประเด็นยุทธศาสตร์ คณะฯ </font></div>
  <div class="sub-topic">ประเด็นยุทธสาสตร์ที่ 1 การบริหารจัดการที่ดี</div>
  <div class="topic" style="margin-bottom:10px;"><font size="+1">6.&nbsp;หลักการและเหตุผล </font></div>
  <?php $j = 0;?>
  <?php foreach($rationale as $rationale) { ?>
  <div class="subject"><?php echo $rationale['rationale_content'];?></div>
  <?php $j++;} ?>
</div>
<div class="page">
  <div class="topic"><font size="+1">7.&nbsp;วัตถุประสงค์ </font>&emsp;</div>
  <?php $i = 0;?>
  <?php foreach($objective as $objective) { ?>
  <div class="sub-topic">7.<?php echo $i+1;?>&nbsp;<?php echo $objective['objective_content'];?></div>
  <?php $i++;} ?>
  <div class="topic"><font size="+1">8.&nbsp;กลุ่มเป้าหมาย </font>&emsp;<?php echo $proposal[0]['pro_target'];?></div>
  <div class="topic"><font size="+1">9.&nbsp;สถานที่และระยะเวลา </font>&emsp;<?php echo $proposal[0]['pro_location'];?></div>
  <div class="topic"><font size="+1">10.&nbsp;แผนปฏิบัติการ/กำนดการ </font>&emsp;</div>
  <div style="margin-top:10px;">
    <table class="table table-bordered">
      <thead>
        <tr class="active">
          <th style="width:70%; text-align:center;">รายละเอียดกิจกรรม</th>
          <th style="text-align:center;">ระยะเวลา</th>
        </tr>
      </thead>
      <tbody>
      	<?php $i = 0;?>
      	<?php foreach($plan as $plan) { ?>
      	<tr>
        	<td><?php echo $i+1; ?>. <?php echo $plan['plan_content'];?></td>
            <td></td>
        </tr>
        <?php $i++;} ?>
      </tbody>
    </table>
  </div>
  
    <div class="topic"><font size="+1">11.&nbsp;รายละเอียดงบประมาณ </font>&emsp;</div>
  <div style="margin-top:10px;">
    <table class="table table-bordered">
      <thead>
        <tr class="active">
          <th style="width:70%; text-align:center;">รายละเอียดงบประมาณ</th>
          <th style="text-align:center;">จำนวนเงิน</th>
        </tr>
      </thead>
      <tbody>
      	<?php $i = 0; $sum = 0;?>
      	<?php foreach($budget as $budget) { ?>
      	<tr>
        	<td><?php echo $i+1; ?>. <?php echo $budget['budget_content'];?></td>
            <td align="center"><?php echo number_format($budget['budget_cost']);?></td>
        </tr>
        <?php $sum += $budget['budget_cost'];?>
        <?php $i++;} ?>
        <tr>
        	<th style="text-align:center;">รวมทั้งหมด</td>
            <th style="text-align:center;"><?php echo number_format($sum);?></td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <div class="sign" style="margin-top:80px;">.......................................</div>
  <div class="sign">(.....................................)</div>
  <div class="sign" style="padding-right:30px;">ผู้รับผิดชอบโครงการ</div>
  
</div>

<!-- script print button --> 
<script>
    function printpage() {
        var printButton = document.getElementById("printpagebutton");
        printButton.style.visibility = 'hidden';
        window.print()
        printButton.style.visibility = 'visible';
	}
	</script>
</body>
</html>