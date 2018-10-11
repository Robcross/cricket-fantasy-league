<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    

.rwd-table {
  margin: 15% 0;
 width: 65%;
  text-align: center;
  align-self: center;
  font-size: 1.2em;
  float: center;
  margin-left: 20%;
}
.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.rwd-table th {
  display: none;
}
.rwd-table td {
  display: block;
}
.rwd-table td:first-child {
  padding-top: 0.5em;
}
.rwd-table td:last-child {
  padding-bottom: 0.5em;
}
.rwd-table td:before {
 
  font-weight: bold;
  width: 2em!important;
  display: inline-block;
}
@media (min-width: 480px) {
  .rwd-table td:before {
    display: none;
  }
}
.rwd-table th, .rwd-table td {
  text-align: left;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    display: table-cell;
    padding: 0.25em 0.5em;
  }
  .rwd-table th:first-child, .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child, .rwd-table td:last-child {
    padding-right: 0;
  }
}
.rwd-table {
  background: #34495e;
  color: #fff;
  border-radius: 0.4em;
  overflow: hidden;

}
.rwd-table tr {
  border-color: #46637f;
}
.rwd-table th, .rwd-table td {
  margin: 0.5em 1em;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    padding: 1em !important;
  }
}
.rwd-table th, .rwd-table td:before {
  color: #dd5;
}



    #bg 
{ 
  position: fixed; 
  width: 110%;
  left: 0;
  top: -2%;
  opacity: 0.8;
  filter: blur(3px);
  z-index: -1000;
}

</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="profile.php"><i><?php echo $_COOKIE['userid']; ?></i></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="profile.php">Home</a></li>
      <li class="active"><a href="ICC.php">ICC</a></li>
      <li><a href="IPL.php">IPL</a></li>
      <li><a href="dream.php">DREAM 11</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
  </div>
</nav>

<?php
    session_start();
$q = $_GET['playername'];
$con = mysqli_connect("localhost","root","","cricket");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM player WHERE first_name = '$q'";
$result = mysqli_query($con,$sql);
$row =mysqli_num_rows($result);
    if($row==0)
        echo "error";

echo "<table class='rwd-table'>
<tr>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Photu</th>
<th>Runs</th>
<th>Wickets</th>
</tr>";
$row = mysqli_fetch_assoc($result) ;
    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['middle_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).' "height="100" width="100" />';
    echo "</td>";
    echo "<td>" . $row['runs'] . "</td>";
    echo "<td>" . $row['wickets'] . "</td>";
    echo "</tr>";

echo "</table>";
    $que1="select * from player where first_name = '$q' and available=1";
    $res1=mysqli_query($con,$que1);
     if(mysqli_num_rows($res1)==0)
    {
         echo "THIS PLAYER IS NOT IN ANY MATCHES!";
     }
    else{
    $que="select * from dream_team where user_id='".$_SESSION['login_user']."' and player_id=".$row['player_id'].";";
    $res=mysqli_query($con,$que);
    if(mysqli_num_rows($res)==0)
    {
    echo "<span ><a class=\"myBtn\" href=\"addplayer.php?playerid=".$row['player_id']."\">ADD</a></span><br>";
    }
    else
    {
    echo "<span ><a class=\"myBtn\" href=\"removeplayer.php?playerid=".$row['player_id']."\">REMOVE</a></span>";
    }
    }
mysqli_close($con);
?>
  <img src="ressources/dream.jpg" id="bg" alt="">


</body>
</html>