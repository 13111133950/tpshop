<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"F:\Demo\tpshop\public/../application/index\view\index\cart.html";i:1505457429;s:68:"F:\Demo\tpshop\public/../application/index\view\common\template.html";i:1505272163;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="__STATIC__/css/common.css" rel="stylesheet" type="text/css" />
<link href="__STATIC__/css/style.css" rel="stylesheet" type="text/css" />
<script src="__STATIC__/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="__STATIC__/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="__STATIC__/js/common_js.js" type="text/javascript"></script>
<script src="__STATIC__/js/footer.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="__STATIC__/css/public.css"/>
<link rel="stylesheet" type="text/css" href="__STATIC__/css/base2.css"/>
<link rel="stylesheet" type="text/css" href="__STATIC__/css/checkOut.css" />
<script type="text/javascript" src="__STATIC__/js/jquery_cart.js"></script>  

<title>购物车</title>
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
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">我的小充</a> </li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">消息中心</a></li>
       <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">商品分类</a></li>
        <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的购物车<b>(23)</b></a></li>	
	  </ul>
	</div>
    <?php else: ?>
    
      <div class="Collection"><a href="/index/user/login" class="green">请登录</a> <a href="/index/user/reg" class="green">免费注册</a></div>
	
    
    <?php endif; ?>
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
           <input name="searchName" id="searchInfo" class="search_box" onkeypress="search()" type="text">
           <input name="" type="submit" value="搜 索"  onclick="search2()" class="Search_btn"/>
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

     
    
    
 <!--收货地址body部分开始-->  
  <script type="text/javascript">
    var checkoutConfig={
        addressMatch:'common',
        addressMatchVarName:'data',
        hasPresales:false,
        hasBigTv:false,
        hasAir:false,
        hasScales:false,
        hasGiftcard:false,
        totalPrice:244.00,
        postage:10,//运费
        postFree:true,//活动是否免邮了
        bcPrice:150,//计算界值
        activityDiscountMoney:0.00,//活动优惠
        showCouponBox:0,
        invoice:{
            NA:"0",
            personal:"1",
            company:"2",
            electronic:"4"
        }
    };
    var miniCartDisable=true;
</script>
<div class="container">
    <div class="checkout-box">
        <form  id="checkoutForm" action="#" method="post">
            <div class="checkout-box-bd">
                    <!-- 地址状态 0：默认选择；1：新增地址；2：修改地址 -->
                <input type="hidden" name="Checkout[addressState]" id="addrState"   value="0">
                <!-- 收货地址 -->
                <div class="xm-box">
                    <div class="box-hd ">
    <h2 class="title">收货地址</h2>
    <!---->
