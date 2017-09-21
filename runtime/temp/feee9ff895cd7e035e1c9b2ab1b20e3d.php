<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"F:\Demo\tpshop\public/../application/index\view\index\lists.html";i:1505698759;s:68:"F:\Demo\tpshop\public/../application/index\view\common\template.html";i:1505705745;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="__STATIC__/css/common.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/css/style.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/css/style1.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/css/style2.css" rel="stylesheet" type="text/css" />
<script src="__STATIC__/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="__STATIC__/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="__STATIC__/js/common_js.js" type="text/javascript"></script>
<script src="__STATIC__/js/footer.js" type="text/javascript"></script>

<title>商品列表</title>
</head>

<body>
 <div id="header_top">
  <div id="top">
  	<div class="Inside_pages">
    <?php if((session('user'))): ?>
    <div class="Collection">欢迎你,<?php echo \think\Session::get('user.username'); ?> <a href="/index/user/loginout" class="green">注销</a></div>
    <div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="/">首页</a></li> 
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">个人中心</a> </li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的收藏夹</a></li>
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b></b></a></li>	
	  </ul>
	</div>
    <?php else: ?>
    
      <div class="Collection"><a href="/index/user/login" class="green">请登录</a> <a href="/index/user/reg" class="green">免费注册</a></div>
	
    
    <?php endif; ?>
    </div>
  </div>
  <div id="header"  class="header page_style">
  <div class="logo"><a href="/"><img src="__STATIC__/images/logo1.png" /></a></div>
  <!--结束图层-->
  <div class="Search">
        <div class="search_list">
            <ul>
                <li class="current"><a href="#">产品</a></li>
                <li><a href="#">信息</a></li>
            </ul>
        </div>
        <div class="clear search_cur">
           <input name="searchName" id="searchInfo" class="search_box" onkeypress="search()" type="text">
           <input name="" type="submit" value="搜 索"  onclick="search2()" class="Search_btn"/>
        </div>
        <div class="clear hotword">热门搜索词：香醋&nbsp;&nbsp;&nbsp;茶叶&nbsp;&nbsp;&nbsp;草莓&nbsp;&nbsp;&nbsp;葡萄&nbsp;&nbsp;&nbsp;菜油</div>
</div>
 <!--购物车样式-->
 <?php if((!isset($_SESSION['num']))): ?>
 <div class="hd_Shopping_list" id="Shopping_list">
   <div class="s_cart"><a href="/index/index/cart">我的购物车</a> <i class="ci-right">&gt;</i>
   <i class="ci-count" id="shopping-amount">0</i></div>
   <div class="dorpdown-layer">
    <div class="spacer"></div>
	 <div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>
   </div>
 </div>
 <?php else: ?>
 <div class="hd_Shopping_list" id="Shopping_list">
   <div class="s_cart"><a href="/index/index/cart">我的购物车</a> <i class="ci-right">&gt;</i>
   <i class="ci-count" id="shopping-amount"><?php echo $_SESSION['num']; ?></i></div>
   <div class="dorpdown-layer">
    <div class="spacer"></div>
	 <?php if(($_SESSION['num']==0)): ?>
	 <div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>
	 <?php else: ?>
	 <ul class="p_s_list">	   
		<?php $cart=$_SESSION['cart']; foreach($cart as $carts): ?>
		<li>
		    <div class="img"><img src="__STATIC__/image/<?php echo $carts['imgpath']; ?>"></div>
		    <div class="content"><p class="name"><a href="#"><?php echo $carts['pname']; ?></a></p><p>数量：<?php echo $carts['num']; ?></p></div>
			<div class="Operations">
			<p class="Price"><?php echo $carts['price']; ?></p>
			<a href="javascript:delpro(<?php echo $carts['id']; ?>)">删除</a></div>
		  </li>
		 <?php endforeach; ?>
		</ul>		
	 <div class="Shopping_style">
	 <div class="p-total">共<b><?php echo $_SESSION['num']; ?></b>件商品　共计<strong>￥<?php echo $_SESSION['price']; ?></strong></div>
	  <a href="/index/index/cart" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
	 </div>	
	 <?php endif; ?> 
   </div>
 </div>
 <?php endif; ?>
 
</div>
<!--菜单栏-->
	<div class="Navigation" id="Navigation">
		 <ul class="Navigation_name">
			<li><a href="/">首页</a></li>
            <li class="hour"><span class="bg_muen"></span><a href="#">半小时生活圈</a></li>
			<li><a href="#">你身边的超市</a></li>
			<li><a href="#">预售专区</a><em class="hot_icon"></em></li>
			<li><a href="products_list.html">商城</a></li>
			
			<li><a href="#">好评商户</a></li>
			<li><a href="#">热销活动</a></li>
			<li><a href="Brands.html">联系我们</a></li>
		 </ul>			 
		</div>
	<script>$("#Navigation").slide({titCell:".Navigation_name li",trigger:"click"});</script>
    </div>
