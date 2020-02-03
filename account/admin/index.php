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
    <h2>Requests for teacher accounts</h2>
</div>

<?php
     $star =mysqli_fetch_all(pending_approval());
     $num = mysqli_num_rows(pending_approval());
     if($num!==0){
        echo "<div class=\"profile_table\"><div class=\"table_row_\"><span><i>Username</i></span></div>";
         for($i =0 ;$i<$num;$i++){
            echo "<div class=\"table_row_\"><span><i>".$star[$i]['0']."</i></span><input type=\"button\" value=\"accept\" class=\"accept_decline\"><input type=\"button\" value=\"discard\" class=\"accept_decline\"></div>";
         }
         echo "</div>";
     } else {
        echo "<div class=\"profile_table\"><div class=\"table_row_\"><span><i>No requests filed.</i></span></div>";
     }
?>




</div>
<script src="/res/js/jquery-3.4.1.min.js"></script>
<script>
    $(".accept_decline").click(function(e) {
        var element = $(this).parent();
        var action = $(this).val();
        let naam = $(this).parent().find("span").html();
        console.log( naam);
        var data = "action="+action+"&naam="+naam;
        $.post("/account/ajax_admin.php", data, function() { element.remove(); });
        e.preventDefault(); //prevent default action
    });

</script>


</body>

</html>
