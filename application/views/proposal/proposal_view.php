<div class="main-content">
  <div class="main-content-inner"> 
    <!-- #section:basics/content.breadcrumbs -->
    <div class="breadcrumbs" id="breadcrumbs"> 
      <script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>
      <ul class="breadcrumb">
        <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="#">ระบบจัดการโครงการ</a> </li>
        <li class="active">จัดการโครงการ</li>
        <li class="active">ตรวจสอบร่างเสนอโครงการ</li>
      </ul>
      <!-- /.breadcrumb --> 
      
      <!-- #section:basics/content	.searchbox -->
      <div class="nav-search" id="nav-search">
        <form class="form-search">
          <span class="input-icon">
          <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
          <i class="ace-icon fa fa-search nav-search-icon"></i> </span>
        </form>
      </div>
      <!-- /.nav-search --> 
      
      <!-- /section:basics/content.searchbox --> 
    </div>
    
    <!-- /section:basics/content.breadcrumbs -->
    <div class="page-content"> 
      <!-- #section:settings.box -->
      <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn"> <i class="ace-icon fa fa-cog bigger-130"></i> </div>
        <div class="ace-settings-box clearfix" id="ace-settings-box">
          <div class="pull-left width-50"> 
            <!-- #section:settings.skins -->
            <div class="ace-settings-item">
              <div class="pull-left">
                <select id="skin-colorpicker" class="hide">
                  <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                  <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                  <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                  <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                </select>
              </div>
              <span>&nbsp; Choose Skin</span> </div>
            
            <!-- /section:settings.skins --> 
            
            <!-- #section:settings.navbar -->
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
              <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
            </div>
            
            <!-- /section:settings.navbar --> 
            
            <!-- #section:settings.sidebar -->
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
              <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
            </div>
            
            <!-- /section:settings.sidebar --> 
            
            <!-- #section:settings.breadcrumbs -->
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
              <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
            </div>
            
            <!-- /section:settings.breadcrumbs --> 
            
            <!-- #section:settings.rtl -->
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
              <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
            </div>
            
            <!-- /section:settings.rtl --> 
            
            <!-- #section:settings.container -->
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
              <label class="lbl" for="ace-settings-add-container"> Inside <b>.container</b> </label>
            </div>
            
            <!-- /section:settings.container --> 
          </div>
          <!-- /.pull-left -->
          
          <div class="pull-left width-50"> 
            <!-- #section:basics/sidebar.options -->
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
              <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
            </div>
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
              <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
            </div>
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
              <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
            </div>
            
            <!-- /section:basics/sidebar.options --> 
          </div>
          <!-- /.pull-left --> 
        </div>
        <!-- /.ace-settings-box --> 
      </div>
      <!-- /.ace-settings-container --> 
      
      <!-- /section:settings.box -->
      <div class="page-header">
        <h1><span class="active">ตรวจสอบร่างเสนอโครงการ</span><small> <i class="ace-icon fa fa-angle-double-right"></i> overview &amp; stats </small> </h1>
      </div>
      <!-- /.page-header --> 
      <!-- start -->
      
      <div class="row">
        <div class="col-xs-12"> 
          <!-- PAGE CONTENT BEGINS -->
          <?php $att = array('class'=>'form-horizontal','id'=>'form_proposal'); ?>
          <?php echo form_open('proposal/confirm',$att);?> 
          <!-- #section:elements.form -->
          <input type="hidden" value="<?php echo $proposal[0]['pro_id'];?>" name="pro_id" />
          <div class="row control-label">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" >
              <label><strong>ชื่อโครงการ</strong></label>
            </div>
            <div class="col-sm-9" align="left" >
              <label><?php echo $proposal[0]['pro_name'];?></label>
            </div>
          </div>
          <div class="row control-label">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" >
              <label><strong>เจ้าของโครงการ</strong></label>
            </div>
            <div class="col-sm-9" align="left" >
              <label>นาย วิศรุต  แซ่ปึง</label>
            </div>
          </div>
          <?php 
				$this->db->where('pro_id',$this->uri->segment(3));
				$this->db->select_sum('budget_cost');
				$query = $this->db->get('txt_budget');
		  		$sum = $query->result_array();
		  ?>
          <div class="row control-label">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" >
              <label><strong>งบประมาณ</strong></label>
            </div>
            <div class="col-sm-9" align="left" >
              <label><?php echo $sum[0]['budget_cost'];?></label>
            </div>
          </div>
          <?php 
			  	$li_protype =& get_instance();
			  	$li_protype->load->library('proposal_type');
			  	$type = $li_protype->proposal_type->convert($proposal[0]['pro_type']);
		  ?>
          <div class="row control-label">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" >
              <label><strong>สถานะ</strong></label>
            </div>
            <div class="col-sm-9" align="left" >
              <label><?php echo $type; ?></label>
            </div>
          </div>
          <?php
		  		$li_date =& get_instance();
		  		$li_date->load->library('date_convert');
				$date = $li_date->date_convert->convert($proposal[0]['pro_timestamp']);
		  ?>
          <div class="row control-label">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" >
              <label><strong>แก้ไขล่าสุด</strong></label>
            </div>
            <div class="col-sm-9" align="left" >
              <label><?php echo $date;?></label>
            </div>
          </div>  
		  <?php if($proposal[0]['pro_year'] != 1) { ?>
          <div class="row control-label">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" >
              <label><strong>ปีงบประมาณ</strong></label>
            </div>
            
          
            <div class="col-sm-9" align="left" >
              <select class="form-control" style="width:12em;" name="year_id">       
              <?php foreach($year as $year) : ?>							                  
				<option value="<?= $year['year_id'];?>"><?= $year['year_name'];?></option>
              <?php endforeach; ?>
 			  </select>
            </div>
         
            
          </div>
             <?php } ?>
          <?php if($proposal[0]['pro_type'] == 0) : ?>
          <div class="row control-label">
            <div class="col-sm-1"></div>
            <div class="col-sm-2">
              <label class="red2"><strong>ลบร่างโครงการ</strong></label>
            </div>
            
          
            <div class="col-sm-9" align="left" >
              <input type="checkbox" name="del" value="del" />
            </div>
            
          </div>
          <div class="row control-label btn_del">
            <div class="col-sm-1"></div>
            <div class="col-sm-2">
              <label class="red2"></label>
            </div>
            
          
            <div class="col-sm-9" align="left" >
              <button class="btn btn-danger" data-toggle="modal" data-target="#delete"  type="button"> <i class="ace-icon fa fa-trash bigger-110"></i> ลบร่างโครงการ </button>
            </div>
            
          </div>
          <?php endif; ?>
          
          <hr/>
          <style>
		  
