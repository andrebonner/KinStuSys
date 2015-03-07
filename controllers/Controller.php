<?php
class Controller{
	
	/**
	 * Initializing Controller with view
	 **/
	function __construct(){
		//print "Controller Main<br/>";
			$this->view = new View();
	}
	
	/**
	 * @param string $name The model name to load
	 * @return nothing
	 **/
	function loadModel($name){
		$path = 'models/'.$name.'_model.php';
		
		if(file_exists($path)){
			require $path;
			
			$modelName = $name.'_Model';
			$this->model = new $modelName;
		}
	}
	
	/**
	 * @return nothing
	 **/
	function run(){
		$this->model->run();
	}
}
?>