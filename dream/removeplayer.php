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
$query="delete from dream_team where user_id='".$_SESSION['login_user']."' and player_id=$player;";
$result=mysqli_query($conn,$query);
header('location:ICC.php');
;