<?php  
    
    require 'config/db.php';
    $con = new db();
    $db = $con->connect();

      if (isset($_POST["submitbtn"])) {
     
     // getting input values by user.
        $first = $_POST["first_name"]; 
        $last = $_POST["last_name"];
        $email = $_POST["email"];
        $telephone = $_POST["telephone"];
        // $gender = $_POST["gender"];
        // $nationallity = $_POST["nationallity"];
        // $current= $_POST["current"];
        // $state_origin = $_POST["sot"];
        // $lga = $_POST["lga"];
        // $address = $_POST["address"];
        // $community = $_POST["community"];
        $department = $_POST["department"];
        $date_created = date('y-m-d');

        $password = (mt_rand(10,100000)); 
      
          echo "<script>alert ('$password')</script>";

        
        
        $sql = "INSERT INTO registration (first_name, second_name, email, telephone, department,  date_time, password) VALUES (:first, :second, :eml, :tel, :depart, :dt, :password);";

        $stmt = $db->prepare($sql);

        $stmt->bindParam('first', $first);
        $stmt->bindParam('second', $last);
        $stmt->bindParam('eml', $email);
        $stmt->bindParam('tel', $telephone);
        // $stmt->bindParam('gen', $gender);
        // $stmt->bindParam('nation', $nationallity);
        // $stmt->bindParam('current', $current);
        // $stmt->bindParam('sot', $state_origin);
        // $stmt->bindParam('lga', $lga);
        // $stmt->bindParam('com', $community);
        $stmt->bindParam('depart', $department);
        // $stmt->bindParam('adress', $address);
        $stmt->bindParam('dt', $date_created);
        $stmt->bindParam('password', $password);
  
        $result = $stmt->execute();

          if($result != null);{
          echo "<script>window.location.href = 'index.php';</script>";
          echo "<script>alert ('account create successfully');</script>";

          }
        
      }

 ?> 

<!DOCTYPE html>
<html>
<head>
	<title>E-reg | registration</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">	<!--for internet exploral -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 

	<!--My style css link -->
 <link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style type="text/css">
.body {
	background-image: url('img/officee.jpg');
	background-repeat: no-repeat;
    background-size: cover;
}

.header {
	width: 100%;
	min-height: 50px;
	background-color: #336633;
	color: white;
}

.heading h1{
	text-align: center;
	color: white;
}

.reg{
	font-family: Myriad Pro;
	font-weight: regular;
	font-size: 50px;
	color: white;
    margin-left: 20px;
    padding: 4px;
}
.reg a{
	text-decoration: none !important; 
}
.reg:hover{
	color: white;
	background-color: #ffff33 0.9;
	font-weight: bolder;
}


	.register{
	text-align: center;
	margin-top: 100px;
}

.register label {
	color: white;
	font-family: Rockwell;
	font-weight: bold;
	font-size: 15px;
}

.register input {
	border-radius: 3px solid;
}

.select{
	color: black;
	border-radius: 8px solid;

}

.btn{
	width: 100px;
	height: 40px;
	font-size: 20px !important;
}

.btn:hover{
 background-color: #843534 !important;
}

</style>
</head>
<body class="body">
<div>
<section>
      <!-- heading start here -->
	<div class="header">
		<a class="reg" href="index.php">E-reg</a>
		
	</div>
	<div class="heading">
		<h1>Sign-Up</h1>
	</div>
	 <div class="container">
  <form method="post" class="form-horizontal" action="" style="margin-top: 20px; color: white;">
    <div class="form-group">
      <label class="control-label col-sm-2" for="first" style="font-size: 30px; top: -15px; ">First name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="first" placeholder="first_name" name="first_name" required>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="last" style="font-size: 30px; top: -15px; ">Last name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="last" placeholder="last_name" name="last_name" required="">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="font-size: 30px; top: -15px; ">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="tel" style="font-size: 30px; top: -15px; ">Telephone:</label>
      <div class="col-sm-10">
        <input type="Tel" class="form-control" id="tel" placeholder="Enter Telephone" name="telephone" required>
      </div>
    </div>

    <!-- <div class="form-group"> 
      <label class="control-label col-sm-2" for="gen">Gender:</label>
      <div class="col-sm-10">          
      <select class="form-control" name="gender">
        <option>select gender</option>
        <option>male</option>
        <option>female</option>
      </select>
      </div><br><br>
      </div>-->

   <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="nat">Nationality:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nan" placeholder="Enter Nationallity" name="nationallity" required>
      </div>
    </div> -->

   <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="lga">Current L.G.A:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lga" placeholder="Enter Current L.G.A" name="current" required>
      </div>
    </div> -->

   <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="sot">State of Origin:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sot" placeholder="Enter State of Origin" name="sot" required>
      </div>
    </div> -->

   <!--  <div class="form-group">
      <label class="control-label col-sm-2" for="lga2">L.G.A:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lga2" placeholder="Enter L.G.A" name="lga">
      </div>
    </div> -->

  <!--  <div class="form-group">
      <label class="control-label col-sm-2" for="lga2">Residential Address:</label>
      <div class="col-sm-10">
        <!-- <input type="text" class="form-control" id="lga2" placeholder="Enter L.G.A" name="current"> -->
     <!--   <textarea class="form-control" placeholder="Enter address" name="address" required></textarea>
      </div>
    </div>  -->

  <!--   <div class="form-group">
      <label class="control-label col-sm-2" for="com">Community:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="com" placeholder="Enter community" name="community" required>
      </div>
    </div>  -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="gen" style="font-size: 30px; top: -15px; ">Department:</label>
      <div class="col-sm-10">          
      <select class="form-control" name="department" required>
        <option>Graphics-design</option>
        <option>Development</option>
      </select>
      </div><br><br>
      </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-danger" name="submitbtn">Submit</button>
      </div>
    </div>
  </form>

  </div>
	</section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
 <!-- My javaScript start here -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>
