<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加车辆</title>
	<link rel="stylesheet" href="<?php echo CSS_URL; ?>/main.css">
	<script src="<?php echo JS_URL; ?>/jquery-3.3.1.js"></script>
</head>
<body>
	<div class="no-back">
		<div id="back-foward"></div>
		<div id="car"></div>
		<div id="logo"></div>
		<div class="shop-banner">
			<div class="shop-title">
				<span>车无忧汽车养护中心</span>
				<img src="<?php echo IMG_URL; ?>/shop-star.png" alt="">
			</div>
		</div>
		<div class="shop-brand-list">
			<p>店铺最拿手品牌TOP</p>
			<div class="shop-brand">
				<img src="" alt="">
				<p>奥迪</p>
			</div>
			<div class="shop-brand">
				<img src="" alt="">
				<p>奔驰</p>
			</div>
			<div class="shop-brand">
				<img src="" alt="">
				<p>标志</p>
			</div>
		</div>
		<div class="shop-work">
			<div class="shop-worker-list">
				<div class="shop-worker worker-wang">
					<div class="worker-title">
						<p>张师傅</p>
						<img src="<?php echo IMG_URL; ?>/shop-star.png" alt="">
					</div>
					<div class="worker-subtitle">
						<p>高级技师</p>
						<p>拿手：奥迪维修</p>
					</div>
				</div>
				<div class="shop-worker worker-zhang">
					<div class="worker-title">
						<p>张师傅</p>
						<img src="<?php echo IMG_URL; ?>/shop-star.png" alt="">
					</div>
					<div class="worker-subtitle">
						<p>高级技师</p>
						<p>拿手：奥迪维修</p>
					</div>
				</div>
				<div class="shop-worker worker-wang">
					<div class="worker-title">
						<p>张师傅</p>
						<img src="<?php echo IMG_URL; ?>/shop-star.png" alt="">
					</div>
					<div class="worker-subtitle">
						<p>高级技师</p>
						<p>拿手：奥迪维修</p>
					</div>
				</div>
				<div class="shop-worker worker-zhang">
					<div class="worker-title">
						<p>张师傅</p>
						<img src="<?php echo IMG_URL; ?>/shop-star.png" alt="">
					</div>
					<div class="worker-subtitle">
						<p>高级技师</p>
						<p>拿手：奥迪维修</p>
					</div>
				</div>
			</div>
		</div>
		<div class="map-start">
			<a href="/index.php/Home/User/map">进入店铺</a>
		</div>
	</div>
	<script>
		$('.shop-worker-list').mousedown(function(e){
			var eX = e.clientX;
			//var eY = e.clientY;
			//console.log(eX,eY);
			var divX = parseInt($(this).css('left'));
			//var divY = parseInt($(this).css('right'));

			console.log(eX,divX);
			$(document).bind('mousemove',function(e){
				var mX = e.clientX - eX +divX;
				console.log(mX);
				$('.shop-worker-list').css('left',mX+"px");
			})
		})
		$('.shop-worker-list').mouseup(function(){
			$(document).unbind('mousemove');
		})

	</script>
</body>
</html>