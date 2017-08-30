<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"F:\Demo\tpshop\public/../application/index\view\index\details.html";i:1504072745;s:68:"F:\Demo\tpshop\public/../application/index\view\common\template.html";i:1501221757;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="__STATIC__/css/common.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/css/base.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/css/css.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/css/style1.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/css/style2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__STATIC__/js/jquery-1.8.3.min.js"></script>
<script src="__STATIC__/js/jquery.simpleGal.js"></script>
<script type="text/javascript" src="__STATIC__/js/jquery.imagezoom.min.js"></script>

<title>商品详情</title>
</head>

<body>
 <div id="header_top">
  <div id="top">
    <div class="Inside_pages">
      <div class="Collection"><a href="#" class="green">请登录</a> <a href="#" class="green">免费注册</a></div>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">首页</a></li> 
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">我的小充</a> </li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>(23)</b></a></li>	
	  </ul>
	</div>
    </div>
  </div>
  <div id="header"  class="header page_style">
  <div class="logo"><a href="index.html"><img src="__STATIC__/images/logo.png" /></a></div>
  <!--结束图层-->
  <div class="Search">
        <div class="search_list">
            <ul>
                <li class="current"><a href="#">产品</a></li>
                <li><a href="#">信息</a></li>
            </ul>
        </div>
        <div class="clear search_cur">
           <input name="searchName" id="searchName" class="search_box" onkeydown="keyDownSearch()" type="text">
           <input name="" type="submit" value="搜 索"  class="Search_btn"/>
        </div>
        <div class="clear hotword">热门搜索词：香醋&nbsp;&nbsp;&nbsp;茶叶&nbsp;&nbsp;&nbsp;草莓&nbsp;&nbsp;&nbsp;葡萄&nbsp;&nbsp;&nbsp;菜油</div>
</div>
 <!--购物车样式-->
 <div class="hd_Shopping_list" id="Shopping_list">
   <div class="s_cart"><a href="#">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
   <div class="dorpdown-layer">
    <div class="spacer"></div>
	 <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
	 <ul class="p_s_list">	   
		<li>
		    <div class="img"><img src="__STATIC__/images/tianma.png"></div>
		    <div class="content"><p class="name"><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>
			<div class="Operations">
			<p class="Price">￥55.00</p>
			<p><a href="#">删除</a></p></div>
		  </li>
		</ul>		
	 <div class="Shopping_style">
	 <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
	  <a href="Shop_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
	 </div>	 
   </div>
 </div>
</div>
<!--菜单栏-->
	<div class="Navigation" id="Navigation">
		 <ul class="Navigation_name">
			<li><a href="Home.html">首页</a></li>
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
    <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">
		<p class="good_cart">9</p>
			<span class="fixeBoxSpan"></span> <strong>购物车</strong>
			<div class="cartBox">
       		<div class="bjfff"></div><div class="message">购物车内暂无商品，赶紧选购吧</div>    </div></li>
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

    
<!--网站头部-->
<div class="sup-wid">
	<div><img src="__STATIC__/images/TB27.gif" width="100%"/></div>
    <div class="supplie-top">
        <div class="clear">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="nav">
                <tr>
                    <td align="center"><a href="#">供应商首页</a></td>
                    <td align="center"><a href="#">全部产品</a></td>
                    <td align="center"><a href="#">企业介绍</a></td>
                    <td align="center"><a href="#">最新产品</a></td>
                    <td align="center"><a href="#">热销产品</a></td>
                    <td align="center"><a href="#">促销产品</a></td>
                </tr>
            </table>
        </div>
        <div class=" clear bread"><a href="#">首页</a> <span class="pipe">&gt;</span> <a href="#">某供应商</a> <span class="pipe">&gt;</span> <a href="#">某产品</a></div>
