<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="/res/css/style.css">
	<link rel="stylesheet" type="text/css" href="/res/css/login.css">
</head>
<body>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/header.php") ?>

    <div class="login_form">
        <a href="/" class="go_back">Go Back</a>
        <input class="form_row" name="username" type="text" placeholder="Username" autocomplete="off">
        <input class="form_row" name="password" type="password" placeholder="Password">
        <span class="error">error</span>
        <input type="submit" value="Log in" class="submit_button">
        <span class="sign_up_link">or <a href="/account/signup/">Sign up</a></span>
    </div>
    <script src="/res/js/jquery-3.4.1.min.js"></script>
    <script>
        $(".submit_button").click(function(e) {
            var username = $('input[name="username"]').val();
            var password = $('input[name="password"]').val();
            var data = "u="+username+"&p="+password+"&t=signin";
            $.post("/account/ajax_handler.php", data, function(response) {

                var obj = JSON.parse(response);
                if(obj.status == "error"){
                    $('.error').css("display","block").html(obj.info)
                } else {
                    $('.error').css("display","none");
                    window.location.href="/weather/current";
                }
            });
            e.preventDefault(); //prevent default action
        });



        </script>

    </body>
</html>