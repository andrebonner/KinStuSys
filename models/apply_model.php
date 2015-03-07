<?php

class Apply_Model extends Model{
	
	/**
	 * Initializing Apply Model
	 **/
	public function __construct(){
		
		parent::__construct();
				
	}
	
	
	// /**
	 // * @return nothing
	 // **/
	// public function xhrInsert(){
		// print $text = $_POST['text'];
		// $sth = $this->db->prepare('INSERT INTO student(text) VALUES (:text)');
		// $sth->execute(array(':text' => $text));
		
	// }
	// /**
	 // * @return nothing
	 // **/
	// public function xhrGetListings(){
		// $sth = $this->db->prepare("SELECT * FROM students");
		// $sth->setFetchMode(PDO::FETCH_ASSOC);
		// $sth->execute();
		// $data = $sth->fetchAll();
		// echo json_encode($data);
		
	// }
	
	/**
	 * @return nothing
	 **/
	public function applicantList(){
		
		
		$sth = $this->db->prepare("SELECT * FROM applications");
		$sth->execute();
		
		return $sth->fetchAll();
	}

	/**
	 * @param array $data The posted data from the form
	 * @return nothing
	 **/
	public function run($data){
		
		$this->db->insert("applications",$data);		
	}
	
}