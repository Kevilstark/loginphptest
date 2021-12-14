<?php
    session_start();
    $user = array(
        [
            'name' => 'admin',
            'password' => '12345',
        ], 
        [
            'name' => 'Dorothea.Rowe83',
            'password' => 'HiejgzRoKNMxGWb',
        ], 
        [
            'name' => 'Jonathon.Cormier73',
            'password' => 'Wps1ip_RiNFBbAG',
        ], 
        [
            'name' => 'Walton3',
            'password' => 'o3uuy7UWCACH9kB',
        ], 
        [
            'name' => 'Precious29',
            'password' => 'qkiR0avghlkqvqi',
        ],

    );

//lay du lieu
    $password = $_POST["password"];
    $username = $_POST["name"];
    $checkuser = FALSE;
    $checkpass = FALSE;
    foreach($user as $key=>$val) {
        if ($user[$key]['name'] == $username) {
            $checkuser = TRUE;
            if ($user[$key]['password'] == $password) {
                $checkpass = TRUE;
                break;
            }
            
        }
    }

    if ($checkuser) {
        if ($checkpass) {
            $_SESSION["username"] = $username;
            header("location:home.php");
        } else {
            echo "sai password"."<br />";
            echo '<a href="login.php">đăng nhập lại</button>';
        }
    } else {
        echo "sai username"."<br />";
        echo '<a href="login.php">đăng nhập lại</button>';
    }

?>