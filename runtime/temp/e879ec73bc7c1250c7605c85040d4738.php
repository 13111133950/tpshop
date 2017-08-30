<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"F:\Demo\tpshop\public/../application/admin\view\pro\addpro.html";i:1500878485;}*/ ?>
<!--_meta 作为公共模版分离出去-->
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
<script>DD_belatedPNG.fix('*');</script><![endif]-->
<!--/meta 作为公共模版分离出去-->
<title>添加商品</title>
<link href="__LIB__/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
	<form action="/admin/pro/addpro" method="post" class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="pname">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="cid">
						            <option value="0" selected>顶级分类</option>
						            <?php foreach($cate  as $cates): ?>
						            <option value="<?php echo $cates['id']; ?>" ><?php echo $cates['level']; ?>级分类&nbsp;<?php echo $cates['name']; ?></option>
						            <?php endforeach; ?>
						          </select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品原价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="bprice" id="bprice" placeholder="" value="" class="input-text" style="width:90%" onmouseleave="document.getElementById('price').value=this.value">
				元</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">优惠价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="price" id="price" placeholder="" value="" class="input-text" style="width:90%">
				元</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品属性:</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box">
					<input type="radio"  name="attributes" value="1" id="checkbox-1" checked>
					<label for="checkbox-1" >1、推荐 </label>
					
				</div>
				<div class="check-box">
					<input type="radio"  name="attributes" value="2" id="checkbox-1">
					<label for="checkbox-1">2、新品 </label>
					
				</div>
				<div class="check-box">
					<input type="radio"  name="attributes" value="3" id="checkbox-1">
					<label for="checkbox-1">3、热卖 </label>
					
				</div>
				<div class="check-box">
					<input type="radio"  name="attributes" value="4" id="checkbox-1">
					<label for="checkbox-1"> 4、促销 </label>
					
				</div>
				<div class="check-box">
					<input type="radio"  name="attributes" value="5" id="checkbox-1">
					<label for="checkbox-1">5、包邮 </label>
					
				</div>
				<div class="check-box">
					<input type="radio"  name="attributes" value="6" id="checkbox-1">
					<label for="checkbox-1">6、限时卖 </label>
					
				</div>
				<div class="check-box">
					<input type="radio"  name="attributes" value="7" id="checkbox-1">
					<label for="checkbox-1"> 7、不参与会员折扣 </label>
					
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">是否上架:</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box">
					<input type="radio"  name="status" value="0" id="checkbox-1" checked>
					<label for="checkbox-1">上架 </label>
					
				</div>
				<div class="check-box">
					<input type="radio"  name="status" value="1" id="checkbox-1">
					<label for="checkbox-1">下架 </label>
					
				</div>
				
			</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">图片上传：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-list-container">
					<div class="queueList">
						<div id="dndArea" class="placeholder">
							<div id="filePicker-2"></div>
							<p>或将照片拖到这里，单次最多可选300张</p>
						</div>
					</div>
					<div class="statusBar" style="display:none;">
						<div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
						<div class="info"></div>
						<div class="btns">
							<div id="filePicker2"></div>
							<div class="uploadBtn">开始上传</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">产品详情：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<textarea name="info" id="editor_id" style="width:100%;height:150px;"></textarea>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i>提交</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__LIB__/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="__LIB__/webuploader/0.1.5/setting.js"></script> 
<script type="text/javascript" src="__LIB__/kindeditor/kindeditor.js"></script>
<script type="text/javascript" src="__LIB__/kindeditor/lang/zh_CN.js"> </script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
</body>
</html>