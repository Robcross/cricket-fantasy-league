
    
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = mysqli_connect($servername, $username, $password,"cricket");
            session_start();
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
        ?>
        <html>
        <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
       div.gallery {
    margin: 20px;
    border: 1px solid #ccc;
    float: left;
    width: 200px;
}

div.gallery:hover {
    border: 1px solid #777;
}
div.gallery img {
    width: 100%;
    height: 250px;
    overflow: hidden;
}

div.desc {
    padding: 10px;
    text-align: center;
}
      
      .search_bar{
          width: 100%;
          margin:0px auto !imp;
          text-align: center;
          
      }     
      .search_bar input{
          width:50%;
          margin-bottom: 15px;
          
      }
 
  #bg 
{ 
  position: fixed; 
  width: 110%;
  left: 0; 
  top:-2%;
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
      <li><a href="ICC.php">ICC</a></li>
      <li class="active"><a href="IPL.php">IPL</a></li>
      <li><a href="dream.php">DREAM 11</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
                     <div class="search_bar">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                     <input list="ipl" name="ipl">
                     <datalist id="ipl">
                         <option value="Mumbai Indians"></option>
                         <option value="Chennai Super Kings"></option>
                         <option value="Kings XI Punjab"></option>
                         <option value="Surisers Hyderabad"></option>
                         <option value="Rajasthan Royals"></option>
                         <option value="Royal Challengers Bangalore"></option>
                         <option value="Kolkata Knight Riders"></option>
                         <option value="Delhi Daredevils"></option>
                     </datalist>
                     <input type="submit" name="submit" value="GO" style="width:15%;">
                      </form>
        </div>
                      <?php 
        if(isset($_POST['submit']))
            {
                $ipl= $_POST['ipl'];
                $sql1="Select * 
                        from ipl,player
                        where ipl_team=ipl_id and name='$ipl'";
                $result = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($result)>0)
                {
                     
                   while ($row=mysqli_fetch_assoc($result))
                        {
                            echo "<div class='gallery'>";
                            echo "<a class=\"myBtn\" href=\"getplayer.php?playername=".$row['first_name']."&id=".$row['player_id']."\">";
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).' "height="100" width="100" />';
                            echo "</a>";
                            echo "<div class='desc'>".$row['first_name']." ".$row['middle_name']." ".$row['last_name']."</div>" ;
                            echo "</div>";

                        }
                    
 
                }
                else{
                    echo "NO players";
                }
                
            }
        ?>
        
   <img src="ressources/dream.jpg" id="bg" alt="">
                         
        
                 
    </body>
</html>