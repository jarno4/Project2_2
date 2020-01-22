<?php
require 'userdb.php';
require 'user_session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['u'];
    $password = $_POST['p'];
    $form = $_POST['t']; //signin/signup

    print_r($_POST);

    if(strlen($username) == 0){
        echo "{'status':'error','info':'username_empty'}";
    } elseif(strlen($password) == 0){
        echo "{'status':'error','info':'password_empty'}";
    } else{
        if(ctype_alnum($username) && ctype_alnum($password)){
            if($form == 'signin'){
                if(user_exists($username)){
                    $hash = hash('sha256', $username.$password);
                    if(get_user_hash($username) == $hash){
                        echo "{'status':'ok'}";
                        require 'user_session.php';
                        $_SESSION["username"] = $username;
                        $_SESSION["hash"] = $hash;
                    } else {
                        echo "{'status':'error','info':'password_incorrect'}";
                    }
                } else {
                    echo "{'status':'error','info':'account_not_found'}";
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
                        echo "{'status':'ok','info':'account_created'}";
                    } else {
                        echo "{'status':'error','info':'error_creating_account'}";
                    }
                } else {
                    echo "{'status':'error','info':'username_already_exists'}";
                }
            }
        } else {
            echo "{'status':'error','info':'invalid input'}";
        }

    }
} else {
    header('HTTP/1.0 403 Forbidden');
    echo '403 FORBIDDEN';
}
$conn -> close();

?>