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
    
        <?php
       
        if(isset($_POST['submit'])){
            $mname=$_POST['mtitle'];
        $sql="DELETE from meeting where mtitle='$mname'";
        echo $mname;

    

if ($conn->query($sql)) {
   echo '<script language="javascript">';
    echo 'alert("Meeting Cancelled Successfully")';
    echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'alert("Meeting Cancellation Failed")';
    echo '</script>';
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body {
		font-family: "Roboto Condensed";
		}
		.sidenav {
		height: 100%;
		width: 190px;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		
		}
		.sidenav a {
		padding: 6px 8px 6px 16px;
		text-decoration: none;
		font-size: 22px;
		color: #818181;
		display: block;
		padding-left:60px;
		}
		.sidenav button{
			width: 100%;
			font-size: 28px;
		}
		.sidenav a:hover {
		background-color: #e47025;
		padding-left:75px;
		}
		.main {
		margin-left: 180px; /* Same as the width of the sidenav */
		font-size: 22px; /* Increased text to enable scrolling */
		
		}
		@media screen and (max-height: 450px) {
		.sidenav {padding-top: 15px;}
		.sidenav a {font-size: 18px;}
		}
		.btn-primary {
    color: white;
    background-color: orange;
    border-color: orange; /*set the color you want here*/
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
    color: white;
    background-color: #e47025;
    border-color: #e47025; /*set the color you want here*/
}

.dropbtn {
    background-color: #e47025;
    color: white;
    padding-left: 62px;	
    font-size: 10px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
    font-size: 10px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #000000;
    text-align: center;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #e47025;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #e47025;}


.form-control:focus {
  border-color: #e47025;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
}

.navbar {
    position: absolute;
    top: 0px;
    width: 1260px;
    background-color: #2d3436;
}

		</style>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	</head>
	<body style="background-color: beige">
		<div class="sidenav">
			<div  style="background-color:#2d3436;" >
				
				<a href="./admin/AdminHome.php"><img src="./img/sjbit.png" style="padding-top: 10px; padding-bottom: 10px;padding-left: 0px;" width="60px"></a>
			</div>
			<div style="padding-top:30px; padding-bottom: 30px;">
				<a href="./admin/AdminEvent.php" style="color: white;padding-bottom: 30px;">Event</a>
				<a href="./admin/AdminMeeting.php" style="color: white; padding-bottom: 30px;">Meeting</a>
				<a href="./admin/AdminLeave.php" style="color: white; padding-bottom: 30px ">Leave </a>
				<div class="dropdown">
					<button class="dropbtn" type="button" style=" font-size: 22px;background-color: #111;text-align:center; border: none;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Delete
					</button>
					<div class="dropdown-content" aria-labelledby="dropdownMenuButton" style="width:100%">
						<a class="dropdown-item" href="./admin/DeleteEvent.php" style="color: white">Event</a>
						<a class="dropdown-item" href="./admin/DeleteMeeting.php" style="color: white">Meeting</a>
						<a class="dropdown-item" href="./admin/DeleteUser.php" style="color: white">User</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main">
			<nav class="navbar" style="height: 92px;">
					<img src="./img/sjbit.png" width="45px" style="position: absolute;right:170px;">
					<span class="navbar-text" style="padding-left:30px;">
						<a href="./admin/Logout.php" style="color: white; font-size: 20px; position:absolute;right: 70px;top: 27px;">Logout</a>
					</span>
			</nav>
			
		</div>
		 <div class="card" style="width:40rem;height: 11.7rem; position: absolute;left: 500px; top: 110px;border: none ">
  <div class="card-body">
    <h1 style="text-align: center;padding-top: 55px;">DELETE</h1>
    
   
  </div>
</div>
<div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width:50rem;height: 20rem; position: absolute;left: 420px; top: 280px; ">
  <div class="card-body">
  	<div >
    <form  method="post" class="form" style="height: 30rem;">
    	<h3 style="text-align:center;padding-bottom: 40px;">REMOVE MEETING </h3>

 
  <div class="form-group" style="margin-top: 20px";>
    <label for="ename"> Meeting Title</label>
    <input type="text" class="form-control" id="eid" placeholder="Enter Meeting Title" name="mtitle" required>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-dark" name="submit" style="position: absolute; left: 350px;top:250px;">Submit</button>

</form>
  </div>
</div>
</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>