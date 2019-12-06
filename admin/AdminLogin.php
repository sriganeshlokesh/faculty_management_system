<?php
session_start();
if(isset($_POST["submit"]))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    mysql_connect("localhost","root","");
    mysql_select_db("workflow");
    $result=mysql_query("select * from user");
    while($row=mysql_fetch_array($result))
    {
$user=$row['uname'];
$pass=$row['upass'];
        if($user==$username && $pass=$password)
        {
        echo '<script language="javascript">';
        echo 'alert("Login Success");'; 
        echo 'window.location.href= "AdminHome.php";'; 
        echo '</script>';
        }
        else
        {
        echo '<script language="javascript">';
        echo 'alert("Login Failed")';
        echo 'window.location.href= "AdminLogin.php";';       
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
<style>


.bg-img {
  /* The image used */
  background-image: url("Library.jpg");

  min-height: 10%;

  /* Center and scale the image nicely */
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center top;
  
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
    <h1 style="text-align: center;padding-top: 55px;">ADMIN</h1>
    
   
  </div>
</div>

  <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width:50rem;height: 23rem; position: absolute;left: 325px; top: 410px; ">
  <div class="card-body">
  	<div >
    <form method="post" class="form" style="height: 30rem;">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  <button type="submit" class="btn btn-outline-primary" name="submit" style="position: absolute;left: 47%;" >Login</button>
  <h6 style="padding-top: 80px;text-align: center;">New User? &nbsp; <a href="Register.php">Register.</a></h6>

</form>
  </div>
</div>
</div>

<!-- <div class="top-right" >
	<img src="images/bcart.png" width="30px">
	
</div> -->


</body>
</html>