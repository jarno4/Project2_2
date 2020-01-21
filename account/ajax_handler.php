<?php
require 'userdb.php';
require 'user_session.php';

$username = $_POST['u'];
$password = $_POST['p'];
$form = $_POST['t']; //signin/signup
//echo $username."<br>";
//echo $password."<br>";
//echo $form;
if($form == 'signin'){
    if(user_exists($username)){
        $hash = hash('sha256', $username.$password);
        if(get_user_hash($username) == $hash){
            //password correct
            //store hash in session
            echo "correct";
            $_SESSION["hash"] = $hash;
        } else {
            //password incorrect
            echo "incorrect";
        }
    }

}

//echo "{'status':'OK'}";
?>