<?php 
require_once "Database.php";

class User{
	private static $database;
	
	private $User_ID;
	private $First_Name;
	private $Last_Name;
	private $Email;
	private $Username;
	private $Password;
	private $Salt;
	private $Role_ID;
	
	function User($first_Name, $last_Name, $email,
	              $username, $password, $role_ID, $user_ID = NULL)
	{
		$this->First_Name = $first_Name;
		$this->Last_Name  = $last_Name;		
		$this->Email = $email;
		$this->Username = $username;
		$this->Password = $password;
		$this->Salt = "salt";
		$this->Role_ID = $role_ID;
		$this->User_ID = $user_ID;
	}
	public static function Init_Database(){
		if(!isset(self::$database)){
			self::$database = new Database();
		}
	}
	public function Insert(){
		try{
			self::Init_Database();
			$query = "INSERT INTO users (First_Name, Last_Name, Email, Username, Password, Salt, Role_ID)";
			$query .= " VALUES(?,?,?,?,?,?,?)";
		    $connection = self::$database->Get_Connection();
			$statement  = $connection->prepare($query);
			$statement->bindParam(1, $this->First_Name);
			$statement->bindParam(2, $this->Last_Name);
			$statement->bindParam(3, $this->Email);
			$statement->bindParam(4, $this->Username);
			$statement->bindParam(5, $this->Password);
			$statement->bindParam(6, $this->Salt);
			$statement->bindParam(7, $this->Role_ID);
			
			$statement->execute();
			//echo "User inserted ID = ".$connection->lastInsertId();
			
		}catch(PDOException $e){
			echo "INSERT Query Failed : ".$e->getMessage();
		}	
	}
	public static function Email_Exists($email){
		try{
			self::Init_Database();
			$query = "SELECT * FROM users WHERE Email = '$email'";
		
		    $connection = self::$database->Get_Connection();
			$statement  = $connection->prepare($query);
			$statement->execute();
			
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			//print_r($result);
		
			
			if(!empty($result['User_ID'])){
				return true;
			}
	
			return false;
			
		}catch(PDOException $e){
			echo "INSERT Query Failed : ".$e->getMessage();
		}	
	}
	public static function Username_Exists($username){
		try{
			self::Init_Database();
			$query = "SELECT COUNT(*) FROM users WHERE Username = '$username'";
		
		    $connection = self::$database->Get_Connection();
			$statement  = $connection->prepare($query);
			$statement->execute();
			
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			
			if($result['COUNT(*)'] > 0){
				return true;
			}
			return false;
			
		}catch(PDOException $e){
			echo "INSERT Query Failed : ".$e->getMessage();
		}	
	}
	public static function Login($username , $password){
		try{
			self::Init_Database();
			$query = "SELECT * FROM users WHERE Username = '$username' AND Password  = '$password'";
		
		    $connection = self::$database->Get_Connection();
			$statement  = $connection->prepare($query);
			$statement->execute();
			
			$result = $statement->fetch(PDO::FETCH_ASSOC);
			
			
			if(!empty($result['User_ID'])){
				return true;
			}
	
			return false;
			
		}catch(PDOException $e){
			echo "INSERT Query Failed : ".$e->getMessage();
		}	
	}
}
?>