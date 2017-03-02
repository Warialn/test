<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>后台管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="/Hospitalsrms/Public//bootstrap/css/bootstrap.min2.css" rel="stylesheet">
<link href="/Hospitalsrms/Public//bootstrap/css/admintop.css" rel="stylesheet">
<link href="/Hospitalsrms/Public//bootstrap/css/font-awesome.css" rel="stylesheet">
<script src="/Hospitalsrms/Public//bootstrap/js/jquery.min.js"></script>
<script src="/Hospitalsrms/Public//bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="contain">
	<div class="navbar navbar-duomi navbar-static-top" role="navigation">
	        <div class="container-fluid" style="background-color:#485b7f;">
	            <div class="navbar-header">
	                <span class="navbar-brand"id="logo">后台管理系统</span>
	            </div>
	            <div class="container">
		            <p class="pull-right" style="color:white;margin-top:14px;">欢迎您，XXX</p>
		        </div>
	        </div>
	    </div>
	        <div class="col-md-12 column">
	            <div class="row clearfix">
	                <div class="col-md-2 column" style="background-color:#E4E6E9;height:580px">
	                    <div class="col-md-12" >
	                        <ul class="nav nav-list">
	                            <li><a href="#" class="dropdown-toggle">
									<i class="icon-journal"></i>
									<span class="menu-text"> 科研统计管理 </span>
									<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu" id="Kytj">
		                            	<li>
											<a href="<?php echo U('Kytj/index');?>">
												<i class="icon-double-angle-right"></i>
											    论文统计管理
											</a>
										</li>
										<li>
											<a href="<?php echo U('Kytj/Achievement');?>">
												<i class="icon-double-angle-right"></i>
												科研成果管理
											</a>
										</li>
										<li>
											<a href="<?php echo U('Kytj/Propty');?>">
												<i class="icon-double-angle-right"></i>
												知识产权管理
											</a>
										</li>

										<li>
											<a href="<?php echo U('Kytj/Equipment');?>">
												<i class="icon-double-angle-right"></i>
											    仪器设备管理
											</a>
										</li>		                            
									</ul>
								</li>
		                        
		                        <li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-user0"></i>
										<span class="menu-text"> 项目申报管理 </span>
									</a>
									<ul class="submenu">
										<li>
											<a href="<?php echo U('Xmsb/index');?>">
												<i class="icon-double-angle-right"></i>
												课题申请
											</a>
										</li>
						
										<li>
											<a href="<?php echo U('Xmsb/department');?>">
												<i class="icon-double-angle-right"></i>
												科研平台申请
											</a>
										</li>
		                                <li>
											<a href="<?php echo U('Xmsb/coller');?>">
												<i class="icon-double-angle-right"></i>
												领用申请
											</a>

										</li>
										<li>
											<a href="<?php echo U('Xmsb/purchase');?>">
												<i class="icon-double-angle-right"></i>
												采购申请
											</a>
										</li>
									</ul>
								</li>
		                        <li>  
		                            <a href="#" class="dropdown-toggle">  
			                            <i class="icon-desktop"></i>  
			                            <span class="menu-text">科研经费管理 </span>    
		                            </a> 
		                            <ul class="submenu"> 
		                         
			                            <li>
											<a href="<?php echo U('Kyjf/index');?>">
												<i class="icon-double-angle-right"></i>
											    经费报销
											</a>

										</li>
			                            <li  <?php if(($action) == "spec"): ?>class="active"<?php endif; ?>>

											<a href="<?php echo U('Kyjf/apply');?>">
												<i class="icon-double-angle-right"></i>
											    经费申请
											</a>
										</li>
		                            </ul>                    
		                    	</li>
		                        
		                        
		                         <li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-alarm"></i>
										<span class="menu-text"> 学术活动管理 </span>

										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">
		                             	<li>

											<a href="<?php echo U('Xshd/index');?>">
												<i class="icon-double-angle-right"></i>
												会议管理
											</a>
				
										</li>
										<li>
											<a href="<?php echo U('Xshd/lecture');?>">
												<i class="icon-double-angle-right"></i>
											    讲座管理
											</a>
										</li>

										<li>
											<a href="<?php echo U('Xshd/composition');?>">
												<i class="icon-double-angle-right"></i>
											    学术著作管理
											</a>
										</li>
									</ul> 
								</li>            
		                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-net"></i>
										<span class="menu-text">系统管理</span>
										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">
										<li><a href="">
												<i class="icon-double-angle-right"></i>
												密码管理
											</a>
										</li>
		                                
		                                <li>  
			                                <a href="">  
			                                	<i class="icon-double-angle-right"></i>  
			                                    日志管理  
			                                </a>  
		                                </li>
		                                
		                                <li>
											<a href="<?php echo U('Xtgl/user');?>">
												<i class="icon-double-angle-right"></i>
												用户管理
											</a>
										</li>
										<li>
											<a href="">
												<i class="icon-double-angle-right"></i>
												用户组管理
											</a>
										</li>								
									</ul>
								</li>
                      		</ul><!-- /.nav-list -->
	                   </div>
	                </div> 

	            


 <div class="main-content">
    <!-- <div id="addUser" class="popLayer">
        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li>添加用户</li>
            </ul>
            <!-- .breadcrumb 
            <span class="floatRig closePop">关闭</span>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xs-win">
                 
                    

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right"> 用户名： </label>
                            <div class="col-sm-9">
                                <input type="text" name="name" placeholder="用户名"  pattern="^\S{1,18}$"  title="请输入1-18位字符" class="col-xs-10 col-sm-5" required/>
                            </div>
                        </div>
                                                    
                        <div class="space-4"></div>

                        <div class="form-group">
                        
                            <label class="col-sm-3 control-label no-padding-right"> 密码：</label>

                            <div class="col-sm-9">
                                <input type="password" name="password" pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z?!@#$%^*_,.:;/()~&-|<>`+=]{6,18}$"  title="请输入6-18位字母、数字、特殊字符两种或两种以上组合密码" class="col-xs-10 col-sm-5" required/>
                            </div>
                        </div>

                        
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right"> 邮箱：</label>

                            <div class="col-sm-9">
                                <input type="email" name="email" class="col-xs-10 col-sm-5" required/>
                            </div>
                        </div>


                        <div class="space-4"></div>

                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right"> 用户组： </label>

                           <div class="col-sm-9" style="line-height:30px;" id="ischeck">
                                <?php if(is_array($group_data)): $i = 0; $__LIST__ = $group_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group_data_vo): $mod = ($i % 2 );++$i;?><input type="checkbox" name="usergroup[]" value="<?php echo ($group_data_vo['id']); ?>" style="margin-right:5px;"><?php echo ($group_data_vo['title']); endforeach; endif; else: echo "" ;endif; ?>
                           </div>
                           
                        </div>

                        <div class="space-4"></div>

                      
                        <div class="clearfix form-actions">
                            <div>
                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    提交
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    重置
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.col 
            </div>
            <!-- /.row 
        </div>
    </div>



    <div id="editeUser" class="popLayer">
        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li>编辑用户</li>
            </ul>
            <!-- .breadcrumb -
            <span class="floatRig closePop">关闭</span>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xs-win">
                   
                    <form style="position:relative;margin-top:20px;" id="user_edite_form" class="form-horizontal" role="form">

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right"> 用户名 </label>

                            <div class="col-sm-9">

                                <input type="text" name="name" id="edite_user" placeholder="用户名" pattern="^\S{1,18}$"  title="请输入小于1-18位字符" class="col-xs-10 col-sm-5"
                                       required/>

                            </div>
                        </div>


                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right"> 邮箱</label>

                            <div class="col-sm-9">

                                <input type="email" name="email" id="edite_email" class="col-xs-10 col-sm-5" required/>

                            </div>
                        </div>
                        
                        
                        <div class="space-4"></div>

                        <div class="form-group">

                            <label class="col-sm-3 control-label no-padding-right"> 用户组： </label>

                           <div class="col-sm-9" style="line-height:30px;" id="userGroup_sel">
                               <?php if(is_array($group_data)): $i = 0; $__LIST__ = $group_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group_data_vo): $mod = ($i % 2 );++$i;?><input type="checkbox"  name="usergroup[]" value="<?php echo ($group_data_vo['id']); ?>" style="margin-right:5px;"><?php echo ($group_data_vo['title']); endforeach; endif; else: echo "" ;endif; ?>
                           </div>
                           
                        </div>

                        <div class="space-4"></div>
                        <input type="hidden" id='edit_id' name="id"  />
                        <div class="clearfix form-actions">
                            <div>
                                <button class="btn btn-info user_edite" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    提交
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.col 
            </div>
            <!-- /.row 
        </div>
    </div>
    <div id="delUser" class="popLayer" style="top:100px;left:50%;width: 40%;margin-left:-20%;">
        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    删除用户
                </li>
            </ul>
           
            <span class="floatRig closePop">关闭</span>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xs-win">
                  
                    <form style="position:relative;top:20px;" id="user_delete_form" class="form-horizontal" role="form">

                        <div class="form-group">
                            <label class="col-sm-4 control-label no-padding-right"> 确定要删除此用户？ </label>
                        </div>

                        <input type="hidden" id="id"  />
                        <div class="clearfix form-actions">
                            <div>
                                <button class="allusers btn btn-danger" >
                                    <i class="icon-remove  bigger-110 "></i>
                                    删除
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button  type="reset" class="btn closePop">
                                    <i class="icon-undo bigger-110"></i>
                                    取消
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.col
            </div>
           
        </div>
    </div> -->
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try {
                ace.settings.check('breadcrumbs', 'fixed')
            } catch (e) {
            }
        </script>

        <ul class="breadcrumb">
            <li>
                系统管理
            </li>
            <li class="active">用户管理</li>
        </ul>
