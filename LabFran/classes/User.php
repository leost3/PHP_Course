<?php 
require_once "Database.php"; // If file name is not found, nothing is gonna be displayed - Fatal Error
//static - all objects can use it

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
	
	function __construct($first_Name,$last_Name, $email,
                         $username,$password , $salt,
						 $role_ID = 2, $user_ID = NULL	){

		$this->User_ID = $user_ID;
		$this->First_Name = $first_Name;
		$this->Last_Name  = $last_Name;
		$this->Email = $email;
		$this->Username = $username;
		$this->Password = $password;
		$this->Salt = $salt;
		$this->Role_ID = $role_ID;
	}

	public static function Init_Database(){
		//static = use self to access it
		  if(!isset(self::$database)){
			  self::$database = new Database();
		  }                                        
	}

	public function Insert(){
		self::Init_Database(); // if there`s no database, one will be created
		try{
			$query = "INSERT INTO Users (First_Name,Last_Name, Email,Username, Password, Salt, Role_ID) ";
			$query .= " VALUES(?,?,?,?,?,?,?)";
			$connection = self::$database->Get_connection();//get a copy of the connection 
			$statement = $connection->prepare($query);
			$statement->bindParam(1, $this->First_Name);
			$statement->bindParam(2, $this->Last_Name);
			$statement->bindParam(3, $this->Email);
			$statement->bindParam(4, $this->Username);
			$statement->bindParam(5, $this->Password);
			$statement->bindParam(6, $this->Salt);
			$statement->bindParam(7, $this->Role_ID);
			
			$statement->execute();
			$user_id = $connection->lastInsertId();
			echo "User is successfully inserted in database ".$user_id;
		}catch(PDOException $e){
			echo "Connection Failed ".$e->getMessage();
		}
	}
	public function Display(){
		echo $this->First_Name . " ". $this->Last_Name;
	}
}
?>