<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<form action="/test_t/index.php/Home/Form/insert" method="post">
		标题：<input type="text" name="title" /><br/>
		内容：<textarea name="content" cols="45" rows="5"></textarea><br/>
		<input type="submit" value="提交"/>
	</form>
</body>
</html>