 
<?php 
      session_start();
       require 'config/db.php';
      $con = new db();
      $db = $con->connect();


   /*   if(isset($_POST['login'])){
    $pass = $_POST['password'];
    
      
    $sql = "SELECT * FROM registration WHERE password = :pass;";
    
    $stmt = $db->prepare($sql);

    $stmt->bindParam('pass', $pass);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  
    if (!$result) {
    echo "<script>alert ('password invalid');</script>";
  }

  // stop here 28/07/2015
  else{
    // require "attendance.php";
    echo "<script>alert ('Thanks, You have successfully clocked in today');</script>";

    // auto image generation
 /*  srand( microtime() * 1000000);
    $num = rand( 1, 4);
    // $text = "<h5>Hello dere</h5>";

    switch ($num) 
    {
      case 1: $img = "img/azin.png";
        
        break;

      case 2: $img = "img/bird.jpg";
        
        break;

      case 3: $img = "img/bull.jpg";
        
        break;

      case 4: $img = "img/bull.jpg";
        
        break;
        echo " Random text : <img src= $img>";  */
      
      
    /*}

  /*$sql = 'SELECT * FROM registration WHERE password = :password';

    $stmt = $db->prepare($sql);

    $stmt->bindParam('password', $_SESSION['password']);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
*/
      
     /*foreach ($result as $row) {
      $a=1;
      $a++;
        $row->first_name;?><span>-</span><?=$row->second_name;
        $row->date_time;
     
    $db = null;

  }*/
 /*}

  /*else {
    foreach ($result as $row->password;)  {
      $_SESSION['password'] = $row->password;
      echo "<script>window.location.href = 'attendance.php';</script>";
    }
   echo "no pass";
  }*/
    
 

    
     /*$sql = "SELECT * FROM registration;";

     $stmt = $db->prepare($sql);

     $stmt->execute();

     $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    $sql = 'SELECT * FROM registration';

    $stmt = $db->prepare($sql);

    $stmt->bindParam('password', $_SESSION['password']);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    
     $db = null;
    */
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>E-reg | HOME</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">	<!--for internet exploral -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!--My style css link -->
 <link rel="stylesheet" type="text/css" href="css/style.css"> 

	<!-- Latest compiled and minified CSS -->
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  -->
</head>
<body class="body3">
<div>
     <!-- heading start here -->
	<div class="header">
		<a class="reg" href="index.php" style="text-decoration-line: none;">E-reg</a>
	</div>

	<!-- Table start -->
	<div>

	<div  class="attendance">
  		<h1 class="text-center">Attendance</h1> 
      <!-- <h4>Calender</h4>   -->
  			<hr> 
  	</div>
		<div class="container">          
  <table class="table table-bordered" id="table">
    <thead>
      <tr class="tablehead">
        <th>S/N</th>
        <th>Full name</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>

    <?php

        if(isset($_POST['login'])){
    $pass = $_POST['password'];
    
      
    $sql = "SELECT * FROM registration WHERE password = :pass;";
    
    $stmt = $db->prepare($sql);

    $stmt->bindParam('pass', $pass);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  
    if (!$result) {
    echo "<script>alert ('password invalid');</script>";
  }

  // stop here 28/07/2015
  else{
    // require "attendance.php";
    echo "<script>alert ('Thanks, You have successfully clocked in today');</script>";

   
    }

  
 }

    ?>
      <?php $a = 1; foreach($result as $row){
        ?>
        <tr>
          <td><?= $a++;?></td>
          <td><?= $row->first_name;?><span>-</span><?=$row->second_name;?></td>
          <td><?= $row->date_time = date('H:i:sa'); ?></td>
        </tr>
        <?php }?>
    </tbody>
  </table>
</div>
	</div>

</div>
	
	


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
 <!-- My javaScript start here -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">

	var table = document.getElementById('table');
  var tableruler  = document.getElementById('tableruler');
  var time = time();


</script>
</body>
</html>