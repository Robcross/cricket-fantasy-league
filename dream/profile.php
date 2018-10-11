<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","cricket");
// Selecting Database
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$res=mysqli_query($connection,"select userid from user where userid='$user_check'");
//$res=mysqli_store_result($ses_sql);
$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
$login_session =$row['userid'];
setcookie('userid',$login_session,time()+3600);
if(!isset($_SESSION['login_user'])&&!isset($_COOKIE['login_user']))
   {
       header("location: index.html"); // Redirecting To Home Page
   }

?>
<!DOCTYPE html>
<html>
<title>Dream 11</title>
 <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
* {
  box-sizing: border-box;
}
body {
  background-image: url(ressources/profileback.jpg);
    background-position: center;
    background-size: cover;
    }
a {
  text-decoration: none;
}
h1 {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
}
.row {
  max-width: 900px;
  margin: 50px auto 0;
}
.card {
  float: left;
  padding: 0 1.7rem;
  width: 50%;
}
.card .menu-content {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
.card .menu-content::before, .card .menu-content::after {
  content: '';
  display: table;
}
.card .menu-content::after {
  clear: both;
}
.card .menu-content li {
  display: inline-block;
}
.card .menu-content a {
  color: #fff;
}
.card .menu-content span {
  position: absolute;
  left: 50%;
  top: 0;
  font-size: 10px;
  font-weight: 700;
  font-family: 'Open Sans';
  transform: translate(-50%, 0);
}
.card .wrapper {
  background-color: #fff;
  min-height: 540px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.2);
}
.card .wrapper:hover .data {
  transform: translateY(0);
}
.card .data {
  position: absolute;
  bottom: 0;
  width: 100%;
  transform: translateY(calc(70px + 1em));
  transition: transform 0.3s;
}
.card .data .content {
  padding: 1em;
  position: relative;
  z-index: 1;
}
.card .author {
  font-size: 12px;
}
.card .title {
  margin-top: 10px;
}
.card .text {
  height: 70px;
  margin: 0;
}
.card input[type='checkbox'] {
  display: none;
}
.card input[type='checkbox']:checked + .menu-content {
  transform: translateY(-60px);
}

.example-1 .wrapper {
  background: url(ressources/icc.jpg) center / cover no-repeat;
}
.example-1 .wrapper:hover .menu-content span {
  transform: translate(-50%, -10px);
  opacity: 1;
}
.example-1 .header {
  color: #fff;
  padding: 1em;
}
.example-1 .header::before, .example-2 .header::after {
  content: '';
  display: table;
}
.example-1 .header::after {
  clear: both;
}
.example-1 .header .date {
  float: left;
  font-size: 12px;
}
.example-1 .menu-content {
  float: right;
}
.example-1 .menu-content li {
  margin: 0 5px;
  position: relative;
}
.example-1 .menu-content span {
  transition: all 0.3s;
  opacity: 0;
}
.example-1 .data {
  color: #fff;
  transform: translateY(calc(70px + 4em));
}
.example-1 .title a {
  color: #fff;
}
.example-1 .button {
  display: block;
  width: 100px;
  margin: 2em auto 1em;
  text-align: center;
  font-size: 12px;
  color: #fff;
  line-height: 1;
  position: relative;
  font-weight: 700;
}
.example-1 .button::after {
  content: '\2192';
  opacity: 0;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translate(0, -50%);
  transition: all 0.3s;
}
.example-1 .button:hover::after {
  transform: translate(5px, -50%);
  opacity: 1;
}

         
.example-2 .wrapper {
  background: url(ressources/ipl.jpg) center / cover no-repeat;
}
.example-2 .wrapper:hover .menu-content span {
  transform: translate(-50%, -10px);
  opacity: 1;
}
.example-2 .header {
  color: #fff;
  padding: 1em;
}
.example-2 .header::before, .example-2 .header::after {
  content: '';
  display: table;
}
.example-2 .header::after {
  clear: both;
}
.example-2 .header .date {
  float: left;
  font-size: 12px;
}
.example-2 .menu-content {
  float: right;
}
.example-2 .menu-content li {
  margin: 0 5px;
  position: relative;
}
.example-2 .menu-content span {
  transition: all 0.3s;
  opacity: 0;
}
.example-2 .data {
  color: #fff;
  transform: translateY(calc(70px + 4em));
}
.example-2 .title a {
  color: #fff;
}
.example-2 .button {
  display: block;
  width: 100px;
  margin: 2em auto 1em;
  text-align: center;
  font-size: 12px;
  color: #fff;
  line-height: 1;
  position: relative;
  font-weight: 700;
}
.example-2 .button::after {
  content: '\2192';
  opacity: 0;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translate(0, -50%);
  transition: all 0.3s;
}
.example-2 .button:hover::after {
  transform: translate(5px, -50%);
  opacity: 1;
}

     </style>
 </head>
 <body>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="profile.php"><i><?php echo $login_session; ?></i></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="ICC.php">ICC</a></li>
      <li><a href="IPL.php">IPL</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
  </div>
</nav>

<div id="profile">
<div class="row">

  <div class="example-1 card">
    <div class="wrapper">
      <div class="header">
        <div class="date">
          <span class="day">ICC</span>
          <span class="month">May</span>
          <span class="year">2018</span>
        </div>

      </div>
      <div class="data">
        <div class="content">
          <span class="author">ICC</span>
          <h1 class="title"><a href="ICC.php">International Cricket Council</a></h1>
          <p class="text"><br>The International Cricket Council is the international governing body of cricket.All the international matches are played under ICC.</p>
          <a href="ICC.php" class="button">Teams</a>
        </div>
      </div>
    </div>
  </div>
   <div class="example-2 card">
    <div class="wrapper">
      <div class="header">
        <div class="date">
          <span class="day">IPL</span>
          <span class="month">May</span>
          <span class="year">2018</span>
        </div>

      </div>
      <div class="data">
        <div class="content">
          <span class="author">IPL</span>
          <h1 class="title"><a href="IPL.php">Indian Premier League</a></h1>
          <br>
          <p class="text"><br>The Indian Premier League is a professional Twenty20 cricket league in India contested by teams representing Indian cities and some states.</p>
          <a href="IPL.php" class="button">Teams</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>