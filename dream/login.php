<?php
$connection = mysqli_connect("localhost", "root", "","cricket");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!isset($_SESSION['login_user']))
{
    session_start(); // Starting Session   
}
 // Variable To Store Error Message

if (empty($_POST['username']) || empty($_POST['password'])) 
{
  $error = "Username or Password is invalid";
    echo $error;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// To protect MySQL injection for Security purpose
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
//$password=md5($password);

$query = mysqli_query( $connection,"select * from user where password='$password' AND userid='$username'");
$rows = mysqli_num_rows($query);
echo $username;
if ($rows == 1) {
    if($username=="admin"){
$_SESSION['login_user']=$username;
$_COOKIE['login_user']=$username;

header("location: admin.php"); // Redirecting To Other Page
} 
    else{
$_SESSION['login_user']=$username;
$_COOKIE['login_user']=$username;

header("location: profile.php");
    }
}
    else {
$error = "Username or Password is invalid bsdk";
    echo $error;
}
    
 // Closing Connection
}

?>