<!DOCTYPE html>
<html lang="en" dir="ltr" class="htmllogin">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <link rel="stylesheet" href="./css/app.css">
    <title>SJBIT</title>
  </head>
<body style="background-image: url('./imgs/ise-block.jpg'); background-size: cover; background-position: center center; height:61rem; ">
  <!-- NavBar Start -->
  <nav id="MainNavBar" class="navbar navbar-expand-md navbar-dark py-0">
  <a class="navbar-brand" href="./index.php"><img class="rounded logo" src="https://i0.wp.com/sjbit.edu.in/wp-content/uploads/2018/08/sjbit-logo-small.png?fit=88%2C88" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  <ul class="navbar-nav mx-auto">
    <li class="nav-item">
      <a class="nav-link" href="./index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Meetings</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Leaves
      </a>
      <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Leave Application</a>
        <a class="dropdown-item" href="#">Leave Status</a>
    </li>
  </ul>
  <ul class="navbar-nav mx-center">
    <li class="nav-item active">
      <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./Register.php">Signup</a>
    </li>
  </ul>
  </div>
  </nav>
  <!-- NavBar End -->


  <div class="container-fluid lcard">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-auto align-items-center">
        <div class="card card-signin cardesh">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="process_login.php" method="POST">
              <div class="form-label-group">
                <input type="text" id="inputUsername" name="usrnm" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUsername">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pswd" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Sign in</button>
            </form>
            <?php
            session_start();
           require('includes/config.php');
           if(!empty($_GET))
           {
             if(!empty($_GET['m1']))
             {
               echo "<br><div class='text-center'>Password is Incorrect</div>";
             }

             if(!empty($_GET['m2']))
             {
               echo "<br><div class='text-center'>Incorrect Username</div>";
             }
           }
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
