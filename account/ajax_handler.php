<?php
require 'userdb.php';
//include 'user_session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['u'];
    $password = $_POST['p'];
    $form = $_POST['t']; //signin/signup

    //print_r($_POST);
    if(get_user_hash($username)[1] == 1){
        echo "{\"status\":\"error\",\"info\":\"Account is pending approval.\"}";
    }else {
        if(strlen($username) == 0){
            echo "{\"status\":\"error\",\"info\":\"Username is empty.\"}";
        } elseif(strlen($password) == 0){
            echo "{\"status\":\"error\",\"info\":\"Password is empty.\"}";
        } else{
            if(ctype_alnum($username) && ctype_alnum($password)){
                if($form == 'signin'){
                    if(user_exists($username)){
                        $hash = hash('sha256', $username.$password);
                        if(get_user_hash($username)[0] == $hash){
                            echo "{\"status\":\"ok\"}";
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["hash"] = $hash;
                        } else {
                            echo "{\"status\":\"error\",\"info\":\"Password incorrect.\"}";
                        }
                    } else {
                        echo "{\"status\":\"error\",\"info\":\"Username does not exist.\"}";
                    }
                }
                elseif($form == 'signup'){
                    $role = $_POST['r'];
                    $account_type = 0;
                    if($role == 'teacher'){
                        $account_type = 1;
                    }
                    if(!user_exists($username)){
                        if(create_account($username, $password,$account_type)){
                            echo "{\"status\":\"ok\",\"info\":\"Account created successfully.\"}";
                        } else {
                            echo "{\"status\":\"error\",\"info\":\"error_creating_account\"}";
                        }
                    } else {
                        echo "{\"status\":\"error\",\"info\":\"Username already in use.\"}";
                    }
                }
            } else {
                echo "{\"status':\"error\",\"info\":\"Invalid input\"}";
            }
        }
    }
} else {
    header('HTTP/1.0 403 Forbidden');
    echo '403 FORBIDDEN';
}
$conn -> close();

?>