<?php
    session_start();
    $_SESSION['iter'] = 1;
?>

<!doctype html>
<html lang="en-US">

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    p{
        border-radius: 25px;
        background-color: rgba(255, 255, 255, 0.884);
    }
    h1{
        text-align: center;
    }
</style>
<body>

	<ul>
        <li><a href="index.php">Sign Up</a></li>
        <li><a href="sign-in.php">Login</a></li>
        <!--<li><a href="trivia.php">Trivia</a></li>-->
        <!--<li><a href="instructions.html">Instructions</a></li>-->
		<li><a href="daily-winner.php">Daily Table</a></li>
		<li><a href="contacts.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="javascript: logout_func();">Logout</a></li>
		<div id="logo">
			<img src="logo.gif" align="right" height="55" width="" alt="">
       </div>
       <div style="color: orange">
			<li style="float: right;"><?php if (isset($_SESSION['user'])){ echo "Hello, "."{$_SESSION['first_name']}";} ?></li>
        </div>
    </ul>
    <p><font size="5" face="arial" color="black">
        <br>
        This is the trivia page, press continue to start the trivia. You can meanwhile take a short break.
        <br><br>
    </font></p>
    <button id="submit-btn" type="submit" class="signupbtn" onclick="func()">Continue</button>

        <script>
            function logout_func(){
                var con = confirm('By pressing OK, you will lose any progress you made in the trivia and will be redirected to the daily winner table.');
                if (con == true){
                    window.location.replace('logout.php');
                }
		    }

            function func(){
                sessionStorage.setItem("points", 0);
                window.location.replace('generate.php');
            }

            </script>
</body>
</html>