</div>
<div class="buttonGroup">
                
                    <a href="#" class="btn btn-link" id="userAdd"><i class="icon-plus-sign bigger-120 green"></i>添加</a>
                    </if>
                    <if condition = "authcheck('Home/Negroup/user_delete','1','')">  
                    <a href="#" class="btn btn-link" id="userDel"><i class="icon-remove  bigger-120 red "></i>批量删除</a>
                </div>



                <div class="table-responsive">


                    <table id="table" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <!-- <th class="center">
                                <label>
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th> -->
                            <th><input type="checkbox"></th>
                            <th>用户名</th>
                            <th>用户组</th>
                            <th>邮箱</th>
                            <!-- <th>机房</th> -->
                            <th>注册时间</th>
                            <th>最后在线时间</th>

                            <!--  <th>状态</th> -->
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><input type="checkbox" name="checkbox"  value="<?php echo ($user_data_vo['id']); ?>"></td>
                                <td><?php echo ($vo["user_name"]); ?></td>
                                <td><?php echo ($vo["usergroup_id"]); ?></td>
                                <td><?php echo ($user_data_vo['user_email']); ?></td>
                                 <!-- <td><?php echo ($user_data_vo['room_name']); ?></td> -->
                                <td><?php echo (date('Y-m-d H:i:s',$vo["reg_time"])); ?></td>
                                <td><?php if($vo['last_time'] == 0): ?>--
                                <?php else: ?>
                                <?php echo (date('Y-m-d H:i:s',$vo["last_time"])); endif; ?></td>
                                <td>

                                        <a  href="#" title="编辑">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>

                                        <a class="red deleteuser"  href="#" title="删除">
                                            <i class="icon-trash bigger-130"></i>
                                        </a>

                                        <input type="hidden" value="<?php echo ($user_data_vo['id']); ?>">
                                    
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="dataTables_paginate paging_bootstrap">
            <ul class="pagination">
                <?php echo ($user_show); ?>
            </ul>
        </div>
    </div>
