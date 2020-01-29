<?php
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 28-1-2020
 * Time: 11:09
 */
?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="/res/css/style.css">
    <link rel="stylesheet" type="text/css" href="/res/css/admin.css">
</head>
<body>
<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php") ?>
<div id="adminid" class = "header" >
    <h2> teachers request</h2>
</div>
<ul id="myul">
    <li> <span style="display: none">id</span>Pekela <button class="accept">accept</button><button class="decline">Discard</button></li>
</ul>
<script src="/res/js/jquery-3.4.1.min.js"></script>
<script>
    $(".accept").click(function(e) {
        var naam = $(this).parent().find("span").html();
        console.log( naam);

    });
    $(".decline").click(function(e) {
        var naam = $(this).parent().find("span").html();
        console.log( naam);

    });
</script>


</body>

</html>
