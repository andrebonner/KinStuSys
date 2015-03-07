<?php
class View{
	
	/**
	 * Initializing view
	 **/
	function __construct(){
		//print "View main";
		
	}
	
	/**
	 * @param string $name The name of the view to render
	 * @param boolean $noinclude (default=false) Render prepared head and foot also
	 * @return nothing
	 **/
	public function render($name, $noinclude=false){
			if(!$noinclude)	require "views/header.php";
			require "views/$name.php";
			if(!$noinclude) require "views/footer.php";
	}
}
?>