</div>
    <div class="pro_detail" >
        <div class="pro_detail_img float-lt">
            <div class="gallery">
                <div class="tb-booth tb-pic tb-s310"> <a href="__STATIC__/images/01.jpg"><img src="__STATIC__/image/<?php echo $pro['imgpath']; ?>"  alt="展品细节展示放大镜特效" rel="__STATIC__/images/01.jpg" class="jqzoom" /></a> </div>
                <ul class="tb-thumb" id="thumblist">
                    <li class="tb-selected">
                        <div class="tb-pic tb-s40"><a href="#"><img src="__STATIC__/images/01_small.jpg" mid="__STATIC__/images/01_mid.jpg" big="__STATIC__/images/01.jpg"></a></div>
                    </li>
                    <li>
                        <div class="tb-pic tb-s40"><a href="#"><img  src="__STATIC__/images/02_small.jpg"  mid="__STATIC__/images/02_mid.jpg" big="__STATIC__/images/02.jpg"></a></div>
                    </li>
                    <li>
                        <div class="tb-pic tb-s40"><a href="#"><img src="__STATIC__/images/03_small.jpg"  mid="__STATIC__/images/03_mid.jpg" big="__STATIC__/images/03.jpg"></a></div>
                    </li>
                    <li style="margin-right:0px;">
                        <div class="tb-pic tb-s40"><a href="#"><img src="__STATIC__/images/04_small.jpg"  mid="__STATIC__/images/04_mid.jpg" big="__STATIC__/images/04.jpg"></a></div>
                    </li>
                </ul>
            </div>
            <script type="text/javascript">
        $(function(){
				$("#h1").toggle(function(){
					$("#h1").css("background-image","url('__STATIC__/images/iconfont-xingxingman_add.png')");
				},function(){
					$("#h1").css("background-image","url('__STATIC__/images/iconfont-xingxingman_add.png') ");
				})
			}) 

