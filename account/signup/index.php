<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="/res/style.css">
	<link rel="stylesheet" type="text/css" href="/res/login.css">
	<script src="/res/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="header">
        <h1>Parivartan Nepal</h1>
    </div>
    <!--div class="navbar">
        <a href="#data">Data</a>
        <a href="#map">Map</a>
        <a href="#footer">Contact</a>
    </div-->

    <div class="login_form">
        <input class="form_row" name="username" type="text" placeholder="Username" autocomplete="off">
        <input class="form_row" name="password" type="password" placeholder="Password">
        <input class="form_row" name="password_2" type="password" placeholder="Confirm password">
        <select class="form_row" name="role" required>
            <option disabled selected hidden>Account type</option>
            <option value="teacher">Teacher / Professor</option>
            <option value="student">Student</option>
        </select>
        <input type="submit" value="Sign up" class="submit_button">
    </div>
    <div class="footer"><a name="footer">
        <div class="img" style="height: 200px;"></div>
    </div>
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
    </script>
</body>
</html>