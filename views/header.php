<!doctype html>
<html lang="en">
    <head>
    	<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="robots" content="noodp,noydir" />
		<meta name="description" content="KinStuSys is a collaborative tool that enables you to create online surveys with simplicity and elegance." />
		<meta name="author" content="<?php echo APP_NAME ?>" />
		<title>	<?php echo APP_NAME.' : '.$this->data['title']; ?></title>
		
		<!--                       CSS                       -->
	    
		<!-- Main Stylesheet -->
		<!--<link rel="stylesheet" href="<?php echo URL;?>/locale/css/style.css" type="text/css" media="screen" />-->
		<!-- 2nd Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo URL;?>/locale/css/main.css" type="text/css" media="screen" />
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

        
		<!--                       Javascripts                       -->
	  
		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo URL;?>/locale/js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="<?php echo URL;?>/locale/js/jquery.js"></script>
		
		        <?php
	// Custom Scripts
    	if(isset($this->js)){
			foreach($this->js as $js){
	?>
   		<!-- // Custom Scripts -->
    	<script type="text/javascript" src="<?php echo URL.'/views'.$js;?>"> </script>
    <?php			
			}
		}
	?>
		
	</head>
  <body>
  <div id="wrapper">
	<div id="header">
    	<h1><?php echo APP_NAME;?></h1>
    </div>
	<div id="navbar">
    	<ul>
        	<li><a href="<?php echo URL.'/index';?>">Index</a></li>
            <li><a href="<?php echo URL.'/student';?>">Student</a></li>
        </ul>
    </div>
	<div id="content">
		
  
  