</script>
            <input type="button" value="加入收藏" id="h1" class="addcart" onclick="ShowDiv('MyDiv2','fade2')" />
        </div>
        <div class="float-lt pro_detail_con">
            <div class="pro_detail_tit"><?php echo $pro['pname']; ?></div>
            <div class="pro_detail_ad">茅山长青是未经发酵制成的茶，保留了鲜叶的天然物质，含有的茶多酚、儿茶素、叶绿素、咖啡碱、氨基酸、维生素等营养成分也较多。这些天然营养成份对防衰老、防癌、抗癌、杀菌、消炎等具有特殊效果。</div>
            <div class="pro_detail_score margin-t20">
                <ul>
                    <li class="margin-r20">评分</li>
                </ul>
                <ul>
                    <li style="width:16px; height:16px;"><img src="__STATIC__/images/iconfont-xingxingman.png" width="16" height="16" /></li>
                    <li style="width:16px; height:16px;"><img src="__STATIC__/images/iconfont-xingxingman.png" width="16" height="16" /></li>
                    <li style="width:16px; height:16px;"><img src="__STATIC__/images/iconfont-xingxingman.png" width="16" height="16" /></li>
                    <li style="width:16px; height:16px;"><img src="__STATIC__/images/iconfont-xingxingman.png" width="16" height="16" /></li>
                    <li style="width:16px; height:16px;"><img src="__STATIC__/images/iconfont-xingxingkong.png" width="16" height="16" /></li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="pro_detail_price  margin-t20"><span class="margin-r20">市场价</span><span style=" font-size:16px"><s>￥<?php echo $pro['bprice']; ?></s></span></div>
            <div class="clear"></div>
            <div class="pro_detail_act margin-t20 fl"><span class="margin-r20">售价</span><span style="font-size:26px; font-weight:bold; color:#dd514c;">￥<?php echo $pro['price']; ?></span></div>
            <div class="clear"></div>
            <div class="act_block margin-t5"><span>本商品可使用9999积分抵用￥9.99元</span></div>
            <div class="pro_detail_number margin-t30">
                <div class="margin-r20 float-lt">数量</div>
                <div class=""> <i class="jian"></i>
                    <input type="text" value="1" class="float-lt choose_input"/>
                    <i class="jia"></i> <span>&nbsp;件</span> <span>（库存<?php echo $pro['num']; ?>件）</span> </div>
                <div class="clear"></div>
            </div>
            <div class="guige">
                <div class="margin-r20 float-lt" style="line-height:25px;">规格</div>
                <ul>
                    <li class="guige-cur">规格一</li>
                    <li>规格二</li>
                    <li>规格三</li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="pro_detail_number margin-t20">
                <div class="margin-r20 float-lt">月成交量：<span class="colorred"><strong>999件</strong></span></div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="pro_detail_btn margin-t30">
                <ul>
                    <li class="pro_detail_shop"><a href="pay1.html">立即购买</a></li>
                    <li class="pro_detail_add"><a href="#" onclick="ShowDiv('MyDiv','fade')">加入购物车</a></li>
                </ul>
            </div>
        </div>
        <div class="float-rt pro_right">
            <div align="center">
                <p><img src="__STATIC__/images/lmrz.png" /></p>
                <p class="margin-t10">普通会员</p>
            </div>
            <div align="center"><img src="__STATIC__/images/pro_V2_r6_c9.png" />
                <p class="line-ht20">信用度</p>
                <p class="line-ht20" style="color:#ec3c36;">2.5</p>
            </div>
            <div align="center"><img src="__STATIC__/images/pro_V2_r8_c10.png" />
                <p class="line-ht30">在线联系</p>
            </div>
            <div align="center"><img src="__STATIC__/images/pro_V2_r8_c9.png" />
                <p class="line-ht30">了解更多</p>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="pro_con margin-t55" style="overflow:hidden;">
        <div class="pro_tab">
            <ul>
                <li class="cur">产品介绍</li>
                <li>规格及包装</li>
                <li>评价</a></li>
            </ul>
        </div>
        <div class="conlist">
            <div class="conbox" style="display:block;"><?php echo $pro['info']; ?></div>
            <div class="conbox">2</div>
            <div class="conbox">
                <div class="pro_judge">
                    <ul>
                        <li class="cur">
                            <input name="RadioGroup1" type="radio" value="" checked="checked" id="RadioGroup1_0" />
                            全部（100）</li>
                        <li>
                            <input name="RadioGroup1" type="radio" value="" id="RadioGroup1_1" />
                            好评（80）</li>
                        <li>
                            <input name="RadioGroup1" type="radio" value="" id="RadioGroup1_2" />
                            中评（10）</li>
                        <li>
                            <input name="RadioGroup1" type="radio" value="" id="RadioGroup1_3" />
                            差评（10）</li>
                    </ul>
                    <table width="100%" border="0">
                        <tr>
                            <td width="80" align="left"><a href="" rel="__STATIC__/images/01_mid.jpg" class="preview"><img src="__STATIC__/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                        <tr>
                            <td width="80" align="left"><a href="" rel="__STATIC__/images/01_mid.jpg" class="preview"><img src="__STATIC__/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                        <tr>
                            <td width="80" align="left"><a href="" rel="__STATIC__/images/01_mid.jpg" class="preview"><img src="__STATIC__/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                        <tr>
                            <td width="80" align="left"><a href="" rel="__STATIC__/images/01_mid.jpg" class="preview"><img src="__STATIC__/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                        <tr>
                            <td width="80" align="left"><a href="" rel="__STATIC__/images/01_mid.jpg" class="preview"><img src="__STATIC__/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                        <tr>
                            <td width="80" align="left"><a href="" rel="__STATIC__/images/01_mid.jpg" class="preview"><img src="__STATIC__/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                        <tr>
                            <td width="80" align="left"><a href="" rel="__STATIC__/images/01_mid.jpg" class="preview"><img src="__STATIC__/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                        <tr>
                            <td width="80" align="left"><a href="" rel="__STATIC__/images/01_mid.jpg" class="preview"><img src="__STATIC__/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                        <tr>
                            <td width="80" align="left"><a href="" rel="__STATIC__/images/01_mid.jpg" class="preview"><img src="__STATIC__/images/01_mid.jpg" width="60" height="60" class="border_gry" /></a></td>
                            <td>茶泡出来颜色很好！味道很清香！非常喜欢！包装也很精致，下次还来买！好评！<br />
                                <br />
                                <span class="pro_judge_time">2014.1.3</span></td>
                            <td>张三</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="hotpro">
        <div class="hotpro_title">热销产品</div>
        <div class="hotpro_box">
            <div class="pro-view-hot">
                <ul>
                    <li class="pro-img"><a href="#"><img src="__STATIC__/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul>
                    <li class="pro-img"><a href="#"><img src="__STATIC__/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul>
                    <li class="pro-img"><a href="#"><img src="__STATIC__/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul>
                    <li class="pro-img"><a href="#"><img src="__STATIC__/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul>
                    <li class="pro-img"><a href="#"><img src="__STATIC__/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
                <ul style="margin-right:0;">
                    <li class="pro-img"><a href="#"><img src="__STATIC__/images/pro-1.jpg" /></a></li>
                    <li class="price"><strong>￥ 36.00</strong><span>已销售227</span></li>
                    <li><a href="#" class="title">恒顺蜂蜜醋  10ml*24支 纯粮酿造 镇江香醋 江苏特产 礼盒礼品 </a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="helper">
        <div class="mod">
            <div class="mod-wrap">
                <h4><img src="__STATIC__/images/h1.png" width="60" height="60" /><span>新手上路</span> </h4>
            </div>
        </div>
        <div class="mod">
            <div class="mod-wrap">
                <h4><img src="__STATIC__/images/h2.png" width="60" height="60" /><span>如何支付</span> </h4>
            </div>
        </div>
        <div class="mod">
            <div class="mod-wrap">
                <h4><img src="__STATIC__/images/h3.png" width="60" height="60" /><span>配送运输</span> </h4>
            </div>
        </div>
        <div class="mod mod-last">
            <div class="mod-wrap">
                <h4><img src="__STATIC__/images/h4.png" width="60" height="60" /><span>售后服务</span> </h4>
            </div>
        </div>
        <div class="mod mod-last">
            <div class="mod-wrap">
                <h4><img src="__STATIC__/images/h5.png" width="60" height="60" /><span>联系我们</span> </h4>
            </div>
        </div>
    </div>
    