.timeline-item .widget-box {
  background-color: #F2F6F9;
  color: #595C66;
}
.timeline-item .transparent.widget-box {
  border-left: 3px solid #DAE1E5;
}
.timeline-item .transparent .widget-header {
  background-color: #ECF1F4;
  border-bottom-width: 0;
}
.timeline-item .transparent .widget-header > .widget-title {
  margin-left: 8px;
}
.timeline-item:nth-child(even) .widget-box {
  background-color: #F2F6F9;/*#F3F3F3;*/ 
  color: #616161;
}
.timeline-item:nth-child(even) .widget-box.transparent {
  border-left-color: #DBDBDB !important;
}
.timeline-item:nth-child(even) .widget-box.transparent .widget-header {
  background-color: #EEE !important;
}
		  </style>
          <div class="row">
            <div class="col-sm-8 widget-container-col"> 
              <!-- #section:custom/widget-box.options.transparent -->
              <div class="widget-box transparent">
                <div class="widget-header">
                  <h4 class="widget-title lighter">สถานะร่างโครงการ</h4>
                  <div class="widget-toolbar no-border"> <a href="#" data-action="collapse"> <i class="ace-icon fa fa-chevron-up"></i> </a> </div>
                </div>
                <div class="widget-body">
                  <div class="widget-main padding-6 no-padding-left no-padding-right">
                    <div id="timeline-1">
                      <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1"> 
                          <!-- /.timeline-container -->
                          
                          <div class="timeline-container">
                            <div class="timeline-items">
                              <?php if($proposal[0]['pro_type'] != 0) { ?>
                              <div class="timeline-item clearfix">
                                <div class="timeline-info">
                                  <p class="timeline-indicator ace-icon btn btn-info no-hover">1</p>
                                </div>
                                <div class="widget-box transparent">
                                  <div class="widget-body">
                                    <div class="widget-main">ร่างโครงการใหม่
                                      <div class="pull-right">
                                      
                                      <?php if($proposal[0]['time_0'] != null) { ?>
                                       <i class="ace-icon fa fa-clock-o bigger-110"></i> <?php echo $li_date->date_convert->convert($proposal[0]['time_0']);?>
                                       <?php } ?>
                                       
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php } else { ?>
                              <div class="timeline-item clearfix">
                                <div class="timeline-info">
                                  <p class="timeline-indicator ace-icon btn btn-success no-hover">1</p>
                                </div>
                                <div class="widget-box widget-color-green">
                                  <div class="widget-header widget-header-small">
                                    <h5 class="widget-title smaller">ร่างโครงการใหม่</h5>
                                     <?php if($proposal[0]['time_0'] != null) { ?>
                                    <span class="widget-toolbar no-border">
																	<i class="ace-icon fa fa-clock-o bigger-110"></i>
																	<?php echo $li_date->date_convert->convert($proposal[0]['time_0']);?>
																</span>
                                                                <?php } ?>

                                  </div>
                                </div>
                              </div>
                              <?php } ?>
                              <?php if($proposal[0]['pro_type'] != 1) { ?>
                              <div class="timeline-item clearfix">
                                <div class="timeline-info">
                                  <p class="timeline-indicator ace-icon btn btn-info no-hover">2</p>
                                </div>
                                <div class="widget-box transparent">
                                  <div class="widget-body">
                                    <div class="widget-main">ยืนยันการร่างโครงการ
                                     <?php if($proposal[0]['time_1'] != null) { ?>
                                    <div class="pull-right"> <i class="ace-icon fa fa-clock-o bigger-110"></i> <?php echo $li_date->date_convert->convert($proposal[0]['time_1']);?> </div><?php } ?>
                                    
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php } else { ?>
                              <div class="timeline-item clearfix">
                                <div class="timeline-info">
                                  <p class="timeline-indicator ace-icon btn btn-success no-hover">2</p>
                                </div>
                                <div class="widget-box widget-color-green">
                                  <div class="widget-header widget-header-small">
                                    <h5 class="widget-title smaller">ยืนยันการร่างโครงการ</h5>
                                    <?php if($proposal[0]['time_1'] != null) { ?>
                                    <span class="widget-toolbar no-border">
																	<i class="ace-icon fa fa-clock-o bigger-110"></i>
																	<?php echo $li_date->date_convert->convert($proposal[0]['time_1']);?>
																</span>
                                                                <?php } ?>
                                  </div>
                                </div>
                              </div>
                              <?php } ?>
                              <?php if($proposal[0]['pro_type'] != 2) { ?>
                              <div class="timeline-item clearfix">
                                <div class="timeline-info">
                                  <p class="timeline-indicator ace-icon btn btn-info no-hover">3</p>
                                </div>
                                <div class="widget-box transparent">
                                  <div class="widget-body">
                                    <div class="widget-main">รออนุมัติร่างโครงการ</div>
                                  </div>
                                </div>
                              </div>
                              <?php } else { ?>
                              <div class="timeline-item clearfix">
                                <div class="timeline-info">
                                  <p class="timeline-indicator ace-icon btn btn-success no-hover">3</p>
                                </div>
                                <div class="widget-box widget-color-green">
                                  <div class="widget-header widget-header-small">
                                    <h5 class="widget-title smaller">รออนุมัติร่างโครงการ</h5>
                                  </div>
                                </div>
                              </div>
                              <?php } ?>
                            </div>
                            <!-- /.timeline-items --> 
                          </div>
                          <!-- /.timeline-container --> 
                          
                          <!-- /.timeline-container --> 
                          
                          <!-- /section:pages/timeline --> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- /section:custom/widget-box.options.transparent --> 
            </div>
          </div>
          <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
            	<?php if($proposal[0]['pro_type'] == '0') : ?>
              <button class="btn btn-info" type="submit"> <i class="ace-icon fa fa-check bigger-110"></i> ยืนยันร่างโครงการ </button><?php endif; ?>
              &nbsp; &nbsp; &nbsp; <a href="<?php echo site_url('proposal');?>">
              <button class="btn" type="button">ย้อนกลับ</button>
              </a> </div>
          </div>
          <?php echo form_close();?> </div>
      </div>
      
      <!-- /.stop --> 
    </div>
    
    <!-- /.page-content --> 
  </div>
