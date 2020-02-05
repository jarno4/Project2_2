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
        <input class="form_row" name="password_2" type="password" placeholder="Confirm password">
        <select class="form_row" name="role" required>
            <option disabled selected hidden>Account type</option>
            <option value="teacher">Teacher / Professor</option>
            <option value="student">Student</option>
        </select>
        <span class="error">error</span>
        <input type="submit" value="Sign up" class="submit_button" disabled>
        <span class="sign_up_link">or <a href="/account/login/">Log in</a></span>
    </div>
    <script src="/res/js/jquery-3.4.1.min.js"></script>
    <script>
        $(".submit_button").click(function(e) {
            var username = $('input[name="username"]').val();
            var password = $('input[name="password"]').val();
            var password2 = $('input[name="password_2"]').val();
            var role = $('select[name="role"]').val();
            var data = "u="+username+"&p="+password+"&r="+role+"&t=signup";
            $.post("/account/ajax_handler.php", data, function(response) {
                var obj = JSON.parse(response);
                if(obj.status == "error"){
                    $('.error').css("display","block").html(obj.info);
                } else {
                    $('.error').css("display","block").html(obj.info);
                    if(obj.info.includes("Logged in")){
                        window.location.href="/weather/current";
                    }
                }
            });
            e.preventDefault(); //prevent default action
        });

        $("input[type='password']").keyup(function() {
            if($(this).val() !== $('input[name="password"]').val()){
                $(".error").html("Passwords don't match.");
                $(".error").css("display","block");
            } else {
                $(".error").css("display","none");
                $(".error").html("");
                validate_input();
            }
        });

        $(".form_row").change(function(){
            validate_input();
        })

        function validate_input(){
            var username = $('input[name="username"]').val();
            var password = $('input[name="password"]').val();
            var password2 = $('input[name="password_2"]').val();
            var role = $('select[name="role"]').val();
            if(username !== 'undefined' && password !== 'undefined' && password2 !== 'undefined' && role !== null){
                $(".submit_button").removeAttr("disabled");
            }
        }
        $(document).keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13' && $('.submit_button').prop('disabled')){
                $(".submit_button").click();
            }
        });
    </script>
</body>
</html>