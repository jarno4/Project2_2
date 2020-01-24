<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--link rel="stylesheet" type="text/css" href="/res/style.css"-->
		<title>Parivartan Nepal</title>
		<style>
		body {
		    background:url("/res/img/landing.jpg") #000 no-repeat fixed top;
		    margin:5%;
		}
		.page {
		    margin:auto;
		    max-width:1200px;
		    //border: 1px solid white;
		    position: relative;
		}
		.logo {
		    background: url(/res/img/logo_t.png) no-repeat;
            width: 160px;
            height: 100px;
            background-size: 150px;
            display: inherit;
            position: absolute;
            top: 0;
		}

		ul {
		    list-style-type:none;
		    padding:10px 20px;
		}
		li {
		    float: left;
		}

		li a {
		    display: block;
            color: white;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
		}
		.navbar {
		    display: inherit;
            width: calc(100% - 200px);
            margin: 10px 0px 0px;
            position: absolute;
            top: 0;
            right:0;
		}
		.header {
		    display: inline-block;
		    margin-bottom:100px;
		    height:100px;
		    width: 100%;
		}

		.get_started {
            background: #888;
            color: white;
            width: fit-content;
            text-decoration: none;
            padding: 10px 30px;
            margin: 60px auto 10px;
            font-weight: bold;
            display: block;
        }
        .content {
            width:100%;
            min-height:400px;
            text-align: center;
        }

        .intro {
            margin:40px 40px;
            color:white;
            font-weight:600;
        }
		</style>
	</head>
	<body>
	    <div class="page">
            <div class="header">
                <div class="logo"></div>
                <div class="navbar">
                    <ul style="float:left">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul style="float:right">
                        <li><a href="#">Log in</a></li>
                        <li style="border:2px solid white;"><a href="#" style="padding:8px 14px">SIGN UP</a></li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <span class="intro">Loriem ipsum</span>
                <a class="get_started" href="/app">GET STARTED</a>
            </div>
        </div>
	</body>
</html>