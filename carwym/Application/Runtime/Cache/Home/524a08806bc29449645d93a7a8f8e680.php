<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
	<link rel="stylesheet" href="<?php echo CSS_URL; ?>/main.css">
	<script src="<?php echo JS_URL; ?>/jquery-3.3.1.js"></script>
</head>
<body>
	<div class="loging-back">
		<div id="logo"></div>
		<div class="title">注册</div>
		<div class="form-user">
			<form action="/index.php/Home/Login/register" method="post">
				<ul class="login">
					<li>用户名：<input type="text" placeholder="请输入一个手机号码" name="user_name"></li>
					<li>密&nbsp&nbsp码：<input placeholder="请输入6-18位数字或字符" type="password"><img src="<?php echo IMG_URL; ?>/invisible.png" alt=""></li>
					<li>确认密码：<input type="password" name="user_password"><img src="<?php echo IMG_URL; ?>/invisible.png" alt=""></li>
				</ul>
				<div class="tips">用户名不存在</div>
				<div class="middle"><input type="submit" value="提交"></div>
			</form>
		</div>
	</div>
	<script>
		var ok1 = false;
		var ok2 = false;
		var ok3 = false;
		//焦点改变
		$('ul').on('blur','li',function(event){
			var target = $(event.target);
			
			if(target.val()==""){
				//console.log(target.parent('li').children('strong').length);
				if(target.parent('li').children('strong').length == 0 ){
					target.after('<strong class="red">*</strong>');
				}
			}else{
				if(target.parent('li').children('strong').length > 0 ){
					target.parent('li').children('strong').remove();
				}
			}
		})
		//用户名判断
		var reg = /^1[3456789]\d{9}$/;
		$('li:first input').bind('blur',function(){
			if($(this).val().match(reg)){
				$('.tips').css('display','block');
				$('.tips').text('用户名合法');
				ok1 = true;
			}else{
				$('.tips').css('display','block');
				$('.tips').text('用户名不是手机号');
			}
		})
		//密码判断
		var reg2 = /^[a-z0-9_-]{6,18}$/;
		$('li:eq(1) input').bind('blur',function(){
			if($(this).val().match(reg2)){
				$('.tips').css('display','block');
				$('.tips').text('密码合法');
				ok2 = true;
			}else{
				$('.tips').css('display','block');
				$('.tips').text('密码不合法');
			}
		})

		$('li:eq(2) input').bind('blur',function(){
			if($(this).val() == $('li:eq(1) input').val()){
				$('.tips').css('display','block');
				$('.tips').text('确认密码成功');
				ok3 = true;
			}else{
				$('.tips').css('display','block');
				$('.tips').text('密码不一致');
			}
		})
		$('form').bind('submit',function(e){
			if(ok1 && ok2 && ok3){

			}else{
				e.preventDefault();
				alert("输入有误");
			}
		})
	</script>
</body>
</html>