<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,"cricket");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query="Select * from ipl;";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==0){
    echo "error";
}
while($row=mysqli_fetch_assoc($result)){
if(isset($_POST[$row['ipl_id']])){
    $query1="update player p,ipl n set p.available=1 where n.ipl_id=".$row['ipl_id']." and p.ipl_team=n.ipl_id;";
   
    $result1=mysqli_query($conn,$query1);
}
}
header('location:admin.php');
?>