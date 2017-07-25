 <?php 
 	require 'config/db.php';
 	$con = new db();
 	$db = $con->connect();

 	// if (isset($_POST['okbtn'])) {
 		
 		// $pass = $_POST['password'];
 	// }

 	 // echo "<script></script>";

 	 // if(isset($_POST['okbtn']))
 	 	// $pass = $_POST['password'];

 	 // $sql = "SELECT * FROM registration WHERE psssword = :pass;";
 	 // $stmt = $sql->prepare($sql);

 	 // $stmt->bindParam('pass', $pass);

 	 // $stmt->execute();

 	// $result = $stmt->fetchAll(PDO::FETCH_OBJ);

 	// echo "no pass";
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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="bod">
<div>
     <!-- heading start here -->
	<div class="header">
		<a class="reg" href="index.php">E-reg</a>
		<a class="reg2" href="Attendance.php">Attendance</a>
	</div>

	<div class="con">
		<h1 id="morning" class="morning">Good Morning</h1>
		<h4 class="welcome">Welcome to the studio...</h4>
		<h6 class="date">18/7/2017</h6>
	</div>

	<div class="login">
		<div>
		<button id="myBtn" class="btn btn-success" name="loginbtn">Login</button>
	</div>
	
	<div>	
		<!-- The Modal -->
        <div id="myModal" class="modal">

  		<!-- Modal content -->
  		<div class="modal-content">
    	<span class="close">&times;</span>
    	<div class="form-group">
      			<label for="password">Password:</label>
        		<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" placeholder="Enter password to register">
        		<div>
        			<button class="btn2" name="okbtn">Ok</button>
        		</div>
      	</div>
    	</div>
  		</div>

		</div>

		</div>
		</div>
		<div class="sign">
		<p>If you don't have an account?</p>
		<p><a class="signbtn" href="registration.php">Sign-Up</a></p>

	</div>

	<div class="foot">
		<p>E-reg &copyright; :2017</p>
	</div>

	<!-- Login in pup-up -->
	<!-- <section id="login" class="password"> 
		<div>
			<h3>Enter password</h3>
		</div>
			<div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="email">
      </div>
    </div>
			</div>
		

	</section>-->
	
</div>
		


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <!-- My javaScript start here -->
<!-- <script type="text/javascript" src="js/bootstrap.mini.js"></script> -->
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	

		// Get the modal
/**var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}**/

var dat = new Date();
var h = getHours();
if (h > 12) {
	alert ("good afternoon");
}
</script>
</body>
</html>





