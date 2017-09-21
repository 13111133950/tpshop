<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:64:"F:\Demo\tpshop\public/../application/index\view\index\index.html";i:1505785719;s:68:"F:\Demo\tpshop\public/../application/index\view\common\template.html";i:1505786038;}*/ ?>
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

<title>首页</title>
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
                <li ><a href="#">产品</a></li>
                <li class="current"><a href="#">信息</a></li>
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

    
<!--广告幻灯片样式-->
   	<div id="slideBox" class="slideBox">
			<div class="hd">
				<ul class="smallUl"></ul>
			</div>
			<div class="bd">
				<ul>
					<li><a href="#" target="_blank"><div style="background:url(__STATIC__/AD/ad-1.jpg) no-repeat; background-position:center; width:100%; height:450px;"></div></a></li>
					<li><a href="#" target="_blank"><div style="background:url(__STATIC__/AD/ad-2.jpg) no-repeat; background-position:center ; width:100%; height:450px;"></div></a></li>
					<li><a href="#" target="_blank"><div style="background:url(__STATIC__/AD/ad-3.jpg) no-repeat rgb(226, 155, 197); background-position:center; width:100%; height:475px;"></div></a></li>
                    <li><a href="#" target="_blank"><div style="background:url(__STATIC__/AD/ad-1.jpg) no-repeat #f7ddea; background-position:center; width:100%; height:450px;"></div></a></li>
                    <li><a href="#" target="_blank"><div style="background:url(__STATIC__/AD/ad-2.jpg) no-repeat  #F60; background-position:center; width:100%; height:450px;"></div></a></li>
				</ul>
			</div>
			<!-- 下面是前/后按钮-->
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>

		</div>
		<script type="text/javascript">
		jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true});
		</script>
 </div>

<!--内容样式-->
<div id="mian">
 <div class="clearfix marginbottom">
 <!--产品分类样式-->
  <div class="Menu_style" id="allSortOuterbox">
   <div class="title_name"><em></em>所有商品分类</div>
   <div class="content hd_allsort_out_box_new">
    <ul class="Menu_list">
        <?php foreach($cate1 as $cate): ?>
        <li class="name">
		<div class="Menu_name"><a href="/index/index/lists/id/<?php echo $cate['id']; ?>" ><?php echo $cate['name']; ?></a><span>&lt;</span></div>
		<div class="menv_Detail">
		 <div class="cat_pannel clearfix">
		   <div class="hd_sort_list">
		    <?php foreach($cate['ccate'] as $cate2): ?>
		    <dl class="clearfix" data-tpc="1">
			 <dt><a href="/index/index/lists/id/<?php echo $cate2['id']; ?>"><?php echo $cate2['name']; ?><i>></i></a></dt>
			 <dd>
			 <?php foreach($cate2['ccate'] as $cate3): ?>
			 <a href="/index/index/lists/id/<?php echo $cate3['id']; ?>"><?php echo $cate3['name']; ?></a>
			 <?php endforeach; ?>
			 </dd> 
			</dl>
			<?php endforeach; ?>
		   </div><div class="Brands">
		  </div>
		  </div>
		  <!--品牌-->		  
		</div>			
		</li>
		<?php endforeach; ?>
    </ul>
   </div>
  </div>
  <script>$("#allSortOuterbox").slide({ titCell:".Menu_list li",mainCell:".menv_Detail",	});</script>
  <!--产品栏切换-->
  <div class="product_list left">
  		<div class="slideGroup">
			<div class="parHd">
				<ul><li>新品上市</li><li>超值特惠</li><li>本期团购</li><li>产品精选</li><li>抢先一步</li></ul>
			</div>
			<div class="parBd">
					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_11.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_12.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_13.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_15.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_15.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_15.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_34.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_58.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

					<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_57.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_56.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_54.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_55.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
                    	<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_50.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_51.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_52.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_53.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
                    	<div class="slideBoxs">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_15.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_17.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_16.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
							<li>
								<div class="pic"><a href="#" target="_blank"><img src="__STATIC__/products/p_19.jpg" /></a></div>
								<div class="title">
                                <a href="#" target="_blank" class="name">乐事 无限薯片三连装（原味+番茄+烤肉）104g*3/组</a>
                                <h3><b>￥</b>23.00</h3>
                                </div>
							</li>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->

			</div><!-- parBd End -->
		</div>
        <script type="text/javascript">
			/* 内层图片无缝滚动 */
			jQuery(".slideGroup .slideBoxs").slide({ mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftMarquee",interTime:50,autoPlay:true,trigger:"click"});
			/* 外层tab切换 */
			jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
		</script>
        <!--广告样式-->
        <div class="Ads_style"><a href="#"><img src="__STATIC__/images/AD_03.png"  width="318"/></a><a href="#"><img src="__STATIC__/images/AD_04.png" width="318"/></a><a href="#"><img src="__STATIC__/images/AD_06.png" width="318"/></a></div>
  </div>
 </div>
 <!--板块栏目样式-->
 <div class="clearfix Plate_style">
  <div class="Plate_column Plate_column_left">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="__STATIC__/images/bk_img_14.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_44.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_43.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_41.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_42.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>
  <!--板块名称-->
    <div class="Plate_column Plate_column_right">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="__STATIC__/images/bk_img_19.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_15.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_13.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_12.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_11.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>
   <div class="Plate_column Plate_column_left">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="__STATIC__/images/bk_img_22.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_21.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_25.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_22.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_24.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>
  <!--板块名称-->
    <div class="Plate_column Plate_column_right">
    <div class="Plate_name">
    <h2>产品名称</h2>
    <div class="Sort_link"><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a><a href="#" class="name">分类名称</a></div>
    <a href="#" class="Plate_link"> <img src="__STATIC__/images/bk_img_14.png" /></a>
   
    </div>
    <div class="Plate_product">
    <ul id="lists">
     <li class="product_display">
     <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_31.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
    <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_32.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
      <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_33.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
       <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
     <li class="product_display">
      <a href="" class="Collect"><em></em>收藏</a>
     <a href="#" class="img_link"><img src="__STATIC__/products/p_37.jpg"  width="140" height="140"/></a>
     <a href="#" class="name">墨西哥原装进口 科罗娜啤酒 科罗娜啤酒</a>
     <h3><b>￥</b>34.00</h3>
     <div class="Detailed">
	   <div class="content">
		  <p class="center"><a href="#" class="Buy_btn">立即购买</a></p>
		  </div>
	   </div>
     </li>
    </ul>
    </div>
  </div>
 </div>
 <!--友情链接-->
 <div class="link_style clearfix">
 <div class="title">友情链接</div>
 <div class="link_name">
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
  <a href="#"><img src="__STATIC__/products/logo/34.jpg"  width="100"/></a>
 </div>
 </div>
</div>

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
    