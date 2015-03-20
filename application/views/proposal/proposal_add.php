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
        <li class="active">สร้างแบบเสนอโครงการใหม่</li>
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
        <h1> สร้างแบบเสนอโครงการใหม่ <small> <i class="ace-icon fa fa-angle-double-right"></i> overview &amp; stats </small> </h1>
      </div>
      <!-- /.page-header --> 
      <!-- start -->
      
      <div class="row">
        <div class="col-xs-12"> 
          <!-- PAGE CONTENT BEGINS -->
          <?php $att = array('class'=>'form-horizontal','onkeypress'=>'stopRKey()'); ?>
          <?php echo form_open('proposal/do_add',$att);?> 
          <!-- #section:elements.form -->
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ชื่อโครงการ</label>
            <div class="col-sm-9">
              <input type="text" name="pro_name" id="pro_name" placeholder="กรุณากรอกชื่อโครงการ.." class="col-xs-10 col-sm-5" required="required" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ผู้รับผิดชอบ</label>
            <div class="col-sm-9">
              <input type="text" name="pro_owner" id="form-field-1" value="นาย วิศรุต แซ่ปึง" class="col-xs-10 col-sm-5"  readonly="readonly"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">ลักษณะโครงการ</label>
      
				<div class="col-sm-9">
                	<label>
                        <input name="pro_category" type="radio" class="ace" required="required" value="1" />
                    	<span class="lbl">โครงการเดิม</span>
					</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												
                    <label>
                        <input name="pro_category" type="radio" class="ace" value="2"/>
                        <span class="lbl">โครงการต่อเนื่อง</span>
                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            
                    <label>
                        <input name="pro_category" type="radio" class="ace" value="3"/>
                        <span class="lbl">โครงการใหม่</span>
                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        
			</div>								

          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> กลุ่มเป้าหมาย</label>
            <div class="col-sm-9">
              <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="pro_target"  />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> หน่วยงานผู้รับผิดชอบ/ผู้รับผิดชอบโครงการ</label>
            <div class="col-sm-9">
              <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="pro_social"  />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> สถานที่และระยะเวลา</label>
            <div class="col-sm-9">
              <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="pro_location" />
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-9" style="padding-top:1.1em;">
              <div class="input-group"> <span class="input-group-addon"> <i class="fa fa-calendar bigger-110"></i> </span>
                <input type="text" name="date_location" id="daterange" class="col-xs-10 col-sm-3"  />
              </div>
            </div>
          </div>
          <hr/>
          
          <div class="show_improve">
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align:left;"> สิ่งที่ต้องปรับปรุง</label>
            <div class="col-sm-9"> </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1" align="right" style="padding-top:0.6em;"></div>
            <div class="col-sm-11">
              <div class="dd dd-draghandle">
                <ol class="dd-list" id="txt_improve">
                  <li class="dd-item dd2-item" id="li_improve">
                    <div class="dd-handle dd2-handle" style="height:4em;"><i class="ace-icon fa fa-comment bigger-110"></i></div>
                    <div class="dd2-content" style="padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:4em;">
                      <input type"text" name="txt_improve[]" style="padding:0; width:90%; color:#000; font-weight:normal; height:3.2em;" />&nbsp;&nbsp;<button type="button" class="btn btn-danger" onclick="rem('li_improve');" style="padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;">&nbsp;<i class="ace-icon fa fa-trash-o bigger-120"></i></button>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
              <button class="btn btn-success" type="button" onClick="addInput('txt_improve');"> <i class="ace-icon fa fa-plus"></i> เพิ่มรายการ </button>
            </div>
          </div>
         
          
          
          
          
          <hr/> </div><!-- ./div show_improve -->
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align:left;"> หลักการและเหตุผล</label>
            <div class="col-sm-9"> </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1" align="right" style="padding-top:0.6em;"></div>
            <div class="col-sm-11">
              <div class="dd dd-draghandle">
                <ol class="dd-list" id="txt_rationale">
                  <li class="dd-item dd2-item" id="li_rationale">
                    <div class="dd-handle dd2-handle" style="height:9.5em;	"><i class="ace-icon fa fa-comment bigger-110"></i></div>
                    <div class="dd2-content" style="padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:9.5em;">
                      <textarea class="autosize-transition col-xs-10 col-sm-5" name="txt_rationale[]" style="padding:0; width:90%; color:#000; font-weight:normal; height:8em; resize:none;" ></textarea>
                      &nbsp;
                      <button type="button" class="btn btn-danger" onclick="rem('li_rationale');" style="padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;">&nbsp;<i class="ace-icon fa fa-trash-o bigger-120"></i></button>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
              <button class="btn btn-success" type="button" onClick="addInput('txt_rationale');"> <i class="ace-icon fa fa-plus"></i> เพิ่มรายการ </button>
            </div>
          </div>
          <hr/>
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align:left;"> วัตถุประสงค์</label>
            <div class="col-sm-9"> </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1" align="right" style="padding-top:0.6em;"></div>
            <div class="col-sm-11">
              <div class="dd dd-draghandle">
                <ol class="dd-list" id="txt_objective">
                  <li class="dd-item dd2-item" id="li_objective">
                    <div class="dd-handle dd2-handle" style="height:4em;"><i class="ace-icon fa fa-comment bigger-110"></i></div>
                    <div class="dd2-content" style="padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:4em;">
                      <input type"text" name="txt_objective[]" style="padding:0; width:90%; color:#000; font-weight:normal; height:3.2em;" />&nbsp;&nbsp;<button type="button" class="btn btn-danger" onclick="rem('li_objective');" style="padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;">&nbsp;<i class="ace-icon fa fa-trash-o bigger-120"></i></button>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
              <button class="btn btn-success" type="button" onClick="addInput('txt_objective');"> <i class="ace-icon fa fa-plus"></i> เพิ่มรายการ </button>
            </div>
          </div>
          <hr/>
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align:left;"> ประโยชน์</label>
            <div class="col-sm-9"> </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1" align="right" style="padding-top:0.6em;"></div>
            <div class="col-sm-11">
              <div class="dd dd-draghandle">
                <ol class="dd-list" id="txt_benefit">
                  <li class="dd-item dd2-item" id="li_benefit">
                    <div class="dd-handle dd2-handle" style="height:4em;"><i class="ace-icon fa fa-comment bigger-110"></i></div>
                    <div class="dd2-content" style="padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:4em;">
                      <input type"text" name="txt_benefit[]" style="padding:0; width:90%; color:#000; font-weight:normal; height:3.2em;" />&nbsp;&nbsp;<button type="button" class="btn btn-danger" onclick="rem('li_benefit');" style="padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;">&nbsp;<i class="ace-icon fa fa-trash-o bigger-120"></i></button>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
              <button class="btn btn-success" type="button" onClick="addInput('txt_benefit');"> <i class="ace-icon fa fa-plus"></i> เพิ่มรายการ </button>
            </div>
          </div>
          <hr/>
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align:left;"> แผนปฏิบัติการ/กำหนดการ</label>
            <div class="col-sm-9"> </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1" align="right" style="padding-top:0.6em;"></div>
            <div class="col-sm-11">
              <div class="dd dd-draghandle">
                <ol class="dd-list" id="txt_plan">
                  <li class="dd-item dd2-item" id="li_plan">
                    <div class="dd-handle dd2-handle" style="height:4em;"><i class="ace-icon fa fa-comment bigger-110"></i></div>
                    <div class="dd2-content" style="padding-bottom:0em; width:57em; padding-top:0.22em; padding-right:0em; height:4em;">
                      <div class="col-sm-11" style="padding:0; margin:0;">
                        <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="txt_plan[]" style="padding:0; width:30em; color:#000; font-weight:normal; height:3.2em;" />
                        <div clas="col-sm-1">
                          <div class="input-group" style="padding-left:0.6em;"> <span class="input-group-addon"> <i class="fa fa-calendar bigger-110"></i> </span>
                            <input type="text" name="date_plan[]" id="daterange" class="col-xs-10 col-sm-5" style="height:3.2em; width:12em;" />
                          </div>
                        </div>
                      </div>
                      &nbsp;
                      <button type="button" class="btn btn-danger" onclick="rem('li_plan');" style="padding:0em; top:0.05em; margin:0em; width:3em; height:3em;">&nbsp;<i class="ace-icon fa fa-trash-o bigger-120"></i></button>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
              <button class="btn btn-success" type="button" onClick="addInput('txt_plan');"> <i class="ace-icon fa fa-plus"></i> เพิ่มรายการ </button>
            </div>
          </div>
          <hr/>
          <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align:left;"> รายละเอียดงดประมาณ</label>
            <div class="col-sm-9"> </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1" align="right" style="padding-top:0.6em;"></div>
            <div class="col-sm-11">
              <div class="dd dd-draghandle">
                <ol class="dd-list" id="txt_budget">
                  <li class="dd-item dd2-item" id="li_budget">
                    <div class="dd-handle dd2-handle" style="height:4em;"><i class="ace-icon fa fa-comment bigger-110"></i></div>
                    <div class="dd2-content" style="padding-bottom:0em; width:57em; padding-top:0.22em; padding-right:0em; height:4em;">
                      <div class="col-sm-11" style="padding:0; margin:0;">
                        <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="txt_budget[]" style="padding:0; width:30em; color:#000; font-weight:normal; height:3.2em;" />
                        <div clas="col-sm-1">
                          <div class="input-group" style="padding-left:0.6em;"> <span class="input-group-addon"> <i class="fa fa-money bigger-110"></i> </span>
                            <input type="number" name="budget[]" class="col-xs-10 col-sm-5" style="height:3.2em; width:12em;" onChange="sum_budget()" onkeypress="check_num()" />
                          </div>
                        </div>
                      </div>
                      &nbsp;
                      <button type="button" class="btn btn-danger" onclick="rem('li_budget');" style="padding:0em; top:0.05em; margin:0em; width:3em; height:3em;">&nbsp;<i class="ace-icon fa fa-trash-o bigger-120"></i></button>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1" align="right" style="padding-top:0.6em;"></div>
            <div class="col-sm-11">
              <div class="dd dd-draghandle">
                <ol class="dd-list" id="txt_budget">
                  <li class="dd-item dd2-item" id="li_budget">
                    <div class="dd2-content" style="padding-bottom:0em; width:57em; padding-right:0em; text-align:center;">
                      <div class="col-md-7" ><font color="#ff0000">รวมทั้งหมด</font></div>
                      <div class="col-md-5" id="sum_budget"></div>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
              <button class="btn btn-success" type="button" onClick="addInput('txt_budget');"> <i class="ace-icon fa fa-plus"></i> เพิ่มรายการ </button>
            </div>
          </div>
          <hr/>
           <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="text-align:left;"> ตัวชี้วัดโครงการ</label>
            <div class="col-sm-9"> </div>
          </div>
          <div class="form-group">
            <div class="col-sm-1" align="right" style="padding-top:0.6em;"></div>
            <div class="col-sm-11">
              <div class="dd dd-draghandle">
                <ol class="dd-list" id="txt_indicator">
                  <li class="dd-item dd2-item" id="li_indicator">
                    <div class="dd-handle dd2-handle" style="height:21.9em;"><i class="ace-icon fa fa-comment bigger-110"></i></div>
                    <div class="dd2-content" style="padding-bottom:0em; width:40.2em; padding-top:0.22em; padding-right:0em; height:21.9em;">
                    <div class="col-sm-12" style="padding:0; margin-bottom:10px; ">
                      <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="indicator_name[]" style="padding:0; width:30em; color:#000; font-weight:normal; height:3.2em;"  placeholder="ชื่อตัวชี้วัด"/>&nbsp;
                        <button type="button" class="btn btn-danger" onclick="rem('li_indicator');" style="padding:0em; top:0.05em; margin:0em; width:3em; height:3em;">&nbsp;<i class="ace-icon fa fa-trash-o bigger-120"></i></button>						</div>
                        <div class="col-sm-12" style="padding:0; margin-bottom:10px;">
                        <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="indicator_unit[]" style="margin-right:8px; padding:0; width:14.7em; color:#000; font-weight:normal; height:3.2em;"  placeholder="หน่วยนับ"/>
                         <input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="indicator_value[]" style="padding:0; width:14.7em; color:#000; font-weight:normal; height:3.2em;"  placeholder="ค่าเป้าหมาย"/>
                        
                        </div>
                        
                        <div class="col-sm-12" style="padding:0;">
                      <textarea style="padding:0; width:30em; color:#000; font-weight:normal; height:12em;" placeholder="เกณฑ์" name="indicator_level[]" ></textarea>
                       					</div>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-1"></div>
            <div class="col-sm-11">
              <button class="btn btn-success" type="button" onClick="addInput('txt_indicator');"> <i class="ace-icon fa fa-plus"></i> เพิ่มรายการ </button>
            </div>
          </div>
          <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
              <button class="btn btn-info" type="submit"> <i class="ace-icon fa fa-check bigger-110"></i> ยืนยัน </button>
              &nbsp; &nbsp; &nbsp;
              <button class="btn" type="reset"> <i class="ace-icon fa fa-undo bigger-110"></i> ล้างฟอร์ม </button>
            </div>
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
var count_indicator = 1;
function addInput(divName){ 
	newdiv = document.createElement('div');
	switch(divName) {
		case 'txt_improve':			
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_improve_"+(count_improve+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\"><i class=\"ace-icon fa fa-comment bigger-110\"></i></div><div class=\"dd2-content\" style=\"padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:4em;\"><input  type\"text\" name=\"txt_improve[]\" style=\"padding:0; width:90%; color:#000; font-weight:normal; height:3.2em;\"/>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_improve_"+(count_improve+1)+"');\" style=\"padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_improve++;
			break;
		case 'txt_rationale':
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_rationale_"+(count_rationale+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:9.5em;	\"><i class=\"ace-icon fa fa-comment bigger-110\"></i></div><div class=\"dd2-content\" style=\"padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:9.5em;\"><textarea class=\"autosize-transition col-xs-10 col-sm-5\" name=\"txt_rationale[]\" style=\"padding:0; width:90%; color:#000; font-weight:normal; height:8em; resize:none;\" ></textarea>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_rationale_"+(count_rationale+1)+"');\" style=\"padding:0em; top:-0.05em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_rationale++;
			break;
		case 'txt_objective':
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_objective_"+(count_objective+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\"><i class=\"ace-icon fa fa-comment bigger-110\"></i></div><div class=\"dd2-content\" style=\"padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:4em;\"><input  type\"text\" name=\"txt_objective[]\" style=\"padding:0; width:90%; color:#000; font-weight:normal; height:3.2em;\"/>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_objective_"+(count_objective+1)+"');\" style=\"padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_objective++;
			break;
		case 'txt_benefit':
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_benefit_"+(count_benefit+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\"><i class=\"ace-icon fa fa-comment bigger-110\"></i></div><div class=\"dd2-content\" style=\"padding-bottom:0em; padding-top:0.3em; padding-right:0em; height:4em;\"><input  type\"text\" name=\"txt_benefit[]\" style=\"padding:0; width:90%; color:#000; font-weight:normal; height:3.2em;\"/>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_benefit_"+(count_benefit+1)+"');\" style=\"padding:0em; top:-0.1em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_benefit++;
			break;
		case 'txt_plan':
			newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_plan_"+(count_plan+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\"><i class=\"ace-icon fa fa-comment bigger-110\"></i></div><div class=\"dd2-content\" style=\"padding-bottom:0em; width:57em; padding-top:0.3em; padding-right:0em; height:4em;\"><div class=\"col-sm-11\" style=\"padding:0; margin:0;\"><input  type=\"text\" id=\"form-field-1\" class=\"col-xs-10 col-sm-5\" name=\"txt_plan[]\" style=\"padding:0; width:30em; color:#000; font-weight:normal; height:3.2em;\"/><div clas=\"col-sm-1\"><div class=\"input-group\" style=\"padding-left:0.6em;\"> <span class=\"input-group-addon\"> <i class=\"fa fa-calendar bigger-110\"></i> </span><input  type=\"text\" name=\"date_plan[]\" id=\"daterange\" class=\"col-xs-10 col-sm-5\" style=\"height:3.2em; width:12em;\"/></div></div> </div>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_plan_"+(count_plan+1)+"');\" style=\"padding:0em; top:0.05em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";
			count_plan++;
			break;
			
		case 'txt_budget':			
		newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_budget_"+(count_budget+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:4em;\"><i class=\"ace-icon fa fa-comment bigger-110\"></i></div><div class=\"dd2-content\" style=\"padding-bottom:0em; width:57em; padding-top:0.22em; padding-right:0em; height:4em;\"><div class=\"col-sm-11\" style=\"padding:0; margin:0;\"><input  type=\"text\" id=\"form-field-1\" class=\"col-xs-10 col-sm-5\" name=\"txt_budget[]\" style=\"padding:0; width:30em; color:#000; font-weight:normal; height:3.2em;\"/><div clas=\"col-sm-1\"><div class=\"input-group\" style=\"padding-left:0.6em;\"> <span class=\"input-group-addon\"> <i class=\"fa fa-money bigger-110\"></i> </span><input  onkeypress=\"check_num()\" onChange=\"sum_budget()\" type=\"number\" name=\"budget[]\" class=\"col-xs-10 col-sm-5\" style=\"height:3.2em; width:12em;\"/></div></div></div>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_budget_"+(count_budget+1)+"');\" style=\"padding:0em; top:0.05em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div></li>";

			count_budget++;
			break;	
			
		case 'txt_indicator':
		newdiv.innerHTML = "<li class=\"dd-item dd2-item\" id=\"li_indicator_"+(count_indicator+1)+"\"><div class=\"dd-handle dd2-handle\" style=\"height:21.9em;\"><i class=\"ace-icon fa fa-comment bigger-110\"></i></div><div class=\"dd2-content\" style=\"padding-bottom:0em; width:40.2em; padding-top:0.22em; padding-right:0em; height:21.9em;\"><div class=\"col-sm-12\" style=\"padding:0; margin-bottom:10px; \"><input type=\"text\" id=\"form-field-1\" class=\"col-xs-10 col-sm-5\" name=\"indicator_name[]\" style=\"padding:0; width:30em; color:#000; font-weight:normal; height:3.2em;\"  placeholder=\"ชื่อตัวชี้วัด\"/>&nbsp;&nbsp;<button type=\"button\" class=\"btn btn-danger\" onclick=\"rem('li_indicator_"+(count_indicator+1)+"');\" style=\"padding:0em; top:0.05em; margin:0em; width:3em; height:3em;\">&nbsp;<i class=\"ace-icon fa fa-trash-o bigger-120\"></i></button></div><div class=\"col-sm-12\" style=\"padding:0; margin-bottom:10px;\"><input type=\"text\" id=\"form-field-1\" class=\"col-xs-10 col-sm-5\" name=\"indicator_unit[]\" style=\"margin-right:8px; padding:0; width:14.7em; color:#000; font-weight:normal; height:3.2em;\"  placeholder=\"หน่วยนับ\"/><input type=\"text\" id=\"form-field-1\" class=\"col-xs-10 col-sm-5\" name=\"indicator_value[]\" style=\"padding:0; width:14.7em; color:#000; font-weight:normal; height:3.2em;\"  placeholder=\"ค่าเป้าหมาย\"/></div><div class=\"col-sm-12\" style=\"padding:0;\"><textarea style=\"padding:0; width:30em; color:#000; font-weight:normal; height:12em;\" placeholder=\"เกณฑ์\" name=\"indicator_level[]\" ></textarea></div></div></li>";
		count_indicator++;
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
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script> 
<script src="<?php echo base_url();?>assets/js/date-time/moment.js"></script> 
<script src="<?php echo base_url();?>assets/js/date-time/daterangepicker.js"></script> 
<script type="text/javascript">
			$(function() {
				//I've translated the following texts using Google Translate, so it may not be correct
				$('input[id="daterange"]').daterangepicker(
				   

				  { 
					format: 'DD-MM-YYYY',
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'ตกลง',
						cancelLabel: 'ยกเลิก',
					}

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
<script type="text/javascript">
                function stopRKey(evt) {
          var evt = (evt) ? evt : ((event) ? event : null);
          var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
          if ((evt.keyCode == 13) && ((node.type=="text") || (node.type=="radio") || (node.type=="checkbox")) )  {return false;}
        }

        document.onkeypress = stopRKey;

</script> 

<script>
$('input[type="radio"]').change(function(){		
      if (this.checked){
		   if(this.value == 1 || this.value == 2){
			$('.show_improve').show();	
		   
			}else if(this.value == 3){
					$('.show_improve').hide();		
			}
			
		}		
	}).change();
	</script>