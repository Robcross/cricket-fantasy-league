<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","cricket");
// Selecting Database
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select username from login where userid='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
setcookie('userid',$login_session,time+3600);
if(!isset($login_session)&&!isset($_COOKIE['login_user'])){
// Closing Connection
header('Location: index.html'); // Redirecting To Home Page
}
?>