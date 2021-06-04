<?php 

include_once('Connection.php'); //my connection is here

class Database extends Connection{


	public function __construct(){

		parent::__construct();//put this if naay default constructor and class na iya ge extendnan para ma apil sad diri
		//above code copy the default constructor of the class extended

	}//endDefaultConstructor

	//disconnect is in the parent class in connection.php

	//get row
	public function getRow($query, $params = []){
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetch();	
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());	
		}


	}//end getRow

	//get rows
	public function getRows($query, $params = []){
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			return $stmt->fetchAll();	
		} catch (PDOException $e) {
			//echo("error, could not fetch all... database getrows function");
			throw new Exception($e->getMessage());	
		}
	}//end getRows

	//insert row
	public function insertRow($query, $params = []){
		try {
			$stmt = $this->datab->prepare($query);
			$stmt->execute($params);
			//echo("inside database insertrow method");
			return TRUE;	
		} catch (PDOException $e) {

			throw new Exception($e->getMessage());	
			echo("error message         ---------------------------------------------------------" . $e);
		}

	}//end insertRow

	//update row
	public function updateRow($query, $params = []){
		return $this->insertRow($query, $params);
	}//end updateRow

	//delete row
	public function deleteRow($query, $params = []){
		return $this->insertRow($query, $params);
	}//end deleteRow

	//get the last inserted ID
	public function lastID(){
		$lastID = $this->datab->lastInsertId(); 
		return $lastID;
	}//end lastID func


	//under construction kay dili pa mo gana!!!!
	public function transInsert($query, $params = [], $query2, $params2 = []){
		try {
			$this->transaction->beginTransaction();
				$stmt = $this->datab->prepare($query);
				$stmt->execute($params);

				$stmt2 = $this->datab->prepare($query2);
				$stmt2->execute($params2);

			return $this->transaction->commit();
		} catch (PDOException $e) {
			$this->transaction->rollBack();
			throw new Exception($e->getMessage());	
		}
	}//end transac func


	public function Begin(){
		return $this->transaction->beginTransaction();
	}

	public function Commit(){
		return $this->transaction->commit();
	}

	public function test()
	{
		//echo 'database class test';
	}
}

$db = new Database();
 ?>