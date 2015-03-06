<?php

class Login_Model extends Model{
	
	public function __construct(){
		//print 111;
		parent::__construct();
				
	}
	public function run(){
		//$login 		= $_POST['login'];
		$password 	= Hash::create('md5',$_POST['password'],HASH_PASSWORD_KEY);
				
		$sth = $this->db->prepare("SELECT users.id, user_roles.rolename FROM users INNER JOIN user_roles ON users.role = user_roles.role_id WHERE users.username = :login AND users.password =:password");
		$sth->execute(array(':login' => $_POST['login'], ':password' => $password));
	
		$data = $sth->fetch();
		// print_r($data);
		
		// print $data['role'];
		// die;
		// $data = $sth->fetchAll();
		
		$count = $sth->rowCount();		
		if($count > 0) {
			// login
			Session::init();			
			Session::set('role', $data['rolename']);
			Session::set('loggedIn', true);
			header('location: ../index');
		}
		else{
			header('location: ../login');
		}
		
	}
}