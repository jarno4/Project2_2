<?php
session_start();
$_SESSION['username'] = "user1";
function test($word){
    return $word;
}

//echo true ? "1".test(2) : 3;
//echo hash('sha256', "user11234");

?>