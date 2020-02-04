<?php
session_start();
print_r($_SESSION);
echo get_user($_SESSION['username'])[1];
?>