<div class="fixedBox">
  <ul class="fixedBoxList">
      <li class="fixeBoxLi user"><a href="#"> <span class="fixeBoxSpan"></span> <strong>消息中心</strong></a> </li>
    <!-- <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">
		<p class="good_cart">9</p>
			<span class="fixeBoxSpan"></span> <strong>购物车</strong>
			<div class="cartBox">
       		<div class="bjfff"></div><div class="message">
       		</div>    </div></li> -->
    <li class="fixeBoxLi Service "> <span class="fixeBoxSpan"></span> <strong>客服</strong>
      <div class="ServiceBox">
        <div class="bjfffs"></div>
        <dl onclick="javascript:;">
		    <dt><img src="__STATIC__/images/Service1.png"></dt>
		       <dd><strong>QQ客服1</strong>
		          <p class="p1">9:00-22:00</p>
		           <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
		          </dd>
		        </dl>
				<dl onclick="javascript:;">
		          <dt><img src="__STATIC__/images/Service1.png"></dt>
		          <dd> <strong>QQ客服1</strong>
		            <p class="p1">9:00-22:00</p>
		            <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
		          </dd>
		        </dl>
	          </div>
     </li>
	 <li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">
			<span class="fixeBoxSpan"></span> <strong>微信</strong>
			<div class="cartBox">
       		<div class="bjfff"></div>
			<div class="QR_code">
			 <p><img src="__STATIC__/images/erweim.jpg" width="180px" height="180px" /></p>
			 <p>微信扫一扫，关注我们</p>
			</div>		
			</div>
			</li>

    <li class="fixeBoxLi Home"> <a href="./"> <span class="fixeBoxSpan"></span> <strong>收藏夹</strong> </a> </li>
    <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
  </ul>
