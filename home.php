<?php
session_start();
ob_start();

//connect to database
$db=mysqli_connect(
"webprogramming.cmmcedthfueh.us-west-2.rds.amazonaws.com",
"user",
"password",
"db2304998",
"3306");


?>
<!DOCTYPE html>
<html>
<head>
  <title>Register , login and logout user php mysql</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>Register, login and logout user php mysql</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<h1>Home</h1>
<div>
    <h4>Welcome <?php echo $_SESSION['username']; ?></h4></div>
</div>
<a href="logout.php">Log Out</a>
</body>
</html>
