<?php

class Help extends Controller{

	function __construct(){
		parent::__construct();
		//print "<h1>Help Page</h1>";
		
	}
	function index(){
		$this->view->data=array('title'=>'Help', 'description'=>'This is the help page');
		$this->view->render("help/index");
	}
	function other($arg=true){
		//print "Optional $arg<br/>";
		
		$this->view->blah = $this->model->blah();
		$this->view->render("help/index");
	}
}