<?php

class Apply_Model extends Model{
	
	public function __construct(){
		
		parent::__construct();
				
	}
	/*
	public function xhrInsert(){
		print $text = $_POST['text'];
		$sth = $this->db->prepare('INSERT INTO student(text) VALUES (:text)');
		$sth->execute(array(':text' => $text));
		
	}
	public function xhrGetListings(){
		$sth = $this->db->prepare("SELECT * FROM students");
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		echo json_encode($data);
		
	}*/
	public function applicantList(){
		
		
		$sth = $this->db->prepare("SELECT * FROM applications");
		$sth->execute();
		
		return $sth->fetchAll();
	}

	public function run($data){
		
		$this->db->insert("applications",$data);		
	}
	
}