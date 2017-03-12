<?php
     $s;
     if(isset($_GET['succeed']) && !empty($_GET['succeed'])){
        $s = $_GET['succeed'];
     }

     $username;
      if(isset($_GET['username']) && !empty($_GET['username'])){
        $username = $_GET['username'];
     }

     $con = mysqli_connect(
        "webprogramming.cmmcedthfueh.us-west-2.rds.amazonaws.com",
        "user",
        "password",
        "db2304998",
        "3306"
     ) or die("Could not connect:" . mysql_error());

//update database
  $sql="UPDATE reg SET succeed=".$s." WHERE username='".$username."'";
    $con->query($sql);
 mysqli_close($con);
?>

