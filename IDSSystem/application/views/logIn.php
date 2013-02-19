<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
	if(isset($message))
		echo $message;
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>McJolly</title>
		<link rel="shortcut icon" href="favicon.png" />

		<link rel="stylesheet" href="<?php echo base_url();?>styles/style.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/login.css" type="text/css"></link>
		
	</head>
	<body>
		<form class="login" action='<?php echo base_url();?>index.php/logManager/checkUser' method='post'>
			<h1><span class="log-in">Log in to your McJolly account</span></h1>
			<p class="float">
				<label for="login"><img class="icon-login" src="<?php echo base_url();?>styles/img/user.png" />Username</label>
				<input type="text" name="login" placeholder="Username" autofocus required>
			</p>
			<p class="float">
				<label for="password"><img class="icon-login" src="<?php echo base_url();?>styles/img/lock.png" />Password</label>
				<input type="password" name="password" placeholder="Password" class="showpassword" required> 
			</p>
			<span class="log-in-as">Log in as</span>
			<p class="clearfix">
				<input type="submit" name="user" value="admin">
				<input type="submit" name="user" value="cashier">
				
			</p>
		</form>
		<div class="footer"> McJOLLY &copy; 2013
	</div>			
	</body>
</html>
