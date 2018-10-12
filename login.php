<?php
session_start();
$user = $full = $email= $phone= $pass= $gen= $edu="";
$user = $_POST['un'];//Username
$full = $_POST['fn'];//Fullname
$email = $_POST['ue'];//Email
$phone = $_POST['up'];//Phone
$pass = $_POST['pw'];//Password
 if(!empty($_POST['gen'])) {//Gender
        $gen=$_POST['gen'];
    }
if(!empty($_POST['edu'])) {//Education
        $edu=$_POST['edu'];
    }
	//Check If there any null value
if($full==null || $email==null || $phone==null|| $pass==null|| $user==null || $gen==null || $edu==null)
{
	echo "<h1>Registration Not Successful</h1><br>";
	echo "Fill all The Infirmation <a href ='register.php'>Click Here</a><br>";
}
else
{
	//Output all the inputs
	echo "<h1>Registration Successful</h1><br>";
	setcookie($user, $pass, time() + 60, "/");//Set a cookie for 60 seconds
	echo "Username : ".$user;
	echo "<br>Full Name : ".$full;
	echo "<br>Email : ".$email;
	echo "<br>Phone : ".$phone;
	echo "<br>Password : ".$pass;
	echo "<br>Gender : ".$gen;
	echo "<br>Education : ";
	echo "<ul>";
	//print education to a list
	foreach($edu as $ed)
	{
		echo "<li>".$ed."</li>";
	}
	echo "</ul>";
	echo "<a href='introduction.html'>Back</a>";
}
?>