<?php

class Index extends Controller{

	function __construct(){
		parent::__construct();
		//print "Index Page";
		Session::init();
		$logged = Session::get('loggedIn');
		if(!$logged){
			header('location: ./login');
		}
	}
	
	function index(){
		$this->view->data=array('title'=>'Index', 'description'=>'This page is the index');
		$this->view->render("index/index");
	}
	
	function details(){
		$this->view->data=array('title'=>'Index Details', 'description'=>'This page is the index details');
		$this->view->render("index/index");
	}
}