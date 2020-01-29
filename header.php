<?php require($_SERVER["DOCUMENT_ROOT"].'/account/userdb.php')?>
<div class="header">
    <div class="logo_nav"></div>
    <div class="navbar">
        <a href="/weather/current">Overview</a>
        <a href="/weather/past">Data</a>
        <a href="/about">About Us</a>
        <?php
            if(!empty($_SESSION['username'])){
                echo "<div class=\"dropdown\"><div href=\"/account/profile\" class=\"profile_button\">Welcome, {$_SESSION['username']}</div><div class=\"dropdown-content\"><a href=\"/account/profile\">Profile</a>";
                if(get_user($_SESSION['username'])[2]==1){
                    echo "<a href=\"/account/admin\">Admin Panel</a>";
                }
                echo "<a href=\"/account/logout\">Log out</a></div></div>";
            }
        ?>
      </div>
</div>