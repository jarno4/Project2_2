<?php
session_start();
print_r($_SESSION);
print_r(get_user($_SESSION['username']));
?>