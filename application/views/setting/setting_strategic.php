<div class="main-content">
  <div class="main-content-inner"> 
    <!-- #section:basics/content.breadcrumbs -->
    <div class="breadcrumbs" id="breadcrumbs"> 
      <script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>
      <ul class="breadcrumb">
        <li> <i class="ace-icon fa fa-home home-icon"></i> <a href="#">ระบบจัดการโครงการ</a> </li>
        <li class="active">ตั้งค่าระบบ</li>
        <li class="active">จัดการประเด็นยุทธศาสตร์</li>
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
        <h1> จัดการประเด็นยุทธศาสตร์ <small> <i class="ace-icon fa fa-angle-double-right"></i> overview &amp; stats </small> </h1>
      </div>
      <!-- /.page-header --> 
      <!-- start -->
      <div class="row">
        <div class="col-xs-12">
          <?php if($this->uri->segment(3) == 'success' || $this->uri->segment(3) == 'success_update') { ?>
          <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert"> <i class="ace-icon fa fa-times"></i> </button>
            <i class="ace-icon fa fa-check green"></i> <strong>สำเร็จ!</strong>
            <?php if($this->uri->segment(3) == 'success') { ?>
            ข้อมูลถูกเพิ่มเรียบร้อยแล้ว.
            <?php } else { ?>
            ข้อมูลถูกแก้ไขเรียบร้อยแล้ว.
            <?php } ?>
          </div>
          <?php } else if($this->uri->segment(3) == 'success_del') { ?>
          <div class="alert alert-block alert-danger">
            <button type="button" class="close" data-dismiss="alert"> <i class="ace-icon fa fa-times"></i> </button>
            <i class="ace-icon fa fa-check danger"></i> <strong>สำเร็จ!</strong> ข้อมูลถูกลบเรียบร้อยแล้ว. </div>
          <?php } ?>
          <!-- PAGE CONTENT BEGINS --> 
          <?php echo form_open('setting_strategic/add');?> 
          <!-- #section:elements.form -->
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align:right; padding-top:0.4em;"> ชื่อประเด้นยุทธศาสตร์ใหม่</label>
            <div class="col-sm-6">
              <input type="text" id="strategic_name" name="strategic_name" placeholder="กรุณากรอกชื่อประเด็นยุทธศาสตร์ที่ต้องการเพิ่ม.." class="col-xs-10 col-sm-5" required style="width:70%;"/>
              <script>
    document.getElementById("strategic_name").focus();

</script>
              <div class="col-sm-3" >
                <button class="btn btn-sm btn-success" type="submit"> <i class="ace-icon fa fa-plus bigger-110"></i> เพิ่มข้อมูล </button>
              </div>
            </div>
          </div>
          <?php echo form_close();?> </div>
        <div class="row">
          <div class="col-xs-12"> 
            <!-- PAGE CONTENT BEGINS -->
            <div class="row"></div>
            <!-- /.row -->
            
            <div class="row">
              <div class="col-xs-12">
                <div class="clearfix">
                  <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header"> ข้อมูลประเด็นยุทธศาสตร์ </div>
                
                <!-- div.table-responsive --> 
                
                <!-- div.dataTables_borderWrap -->
                <div>
                  <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th style="text-align:center;">ลำดับ</th>
                        <th>รายชื่อ</th>
                        <th style="text-align:center;">จัดการ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; ?>
                      <?php foreach($strategic as $strategic_1) { ?>
                      <tr>
                        <td align="center"><?php echo $i+1;?></td>
                        <td><?php echo $strategic_1['strategic_name'];?></td>
                        <td align="center"><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#update_<?php echo $strategic_1['strategic_id'];?>" style="height:34px;"><i class="ace-icon fa fa-pencil bigger-120"></i> แก้ไข</button>
                          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_<?php echo $strategic_1['strategic_id'];?>" style="height:34px;"><i class="ace-icon fa fa-trash-o bigger-120"></i> ลบ</button></td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
            <!-- PAGE CONTENT ENDS --> 
          </div>
          <!-- /.col --> 
        </div>
        <!-- /.row --> 
        
      </div>
      
      <!-- /.stop --> 
    </div>
    <!-- /.page-content --> 
  </div>
</div>
<?php foreach($strategic as $strategic_2) { ?>
<!-- Update-->
<div class="modal fade" id="update_<?php echo $strategic_2['strategic_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title blue" id="myModalLabel"><i class="ace-icon fa fa-pencil bigger-120"></i> แก้ไขข้อมูล</h4>
      </div>
      <div class="modal-body">
        <div class="row"> <?php echo form_open('setting_strategic/update');?>
          <div class="col-md-12" align="center">
            <input type="hidden" name="strategic_id" value="<?php echo $strategic_2['strategic_id'];?>" />
            <input type="text" name="strategic_name" value="<?php echo $strategic_2['strategic_name'];?>" />
          </div>
          <div class="col-md-12" align="center" style="margin-top:1.1em;">
            <button class="btn btn-info btn-sm" style="height:34px;"><i class="ace-icon fa fa-pencil bigger-120"></i> ยืนยัน</button>
            <button class="btn btn-default btn-sm" type="button" style="height:34px;" data-dismiss="modal">ยกเลิก</button>
          </div>
          <?php echo form_close();?> </div>
      </div>
    </div>
  </div>
</div>
<!-- /.Update--> 

<!-- Delete-->
<div class="modal fade" id="delete_<?php echo $strategic_2['strategic_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title red" id="myModalLabel"><i class="ace-icon fa fa-trash-o bigger-120"></i> ลบข้อมูล</h4>
      </div>
      <div class="modal-body"> <?php echo form_open('setting_strategic/delete');?>
        <div class="row">
          <div class="col-md-12" align="center"> คุณต้องการลบข้อมูลใช่หรือไม่ ? </div>
          <div class="col-md-12" align="center" style="margin-top:1.1em;">
            <input type="hidden" name="strategic_id" value="<?php echo $strategic_2['strategic_id'];?>" />
            <button class="btn btn-danger btn-sm" style="height:34px;"><i class="ace-icon fa fa-trash-o bigger-120"></i> ยืนยัน</button>
            <button class="btn btn-default btn-sm" type="button" style="height:34px;" data-dismiss="modal">ยกเลิก</button>
          </div>
        </div>
        <?php echo form_close();?> </div>
    </div>
  </div>
</div>
<!-- /.Delete-->
<?php } ?>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
</script> 
<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]--> 

<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]--> 
<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script> 

<!-- page specific plugin scripts --> 
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script> 
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.bootstrap.js"></script> 

<!-- inline scripts related to this page --> 
<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var oTable1 = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: true,
					"aoColumns": [
					  { "bSortable": true },
					  null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
			    } );
			
			})
		</script> 
