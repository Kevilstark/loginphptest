<?php 
    $user = 'admin';
    $pass = '12345';
    $password = $_POST["password"];
    $username = $_POST["name"];
    if ($pass == $password && $user == $username) {
        echo "đăng nhập thành công"."<br />";
        echo "chào mừng ".$username;
    } else {
        echo "sai username hoặc password"."<br />";
        echo '<button name="button">đăng nhập lại</button>';
    }

?>