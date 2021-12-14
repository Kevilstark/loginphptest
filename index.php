<?php 
    session_start();
    if(isset($_SESSION["username"]) == false) {
		header("location:login.php");
    } else {
		header("location:home.php");
	}
?>