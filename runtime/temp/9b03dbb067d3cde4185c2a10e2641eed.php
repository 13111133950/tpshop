<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"F:\Demo\tpshop\public/../application/index\view\index\test.html";i:1505701214;}*/ ?>
<!doctype html>  
<html>  
<head>  
    <title>购物车动画</title>  
 <link rel="stylesheet" type="text/css" href="__STATIC__/test/styles.css">
</head>  
<body>  
<div class="wrapper">
	<span class="car"><i class="shopping-cart"></i></span>
	<!-- items -->
	<div class="items">
		<!-- single item -->
		<div class="item">
			<img src="__STATIC__/test/droid-x.jpg" alt="item" />
			 <h2>droid-x</h2>

			<p>Price: <em>$255</em>
			</p>
			<button class="add-to-cart" type="button">Add to cart</button>
		</div>
		<!--/ single item -->
	</div>
	<!--/ items -->
</div>
<script type="text/javascript" src="__STATIC__/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src='__STATIC__/js/jquery-ui.min.js'></script>
<script type="text/javascript">
$('.add-to-cart').on('click', function () {
	var cart = $('.shopping-cart');
	var imgtodrag = $(this).parent('.item').find('img').eq(0);
	if (imgtodrag) {
		var imgclone = imgtodrag.clone().offset({
			top: imgtodrag.offset().top,
			left: imgtodrag.offset().left
		}).css({
			'opacity': '0.5',
			'position': 'absolute',
			'height': '150px',
			'width': '150px',
			'z-index': '100'
		}).appendTo($('body')).animate({
			'top': cart.offset().top + 10,
			'left': cart.offset().left + 10,
			'width': 75,
			'height': 75
		}, 1000, 'easeInOutExpo');
		setTimeout(function () {
			cart.effect('shake', { times: 2 }, 200);
		}, 1500);
		imgclone.animate({
			'width': 0,
			'height': 0
		}, function () {
			$(this).detach();
		});
	}
});
</script>
</body>  
</html>  