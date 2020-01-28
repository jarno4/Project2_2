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
    <li> Pekela <button onclick="accept()">accept</button><button onclick="discard()">Discard</button></li>
</ul>




</body>
<script>
    function accept(){
        console.log("blablala")
        //entry uit request halen en in normale lijst zetten
    }
    function discard(){
        console.log("hahahahah")

    }
</script>
</html>
