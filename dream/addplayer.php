<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,"cricket");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$player=$_GET['playerid'];
$query="insert into dream_team values('".$_SESSION['login_user']."',$player)";
echo "$query";
$result=mysqli_query($conn,$query);
header('location:ICC.php');
;