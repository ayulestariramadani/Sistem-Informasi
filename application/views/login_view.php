<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/css_login.css">
</head>
<body>
	<div class="loginBox">
		<img src="<?php echo base_url()?>images/admin.png" class="user">
		<h2>Log In</h2>
		<form action="<?php echo site_url('login/ceklogin')?>" method="post">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			
			<input type="submit" name="submit" value="Sign In">
			
		</form>
	</div>
</body>
</html>