<?php
    session_start();
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
        <li><a href="continue.php">Trivia</a></li>
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
    <h1>
        <font face="impact" color="orange">cyberTriv</font>
    </h1>

    <p><font size="5" face="arial" color="black">
        <br>
        This is a trivia competition, made to help educational institutions find the best cyber geniuses out there,
        so if you think you are a cyber expert, sign up and start right away.
        <br><br>
    </font></p>
    <script>
        function logout_func(){
            var con = confirm('By pressing OK, you will lose any progress you made in the trivia and will be redirected to the daily winner table.');
            if (con == true){
                window.location.replace('logout.php');
            }
		}
    </script>

</body>
</html>