<?php

class Student extends Controller{

	function __construct(){
		parent::__construct();
		//print "Index Page";
		Session::init();
		$logged = Session::get('loggedIn');
		if(!$logged){
			header('location: ./login');
		}
	}
	
	public function xhrGetListings(){
		$this->model->xhrGetListings();
	}
	
	function index(){
		$this->view->studentList = $this->model->studentList();
		$this->view->css = array('/student/css/flexigrid.pack.css');
		$this->view->js = array('/student/js/flexigrid.pack.js');
		
		$this->view->data=array('title'=>'Students', 'description'=>'This is the students page');
		$this->view->render("student/index");
	}
	
	function add(){
		$this->view->data=array('title'=>'Add Student', 'description'=>'This is the add students page');
		$this->view->render("student/add");
	}

	function create(){
			$data['firstname'] = $_POST['firstname'];
			$data['lastname'] = $_POST['lastname'];
			$data['sex'] = $_POST['sex'];
			$data['age'] = $_POST['age'];
			
			// @TODO: Do your error checking!
			
			$this->model->create($data);
			header('Location: '.URL.'/student');
	}
	
	function edit($id){
		// fetch individual user
		$this->view->student = $this->model->getStudent($id);
		$this->view->data=array('title'=>'Edit Student', 'description'=>'This is the edit student page');
		$this->view->render("student/edit");
	}
	
	function editSave($id){
	
		$data['id'] = $id;
		$data['firstname'] = $_POST['firstname'];
		$data['middlename'] = $_POST['middlename'];
		$data['lastname'] = $_POST['lastname'];
		$data['sex'] = $_POST['sex'];
		$data['dateofbirth'] = $_POST['birthday']; // convert to date format
		$data['age'] = $_POST['age'];
		$data['grade'] = $_POST['grade'];
		$data['exgrade'] = $_POST['exgrade'];
		$data['address'] = $_POST['address'];
			
		// @TODO: Do your error checking!
			
		$this->model->editSave($data);
		header('Location: '.URL.'/student');
	}
	
	function delete($id){
		
			$this->model->delete($id);
			header('Location: '.URL.'/student');
	}
}