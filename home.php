<?php 
    session_start();
    if(isset($_SESSION["username"]) == false) {
		header("location:login.php");
    } else {
        echo "đăng nhập thành công"."<br />";
        echo "chào mừng ".$_SESSION["username"];
    }
    
?>
