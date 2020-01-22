<?php
require 'userdb.php';
require 'user_session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['u'];
    $password = $_POST['p'];
    if(isset($_POST['t'])){
        $form = $_POST['t']; //signin/signup
    }
    if(strlen($username) == 0){
        echo "{'status':'error','reason':'username_empty'}";
    } elseif(strlen($password) == 0){
        echo "{'status':'error','reason':'password_empty'}";
    } else{
        if(ctype_alnum($username) && ctype_alnum($password)){
            if($form == 'signin'){
                if(user_exists($username)){
                    $hash = hash('sha256', $username.$password);
                    if(get_user_hash($username) == $hash){
                        echo "{'status':'ok'}";
                        $_SESSION["username"] = $username;
                        $_SESSION["hash"] = $hash;
                    } else {
                        echo "{'status':'error','reason':'password_incorrect'}";
                    }
                } else {
                    echo "{'status':'error','reason':'account_not_found'}";
                }
            }
            elseif($form == 'signup'){
                create_account($username, $password,$type);
            }
        }
        else {
            echo "{'status':'error','reason':'invalid input'}";
        }

    }
} else {
    header('HTTP/1.0 403 Forbidden');
    echo '403 FORBIDDEN';
}


?>