<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\Demo\tpshop\public/../application/admin\view\user\addrole.html";i:1501054411;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="favicon.ico" >
<link rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__LIB__/html5.js"></script>
<script type="text/javascript" src="__LIB__/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__LIB__/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>新建网站角色 - 管理员管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="cl pd-20">
	<form action="/admin/user/addrole" method="post" class="form form-horizontal" id="form-admin-role-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder=""  name="title" datatype="*4-16" nullmsg="用户账户不能为空">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">网站角色：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<dl class="permission-list">
					<dt>
						<label>
							<input type="checkbox" value="" name="" id="user-Character-0">
							基础</label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dd>
							<?php foreach($data as $vo): if($vo['class']==1): ?>
								<label class="">
								
									<input type="checkbox" value="<?php echo $vo['id']; ?>" name="check[]" id="user-Character-0-0-0" checked>
									<?php echo $vo['title']; ?></label>
								<label class="">
							<?php endif; endforeach; ?>
							</dd>
						</dl>
					</dd>
				</dl>
				<dl class="permission-list">
					<dt>
						<label>
							<input type="checkbox" value="" name="" id="user-Character-0">
							高级</label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dd>
							<?php foreach($data as $vo): if($vo['class']==2): ?>
								<label class="">
								
									<input type="checkbox" value="<?php echo $vo['id']; ?>" name="check[]" id="user-Character-0-0-0">
									<?php echo $vo['title']; ?></label>
								<label class="">
							<?php endif; endforeach; ?>
							</dd>
						</dl>
					</dd>
				</dl>
				<dl class="permission-list">
					<dt>
						<label>
							<input type="checkbox" value="" name="" id="user-Character-0">
							root</label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dd>
							<?php foreach($data as $vo): if($vo['class']==3): ?>
								<label class="">
								
									<input type="checkbox" value="<?php echo $vo['id']; ?>" name="check[]" id="user-Character-0-0-0">
									<?php echo $vo['title']; ?></label>
								<label class="">
							<?php endif; endforeach; ?>
							</dd>
						</dl>
					</dd>
				</dl>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit" class="btn btn-success radius"><i class="icon-ok"></i> 确定</button>
			</div>
		</div>
	</form>
</article>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script> 
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.page.js"></script> 

<!--/_footer /作为公共模版分离出去-->
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__LIB__/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__LIB__/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__LIB__/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
	});
	
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>