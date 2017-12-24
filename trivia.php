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
        <!--<li><a href="trivia.php">Trivia</a></li>-->
        <li><a href="instructions.html">Instructions</a></li>
		<li><a href="daily-winner.php">Daily Table</a></li>
		<li><a href="contacts.html">Contact</a></li>
		<li><a href="about.html">About</a></li>
		<div id="logo">
			<img src="logo.gif" align="right" height="55" width="" alt="">
	   </div>
    </ul>
    <p><font size="5" face="arial" color="black">
        <br>
        This is the trivia page, press continue to start the trivia. You can meanwhile take a short break.
        <br><br>
        <button id="btn2" onclick="func()">Continue</button>
    </font></p>
   <p><?php echo("{$_SESSION['user']}"."<br />");?></p>
    <p>
        to get 5 more points, prestt the button.
        <button onclick="scoreUpdate()">score</button>
        to logout:
        <button onclick="logout()">logout</button>
        </p>

        <script>
            function logout(){
                session_destroy();
            }

            function scoreUpdate(){
                location.href = 'score-update.php';
            }

            function func(){
                window.location.replace('q-1.php');
            }

            </script>
</body>
</html>