</div>
<div class="box-bd">
    <div class="clearfix xm-address-list" id="checkoutAddrList">
          <dl class="item" >
            <dt>
                <strong class="itemConsignee">潘骏杰</strong>
                                <span class="itemTag tag">家</span>
                            </dt>
            <dd>
                <p class="tel itemTel">15961726437</p>
                <p class="itemRegion">江苏 无锡市 北塘区</p>
                <p class="itemStreet">民丰西苑82号202室(214045)</p>
                                                        <span class="edit-btn J_editAddr">编辑</span>
                                                                </dd>
            <dd style="display:none">
                <input type="radio" name="Checkout[address]" class="addressId"  value="10140916720030323">
            </dd>
        </dl>
                        <div class="item use-new-addr"  id="J_useNewAddr" data-state="off">
             <span class="iconfont icon-add"><img src="__STATIC__/images/add_cart.png" /></span> 
            使用新地址
        </div>
            </div>
        <input type="hidden" name="newAddress[type]" id="newType" value="common">
    <input type="hidden" name="newAddress[consignee]" id="newConsignee">
    <input type="hidden" name="newAddress[province]" id="newProvince">
    <input type="hidden" name="newAddress[city]" id="newCity">
    <input type="hidden" name="newAddress[district]" id="newCounty">
    <input type="hidden" name="newAddress[address]" id="newStreet">
    <input type="hidden" name="newAddress[zipcode]" id="newZipcode">
    <input type="hidden" name="newAddress[tel]" id="newTel">
    <input type="hidden" name="newAddress[tag_name]" id="newTag">
    <!--点击弹出新增/收货地址界面start-->
    <div class="xm-edit-addr-box" id="J_editAddrBox">
        <div class="bd">
            <div class="item">
                <label>收货人姓名<span>*</span></label> 
                <input type="text" name="userAddress[consignee]" id="Consignee" class="input" placeholder="收货人姓名" maxlength="15" autocomplete='off'>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>联系电话<span>*</span></label> 
                <input type="text" name="userAddress[tel]" class="input" id="Telephone" placeholder="11位手机号" autocomplete='off'>
                <p class="tel-modify-tip" id="telModifyTip"></p>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>地址<span>*</span></label>
                <select name="userAddress[province]" id="Provinces" class="select-1">
                    <option>省份/自治区</option>
                </select>
                <select name="userAddress[city]"  id="Citys" class="select-2" disabled>
                    <option>城市/地区/自治州</option>
                </select>
                <select name="userAddress[county]"  id="Countys" class="select-3" disabled>
                    <option>区/县</option>
                </select>
                <textarea   name="userAddress[street]" class="input-area" id="Street" placeholder="路名或街道地址，门牌号"></textarea>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>邮政编码<span>*</span></label> 
                <input type="text" name="userAddress[zipcode]" id="Zipcode" class="input" placeholder="邮政编码"  autocomplete='off'>
                <p class="zipcode-tip" id="zipcodeTip"></p>
                <p class="tip-msg tipMsg"></p>
            </div>
            <div class="item">
                <label>地址标签<span>*</span></label> 
                <input type="text" name="userAddress[tag]" id="Tag" class="input" placeholder='地址标签：如"家"、"公司"。限5个字内'  >
                <p class="tip-msg tipMsg"></p>
            </div>
        </div>
        <div class="ft clearfix">
            <button  type="button"  class="btn btn-lineDake btn-small " id="J_editAddrCancel">取消</button>
             <button type="button" class="btn btn-primary  btn-small " id="J_editAddrOk">保存</button>
        </div>
    </div>
    <!--点击弹出新增/收货地址界面end-->
    <div class="xm-edit-addr-backdrop" id="J_editAddrBackdrop"></div>
