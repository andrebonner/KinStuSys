<?php

class Help extends Controller{

	/**
	 * Initializing Help Controller
	 **/
	function __construct(){
		parent::__construct();
		//print "<h1>Help Page</h1>";
		
	}
	
	/**
	 * @return nothing
	 **/
	function index(){
		$this->view->data=array('title'=>'Help', 'description'=>'This is the help page');
		$this->view->render("help/index");
	}
	
	/**
	 * @param boolean $arg (default=true) Should we do something extra
	 * @return nothing
	 **/
	function other($arg=true){
		//print "Optional $arg<br/>";
		
		$this->view->blah = $this->model->blah();
		$this->view->render("help/index");
	}
}