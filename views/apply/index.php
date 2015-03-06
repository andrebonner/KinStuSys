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
<body id="main_body" >
	
	<img id="top" src="<?php echo URL.'/views/apply/';?>top.png" alt="">
	<div id="form_container">
	
		<h1><a>Application Form</a></h1>
		<form id="form_839864" class="appnitro" enctype="multipart/form-data" method="post" action="<?php echo URL;?>/apply/run">
					<div class="form_description">
			<h2>UApplication Form</h2>
			<p><?php echo (!isset($this->data['description'])) ? "This form will take new applicants." : $this->data['description']; ?></p>
		</div>						
			<ul >
			
					<li id="li_2" >
		<label class="description" for="photo_upload">Child's Photo </label>
		<div>
			<input id="photo_upload" name="photo_upload" class="element file" type="file" accept="image/*"/> 
		</div>  
		</li>		<li id="li_1" >
		<label class="description" for="child_name">Child's Name </label>
		<span>
			<input id="firstname" name= "firstname" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="lastname" name= "lastname" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_3" >
		<label class="description" for="birthday">Birthday </label>
		<span>
			<input id="birth_month" name="birth_month" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="birth_month">MM</label>
		</span>
		<span>
			<input id="birth_day" name="birth_day" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="birth_day">DD</label>
		</span>
		<span>
	 		<input id="birth_year" name="birth_year" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="birth_year">YYYY</label>
		</span>
	
		<span id="calendar_3">
			<img id="cal_img_3" class="datepicker" src="<?php echo URL.'/views/apply/';?>calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_3_3",
			baseField    : "element_3",
			displayArea  : "calendar_3",
			button		 : "cal_img_3",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_8" >
		<label class="description" for="sex">Gender </label>
		<div>
		<select class="element select small" id="sex" name="sex"> 
			<option value="" selected="selected"></option>
<option value="f" >Female</option>
<option value="m" >Male</option>

		</select>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="address">Address </label>
		<div>
			<textarea id="address" name="address" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="email">Primary Email </label>
		<div>
			<input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="contact">Contact Number </label>
		<span>
			<input id="contact_areacode" name="contact_areacode" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="contact_areacode">(###)</label>
		</span>
		<span>
			<input id="contact_prefix" name="contact_prefix" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="contact_prefix">###</label>
		</span>
		<span>
	 		<input id="contact_line" name="contact_line" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="contact_line">####</label>
		</span>
		 
		</li>		<li id="li_7" >
		<label class="description" for="comment">Comment/Additional Info </label>
		<div>
			<textarea id="comment" name="comment" class="element textarea medium"></textarea> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="839864" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Apply" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Form designed in Dreamweaver
		</div>
	</div>
	<img id="bottom" src="<?php echo URL.'/views/apply/';?>bottom.png" alt="">
	</body>
</html>