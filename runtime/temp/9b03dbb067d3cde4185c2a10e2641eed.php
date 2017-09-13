<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"F:\Demo\tpshop\public/../application/index\view\index\test.html";i:1505202284;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
var flag=1;
$(document).ready(function(){
	 $("a").click(function(){
		  if(flag==1){
			  alert(1);
			  flag=0;
		  }else{
			  alert(2);
			  flag=1;
		  }
		  });
});
</script>
</head>
<body>
<?php echo $order; ?>
<button type="button">切换</button>
<a href="#">切换</a>
<p>这是一个段落。</p>
<p>这是另一个段落。</p>
</body>
</html>