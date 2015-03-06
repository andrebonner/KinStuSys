<?php
class View{
	function __construct(){
		//print "View main";
		
	}
	public function render($name, $noinclude=false){
			if(!$noinclude)	require "views/header.php";
			require "views/$name.php";
			if(!$noinclude) require "views/footer.php";
	}
}
?>