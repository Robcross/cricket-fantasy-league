<html>
    <head>
        <?php
            if(isset($_POST['submit']))
            {
                $db=mysqli_connect('localhost','root','','cricket');
                $query="INSERT INTO coach (`name`,`nationality`,`age`,`gender`) VALUES('".$_POST['name']."','".$_POST['nationality']."',".$_POST['age'].",'".$_POST['gender']."');";
                $result=mysqli_query($db,$query);
                echo "$query";
                
            }
        ?>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            name:<input type="text" name="name"><br>
            nationality:<input type="text" name="nationality"><br>
            age:<input type="int" name="age"><br>
            gender:<input type="text" name="gender"><br>
            <input type="submit" name="submit" value="submit" >
        </form>
    </body>
</html>