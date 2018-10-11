<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"cricket");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "connected successfully";
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password1 = mysqli_real_escape_string($conn,$_POST['password']);
$password2 = mysqli_real_escape_string($conn,$_POST['confirm_password']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$query="select * from user where userid='$username'";
$result = mysqli_query($conn,$query);
$count= mysqli_num_rows($result);
if($count==1)
{
    echo "<script type='text/javascript'>alert('Account already exists')</script>";
     echo "<script type='text/javascript>window.location('index.html')</script>";
}
else if(strcmp($password1,$password2))
{
     echo "<script type='text/javascript'>alert('Passwords do not match')";
     echo "<script type='text/javascript>window.location('index.html')</script>";
}
else
{
//    $password1=md5($password1);
    $res = mysqli_query($conn,"Insert into user values('$username','$password1','$email')");
    if($res)
    {
         echo "<script type='text/javascript'>alert('Registered successfully')</script>";
  echo "<meta http-equiv=refresh content=\"0; URL=index.html\">";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Try again later')</script>";
    echo "<meta http-equiv=refresh content=\"0; URL=index.html\">";
    }
    }
?>