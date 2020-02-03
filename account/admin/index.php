<?php
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 28-1-2020
 * Time: 11:09
 */
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="/res/css/style.css">
    <link rel="stylesheet" type="text/css" href="/res/css/admin.css">
</head>
<body>
<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php") ;?>

<div id="adminid" class = "header" >
    <h2> teachers request</h2>
</div>
<ul id="myul">
    <?php
     $star =mysqli_fetch_all(pending_approval());
     $num = mysqli_num_rows(pending_approval());


     for($i =0 ;$i<$num;$i++){
        echo "<li> <span>".$star[$i]['0']."</span> <input type=\"button\" value=\"accept\" class=\"accept_decline\"><input type=\"button\" value=\"discard\" class=\"accept_decline\"></li>";

    }


    ?>
</ul>
<script src="/res/js/jquery-3.4.1.min.js"></script>
<script>
    $(".accept_decline").click(function(e) {
        var action = $(this).val();
        let naam = $(this).parent().find("span").html();
        console.log( naam);
        var data = "action="+action+"&naam="+naam;
        $.post("/account/ajax_handler.php", data, function(response) {
            var obj = JSON.parse(response);
            /*
            if(obj.status == "error"){
                $('.error').css("display","block").html(obj.info)
            } else {
                $('.error').css("display","none");
                window.location.href="/weather/current";
            }*/
        });
        e.preventDefault(); //prevent default action
    });

</script>


</body>

</html>
