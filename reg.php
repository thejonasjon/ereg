<?php 
	 require 'config/db.php';
    $con = new db();
    $db = $con->connect();

/*function random_password() {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    echo str_shuffle($chars);
}*/


$int = (mt_rand(10,100000));
echo $int;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



</body>
</html>