</div>

    
<!--产品列表样式-->
<div class="Inside_pages"> 
    <!--位置-->
    <div id="Filter_style">
        <div class="Location_link"> <em></em><a href="#">进口食品、进口牛</a> &lt; <a href="#">进口饼干/糕点</a> </div>
        <!--条件筛选样式-->
        <div class="Filter" id="Filter">
            <div class="Filter_list clearfix">
                <div class="Filter_title"><span>品牌：</span></div>
                <div class="Filter_Entire"><a href="#" class="Complete">全部</a></div>
                <div class="p_f_name infonav_hidden" style="height: 85px;">
                    <p><a href="#" title="莱家/Loacker">莱家/Loacker </a> <a href="#" title="">丽芝士/Richeese</a> <a href="#" title="白色恋人/SHIROI KOIBITO ">白色恋人/SHIROI KOIBITO </a> <a href="#">爱时乐/Astick </a> <a href="#">利葡/LiPO </a> <a href="#">友谊牌/Tipo </a> <a href="#"> 三立/SANRITSU </a> <a href="#"> 皇冠/Danisa </a> </p>
                    <p><a href="#">丹麦蓝罐/Kjeldsens</a> <a href="#">茱莉/Julie's </a> <a href="#">向日葵/Sunflower </a> <a href="#">福多/fudo </a> <a href="#">非凡农庄/PEPPER... </a> <a href="#">凯尔森/Kelsen </a> <a href="#"> 蜜兰诺/Milano </a> <a href="#">壹格/EgE </a> </p>
                    <p><a href="#">沃尔克斯/Walkers </a> <a href="#">澳门永辉/MACAU...</a> <a href="#" title="莱家/Loacker">莱家/Loacker </a> <a href="#" title="">丽芝士/Richeese</a> <a href="#" title="白色恋人/SHIROI KOIBITO ">白色恋人/SHIROI KOIBITO </a> <a href="#">爱时乐/Astick </a> <a href="#">利葡/LiPO </a> <a href="#">友谊牌/Tipo </a> </p>
                    <p><a href="#"> 三立/SANRITSU </a> <a href="#"> 皇冠/Danisa </a> <a href="#">丹麦蓝罐/Kjeldsens</a> <a href="#">茱莉/Julie's </a> <a href="#">向日葵/Sunflower </a> <a href="#">福多/fudo </a> <a href="#">非凡农庄/PEPPER... </a> <a href="#">凯尔森/Kelsen </a> </p>
                    <p><a href="#"> 蜜兰诺/Milano </a> <a href="#">壹格/EgE </a> <a href="#">沃尔克斯/Walkers </a> <a href="#">澳门永辉/MACAU...</a> <a href="#" title="莱家/Loacker">莱家/Loacker </a> <a href="#" title="">丽芝士/Richeese</a> <a href="#" title="白色恋人/SHIROI KOIBITO ">白色恋人/SHIROI KOIBITO </a> <a href="#">爱时乐/Astick </a> </p>
                </div>
                <p class="infonav_more"> <a class="more" onclick="infonav_more_down(0);return false;" href="javascript:">更多<em class="pullup"></em></a></p>
            </div>
            <div class="Filter_list clearfix">
                <div class="Filter_title"><span>产地：</span></div>
                <div class="Filter_Entire"><a href="#" class="Complete">全部</a></div>
                <div class="p_f_name"> <a href="#">中国大陆</a> <a href="#">中国台湾</a> <a href="#">中国香港</a> <a href="#">中国澳门</a> <a href="#">日本</a> <a href="#">韩国</a> <a href="#">越南</a> <a href="#">泰国</a> </div>
            </div>
            <div class="Filter_list clearfix">
                <div class="Filter_title"><span>包装方式：</span></div>
                <div class="Filter_Entire"><a href="#" class="Complete">全部</a></div>
                <div class="p_f_name"> <a href="#">袋装</a><a href="#">盒装</a><a href="#">罐装</a><a href="#">礼盒装</a><a href="#">散装(称重)</a> </div>
            </div>
            <div class="Filter_list clearfix">
                <div class="Filter_title"><span>位置分类：</span></div>
                <div class="Filter_Entire"><a href="#" class="Complete">不限</a></div>
                <div class="p_f_name">
                    <div class="clearfix"><a href="#">鼓楼区</a><a href="#">高淳区</a><a href="#">建邺区</a><a href="#">江宁区</a><a href="#">溧水区</a> <a href="#">鼓楼区</a><a href="#">高淳区</a><a href="#">建邺区</a><a href="#">江宁区</a><a href="#">溧水区</a> <a href="#">鼓楼区</a><a href="#">高淳区</a><a href="#">建邺区</a><a href="#">江宁区</a><a href="#">溧水区</a> <a href="#">鼓楼区</a><a href="#">高淳区</a><a href="#">建邺区</a><a href="#">江宁区</a><a href="#">溧水区</a></div>
                    <div class="area_style clearfix">
                        <div class="Filter_Entire"><a href="#" class="Complete">不限</a></div>
                        <div class="area_position"> <a href="#" class="Filter_btn">新世纪花园</a><a href="#" class="Filter_btn">七里花园</a><a href="#" class="Filter_btn">七里花园</a><a href="#" class="Filter_btn">七里花园</a><a href="#" class="Filter_btn">七里花园</a> </div>
                        <!--区域选择-->
                        <div class="Select_position"> <span id="index_search_bar_cancel" class="search-icon-cancel"><i class="sprite-icon"></i></span> <a href="#">鼓楼区</a><a href="#">高淳区</a><a href="#">建邺区</a><a href="#">江宁区</a><a href="#">溧水区</a> <a href="#">鼓楼区</a><a href="#">高淳区</a><a href="#">建邺区</a><a href="#">江宁区</a><a href="#">溧水区</a> <a href="#">鼓楼区</a><a href="#">高淳区</a><a href="#">建邺区</a><a href="#">江宁区</a><a href="#">溧水区</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--产品列表样式-->
    <div id="Sorted" class="">
        <div class="Sorted">
            <div class="Sorted_style" id="order"> 
	            <a href="#" class="on">综合<i class="iconfont icon-fold"></i></a>  
	            <?php if((isset($order))): ?>
	            <a href="/index/index/lists/id/<?php echo $id; ?>/order/<?php echo $order; ?>">价格<i class="iconfont icon-fold"></i></a>
	            <?php else: ?>
	            <a href="/index/index/lists/id/<?php echo $id; ?>/order/asc">价格<i class="iconfont icon-fold"></i></a>
	            <?php endif; ?>
	            <a href="/index/index/lists/id/<?php echo $id; ?>/sales/desc">销量<i class="iconfont icon-fold"></i></a> 
            </div>
            
            <!--产品搜索-->
            <div class="products_search">
                <input name="" type="text" class="search_text" value="请输入你要搜索的产品" onfocus="this.value=''" onblur="if(!value){value=defaultValue;}">
                <input name="" type="submit" value="" class="search_btn">
            </div>
            <!--页数-->
            <div class="s_Paging"> <span> 1/12</span> <a href="#" class="on">&lt;</a> <a href="#">&gt;</a> </div>
        </div>
    </div>
    <div class="p_list  clearfix">
        <ul>
            <?php foreach($data as $v): ?>
            <li class="gl-item"> <em class="icon_special tejia"></em>
                <div class="Borders">
                    <div class="img"><a href="/index/index/details?id=<?php echo $v['id']; ?>" target="_blank"><img src="__STATIC__/image/<?php echo $v['imgpath']; ?>" style="width:220px;height:220px"></a></div>
                    <div class="name"><a href="/index/index/details?id=<?php echo $v['id']; ?>" target="_blank"><strong style="color:#ff7200;">
                    		   【<?php switch($v['attributes']): case "1": ?>推荐 <?php break; case "2": ?>新上<?php break; case "3": ?>热卖<?php break; case "4": ?>促销<?php break; case "5": ?>包邮<?php break; case "6": ?>限时卖<?php break; case "7": ?>不参与会员折扣<?php break; endswitch; ?>】</strong><?php echo $v['pname']; ?></a></div>
                    <div class="Shop_name"><a href="#">××××旗舰店</a></div>
                    <div class="yushou">
                        <div class="yushou-p fl">¥<strong><?php echo $v['price']; ?></strong></div>
                        <div class="fl sold">
                            <div><del class="orig-price">¥<?php echo $v['bprice']; ?></del></div>
                            <div class="sold-num"><em><?php echo $v['num']; ?></em>人已付款</div>
                        </div>
                        <a href="">
                        <div class="fr sold-go">抢购</div>
                        </a> </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="Paging">
            <div class="Pagination"> <a href="#">首页</a> <a href="#" class="pn-prev disabled">&lt;上一页</a> <a href="#" class="on">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">下一页&gt;</a> <a href="#">尾页</a> </div>
        </div>
    </div>
