<?php
session_start();
include 'userdb.php';
print_r($_SESSION);
print_r(get_user($_SESSION['username']));
?>