</div>                </div>
                <!-- 收货地址 END-->
                <div id="checkoutPayment">
                    <!-- 支付方式 -->
                                <div class="xm-box">
                <div class="box-hd ">
                    <h2 class="title">支付方式</h2>
                </div>
                <div class="box-bd">
                    <ul id="checkoutPaymentList" class="checkout-option-list clearfix J_optionList">
                                                <li class="item selected">
                            <input type="radio" name="Checkout[pay_id]" checked="checked" value="1">
                            <p>
                                在线支付                                <span></span>
                            </p>
                        </li>
						<li class="item">
                            <input type="radio" name="Checkout[pay_id]" checked="checked" value="1">
                            <p>
                                货到付款                                <span></span>
                            </p>
                        </li>
                                            </ul>
                </div>
            </div>
            <!-- 支付方式 END-->
            <div class="xm-box">
                <div class="box-hd ">
                    <h2 class="title">配送方式</h2>
                </div>
                <div class="box-bd">
                    <ul id="checkoutShipmentList" class="checkout-option-list clearfix J_optionList">
                                                <li class="item selected">
                            <input type="radio" data-price="0" name="Checkout[shipment_id]" checked="checked" value="1">
                            <p>
                                快递配送（免运费）                                <span></span>
                            </p>
                        </li>
                                            </ul>
                </div>
            </div>
            <!-- 配送方式 END-->                    <!-- 配送方式 END-->
                </div>
               
                <!-- 发票信息 -->
                <div id="checkoutInvoice">
                    <div class="xm-box">
    <div class="box-hd">
        <h2 class="title">发票信息</h2>
    </div>
    <div class="box-bd">
        <ul class="checkout-option-list checkout-option-invoice clearfix J_optionList J_optionInvoice">
             <li class="hide">
                                 电子个人发票4  
             </li>
                        <li class="item selected">
                <!--<label><input type="radio"  class="needInvoice" value="0" name="Checkout[invoice]">不开发票</label>-->
                <input type="radio"    checked="checked"  value="4" name="Checkout[invoice]">
                <p>电子发票（非纸质）</p>
            </li>
                        <li class="item ">
                <input type="radio"   value="1" name="Checkout[invoice]">
                <p>普通发票（纸质）</p>
            </li>
        </ul>
                <p id="eInvoiceTip" class="e-invoice-tip ">
            电子发票是税务局认可的有效凭证，可作为售后维权凭据，不随商品寄送。开票后不可更换纸质发票，如需报销请选择普通发票。<a href="http://bbs.xiaomi.cn/thread-9285999-1-1.html" target="_blank">什么是电子发票？</a>
        </p>
        <div class="invoice-info nvoice-info-1" id="checkoutInvoiceElectronic" style="display:none;">

            <p class="tip">电子发票目前仅对个人用户开具，不可用于单位报销 ，不随商品寄送</p>
            <p>发票内容：购买商品明细</p>
            <p>发票抬头：个人</p>
            <p>
                <span class="hide"><input type="radio" value="4" name="Checkout[invoice_type]"   checked="checked"   id="electronicPersonal" class="invoiceType"></span>
                <dl>
                    <dt>什么是电子发票?</dt>
                    <dd>&#903; 电子发票是纸质发票的映像，是税务局认可的有效凭证，与传统纸质发票具有同等法律效力，可作为售后维权凭据。</dd>
                    <dd>&#903; 开具电子服务于个人，开票后不可更换纸质发票，不可用于单位报销。</dd>
                    <dd>&#903; 您在订单详情的"发票信息"栏可查看、下载您的电子发票。<a href="http://bbs.xiaomi.cn/thread-9285999-1-1.html" target="_blank">什么是电子发票？</a></dd>
                </dl>
            </p>
        </div>
                <div class="invoice-info invoice-info-2" id="checkoutInvoiceDetail"  style="display:none;" >
            <p>发票内容：购买商品明细</p>
            <p>
                发票抬头：请确认单位名称正确,以免因名称错误耽搁您的报销。注：合约机话费仅能开个人发票
            </p>
            <ul class="type clearfix J_invoiceType">
                <li class="hide">
                    <input type="radio" value="0" name="Checkout[invoice_type]" id="noNeedInvoice" > 
                </li>
                <li class="">
                    <input  class="invoiceType" type="radio" id="commonPersonal" name="Checkout[invoice_type]" value="1" >
                    个人
                </li>
                <li class="">
                     <input  class="invoiceType" type="radio" name="Checkout[invoice_type]" value="2" >
                     单位
                </li>
            </ul>
            <div  id='CheckoutInvoiceTitle' class=" hide  invoice-title">
                <label for="Checkout[invoice_title]">单位名称：</label>
                <input name="Checkout[invoice_title]" type="text" maxlength="49" value="" class="input"> <span class="tip-msg J_tipMsg"></span>
            </div>

        </div>

    </div>
