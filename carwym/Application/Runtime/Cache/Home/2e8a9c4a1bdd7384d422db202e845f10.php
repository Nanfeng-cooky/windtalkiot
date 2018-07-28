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
		<div class="car-title">
			<span>奥迪-></span>
			<span>Audi A4-></span>
			<span>全新奥迪A4</span>
		</div>
		<div class="seltcar-show">
			<img src="<?php echo IMG_URL; ?>/A4regular.png" alt="">
		</div>
		<div class="seltcar-title">
			选择型号
		</div>
		<div class="seltcar-list">
			<ul>
				<li><img src="<?php echo IMG_URL; ?>/A4new.png" alt=""><p>全新奥迪A4L</p></li>
				<li><img src="<?php echo IMG_URL; ?>/A4show.png" alt=""><p>全新奥迪A4 allroad quattro</p></li>
				<li><img src="<?php echo IMG_URL; ?>/A4new.png" alt=""><p>全新奥迪A4L</p></li>
				<li><img src="<?php echo IMG_URL; ?>/A4show.png" alt=""><p>全新奥迪A4 allroad quattro</p></li>
			</ul>
		</div>
	</div>
	<script>
		$('ul').on('click','li',function(){
			window.location.href = "/index.php/Home/Select/selcolor"
		})
	</script>
</body>
</html>