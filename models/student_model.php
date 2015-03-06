<?php

class Student_Model extends Model{
	
	public function __construct(){
		
		parent::__construct();
				
	}
	/*
	public function xhrInsert(){
		print $text = $_POST['text'];
		$sth = $this->db->prepare('INSERT INTO student(text) VALUES (:text)');
		$sth->execute(array(':text' => $text));
		
	}*/
	public function xhrGetListings(){
		$page = isset($_POST['page']) ? $_POST['page'] : 1;
		$sortname = isset($_POST['sortname']) ? $_POST['sortname'] : 'id';
		$sortorder = isset($_POST['sortorder']) ? $_POST['sortorder'] : 'asc';
		$qtype = isset($_POST['qtype']) ? $_POST['qtype'] : '';
		$query = isset($_POST['query']) ? $_POST['query'] : '';
		$rp = isset($_POST['rp']) ? $_POST['rp'] : 10;
		
		// setup sort and search SQL using posted data
		$sortSql = "order by $sortname $sortorder";
		$searchSql = ($qtype != '' && $query != '') ? "where $qtype = '$query'" : '';
		//get total count of records
		$sql = "select count(*) 
		from students
		$searchSql";
		$sth = $this->db->prepare($sql);
		//echo $sql;
		$sth->execute();
		$total = $sth->fetchColumn();
		// Setup paging SQL
		$pageStart = ($page-1)*$rp;
		$limitSql = "limit $pageStart, $rp";
		// Return JSON data
		$data['page'] = $page;
		$data['total'] = $total;
		$data['rows'] = array();
		$sql = "select id, firstname, lastname, sex, address
		from students
		$searchSql
		$sortSql
		$limitSql";
		//echo $sql;
		$sth = $this->db->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$sth->execute();
		while($row = $sth->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
			$data['rows'][] = array(
			'id' =>$row['id'],
			'cell'=>array('id' =>$row['id'],'firstname' =>$row['firstname'],'lastname' =>$row['lastname'],'sex' =>$row['sex'],'address' =>$row['address'])
			);
		}
		echo json_encode($data);
		
	}
	public function studentList(){
		
		
		$sth = $this->db->prepare("SELECT * FROM students");
		$sth->execute();
		
		return $sth->fetchAll();
	}

	public function create($data){
		
		$sth = $this->db->prepare("INSERT INTO students (firstname , lastname, sex, age) VALUES(:firstname , :lastname, :sex, :age)");
		$sth->execute(array(':firstname' => $data['firstname'], ':lastname' => $data['lastname'], ':sex' => $data['sex'], ':age' => $data['age']));
	
	}
	
	public function getStudent($id){
				
		$sth = $this->db->prepare("SELECT id, firstname, middlename, lastname, sex, dateofbirth, age, grade, exgrade, address FROM students WHERE id=:id");
		$sth->execute(array(':id' => $id));
	
		return $sth->fetch();		
		
	}
	
	public function editSave($data){
		$sth = $this->db->prepare("UPDATE students SET firstname = :firstname, middlename = :middlename, lastname = :lastname, sex =:sex, dateofbirth =:dateofbirth, age =:age, grade =:grade, exgrade =:exgrade, address =:address WHERE id = :id");
		$sth->execute(array(':firstname' => $data['firstname'], ':middlename' => $data['middlename'], ':lastname' => $data['lastname'], ':sex' => $data['sex'], ':dateofbirth' => $data['dateofbirth'], ':age' => $data['age'], ':grade' => $data['grade'], ':exgrade' => $data['exgrade'], ':address' => $data['address'], ':id' => $data['id']));
	}
	
	public function delete($id){
	
		if(Session::get('role') != 'administrator'){
			return false;
		}
		
		$sth = $this->db->prepare("DELETE FROM students WHERE id=:id");
		$sth->execute(array(':id' => $id));
	}
}