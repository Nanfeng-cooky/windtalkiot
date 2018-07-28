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
		<div class="map-title">
			<img src="<?php echo IMG_URL; ?>/map-car.png" alt="">
			<span>京 P90N65 全新奥迪A4L</span>
			<img src="<?php echo IMG_URL; ?>/map-refresh.png" alt="">
		</div>
		<div class="map-button">
			<a href="">联系店铺</a>
		</div>
		<div class="map">
			<div class="map-shop">
				<img src="<?php echo IMG_URL; ?>/map-oil.png" alt="">
				<span>车无忧汽车养护中心</span>
				<img src="<?php echo IMG_URL; ?>/map-star.png" alt="">
				<span>店铺详情</span>
				<img src="<?php echo IMG_URL; ?>/map-down.png" alt="">
			</div>
			<div class="pointer"></div>
		</div>
		<div class="map-start">
			<a href="">开始导航</a>
		</div>
	</div>
	<script>
		$('.pointer').mousedown(function(e){
			var eX = e.clientX;
			var eY = e.clientY;

			var el = parseInt($(this).css('left'));
			var et = parseInt($(this).css('top'));

			$(document).mousemove(function(e){
				var mX = e.clientX - eX + el;
				var mY = e.clientY - eY + et;

				$('.pointer').css('left',mX+"px");
				$('.pointer').css('top',mY+"px");

			})	
			$(document).mouseup(function(){
				$(document).unbind('mousemove');
			})
		})


	</script>
</body>
</html>