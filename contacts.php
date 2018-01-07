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
        text-align: center;
    }
</style>
</head>
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
    <p>
            <br><font face="impact" color="orange" size="6" align="center">Dr. Michael Svidler</font><font face="arial" size="4">, Beer Sheva, Israel | Email: mike@gmail.com</font>
            <br><br><font face="impact" color="orange" size="6">Adir Sabag</font><font face="arial" size="4">, Beer Sheva, Israel | Email: adir@gmail.com</font>
            <br><br><font face="impact" color="orange" size="6">Moshe Shmagin</font><font face="arial" size="4">, Beer Sheva, Israel | Email: moshe@gmail.com</font>
            <br><br>
    </p>
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