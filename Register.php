<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workflow";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<!DOCTYPE html>
<html>
    
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
  if(isset($_POST['submit']))
{   
    $sql = "INSERT INTO user (uname, uemail, upass, dob, branch, designation)
    VALUES ('".$_POST["username"]."','".$_POST["emailaddress"]."','".$_POST["password"]."','".$_POST["dob"]."','".$_POST["branch"]."','".$_POST["designation"]."')";
      
      
    if ($conn->query($sql) == TRUE) {
      
    echo '<script language="javascript">';
    echo 'alert("Account created")';    
    echo 'window.location.href= "index.php";';   
    echo '</script>';
}
    else {
    echo '<script language="javascript">';    
    echo 'alert("Account failed")';
    echo 'window.location.href= "Register.php";'; 
    echo '</script>';
}

  }
}
?>    



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
  function allLetter(inputtxt)
  {
   var letters = /^[A-Za-z]+$/;
   if(inputtxt.value.match(letters))
     {
      return true;
     }
   else
     {
     alert("message");
     return false;
     }
  }
 




</script>
<style>


.bg-img {
  /* The image used */
  background-image: url("CSEBlock.jpg");

  min-height: 15%;

  /* Center and scale the image nicely */
  background-position: center top;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}

/* Position the navbar container inside the image */
.container {
  position: absolute;
  margin: 20px;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  
}

/* Navbar links */
.topnav a {
  float: left;
  color: #ffffff;
  text-align: center;
  padding: 14px 55px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  
  color: dimgrey;
}
body
{
	font-family: 'Roboto Condensed', sans-serif;
	background-color: #f7f1e3; 

}
.top-right {
    position: absolute;
    top: 35px;
    right: 90px;
}
/*.top-right img:hover
{
	content: url(images/wcart.png);
}*/

</style>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body class="bg-img">



  <!-- <div class="container">
    <div class="topnav">
      <a href="#home">SJBIT</a>
      <div style="padding-left: 450px ">
      <a href="#news" >Home</a>
      <a href="#contact">Events</a>
      <a href="#about">Meetings</a>
       <a href="#about">Forum</a>
      
      </div>
    </div>
  </div> -->


  <div class="card" style="width:40rem;height: 11.7rem; position: absolute;left: 400px; top: 240px;border: none ">
  <div class="card-body">
    <h1 style="text-align: center;padding-top: 55px;">REGISTER</h1>
    
   
  </div>
</div>

  <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width:50rem;height: 50rem; position: absolute;left: 325px; top: 410px; ">
  <div class="card-body">
  	<div >
    <form method="post" class="form" style="height: 30rem;">
    	<h3 style="text-align:center;padding-bottom: 40px;">WELCOME </h3>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="userHelp" placeholder="Enter Username" name="username" required onsubmit="allLetter()">
  </div>
  <div class="form-group">
    <label for="emailaddress">Email Address</label>
    <input type="text" class="form-control" id="emailaddress" aria-describedby="emailHelp" placeholder="Enter Email Address" name="emailaddress" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="Date" class="form-control" id="dob" placeholder="Enter DOB" name="dob" required>
  </div>
  <div class="form-group">
    <label for="branch">Branch</label>
    <input type="text" class="form-control" id="branch" placeholder="Enter Branch" name="branch" required>
  </div>
  <div class="form-group">
    <label for="designation">Designation</label>
    <input type="text" class="form-control" id="designation" placeholder="Enter Designation" name="designation" required>
  </div>
  <button type="submit" class="btn btn-outline-primary" name="submit" style="position: absolute; left: 370px;">Login</button>
  <h6 style="padding-top: 80px;text-align: center;">Already a User? &nbsp; <a href="login.php">Login.</a></h6>

</form>
  </div>
</div>
</div>
<!-- <div class="top-right" >
	<img src="images/bcart.png" width="30px">
	
</div> -->


</body>
</html>