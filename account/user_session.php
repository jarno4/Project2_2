<?php
session_start();
if(empty($_SESSION['username'])){
    header("Location: /account/login/");
} else {
    //echo 'logged in'; //do nothing
}
?>