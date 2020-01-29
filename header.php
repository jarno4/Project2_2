<?php //require($_SERVER["DOCUMENT_ROOT"].'/account/user_session.php')?>
<div class="header">
    <div class="logo_nav"></div>
    <div class="navbar">
        <a href="/weather/current">Overview</a>
        <a href="/weather/past">Data</a>
        <a href="/about">About Us</a>
        <?php
            if(!empty($_SESSION['username'])){
                echo "<a href='/account/profile' class='profile_button'>Welcome,".$_SESSION['username'].'</a>';
            }
        ?>
      </div>
</div>