</div>
<script>
document.getElementById("pro_name").focus();

var count_improve = 1;
var count_rationale = 1;
var count_objective = 1;
var count_benefit = 1;
var count_plan = 1;
var count_budget = 1;
function addInput(divName){ 
	newdiv = document.createElement('div');
	switch(divName) {
		case 'txt_improve':			
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_improve_"+(count_improve+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\">#"+(count_improve+1)+"</div><div class=\"dd2-content\" style=\"padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:4em;\"><input required type\"text\" name=\"txt_improve[]\" style=\"padding:0; width:90%; color:#000; font-weight:normal; height:3.2em;\"/>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_improve_"+(count_improve+1)+"');\" style=\"padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_improve++;
			break;
		case 'txt_rationale':
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_rationale_"+(count_rationale+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:9.5em;	\">#"+(count_rationale+1)+"</div><div class=\"dd2-content\" style=\"padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:9.5em;\"><textarea class=\"autosize-transition col-xs-10 col-sm-5\" name=\"txt_rationale[]\" style=\"padding:0; width:90%; color:#000; font-weight:normal; height:8em; resize:none;\" required=\"required\"></textarea>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_rationale_"+(count_rationale+1)+"');\" style=\"padding:0em; top:-0.05em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_rationale++;
			break;
		case 'txt_objective':
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_objective_"+(count_objective+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\">#"+(count_objective+1)+"</div><div class=\"dd2-content\" style=\"padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:4em;\"><input required type\"text\" name=\"txt_objective[]\" style=\"padding:0; width:90%; color:#000; font-weight:normal; height:3.2em;\"/>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_objective_"+(count_objective+1)+"');\" style=\"padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_objective++;
			break;
		case 'txt_benefit':
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_benefit_"+(count_benefit+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\">#"+(count_benefit+1)+"</div><div class=\"dd2-content\" style=\"padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:4em;\"><input required type\"text\" name=\"txt_benefit[]\" style=\"padding:0; width:90%; color:#000; font-weight:normal; height:3.2em;\"/>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_benefit_"+(count_benefit+1)+"');\" style=\"padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_benefit++;
			break;
		case 'txt_plan':
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_plan_"+(count_plan+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\">#"+(count_plan+1)+"</div><div class=\"dd2-content\" style=\"padding-bottom:0em; width:57em; padding-top:0.3em; padding-right:0em; height:4em;\"><div class=\"col-sm-11\" style=\"padding:0; margin:0;\"><input required type=\"text\" id=\"form-field-1\" class=\"col-xs-10 col-sm-5\" name=\"txt_plan[]\" style=\"padding:0; width:30em; color:#000; font-weight:normal; height:3.2em;\"/><div clas=\"col-sm-1\"><div class=\"input-group\" style=\"padding-left:0.6em;\"> <span class=\"input-group-addon\"> <i class=\"fa fa-calendar bigger-110\"></i> </span><input required type=\"text\" name=\"date_plan[]\" id=\"daterange\" class=\"col-xs-10 col-sm-5\" style=\"height:3.2em; width:12em;\"/></div></div> </div>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_plan_"+(count_plan+1)+"');\" style=\"padding:0em; top:0.05em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_plan++;
			break;
			
		case 'txt_budget':			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_budget_"+(count_budget+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\">#"+(count_budget+1)+"</div><div class=\"dd2-content\" style=\"padding-bottom:0em; width:57em; padding-top:0.22em; padding-right:0em; height:4em;\"><div class=\"col-sm-11\" style=\"padding:0; margin:0;\"><input required type=\"text\" id=\"form-field-1\" class=\"col-xs-10 col-sm-5\" name=\"txt_budget[]\" style=\"padding:0; width:30em; color:#000; font-weight:normal; height:3.2em;\"/><div clas=\"col-sm-1\"><div class=\"input-group\" style=\"padding-left:0.6em;\"> <span class=\"input-group-addon\"> <i class=\"fa fa-money bigger-110\"></i> </span><input required onkeypress=\"check_num()\" onChange=\"sum_budget()\" type=\"number\" name=\"budget[]\" class=\"col-xs-10 col-sm-5\" style=\"height:3.2em; width:12em;\"/></div></div></div>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_budget_"+(count_budget+1)+"');\" style=\"padding:0em; top:0.05em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";

			count_budget++;
			break;	
	}
	document.getElementById(divName).appendChild(newdiv);
	
	

				//I've translated the following texts using Google Translate, so it may not be correct
				$('input[name="date_plan[]"]').daterangepicker(
				  { 
					format: 'DD-MM-YYYY'
				  }
				);

				
				
				if(location.protocol == 'file:') alert("For retrieving data from server, you should access this page using a webserver.");
		
	

}
function check_num() {
		key=event.keyCode
		if (key<48  ||  key>57) event.returnValue = false;
	}
