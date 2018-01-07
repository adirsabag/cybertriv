<?php
    session_start();  
    $_SESSION['level'] = 1; 
?>

<!doctype html>
<html lang="en-US">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<style>
   h2 { 
    background-color: rgba(255, 255, 255, 0.884);
    display: block;
    text-align: center;
    font-size: 3em;
    margin-top: 0.83em;
    margin-bottom: 0.83em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
    font-family: arial;
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

    <h2>
        Who is the bad guy in the Batman movie ?
    </h2>

    <p>
        <div id="quiz" style="text-align:center;">
        <button id="trivia-btn" onclick="wrong();">Spiderman</button><br>
        <button id="trivia-btn" onclick="wrong();">Goku</button><br>
        <button id="trivia-btn" onclick="right();">Joker</button><br>
        <button id="trivia-btn" onclick="wrong();">Superman</button><br>
        <div id="results"></div>   
        <br><br>
    </font>
</p>

    <script>
        function logout_func(){
			var con = confirm('By pressing OK, you will lose any progress you made in the trivia and will be redirected to the daily winner table.');
			if (con == true){
				window.location.replace('logout.php');
			}
		}

        function right() {
            alert("You are right!");
            window.location.replace('trivia.php');
        }

        function wrong() {
            alert("You are wrong!");
            window.location.replace('trivia.php');
        }
    </script>

</body>
</html>