<?php


class User extends Controller{

	function __construct(){
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		$role = Session::get('rolename');
		if ($logged == false || $role != 'administrator'){
			Session::destroy();
			header('Location: ./login');
			exit;
		}
		
		//print_r($_SESSION);
		
		//print "User Page";
		//$this->view->js = array('/user/js/default.js');
		
	}
	
	function index(){
		$this->view->userList = $this->model->userList();
		$this->view->data=array('title'=>'User', 'description'=>'This page is the user');
		$this->view->render("user/index");
	}
	
	function create(){
			$data['login'] = $_POST['login'];
			$data['password'] = Hash::create('md5',$_POST['password'],HASH_PASSWORD_KEY);
			$data['role'] = $_POST['role'];
			
			// @TODO: Do your error checking!
			
			$this->model->create($data);
			header('Location: '.URL.'/user');
	}
	function edit($id){
		// fetch individual user
		$this->view->user = $this->model->userSingleList($id);
		$this->view->data=array('title'=>'User', 'description'=>'This page is the user');
		$this->view->render("user/edit");
	}
	
	function editSave($id){
	
		$data['id'] = $id;
		$data['login'] = $_POST['login'];
		$data['password'] = Hash::create('md5',$_POST['password'],HASH_PASSWORD_KEY);
		$data['role'] = $_POST['role'];
			
		// @TODO: Do your error checking!
			
		$this->model->editSave($data);
		header('Location: '.URL.'/user');
	}
	
	function delete($id){
		
			$this->model->delete($id);
			header('Location: '.URL.'/user');
	}
}