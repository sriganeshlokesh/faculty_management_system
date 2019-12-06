<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>SJBIT</title>
    <style type="text/css">
       html{
  background-color: black;
}

body{
  height: 100%;
}

#MainNavBar{
  background-color: #212529;
}

.navbar-nav > li > a:hover{
  color: white !important;
}
#MainNavBar .logo{
  max-width: 4.5rem;
  max-height: 4.5rem;
}

#MainNavBar .nav-item{
  padding-left: 1.5rem;
  font-family: 'Ubuntu', sans-serif;
  font-weight: bold;
}

#MainNavBar .nav-item:hover{
  font-size: 1.2rem;
}

#MainNavBar .dropdown-menu{
  background-color: #212529;
}

#MainNavBar .dropdown-menu .dropdown-item{
  font-family: 'Ubuntu', sans-serif;
  color: white !important;
}
#MainNavBar .dropdown-menu .dropdown-item:hover{
  color: white !important;
  font-size: 1.2rem !important;
  background-color: black !important;
}

.dropdown:hover > .dropdown-menu{
  display: block;
}

header.masthead{
  text-align: center;
  color: white;
  height: 25rem;
  background-image: url("CSEBlock.jpg");
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center center;
  background-size: cover;


}

header.masthead .intro-text {
  padding-top: 9em;
  padding-bottom: 11em;
  padding-left: auto;
}

header.masthead .intro-text .intro-heading {
  font-size: 4rem;
  font-weight: 500;
  line-height: 5rem;
  margin-bottom: 100px;
  text-shadow: 9px 9px black;
  font-family: 'Russo One', sans-serif;
}

@media (max-width: 768px) {
  header.masthead .intro-text {
    padding-top: 8rem;
    padding-bottom: 10rem;
  }

  header.masthead .intro-text .intro-heading {
    font-size: 3rem;
    font-weight: 700;
    line-height: 5rem;
    margin-bottom: 100px;
    font-family: 'Russo One', sans-serif;
  }
}

:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

.htmllogin body {
  background: #9CECFB;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
  /* Chrome 10-25, Safari 5.1-6 */
  background: white;
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.cardesh{
margin-top: 6rem;
border: 12rem;
border-color: black;
}

.card-signin {
  border-radius: 2rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 1rem;
  font-weight: 300;
  font-size: 1.5rem;
  text-shadow: 1px 1px rgba(230,104,53,1);
}

.card-signin .card-body {
  padding: 4rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  background-color: rgba(230,104,53,1);
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-control:focus{
  box-shadow:  inset 2px 2px rgba(230,104,53,1),2px 2px rgba(230,104,53,1);
}
.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.rcardtitle{
  width: 16rem;
  height: 6rem;
  padding-top: 0;
  margin-left: 42.6%;
  margin-top: 10em;
  margin-bottom: 0;
}
.rcardtitle>.card-body>h1{
  padding-top: 0.8em;
  padding-left: 1.2em;
}
.rcardtitle>.card-body{
  padding: 0px 0px 0px 0px;
}
.rcardmain {
  width: 57rem;
  height: 53rem;
  margin-left: 25%;
}

.lbutton{
  width: 20%;
  margin: auto;
  margin-left: 40%;
  margin-bottom: 1%;

}
.ltext{
  text-align: center;
}

.lcard{
  margin-top: 9em;
}

    </style>
  </head>
  <body>

    <!-- NavBar Start -->
    <nav id="MainNavBar" class="navbar navbar-expand-md navbar-dark py-0">
  <a class="navbar-brand" href="#"><img class="rounded logo" src="https://i0.wp.com/sjbit.edu.in/wp-content/uploads/2018/08/sjbit-logo-small.png?fit=88%2C88" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="Event.php">Events</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="Meeting.php">Meetings</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Leaves
        </a>
        <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="LeaveApplication.php">Leave Application</a>
          <a class="dropdown-item" href="LeaveStatus.php">Leave Status</a>
      </li>
    </ul>
    <ul class="navbar-nav mx-center">
      <li class="nav-item">
        <a class="nav-link" href="UserLogout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
  <!-- NavBar End -->

  <!-- Header Starts Here -->
  <header class="masthead">
    <!-- Container Starts Here -->
      <div class="container-fluid">
        <div class="intro-text">
          <div class="intro-heading text-uppercase text-center">Welcome To SJBIT</div>
        </div>

      </div>
    <!-- Container Ends Here -->
  </header>
      <!-- Header Ends Here -->

      <!-- Cards -->
      <section>
        <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-6 col-sm-3 text-center">
                <h2 class="display-3 text-uppercase my-5">SJBIT Management</h2>
              </div>
          </div>
          <div class="row text-center">
            <div class="col-lg-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="bgs.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">His Divine Soul Padmabhushan<br>Sri Sri Sri Dr.Balagangadharanatha Maha Swamiji<br>Founder President, Sri Adichunchanagiri Shikshana Trust</p>
                  </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="current.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">His Holiness Jagadguru<br>Sri Sri Sri Dr.Nirmalanandanatha Maha Swamiji<br>President, Sri Adichunchanagiri Shikshana Trust</p>
                  </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="./img/Reverend.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Reverend<br>Sri Sri Dr.Prakashnath Swamiji<br>Manager, BGS Group of Institutions</p>
                  </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="Principal.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Principal<br>SJB Institute of Technology</p>
                  </div>
              </div>
            </div>

          </div>

        </div>
      </section>


  <!-- Script Files -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!-- Script Files End -->


  </body>
</html>
