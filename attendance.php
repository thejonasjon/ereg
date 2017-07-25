
<?php 
     require 'config/db.php';
    $con = new db();
    $db = $con->connect();


    $sql = "SELECT * FROM registration;";

    $stmt = $db->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    $db = null;

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
		<a class="reg" href="index.php">E-reg</a>
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
    <?php $a=1; foreach ($result as $row) {
     ?>
      <tr id="tableruler">    
      	<td><?= $a++;?></td>
        <td><?= $row->first_name;?><span>-</span><?=$row->second_name;?></td>
        <td><?= $row->date_time;?></td> 
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