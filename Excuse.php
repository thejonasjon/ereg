 
<?php 
      session_start();
       require 'config/db.php';
      $con = new db();
      $db = $con->connect();


     if(isset($_POST['btn'])){
    $pass = $_POST['email'];
    $pass = $_POST['email2'];
    $pass = $_POST['comment'];

  echo "<script>alert ('thank email send successfully');</script>";
  echo "<script>window.location.href = 'index.php';</script>";
      
    
  }
   

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
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/
bootstrap.min.css">  -->

<style type="text/css">
  .new{
    background-color: #336633 !important;
    border: 3px solid white;
    margin-left: 40%;
    padding-top: -20px;
    font-size: 10%;
    height: 80px;
  }

  .new:hover{
    background-color: transparent !important;
    color: #336633;
    border: 3px solid #336633;
  }
</style>
</head>
<body class="body3">

     <!-- heading start here -->
	<div class="header">
		<a class="reg" href="index.php" style="text-decoration-line: none;">E-reg</a>
	</div>

	<!-- Table start -->
	<div>

	<div  class="attendance">
  		<h1 class="text-center">Please give your reason below?</h1> 
        <div class="container">
        <form method="post" action="">
  <div class="form-group">
    <label for="email" style="font-size: 20px; ">Your Email:</label>
    <input type="email" class="form-control" id="email" name="email" required="">
  </div>
  <div class="form-group">
    <label for="email" style="font-size: 20px; ">Email of Reciever</label>
    <input type="email" class="form-control" id="email"  name="email2"  required="">
  </div>
  
  <div class="form-group">
  <label for="comment" style="font-size: 20px; ">Your Reason:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment"  required=""></textarea>
</div>

  <button class="btn btn-success new" name="btn">Send</button>

  

</form>

</div>

  			<hr> 
  	</div>
		<div class="container">          
  

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