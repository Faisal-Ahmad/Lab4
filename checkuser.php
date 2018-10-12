<?php
session_start();
$user = $_POST['user'];//Username
$pass = $_POST['pass'];//Password
if(!isset($_COOKIE[$user])) {//check if cookies value not set
     echo "User Not Exist<br/>";
	 echo "Go to Signup For Register <a href='register.php'>Click here</a>";
} else {
     if($_COOKIE[$user]==$pass) //check if password is matched
	 {
		 $_SESSION["user"]=$user;
		 header("location:Welcome.php");//took user to welcome page
	 }
	 else //if password no match
	 {
		 echo "<h1>Wrong Password</h1><br/>";
		 echo "Try Again <a href='SignIn.html'>Click here</a>";//took user for signin again
	 }
}
?>