</div>

<script>
    $('.usergroup').attr('value',getParam("usergroup"));
    $('.username').attr('value',decodeURI(getParam("username")));
    $('.date-range-picker').attr('value',URLdecode(getParam("date-range-picker")));

    function URLdecode(sStr){
       return sStr.replace(/\+/g,' ').replace(/\%2F/g,'\/').replace(/\%20/g,''); 
    }

    function getParam(paramName)
    {
        paramValue = "";
        isFound = false;
        if (this.location.search.indexOf("?") == 0 && this.location.search.indexOf("=")>1)
        {
            arrSource = this.location.search.substring(1,this.location.search.length).split("&");
            i = 0;
            while (i < arrSource.length && !isFound)
            {
                if (arrSource[i].indexOf("=") > 0)
                {
                    if (arrSource[i].split("=")[0].toLowerCase()==paramName.toLowerCase())
                    {
                        paramValue = arrSource[i].split("=")[1];
                        isFound = true;
                    }
                }
                i++;
            }
        }
        return paramValue;
    }
    $(".buttonGroup #userAdd").click(function () {
        $("#addUser").show();
        $("#fade").show();
        return false
    });

    

    $('#user_delete_form').submit(function(e){
        e.stopPropagation();
        e.preventDefault();
        var id = $("input:checkbox[name='checkbox']:checked").map(function() {
            return $(this).val();
        }).get().join(',');
        $.ajax({
            url:'/Hospitalsrms/index.php/Admin/Xtgl/user_delete',
            type:'POST',
            dataType:'json',
            data:{'id':id},
            success:function(data){
                if(data.status=='success'){
                    $("#delUser").hide();
                    $("#fade").hide();
                    $('#user_delete_form')[0].reset();
                    layer.alert("删除成功");
                    window.location.reload();
                    $(":checked").attr('checked',false);
                }else{
                    $("#delUser").hide();
                    $("#fade").hide();
                    $(":checked").attr('checked',false);
                    layer.alert("不允许删除当前用户");
                }
            }
        });

    });

    $('#bindRoom_form').submit(function(e){
            e.stopPropagation();
            e.preventDefault();
           
            var id = $("#bindRoom_form #bind_id").val();
            $("#selectR").find('option').attr('selected','selected');
            var right = $('#selectR').val();

            $.ajax({
                url: '/Hospitalsrms/index.php/Admin/Xtgl/bind_room',
                type: 'POST',
                datatype: 'json',
                data: {'id':id, 'right':right},
                success: function (data) {
                    if (data.status=='success') {
                        $("#bindRoom").hide();
                        $("#fade").hide();
                        layer.alert('绑定机房成功');
                        window.location.reload();
                    } else {
                        layer.alert('绑定机房失败');
                    }
                }
            });

        });

    $('#addUser_form').submit(function(e){
        e.stopPropagation();
        e.preventDefault();
        var data = $('#addUser_form').serialize();
        var checkVal= $('#ischeck input').serialize();
        if (checkVal =='') {
                 layer.alert("请选择用户组");
                return false
        }else{

            $.ajax({
                 type: "POST",
                 url: "/Hospitalsrms/index.php/Admin/Xtgl/user_add",
                 data: data,
                 dataType: "json",
                success:function(data){
                    if(data.status=='success'){
                        $("#addUser").hide();
                        $("#fade").hide();
                        $('#addUser_form')[0].reset();
                        layer.alert("添加成功");
                        window.location.reload();
                    }else if(data.status=='1'){
                        layer.alert("用户已存在");
                    }
                }
             });
          }
        
    })



    $(".closePop").css("cursor", "pointer").click(function () {
        $("#addUser").hide();
        $("#delUser").hide();
        $("#editeUser").hide();
        $("#bindRoom").hide();
        $("#fade").hide();
        $(":checked").attr('checked',false);
        return false;
    });

    $(".buttonGroup #userDel").click(function () {
        var val= $("input:checkbox[name='checkbox']:checked").map(function() {
            return $(this).val();
        }).get();
        
        if(val.length<1){
            layer.alert("请选择数据");
            return;
        }

        $("#delUser").show();
        $("#fade").show();
        return false
    });

    $(".editeUser").click(function () {
/*        var name = $(this).parent().parent().parent().children().eq(1).html();
        var email = $(this).parent().parent().parent().children().eq(2).html();
        $('#edite_user').val(name);
        $('#edite_email').val(email);
        var id = $(this).next().next().val();
        var group_id = [];
        $.ajax({
             type: "POST",
             url: "/Hospitalsrms/index.php/Admin/Xtgl/get_usergroup",
             data: {'id':id},
             dataType: "json",
             success: function(data){
                   for (var i = 0; i < data.length; i++) {
                        group_id.push(data[i]['group_id']);
                    }; 

                    $('#grouplist option').each(function(){
                        id = $(this).val();
                        if ($.inArray(id,group_id)) {
                            $(this).attr('selected',true);
                        }; 
                    });

                }
         });*/
        var row = $(this).parents('tr');
        $("#edite_user").val(row.children('td:eq(1)').html());
        $("#edite_email").val(row.children('td:eq(3)').html());
        var id = $(this).next().next().val();
        $('#edit_id').val(id);
        var group_id = [];
        $.ajax({
            type: "POST",
            url: "/Hospitalsrms/index.php/Admin/Xtgl/get_usergroup",
            data: {'id':id},
            dataType: "json",
            success: function(data){

                for (var i = 0; i < data.length; i++) {
                    group_id.push(data[i]['group_id']);
                }

                $('#userGroup_sel input').each(function(){
                    id = $(this).val();
                    for(var i=0;i<group_id.length;i++){
                    if (id==group_id[i]) {
                        $(this).attr('checked','checked');
                    }
                    }
                });
                $("#editeUser").show();
                $("#fade").show();
            }
        });



/*        var userGroup=$("select[name='userGroup'] option");
        for(var i=0;i<userGroup.length;i++){
            if(userGroup[i].innerHTML==row.children('td:eq(3)').html()){
                userGroup[i].setAttribute('selected','selected')
            }
        }*/

        return false
    });


    $(".editeRoom").click(function () {

        var row = $(this).parents('tr');
        var id = $(this).next().next().next().val();
        
        $.ajax({
            url: '/Hospitalsrms/index.php/Admin/Xtgl/getRoomUser',
            type: 'POST',
            dataType: 'json',
            async: false,
            data: {'id':id},
            success: function (data) {
                if (data) {
                    if (data.select_opt) {
                        $('#selectL').html('');
                        $.each(data.select_opt,function(index, value){
                            $('#selectL').append('<option value=' +value.r_id+'>'+ value.room_name +'</option>');
                        })
                    }

                    if (data.select_side) {
                        $('#selectR').html('');
                        $.each(data.select_side,function(index, value){
                            $('#selectR').append('<option value=' +value.r_id+'>'+ value.room_name +'</option>');
                        })
                    }

                    if (data.id) {
                        $("#bindRoom_form #bind_id").val(data.id);
                    }
                   
                }
            },
        });
        $("#bindRoom").show();
        $("#fade").show();
        return false
    });


    $(".deleteuser").click(function () {
        $(":checked").attr('checked',false);
        $(this).parent().parent().children().first().children().first().attr('checked','checked');
           /* var id = $(this).next().val();
            $('#id').val(id);*/
            $("#delUser").show();
            $("#fade").show();
            return false;
    });



