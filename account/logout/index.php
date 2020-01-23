<?php
require($_SERVER["DOCUMENT_ROOT"].'/account/user_session.php');
session_unset();
session_destroy();
header("Location: /");
?>