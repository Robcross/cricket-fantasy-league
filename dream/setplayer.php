<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,"cricket");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query="Select name from nation;";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){
if(isset($_POST[$row['name']])){
    $query1="update player p,nation n set p.available=1 where n.name='".$row['name']."' and p.nationality=n.nation_id;";
    echo $query1;
    $result1=mysqli_query($conn,$query1);
}
}
header('location:admin.php');
?>