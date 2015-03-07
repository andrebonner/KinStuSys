<?php

class User_Model extends Model{
	
	/**
	 * Initializing User Model
	 **/
	public function __construct(){
		//print 111;
		parent::__construct();
				
	}
	
	/**
	 * @param integer $id The user id
	 * @return array (result of query)
	 **/
	public function userSingleList($id){
		
		
		$sth = $this->db->prepare("SELECT id,login, password, role FROM users WHERE id=:id");
		$sth->execute(array(':id' => $id));
	
		return $sth->fetch();
		
		
	}
	
	/**
	 * @return array (result of query)
	 **/
	public function userList(){
		
		
		$sth = $this->db->prepare("SELECT users.id,users.login, users.password, roles.role FROM users INNER JOIN roles ON users.role = roles.id");
		$sth->execute();
	
		return $sth->fetchAll();
		
		
	}
	
	/**
	 * @return nothing
	 **/
	public function create($data){
		
		$sth = $this->db->prepare("INSERT INTO users (login , password, role) VALUES(:login , :password, :role)");
		$sth->execute(array(':login' => $data['login'], ':password' => $data['password'], ':role' => $data['role']));
	
	}

	/**
	 * @param array $data The array to update user
	 * @return nothing
	 **/
	public function editSave($data){
		$sth = $this->db->prepare("UPDATE users SET login = :login , password =:password, role =:role WHERE id = :id");
		$sth->execute(array(':login' => $data['login'], ':password' => $data['password'], ':role' => $data['role'], ':id' => $data['id']));
	}
	
	/**
	 * @param integer $id The user id to delete
	 * @return nothing
	 **/
	public function delete($id){
	
		/*
		$sth = $this->db->prepare("SELECT roles.role FROM users INNER JOIN roles ON users.role = roles.id WHERE roles.id=:id");
		$sth->execute(array(':id' => $id));
		$r = $sth->fetch();
		
		if($r['role'] == 'administrator'){
			return false;
		}
		*/
		
		// not proper to call get session 
		// @FIX: if(!current_user->is_admin())
		if(Session::get('role') != 'administrator'){
			return false;
		}
		
		$sth = $this->db->prepare("DELETE FROM users WHERE id=:id");
		$sth->execute(array(':id' => $id));
	}
}