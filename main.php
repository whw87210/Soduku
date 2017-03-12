<?php
    session_start();
    if ((isset($_POST["login_btn"])) &&  (!empty($_POST["username"])) && (!empty($_POST["password"]))) {

    $username=$_POST["username"];
    $password=$_POST["password"];
    $password=md5($password); //Hash password again
    
    //connect to database
    $con=mysqli_connect(
	"webprogramming.cmmcedthfueh.us-west-2.rds.amazonaws.com",
	"user",
	"password",
	"db2304998",
	"3306");
    
    $sql="SELECT * FROM reg WHERE username='$username' AND password='$password'";
    //print $sql;
    $result=mysqli_query($con,$sql);
    //print mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0)
    {
		
        $_SESSION['message']="You are now Loggged In";
        $_SESSION['username']=$username;
		   
	    header("location: game.php");
	    exit();
        
    }
   else
   {
        $_SESSION['message']="Username and Password combiation incorrect";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <style>
    input[type=submit] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    width: 100px;
    }
  </style>
</head>
<body>

<div class="header">
    <h1>Login </h1>
</div>
<form method="post" action="main.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name = "login_btn" value="Login" formaction="main.php"> 
           <input type="submit" name = " register_btn" value="Register" formaction="register.php"></td>
     </tr>
 
</table>
</form>
</body>
</html>

