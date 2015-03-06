<?php
class Controller{
	function __construct(){
		//print "Controller Main<br/>";
			$this->view = new View();
	}
	
	function loadModel($name){
		$path = 'models/'.$name.'_model.php';
		
		if(file_exists($path)){
			require $path;
			
			$modelName = $name.'_Model';
			$this->model = new $modelName;
		}
	}
	
	function run(){
		$this->model->run();
	}
}
?>