</div>                </div>
                <!-- 发票信息 END-->
            </div>
            <div class="checkout-box-ft">
                 <!-- 商品清单 -->
                <div id="checkoutGoodsList" class="checkout-goods-box">
                                    <div class="xm-box">
                    <div class="box-hd">
                        <h2 class="title">确认订单信息</h2>
                    </div>
                    <div class="box-bd">
                        <dl class="checkout-goods-list">
                            <dt class="clearfix">
                                <span class="col col-1">商品名称及图片</span>
                                <span class="col col-2">价格</span>
                                <span class="col col-3">数量</span>
                                <span class="col col-4">小计（元）</span>
                            </dt>
                           <?php foreach($cart as $carts): ?>
                           <dd class="item clearfix">
                                <div class="item-row">
                                    <div class="col col-1">
                                        <div class="g-pic">
                                            <img src="__STATIC__/image/<?php echo $carts['imgpath']; ?>" width="40" height="40" />
                                        </div>
                                        <div class="g-info">
                                           <a href="#"><?php echo $carts['pname']; ?></a>
                                                                                                                                </div>
                                    </div>
                
                                    <div class="col col-2"><?php echo $carts['price']; ?></div>
                                    <div class="col col-3"><input type="number" id="num" value="<?php echo $carts['num']; ?>" min="1" max="100" onchange="editnum(<?php echo $carts['id']; ?>)"></div>
                                    <div class="col col-4"><?php echo $carts['num']*$carts['price']; ?>元</div>
                                    <div class="col col-5"><a href="javascript:delpro(<?php echo $carts['id']; ?>)"><img src="__STATIC__/images/close2.png"></img></a></div>
                                </div>
                            </dd>
                           <?php endforeach; ?>                             
                                                        
                                                    </dl>
                        <div class="checkout-count clearfix">
                            <div class="checkout-count-extend xm-add-buy">
                                <h3 class="title">会员留言</h2></br>
                                <input type="text" />

                            </div>
                            <!-- checkout-count-extend -->
                            <div class="checkout-price">
                                <ul>

                                    <li>
                                       订单总额：<span><?php echo $price; ?></span>
                                    </li>
                                    <li>
                                        活动优惠：<span>-0元</span>
                                    </li>
                                    <li>
                                        优惠券抵扣：<span id="couponDesc">-0元</span>
                                    </li>
                                    <li>
                                        运费：<span id="postageDesc">0元</span>
                                    </li>
                                </ul>
                                <p class="checkout-total">应付总额：<span><strong><?php echo $price; ?></strong>元</span></p>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>

    <!--S 加价购 产品选择弹框 -->
                <div class="modal hide modal-choose-pro" id="J_choosePro-664">
                <div class="modal-header">
                    <span class="close" data-dismiss='modal'><i class="iconfont">&#xe617;</i></span>
                    <h3>选择产品</h3>
                    <div class="more">
                        <div class="xm-recommend-page clearfix">
                            <a class="page-btn-prev   J_carouselPrev iconfont" href="javascript: void(0);">&#xe604;</a><a class="page-btn-next  J_carouselNext iconfont" href="javascript: void(0);">&#xe605;</a>
                        </div>
                    </div>
                </div>
                <div class="modal-body J_chooseProCarousel">
                    <div class="J_carouselWrap modal-choose-pro-list-wrap">
                        <ul class="clearfix J_carouselList">
                                                    </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-disabled J_chooseProBtn">加入购物车</a>
                </div>
            </div>
                <!--E 加价购 产品选择弹框 -->
    
    <!--S 保障计划 产品选择弹框 -->
    
    
                </div>
                <!-- 商品清单 END -->
                <input type="hidden"  id="couponType" name="Checkout[couponsType]">
                <input type="hidden" id="couponValue" name="Checkout[couponsValue]">
                <div class="checkout-confirm">
                    
                     <a href="#" class="btn btn-lineDakeLight btn-back-cart">返回购物车</a>
                     <input type="submit" class="btn btn-primary" value="立即下单" id="checkoutToPay" />
                                     </div>
            </div>
        </div>

    </form>

</div>
<!-- 禮品卡提示 S-->
    <div class="modal hide lipin-modal" id="lipinTip">
        <div class="modal-header">
            <h2 class="title">温馨提示</h2>
            <p> 为保障您的利益与安全，下单后礼品卡将会被使用，<br>
 且订单信息将不可修改。请确认收货信息：</p>
        </div>
        <div class="modal-body">
            <ul>
                <li><strong>收&nbsp;&nbsp;货&nbsp;&nbsp;人：</strong><span id="lipin-uname"></span></li>
                <li><strong>联系电话：</strong><span id="lipin-uphone"></span></li>
                <li><strong>收货地址：</strong><span id="lipin-uaddr"></span></li>
            </ul>
        </div>
        <div class="modal-footer">
            <span class="btn btn-primary" id="useGiftCard">确认下单</span><span class="btn btn-dakeLight" id="closeGiftCard">返回修改</span>
        </div>
    </div>
