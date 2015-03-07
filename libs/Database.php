<?php

class Database extends PDO {
	
	/**
	 * Initializing database to mysql PDO
	 **/
	public function __construct(){
		parent::__construct(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
		//print 'dbtest';
	}

	/**
	 * @param string $sql
	 * @param string $data
	 * @return nothing
	 **/
	public function select($sql, $data, $fetchMode = PDO::FETCH_ASSOC){
		$sth = $this->prepare($sql);
		
		foreach($data as $key => $value){
			$sth->bindValue(":$key", $value);
		}
		$sth->execute();
		return $sth->fetchAll($fetchMode);
		
	}
	
	/**
	 * @param string $table The table to insert into
	 * @param array $data The array of fields to insert
	 * @return nothing
	 **/
	public function insert($table, $data){
		
		ksort($data);
		
		$fieldNames = implode(',',array_keys($data));
		$fieldValues = ':' . implode(',:',array_keys($data));
		
		$sth = $this->prepare("INSERT INTO $table ($fieldNames) VALUES ($fieldValues)");
		
		foreach($data as $key => $value){
			$sth->bindValue(":$key", $value);
		}
		
		$sth->execute();
	}
	
	/**
	 * @param string $table The table being updated
	 * @param array $data The array of fields to update
	 * @param string $where The where clause of criteria
	 * @return nothing
	 **/
	public function update($table, $data, $where){
		ksort($data);
		
		$fieldDetails = NULL;
		foreach($data as $key => $value) {
			$fieldDetails .= "$key=:$key,";
		}
		$fieldDetails = rtrim($fieldDetails, ',');
		
		$sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
		
		foreach($data as $key => $value){
			$sth->bindValue(":$key", $value);
		}
		
		$sth->execute();
	}
}