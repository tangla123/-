<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<h2>登录</h2>
	<form action="/blogs/index.php/Home/Index/login/" method="post" enctype="multipart/form-data">
		<p><label>账号：<input type="text" name="lo_name"></label></p>
		<p><label>密码：<input type="text" name="lo_pwd"></label></p>
		<p><input type="submit" value="登录"></p>
	</form>
</body>
</html>