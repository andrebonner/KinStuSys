<?php

class Apply extends Controller{

	/**
	 * Initializing Apply Controller
	 **/
	function __construct(){
		parent::__construct();
		//print "Index Page";
	}
	
	/**
	 * @return nothing
	 **/
	function index(){
		
		$this->view->data=array('title'=>'Application', 'description'=>'This is the Application page');
		$this->view->css = array('/apply/view.css','/login/home.css');
		$this->view->js = array('/apply/view.js','/apply/calendar.js');
		$this->view->render("apply/index",true);
	}
	
	/**
	 * @return nothing
	 **/
	function run(){
			// upload photo to server
			//$data['photo'] = $_FILES['photo_upload'];
			
			$data['firstname'] = $_POST['firstname'];
			$data['lastname'] = $_POST['lastname'];
			$data['dateofbirth'] = $_POST['birth_year'].'-'.$_POST['birth_month'].'-'.$_POST['birth_day'];
			$data['sex'] = $_POST['sex'];
			$data['address'] = $_POST['address'];
			$data['email'] = $_POST['email'];
			$data['contact'] = $_POST['contact_areacode'].$_POST['contact_prefix'].$_POST['contact_line'];
			$data['comment'] = $_POST['comment'];
			
			// @TODO: Do error checking!
			
			$this->model->run($data);
			header('Location: '.URL.'/apply');
	}
	
	/**
	 * @return nothing
	 **/
	function applicantList(){
		$this->view->applicant = $this->model->applicantList();
		$this->view->data=array('title'=>'Applicants', 'description'=>'This is the students page');
		$this->view->render("apply/list");
	}
	
}