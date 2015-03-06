<?php

class Error extends Controller{

	function __construct(){
		parent::__construct();
		//print "<h1>Error Page</h1>";
		header("HTTP/1.1 404 Not Found"); 
	}
	
	function index(){
		$this->view->data=array('title'=>'Error', 'description'=>'This is the errorpage', 'msg'=>'The page doesn\'t exists');
		$this->view->render("error/index");
	}
}