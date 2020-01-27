<?php require($_SERVER["DOCUMENT_ROOT"].'/account/user_session.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="/res/css/style.css">
	<link rel="stylesheet" type="text/css" href="/res/css/login.css">
</head>
<body>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/header.php") ?>

    <div class="login_form">
        <input class="form_row" name="username" type="text" placeholder="Username" autocomplete="off">
        <input class="form_row" name="password" type="password" placeholder="Password">
        <input class="form_row" name="password_2" type="password" placeholder="Confirm password">
        <select class="form_row" name="role" required>
            <option disabled selected hidden>Account type</option>
            <option value="teacher">Teacher / Professor</option>
            <option value="student">Student</option>
        </select>
        <input type="submit" value="Sign up" class="submit_button" disabled>
    </div>
    <div class="footer"><a name="footer">
        <div class="img" style="height: 200px;"></div>
    </div>
    <script src="/res/js/jquery-3.4.1.min.js"></script>
    <script>
        $(".submit_button").click(function(e) {
            var username = $('input[name="username"]').val();
            var password = $('input[name="password"]').val();
            var password2 = $('input[name="password_2"]').val();
            var role = $('select[name="role"]').val();
            var data = "u="+username+"&p="+password+"&r="+role+"&t=signup";
            $.post("/account/ajax_handler.php", data, function(data) {
                alert(data);
            });
            e.preventDefault(); //prevent default action
        });

        $("input[name='password_2']").change(function() {
            $('.login_form::before').css('content','x');
        });

    </script>
</body>
</html>