<!--  禮品卡提示 E-->
<!-- 预售提示 S-->
    <div class="modal hide yushou-modal" id="yushouTip">
        <div class="modal-body">
            <h2>请确认收货地址及发货时间</h2>
            <ul class="list">
                <li>
                    <strong>请确认配送地址，提交后不可变更：</strong>
                    <p id="yushouAddr"> </p>
                    <span class="icon-common icon-1"></span>
                </li>
                <li>
                    <strong>支付后发货</strong>
                    <p>如您随预售商品一起购买的商品，将与预售商品一起发货</p>
                    <span class="icon-common icon-2"></span>
                </li>
                <li>
                    <strong>以支付价格为准</strong>
                    <p>如预售产品发生调价，已支付订单价格将不受影响。</p>
                    <span class="icon-common icon-3"></span>
                </li>
            </ul>
        </div>
        <div class="modal-footer">
                <p id="yushouOk" class="yushou-ok">
                    <span class="icon-checkbox"><i class="iconfont">&#xe626;</i></span>
                    我已确认收货地址正确，不再变更</p>
                <span class="btn btn-lineDakeLight" data-dismiss="modal">返回修改地址</span>    
                <span class="btn btn-primary" id="yushouCheckout">继续下单</span>
                
            </div>
    </div>
<!--  预售提示 E-->

<script id="newAddrTemplate" type="text/x-dot-template">
        <dl class="item selected" data-isnew="true" data-consignee="{{=it.consignee}}" data-tel="{{=it.tel}}" data-province="{{=it.province}}" data-provincename="{{=it.provinceName}}" data-city="{{=it.city}}" data-cityname="{{=it.cityName}}" data-county="{{=it.county}}" data-countyname="{{=it.countyName}}" data-zipcode="{{=it.zipcode}}" data-street="{{=it.street}}" data-tag="{{=it.tag}}">
            <dt>
                <strong class="itemConsignee">{{=it.consignee}}</strong>
                {{? it.tag }}
                    <span  class="itemTag tag">{{=it.tag}}</span>
                {{?}}
            </dt>
            <dd>
                <p class="tel itemTel">{{=it.tel}}</p>
                <p  class="itemRegion">{{=it.provinceName}} {{=it.cityName}} {{=it.countyName}}</p>
                <p  class="itemStreet">{{=it.street}} ({{=it.zipcode}})</p>
                <span class="edit-btn J_editAddr">编辑</span>
            </dd>
        </dl>
</script>


<!-- 保险弹窗 -->
<!-- 保险弹窗 -->
<script type="text/javascript">
function editnum(id){
	var num=document.getElementById("num").value;
	$.post("/index/index/cart/act/edit/id/"+id+"/num/"+num,{},function(data){
		//alert(data.msg);
		location.reload(); //页面刷新 或者history.go(0)  history.go(-1) --返回上一页 
	})
}
function delpro(id){
	$.post("/index/index/cart/act/del/id/"+id,{},function(data){
		//alert(data.msg);
		location.reload(); //页面刷新 或者history.go(0)  history.go(-1) --返回上一页 
	})
}
</script>

        

<script src="__STATIC__/js/base.min.js"></script>

<script type="text/javascript" src="__STATIC__/js/address_all.js"></script>
<script type="text/javascript" src="__STATIC__/js/checkout.min.js"></script> 
 
 <!--收货地址body部分结束-->
    
    
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="__STATIC__/js/unslider.min.js" type="text/javascript"></script>
<script src="__STATIC__/js/index.js" type="text/javascript"></script>

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
<script type="text/javascript">
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
    