/*    $(".allusers").click(function(e){
            e.preventDefault();
             var id = $('#id').val();
             var val = new Array; 
            if(id!=''){
                $("#table :checkbox[checked]").each(function(i){ 
                    val[i] = $(this).parent().siblings().last().children().find('input').val();
                }); 
               // val.remove(1);
                val.splice(jQuery.inArray('1',val),1); 
                var vals = val.join(',');
                if(vals.indexOf(',')==0){
                  vals = vals.substring(1);
                }
            }else{
               val.push(id);
            }
            
          $.ajax({
             type: "POST",
             url: "/Hospitalsrms/index.php/Admin/Xtgl/user_delete",
             data: {'id':vals},
             dataType: "json",
             success: function(data){
                 $('#id').val('');
                  $("#delUser").hide();
                  $("#fade").hide();
                  alert('成功');
                  window.location.reload();
                }
         });
    });*/


    $('#user_edite_form').submit(function(e){
        e.stopPropagation();
        e.preventDefault();
        var editeUser_data = $('#user_edite_form').serialize();
        $.ajax({
            url:'/Hospitalsrms/index.php/Admin/Xtgl/do_user_edite',
            type:'POST',
            dataType:'json',
            data:editeUser_data,
            success:function(data){
                if(data.status=='success'){
                    $("#editeUser").hide();
                    $("#fade").hide();
                    $('#user_edite_form')[0].reset();
                    layer.alert("编辑成功");
                    window.location.reload();
                }else if(data.status=='1'){
                    layer.alert("用户已存在");
                }
            }
        });
    });
    
    // $('#id-input-file-1 , #id-input-file-2').ace_file_input({
    //              no_file:'No File ...',
    //              btn_choose:'Choose',
    //              btn_change:'Change',
    //              droppable:false,
    //              onchange:null,
    //              thumbnail:false //| true | large
    //              //whitelist:'gif|png|jpg|jpeg'
    //              //blacklist:'exe|php'
    //              //onchange:''
    //              //
    //          });

    jQuery(function ($) {
        $('input[name=date-range-picker]').daterangepicker({
                    startDate: moment().subtract(1, 'days'),
                    endDate: moment(),
                    locale : {
                        applyLabel: '提交',
                        cancelLabel: '取消',
                        fromLabel: '开始时间',
                        toLabel: '结束时间',
                        weekLabel: 'W',
                        customRangeLabel: 'Custom Range',
                        daysOfWeek: ['日', '一', '二', '三', '四', '五','六'],
                        monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
                        firstDay: moment.localeData()._week.dow
                    },
                    language: 'cn',}
        ).prev().on(ace.click_event, function () {
                    $(this).next().focus();
                });

    })

    $(function () {
        var leftSel = $("#selectL");
        var rightSel = $("#selectR");;
        $("#toright").bind("click", function () {
            leftSel.find("option:selected").each(function () {
                $(this).remove().appendTo(rightSel);
            });
        });
        $("#toleft").bind("click", function () {
            rightSel.find("option:selected").each(function () {
                $(this).remove().appendTo(leftSel);
            });
        });
        leftSel.dblclick(function () {
            $(this).find("option:selected").each(function () {
                $(this).remove().appendTo(rightSel);
            });
        });
        rightSel.dblclick(function () {
            $(this).find("option:selected").each(function () {
                $(this).remove().appendTo(leftSel);
            });
        });
    });
</script>
<div class="" style="background-color:#E4E6E9;height:60px;">

</div>