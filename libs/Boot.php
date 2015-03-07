<?php
// Boot Class 
class Boot{
	/** 
	 * Initalizing Boot object Vars
	 **/
	function __construct(){
		
		$var = isset($_GET['var']) ? $_GET['var'] : null;
		$var = rtrim($var,'/');
		$var = filter_var($var, FILTER_SANITIZE_URL);
		$var = explode('/', $var);
	
		if(empty($var[0]) || $var[0] == 'index.php'){
			require "controllers/index.php";
			$controller = new Index();
			$controller->index();
			return false;
		}
		
		
		$file ="controllers/$var[0].php";
		
		if(file_exists($file)){
			require $file;
			$controller = new $var[0];
			$controller->loadModel($var[0]);
			// calling methods
			if(isset($var[2])){
						
				if(method_exists($controller,$var[1])){
					$controller->{$var[1]}($var[2]);
				}else{
					$this->error();
				}				
			}
			else{
				if(isset($var[1])){
					
					if(method_exists($controller,$var[1])){
						$controller->{$var[1]}();
					}else{
						$this->error();
					}								
				}else{
					$controller->index();
				}
			}			
		}else{
			$this->error();
		}
		
		
	}
	
	/**
	 * presenting errors
	 **/
	function error(){
		require 'controllers/error.php';
		$controller = new Error();
		$controller->index();
		return false;
	}
	
}
?>