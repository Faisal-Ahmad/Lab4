<?php
session_start();//Session started

if(!isset($_SESSION["user"])) {//check if session value not set
     header("location:introduction.html");
} else { 
    echo "<h1>Welcome ".$_SESSION["user"]."</h1>";//Wecome user
	echo "<a href ='sclose.php'>Logout</a>";//go to sclose page
}
?>