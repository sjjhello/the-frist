<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
	<form action="" method="post">
		<table align="center">
			<tr><td>username:</td><td><input type="text" name="username" size="20"></td></tr>
			<tr><td>password:</td><td><input type="password" name="password" size="20"></td></tr>
			<tr>
			<td align="left"><input type="button" name="sub" value="login in"></td>
			<td><input type="button" name="reset" value="reset"></td>
			</tr>
		</table>
	</form>
</body>
</html>