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
	<input class="form_row username" type="text" placeholder="Username" autocomplete="off">
	<input class="form_row password" type="password" placeholder="Password">
	<input type="submit" value="Log in" class="submit_button">
	<span class="sign_up_link">or <a href="/account/signup/">Sign up</a></span>
</div>
<div class="footer"><a name="footer">
	<div class="img" style="height: 200px;"></div>
</div>
<script>
    $(".submit_button").click(function(e) {
        $username = $(".username").val();
        $password = $(".password").val();
        $data = "u="+$username+"&p="+$password+"&t=signin";
        $.post("/account/ajax_handler.php", $data, function(data) {
            alert(data);
        });
        e.preventDefault(); //prevent default action
    });
	</script>
</body>
</html>