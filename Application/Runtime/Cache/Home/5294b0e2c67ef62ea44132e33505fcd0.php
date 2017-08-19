<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	<h2>注册</h2>
	<form action="/blogs/index.php/Home/Index/threeinsert/" method="post" enctype="multipart/form-data">
		<p><label>账号：<input type="text" name="lo_name"></label></p>
		<p><label>密码：<input type="text" name="lo_pwd"></label></p>
		<p><label>头像：<input type="file" name="lo_img"></label></p>
		<p><input type="submit" value="提交"></p>
	</form>
</body>
</html>