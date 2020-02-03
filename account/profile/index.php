<?php
    require '../user_session.php';
    //require '../userdb.php';
;?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="/res/css/style.css">
	<link rel="stylesheet" type="text/css" href="/res/css/login.css">
</head>
<body>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/header.php") ?>
    <div class="content">
        <div class="profile_table">
            <div class="table_row">
                <div>Username:</div>
                <div><?php echo $_SESSION['username'] ?></div>
            </div>
            <div class="table_row">
                <div>Account type:</div>
                <div><?php echo get_user($_SESSION['username'])[1] ?></div>
            </div>
            <div class="table_row">
                <div>Registration date:</div>
                <div><?php echo get_user($_SESSION['username'])[3] ?></div>
            </div>
        </div>
    </div>

    <script src="/res/js/jquery-3.4.1.min.js"></script>
    </body>
</html>