function sum_budget(){
			//var x = document.querySelectorAll('[name="budget[]"]')[0].value;
			//document.getElementById("sum_budget").innerHTML = x;
			
	var items = document.getElementsByName("budget[]");
    var itemCount = items.length;
    var total = 0;
    for(var i = 0; i < itemCount; i++)
    {
        total = total +  parseInt(items[i].value);		
    }
	total = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    document.getElementById("sum_budget").innerHTML = "<font color='#ff0000'>"+total+"</font>";
    //document.getElementById('credit_load').value = sum;

}

</script> 
<script type="text/javascript">
		 window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.js'>"+"<"+"/script>");
		</script> 
        <!--
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script> 
-->
<script src="<?php echo base_url();?>assets/js/date-time/moment.js"></script> 
<script src="<?php echo base_url();?>assets/js/date-time/daterangepicker.js"></script> 
<script type="text/javascript">
			$(function() {
				//I've translated the following texts using Google Translate, so it may not be correct
				$('input[id="daterange"]').daterangepicker(
				  { 
					format: 'DD-MM-YYYY'
				  }
				);

				
				
				if(location.protocol == 'file:') alert("For retrieving data from server, you should access this page using a webserver.");
			});
		</script> 
<script>
	function rem(it) { 
		document.getElementById(it).remove();	
	}