</div>

<div class="clear">&nbsp;</div>


<!--弹出层时背景层DIV--> 

<!--商品添加成功DIV-->
<div id="fade" class="black_overlay"> </div>
<div id="MyDiv" class="white_content">
    <div  style="width:385px; height:30px; background:#1ba67f; padding-left:15px; color:#fff; line-height:30px; font-size:14px;"> <span onclick="CloseDiv('MyDiv','fade')">
        <input type="button" class="addbtn">
        </span>加入购物车</div>
    <div class="dialogbox">
        <p>商品添加成功！</p>
    </div>
</div>
</div>

<!--商品收藏成功DIV-->
<div id="fade2" class="black_overlay"> </div>
<div id="MyDiv2" class="white_content">
    <div  style="width:385px; height:30px; background:#1ba67f; padding-left:15px; color:#fff; line-height:30px; font-size:14px;"> <span onclick="CloseDiv('MyDiv2','fade2')">
        <input type="button" class="addbtn">
        </span>商品收藏 </div>
    <div class="dialogbox">
        <p>商品收藏成功！</p>
    </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){

	$(".jqzoom").imagezoom();
	
	$("#thumblist li a").mousemove(function(){
		$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
		$(".jqzoom").attr('src',$(this).find("img").attr("mid"));
		$(".jqzoom").attr('rel',$(this).find("img").attr("big"));
	});

});
</script>
<script type="text/javascript">
//弹出隐藏层
function ShowDiv(show_div,bg_div){
document.getElementById(show_div).style.display='block';
document.getElementById(bg_div).style.display='block' ;
var bgdiv = document.getElementById(bg_div);
bgdiv.style.width = document.body.scrollWidth;
// bgdiv.style.height = $(document).height();
$("#"+bg_div).height($(document).height());
};
//关闭弹出层
function CloseDiv(show_div,bg_div)
{
document.getElementById(show_div).style.display='none';
document.getElementById(bg_div).style.display='none';
};

</script>
<script>
$(function(){
	$(".pro_tab li").each(function(i){
		$(this).click(function(){
			$(this).addClass("cur").siblings().removeClass("cur");
			$(".conlist .conbox").eq(i).show().siblings().hide();
		})
	})
})
</script>

<!--网站地图-->
<div class="fri-link-bg clearfix">
    <div class="fri-link">
        <div class="logo left margin-r20"><img src="__STATIC__/images/fo-logo.jpg" width="152" height="81" /></div>
        <div class="left"><img src="__STATIC__/images/qd.jpg" width="90"  height="90" />
            <p>扫描下载APP</p>
        </div>
       <div class="">
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
     <dl>
	 <dt>帮助中心</dt>
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
   </div>
    </div>
</div>
<!--网站地图END-->
<!--网站页脚-->
<div class="copyright">
    <div class="copyright-bg">
        <div class="hotline">为生活充电在线 <span>招商热线：****-********</span> 客服热线：400-******</div>
        <div class="hotline co-ph">
            <p>版权所有Copyright ©***************</p>
            <p>*ICP备***************号 不良信息举报</p>
            <p>总机电话：****-*********/194/195/196 客服电话：4000****** 传 真：********
                
                <a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
        </div>
    </div>
</div>
 <!--右侧菜单栏购物车样式-->

</body>
</html>
    