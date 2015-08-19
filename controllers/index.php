<?php

class Index extends Controller{

	/**
	 * Initializing Index Controller
	 **/
	function __construct(){
		parent::__construct();
		//print "Index Page";
		
		// not proper to call get session 
		// @FIX: if(Session::is_logged_in()) 
		Session::init();
		$logged = Session::get('loggedIn');
		if(!$logged){
			header('location: ./login');
		}
	}
	
	/**
	 * @return nothing
	 **/
	function index(){
		$this->view->data=array('title'=>'Index', 'description'=>'This page is the index');
		$this->view->render("index/index");
	}
	
	/**
	 * @return nothing
	 **/
	function details(){
		$this->view->data=array('title'=>'Index Details', 'description'=>'This page is the index details');
		$this->view->render("index/index");
	}
}