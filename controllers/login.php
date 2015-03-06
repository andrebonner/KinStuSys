<?php

class Login extends Controller{

	function __construct(){
		parent::__construct();
		//print "Login Page";
		
	}
	
	function index(){
		/*require 'models/login_model.php';
		$model = new Login_Model();*/
		
		//print Hash::create('md5', 'test', HASH_PASSWORD_KEY);
		
		Session::init();
		$logged = Session::get('loggedIn');
		if($logged){
			header('location: ./index');
		}
		
		$this->view->data=array('title'=>'Login', 'description'=>'This is the login page');
		$this->view->css = array('/login/home.css');
		$this->view->render("login/index", true);
	}
	
	public function run(){
	
		$this->model->run();
	}
}