<?php
require 'userdb.php';
//include 'user_session.php';
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $conn) {
    $username = $_POST['u'];
    $password = $_POST['p'];
    $form = $_POST['t']; //signin/signup

    switch (true){
        case get_user($username) && get_user($username)[2] == 1:
            $msg = "{\"status\":\"error\",\"info\":\"Account is already pending approval\"}";
            break;

        case strlen($username) == 0:
            $msg = "{\"status\":\"error\",\"info\":\"Username is empty\"}";
            break;

        case strlen($password) == 0:
            $msg = "{\"status\":\"error\",\"info\":\"Password is empty\"}";
            break;
        case !ctype_alnum($username) && !ctype_alnum($password):
            $msg = "{\"status':\"error\",\"info\":\"Invalid input\"}";
            break;
        default:
            switch ($form) {
                case 'signin':
                    switch (true) {
                        case !get_user($username):
                            $msg = "{\"status\":\"error\",\"info\":\"Username does not exist\"}";
                            break;
                        case get_user($username)[0] == hash('sha256', $password):
                            $msg = "{\"status\":\"ok\",\"info\":\"Log in status: ".login($username)."\"}";
                            break;
                        default:
                            $msg = "{\"status\":\"error\",\"info\":\"Password incorrect\"}";
                    }
                    break;

                case 'signup':
                    $account_type = $_POST['r'] == 'teacher' ? 1 : 0;
                    if(get_user($username)) $msg = "{\"status\":\"error\",\"info\":\"Username already in use\"}";
                    else {
                        if ($account_type == 1) $msg = create_account($username, $password,$account_type) ? "{\"status\":\"ok\",\"info\":\"Account created. Pending Approval\"}" : "{\"status\":\"error\",\"info\":\"error_creating_account\"}";
                        else $msg = create_account($username, $password,$account_type) ? "{\"status\":\"ok\",\"info\":\"Account created. Logged in\"}" : "{\"status\":\"error\",\"info\":\"error_creating_account\"}";
                    }
                    break;

                default:
                    $msg = "{\"status':\"error\",\"info\":\"Unknown error\"}";
                    break;
            }
            break;
    }
} else {
    header('HTTP/1.0 403 Forbidden');
    echo '403 FORBIDDEN';
}
echo $msg;
$conn -> close();

?>