<?php
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
            if ($user[$key]['password']) {
                $checkpass = TRUE;
                break;
            }
        }
    }
    if ($checkuser) {
        if ($checkpass) {
            echo "đăng nhập thành công"."<br />";
            echo "chào mừng ".$username;
        } else {
            echo "sai password"."<br />";
            echo '<button name="button">đăng nhập lại</button>';
        }
    } else {
        echo "sai username"."<br />";
        echo '<button name="button">đăng nhập lại</button>';
    }

?>