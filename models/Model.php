<?php

class Model{

	/**
	 * Initializing model to Database object
	 **/
	function __construct(){
		//print "Model main";		
		$this->db = new Database();

	}	
}
?>