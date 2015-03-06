<?php
//echo Hash::create('md5','admin01',HASH_PASSWORD_KEY);
?>
<!doctype html>
<html lang="en">
    <head>
    	<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="robots" content="noodp,noydir" />
		<meta name="description" content="KinStuSys is a collaborative tool that enables you to create online surveys with simplicity and elegance." />
		<meta name="author" content="<?php echo APP_NAME ?>" />
<title><?php echo(!isset($this->data['title']))? "UApplication Form" : $this->data['title']; ?></title>
<?php
	// Custom Styles
    	if(isset($this->css)){
?>
		<!-- // Custom Styles -->
<?php
			foreach($this->css as $css){
?>
		<link rel="stylesheet" href="<?php echo URL.'/views'.$css;?>" />
<?php			
			}
		}
?>
	
<?php
	// Custom Scripts
    	if(isset($this->js)){
?>
	<!-- // Custom Scripts -->
<?php
			foreach($this->js as $js){
?>
    	<script type="text/javascript" src="<?php echo URL.'/views'.$js;?>"> </script>
<?php			
			}
		}
?>
</head>
<body id="main_body"  class="small login" >
			<div id="container">
    	<div id="content">
    		<div class="wrapper">
	
				<form action="<?php echo URL;?>/login/run" method="post">
				<!--
					<div class="notification information png_bg">
						<div>
							Please enter username and password.
						</div>
					</div>
					
					<p>
						<label>Username</label>
						<input class="text-input" type="text" name="login" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password" />
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" />Remember me
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
					-->
<input type="hidden" value="false" name="returning" id="returning" />
					<table class="login" style="margin-left: auto; margin-right: auto;">
						<tr>
							<td><p class="mtop0 mbottom025"><strong><label for="email">Username</label></strong></p><input id="email" tabindex="1" class="inputtext" type="text" name="login" /></td>
						</tr>
						<tr>
							<td><p class="mtop05 mbottom025"><strong><label for="password">Password</label></strong></p><input tabindex="2" class="inputtext" type="password" name="password" id="password" /></td>
						</tr>
						
						<tr>
							<td>
							<p class="mtop025 mbottom0 smalltxt"><a href="/app/wa/Password/forgot">Forgot password?</a>
							 	<span style="padding: 0 3px;">|</span> <a href="/app/wa/GoogleApps/signIn">Log in using Google Apps</a>
							</p></td> 
						</tr>
						<tr>
							<td><p class="mtop025 mbottom0 smalltxt"><input type="checkbox" name="remember" id="rememberMe" tabindex="3"/> <label for="rememberMe">Remember me</label></p></td>
						</tr>
						
						
						<tr>
							<td style="padding-top: 10px;"><input class="public-button" type="submit" tabindex="4" value="Log in" /></td>
						</tr>
					</table>
					
				</form>
</div>
</div>
</div>
</body>
</html>