</div>


<script type="text/javascript" charset="UTF-8">
<!--
 //点击效果start
 function infonav_more_down(index)
 {
  var inHeight = ($("div[class='p_f_name infonav_hidden']").eq(index).find('p').length)*30;//先设置了P的高度，然后计算所有P的高度
  if(inHeight > 60){
   $("div[class='p_f_name infonav_hidden']").eq(index).animate({height:inHeight});
   $(".infonav_more").eq(index).replaceWith('<p class="infonav_more"><a class="more"  onclick="infonav_more_up('+index+');return false;" href="javascript:">收起<em class="pulldown"></em></a></p>');
  }else{
   return false;
  }
 }
 function infonav_more_up(index)
 {
  var infonav_height = 85;
  $("div[class='p_f_name infonav_hidden']").eq(index).animate({height:infonav_height});
  $(".infonav_more").eq(index).replaceWith('<p class="infonav_more"> <a class="more" onclick="infonav_more_down('+index+');return false;" href="javascript:">更多<em class="pullup"></em></a></p>');
 }
   
 function onclick(event) {
  info_more_down();
 return false;
 }
 //点击效果end  
//-->
</script>

<!--网站地图-->
<div class="fri-link-bg clearfix">
    <div class="fri-link">
        <div class="logo left margin-r20"><img src="__STATIC__/images/logo1.png"  /></div>
        
    <dl>
	 <dt>新手上路</dt>
	 <dd><a href="#">售后流程</a></dd>
     <dd><a href="#">购物流程</a></dd>
     <dd><a href="#">订购方式</a> </dd>
     <dd><a href="#">隐私声明 </a></dd>
     <dd><a href="#">推荐分享说明 </a></dd>
	</dl>
	<dl>
	 <dt>配送与支付</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
	<dl>
	 <dt>售后保障</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>
	<dl>
	 <dt>支付方式</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>	
    <dl>
	 <dt>帮助中心</dt>
	 <dd><a href="#">保险需求测试</a></dd>
     <dd><a href="#">专题及活动</a></dd>
     <dd><a href="#">挑选保险产品</a> </dd>
     <dd><a href="#">常见问题 </a></dd>
	</dl>	
	<div class="left"><img src="__STATIC__/images/qd.jpg" width="90"  height="90" />
            <p>扫描下载APP</p>
        </div>
       <div class="">   
   </div>
    </div>
</div>
<!--网站地图END-->
<!--网站页脚-->
<div class="copyright">
    <div class="copyright-bg">
        <div class="hotline">
        	<span>客服热线：400-815-8800</span>
        	<span>版权所有Copyright ©2017 Tpshop.com. All Rights Reserved</span>
        	  
        </div>
    </div>
</div>
 <!--右侧菜单栏购物车样式-->
<script type="text/javascript">
function delpro(id){
	$.post("/index/index/cart/act/del/id/"+id,{},function(data){
		//alert(data.msg);
		location.reload(); //页面刷新 或者history.go(0)  history.go(-1) --返回上一页 
	})
}
function search(){
	if(event.keyCode==13){
		var info=document.getElementById("searchInfo").value;
		window.location.href='/index/index/searchresult/info/'+info;
	}
}
function search2(){
	var info=document.getElementById("searchInfo").value;
	window.location.href='/index/index/searchresult/info/'+info;
}
</script>
</body>
</html>
    