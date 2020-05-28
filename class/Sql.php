<?php
//CLASSE SQL PEGA TUDO DA CLASSE PDO
class Sql extends PDO{
	private $conn;
	public function __construct(){
		$this->conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","1234");
	} 
	private function setParams($statement, $parameters = array()){
		foreach($parameters as $key => $value){
			$this->setParam($key,$value);
		}
	}
	
	private function setParam($statement, $key, $value){
		$statement->BindParam($key,$value);
	}
	
	public function query($rawQuery,$params = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($rawQuery,$params);
		$stmt -> execute();
		return $stmt;
	}
	public function select($rawQuery,$params = array()):array{
		$stmt = $this->query($rawQuery,$params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>