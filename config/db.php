
<?php 

 		Class db {

 			private $host = "localhost";
 			private $user = "root";
 			private $password = "";
 			private $dbname = "ereg";
 	

 		function connect() {
 			$con_str = "mysql:host=$this->host;dbname=$this->dbname";
 			try{
 				$conn = new PDO ($con_str, $this->user, $this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 				
                return $conn;
 			}
 			catch (PDOException $ex){
 				echo ("Error:".$ex->getMessage());

 			}
 		}
 }

