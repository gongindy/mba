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
        <li class="active">ทั้งหมด</li>
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
        <h1> โครงการทั้งหมด <small> <i class="ace-icon fa fa-angle-double-right"></i> overview &amp; stats </small> </h1>
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
         </div>
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
                <div class="table-header"> ข้อมูลโครงการทั้งหมด </div>
                
                <!-- div.table-responsive --> 
                
                <!-- div.dataTables_borderWrap -->
                <div>
                  <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th style="text-align:center;">ลำดับ</th>
                        <th style="text-align:center;">รายชื่อโครงการ</th>                        
                        <th style="text-align:center;">งบประมาณ</th>                        
                        <th style="text-align:center;">สถานะโครงกร</th>
                        <th style="text-align:center;">จัดการ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=0; ?>
                      <?php foreach($proposal as $proposal_1) { ?>
                      <?php 
					  		$this->db->where('pro_id',$proposal_1['pro_id']);
							$this->db->select_sum('budget_cost');
							$query = $this->db->get('txt_budget');
							$sum = $query->result_array();
							
							$obj_protype =& get_instance();
							$obj_protype->load->library('proposal_type');
							$type = $obj_protype->proposal_type->convert($proposal_1['pro_type']);
					  ?>
                      <tr>
                        <td align="center"><?php echo $i+1;?></td>
                        <td><?php echo anchor('proposal/view/'.$proposal_1['pro_id'],$proposal_1['pro_name'],'target = "_blank"');?></td>
                        <td align="center"><?php echo $sum[0]['budget_cost'];?></td>
                        <td align="center"><?php echo $type;?></td>
                        <td align="center">
                        <?php if($proposal_1['pro_type'] == 0) { ?>
						<?php echo anchor('proposal/update/'.$proposal_1['pro_id'],'<button class="btn btn-info btn-sm" style="height:34px;"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i> แก้ไข</button>','target = "_blank"');?>
                        <?php } ?>
                        
						<?php echo anchor('proposal/view/'.$proposal_1['pro_id'],'<button class="btn btn-info btn-sm" style="height:34px;"><i class="ace-icon fa fa-eye bigger-120"></i> ตรวจสอบ</button>','target = "_blank"');?>
                        <?php echo anchor('proposal/doc/'.$proposal_1['pro_id'],'<button class="btn btn-info btn-sm" style="height:34px;"><i class="ace-icon fa fa-print bigger-120"></i> พิมพ์</button>','target="_blank"');?>
                     </td>
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
					  null,null,null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
			    } );
			
			})
		</script> 
