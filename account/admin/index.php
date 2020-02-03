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
        echo "<li> <span>".$star[$i]['0']."</span> <button class=\"accept\">accept</button><button class=\"decline\">Discard</button></li>";

    }


    ?>
</ul>
<script src="/res/js/jquery-3.4.1.min.js"></script>
<script>
    $(".accept").click(function(e) {
        let naam = $(this).parent().find("span").html();
        console.log( naam);
        jQuery.ajax({
            type: "POST",
            url: "/account/ajax_admin.php",
            dataType: 'json',
            data: {functionname: 'approve_teacher', arguments: naam },


            success: function (obj, textstatus) {
                console.log("adasd")
                if( !('error' in obj) ) {
                     yourVariable= obj.result;
                }
                else {
                    console.log(obj.error);
                }
            }
        });

    });
    $(".decline").click(function(e) {
        var naam = $(this).parent().find("span").html();
        console.log( naam);
        jQuery.ajax({
            type: "POST",
            url: "/account/ajax_admin.php",
            dataType: 'json',
            data: {functionname: 'decline_teacher', arguments: naam },


            success: function (obj, textstatus) {
                console.log("adasd")
                if( !('error' in obj) ) {
                    yourVariable= obj.result;
                }
                else {
                    console.log(obj.error);
                }
            }
        });

    });
</script>


</body>

</html>
