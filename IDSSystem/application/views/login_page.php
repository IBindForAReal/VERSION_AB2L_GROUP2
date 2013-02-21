<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>McJolly</title>
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="styles/css/style.css" type="text/css" />
		<link rel="stylesheet" href="styles/css/login.css" type="text/css" />
		
	</head>
	<body>
		<div class="login">
		<?php echo form_open(base_url() . 'user/userlogin'); ?>
			<h1><span class="log-in">Log in to your McJolly account</span></h1>
			<p class="float">
				<label for="login"><img class="icon-login" src="css/img/user.png" />Username</label>
				<?php echo form_input(array('id'=>'username', 'name' => 'username'));?>
			</p>
			<p class="float">
				<label for="password"><img class="icon-login" src="css/img/lock.png" />Password</label>
				<?php echo form_password(array('id'=>'password', 'name' => 'password'));?>
			<span class="log-in-as">Log in as</span>
			<p class="clearfix">

				<?php echo form_submit(array('name'=>'admin'), 'ADMIN'); ?>
				<?php echo form_submit(array('name'=>'cashier'), 'CASHIER'); ?>
				
			</p>
		<?php echo form_close();?>
		</div>
			
		<div class="footer"> McJOLLY &copy; 2013
		</div>
				
	</body>
</html>
