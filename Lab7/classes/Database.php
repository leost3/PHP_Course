<?php 
$USER = 'root';
$PASSWORD = '';
$HOST = 'localhost';
$DB = 'cars_db';

class Database{
	private $Connection;
	
	function Database(){
		$this->Open_Connection();
	}
	public function Open_Connection(){
		global $USER, $PASSWORD, $HOST, $DB;
		
		try{
			$this->Connection = new PDO("mysql:host=$HOST;dbname=$DB", $USER, $PASSWORD);
		    $this->Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo "Connection Failed ".$e->getMessage();
		}
	}
	public function Close_Connection(){
		$this->Connection = NULL;
	}
	public function Get_Connection(){
		return $this->Connection;
	}
}
?>