</script> 

<!-- page specific plugin scripts --> 
<script src="<?php echo base_url();?>assets/js/jquery.nestable.js"></script> 

<!-- inline scripts related to this page --> 
<script type="text/javascript">
			jQuery(function($){
			
				$('.dd').nestable();
			
				$('.dd-handle a').on('mousedown', function(e){
					e.stopPropagation();
				});
				
				$('[data-rel="tooltip"]').tooltip();
			
			});
		</script> 
<script>
		$('#form_proposal').on("keyup keypress", function(e) {
  var code = e.keyCode || e.which; 
  if (code  == 13) {               
    e.preventDefault();
    return false;
  }
});
</script>

<script>
$('input[type="checkbox"]').change(function(){		
      if (this.checked){
			$('.btn_del').show();		
	  }	else {
		  $('.btn_del').hide();		
	  }
	}).change();
</script>


<!-- Delete-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title red" id="myModalLabel"><i class="ace-icon fa fa-trash-o bigger-120"></i> ลบข้อมูล</h4>
      </div>
      <div class="modal-body"> <?php echo form_open('proposal/del');?>
        <div class="row">
          <div class="col-md-12" align="center"> คุณต้องการร่างโครงการใช่หรือไม่ ? </div>
          <div class="col-md-12" align="center" style="margin-top:1.1em;">
            <input type="hidden" name="pro_id" value="<?= $proposal[0]['pro_id'];?>" />
            <button class="btn btn-danger btn-sm" style="height:34px;"><i class="ace-icon fa fa-trash-o bigger-120"></i> ยืนยัน</button>
            <button class="btn btn-default btn-sm" type="button" style="height:34px;" data-dismiss="modal">ยกเลิก</button>
          </div>
        </div>
        <?php echo form_close();?> </div>
    </div>
  </div>
</div>
<!-- /.Delete-->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
</script> 